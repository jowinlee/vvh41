
<?php
    include('../functions/functions.php');
    include('../phpmailer/resetPassMail.php');

    session_start(); 	

    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['email'] = $_POST['email'];

    $firstname = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : 'novalue';
    $lastname = isset($_SESSION['lastname']) ? $_SESSION['lastname'] : 'novalue';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'novalue';
    $template_id = isset($_SESSION['template']) ? $_SESSION['template'] : 'novalue';    

    $result = getCustomerAccount($email);
    $website = getSiteByAccount($email);

    if ($firstname != 'novalue' && $lastname != 'novalue' && $email != 'novalue' && $template_id != 'novalue') {
        if ($result == 'available'){            

            $siteName = createSite($template_id);

            $account = $email;

            createCustomerAccount($account,$firstname,$lastname,$email);

            grantAccountAccess($account,$siteName);

            publishSite($siteName);

            //getSSOLink($account,$siteName,'EDITOR');

            $resetPassLink = getResetPass($account);

            getResetMail($account,$resetPassLink);

            session_unset(); 

            die();
        }elseif($result != 'available'){

            if ($website == 'none') {

                $siteName = createSite($template_id);

                $account = $email;

                grantAccountAccess($account,$siteName);

                getSSOLink($account,$siteName,'EDITOR');

                session_unset();

                die();
            }else{

                //header('Location: https://createur.virtualvisiblehands.com');
                header('Location: error.php');
            }
        }
    }else{
        echo "Saving is error!!!";
        print_r($_SESSION);
    }
?>