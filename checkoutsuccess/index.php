<?php include('../general/head.php');?>
<?php 
	include('../functions/functions.php');  
    $sitename = isset($_GET['sitename']) ? $_GET['sitename'] : 'novalue';
    $clientname = isset($_GET['clientname']) ? $_GET['clientname'] : 'novalue';
    $publishedsite = publishSite($sitename);
?>
<div class="container mt-5">
    <h2 class="text-success">Thank you for your purchase <?php echo $clientname ?>!</h2>
    <h4>Your site has been successfully Published.</h4>
    <p><a class="text-info" href="<?php echo $publishedsite ?>">Go to my Website</a></p>
</div>
<?php include('../general/foot.php');?>