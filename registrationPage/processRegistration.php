<?php
    include('../functions/functions.php');
    include('../general/head.php');
    include('../general/header.php');
    session_start(); 

    $firstname = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : 'novalue';
    $lastname = isset($_SESSION['lastname']) ? $_SESSION['lastname'] : 'novalue';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'novalue';

    if ($firstname != 'novalue' && $lastname != 'novalue' && $email != 'novalue') {

        $account = $email;

        createCustomerAccount($account,$firstname,$lastname,$email);

        echo '
            <div class="container">
                <h2 class="text-success">Account "'.$account.'" is successfully created.</h2>
                <p>Please check your email to reset your password.</p><br>
                <a href="../templatesPage/index.php">Choose Templates</a><br>
                <a href="https://createur.virtualvisiblehands.com"></a>
            </div>
        ';

        session_unset(); 

        die();
    }else{
        echo "Saving is error!!!";
        print_r($_SESSION);
    }
    include('../general/header.php');
?>