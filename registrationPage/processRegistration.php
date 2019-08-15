<?php
    include('../functions/functions.php');
    include('../phpmailer/resetPassMail.php');
    include('../general/head.php');
    include('../general/header.php');
    session_start(); 

    $_SESSION['template'] = $_POST['template'];

    $firstname = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : 'novalue';
    $lastname = isset($_SESSION['lastname']) ? $_SESSION['lastname'] : 'novalue';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'novalue';
    $template_id = isset($_SESSION['template']) ? $_SESSION['template'] : 'novalue';

    $result = getCustomerAccount($email);
    $website = getSiteByAccount($email);

    if ($firstname != 'novalue' && $lastname != 'novalue' && $email != 'novalue') {

        if ($result == 'available') {            

            $siteName = createSite($template_id);

            $account = $email;

            createCustomerAccount($account,$firstname,$lastname,$email);

            //grantAccountAccess($account,$siteName);

            grantCompleteAccountAccess($account,$siteName);

            getSSOLink($account,$siteName,'EDITOR');

            $resetPassLink = getResetPass($account);

            getResetMail($account,$resetPassLink);

            session_unset(); 

            die();
        }elseif ($result != 'available') {

            if ($website == 'none') {

                $siteName = createSite($template_id);

                $account = $email;

                grantAccountAccess($account,$siteName);

                getSSOLink($account,$siteName,'EDITOR');

                session_unset();

                die();
            }else{

                header('Location: https://createur.virtualvisiblehands.com');
            }
        }    
    }else {
        echo "Saving is error!!!";
        print_r($_SESSION);
    }
    include('../general/footer.php');
?>