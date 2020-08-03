<?php include('../functions/functions.php'); ?>
<?php

    $siteName = $_POST['sitename']; 

    if (isset($siteName)){

		publishSite($siteName);

		if (isset($mysite)){
			alert('Site Successfully Published!')
			header('Location: https://www.concepteur-site-web.fr');
		}
    }else{

    	echo "Publishing Site Error! Please Try Again.";
    }  	
?>