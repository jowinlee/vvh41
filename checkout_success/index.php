<?php include('../general/head.php');?>
<?php 
	include('../functions/functions.php');  
    $sitename = isset($_GET['sitename']) ? $_GET['sitename'] : 'novalue';
    publishSite($sitename);
?>
<?php include('../general/foot.php');?>