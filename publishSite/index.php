<?php include('../functions/functions.php'); ?>
<?php include('../general/head.php');?>
<?php include('../general/header.php'); ?>
<?php
	session_start(); 	

    $siteName = $_SESSION['site']; 

    if ($siteName != ''){

		$mysite = publishSite($siteName);

		if (isset($mysite)){
			alert('Thank you for publishing your site with us!')
			header('Location: '.$mysite);

		}
    }else{

    	echo "Publishing Site Error! Please Try Again.";

    }  	
	session_destroy();
?>
<?php include('../general/footer.php'); ?>