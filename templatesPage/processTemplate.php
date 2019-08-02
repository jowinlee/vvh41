
<?php
    include('../functions/functions.php');

    session_start(); 

	$_SESSION['firstname'] = $_POST['firstname'];
	$_SESSION['lastname'] = $_POST['lastname'];
	$_SESSION['email'] = $_POST['email'];

    $firstname = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : 'novalue';
    $lastname = isset($_SESSION['lastname']) ? $_SESSION['lastname'] : 'novalue';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'novalue';
    $template_id = isset($_SESSION['template']) ? $_SESSION['template'] : 'novalue';
    

    $result = getCustomerAccount($email);

    if ($firstname != 'novalue' && $lastname != 'novalue' && $email != 'novalue' && $template_id != 'novalue') {
        if ($result == 'error'){

            $siteName = createSite($template_id);

            $account = $email;

            createCustomerAccount($account,$firstname,$lastname,$email);

            grantAccountAccess($account,$siteName);

            getSSOLink($account,$siteName,'EDITOR');

            session_unset();

            die();
        }else{

            $siteName = createSite($template_id);

            $account = $email;

            updateCustomerAccount($account,$firstname,$lastname);

            grantAccountAccess($account,$siteName);

            getSSOLink($account,$siteName,'EDITOR');

            session_unset();

            die();

        }

    }else{
        echo "Saving is error!!!";
        print_r($_SESSION);
    }
?>