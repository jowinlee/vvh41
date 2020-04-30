<?php include('../general/head.php');?>
<?php 
	include('../functions/functions.php');  
    $sitename = isset($_GET['sitename']) ? $_GET['sitename'] : 'novalue';
    $clientname = isset($_GET['clientname']) ? $_GET['clientname'] : 'novalue';
    publishSite($sitename);
?>
<div class="container mt-5">
    <h2>Thank you for your purchase <span class="text-primary"><?php echo $clientname;?></span>!</h2>
    <h4>Your site has been successfully Published.</h4>
    <p><a class="text-info" href="https://createur.virtualvisiblehands.com/home/site/<?php echo $sitename;?>">Go back my site</a></p>
</div>
<?php include('../general/foot.php');?>