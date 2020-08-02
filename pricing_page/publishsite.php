<?php include('../functions/functions.php'); ?>
<?php

    $siteName = $_GET['site']; 

    if (isset($siteName)){

		$mysite = publishSite($siteName);

		if (isset($mysite)){
			alert('Thank you for publishing your site with us!')
			header('Location: ' . $mysite);
		}
    }else{

    	echo "Publishing Site Error! Please Try Again.";
    }  	
?>