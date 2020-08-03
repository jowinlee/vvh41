<?php include('../functions/functions.php'); ?>
<?php include('../general/head.php'); ?>
<?php include('../general/header.php'); ?>
<?php
	session_start();
	if (isset($_SESSION['site'])){
		$site = $_SESSION['site'];
	    $account = $_SESSION['account'];
	}else{
		echo "no value";
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  	$siteName = $_POST['sitename'];
	  	if (empty($siteName)) {
	    	echo "SiteName is empty";
	  	} else {
	  		$sample = publishSite($siteName);
	    	echo '<a href="'.$sample.'">'.$sample.'</a>';
	  	}
	}
?>
<div class="container">
	<h1>Thank You for your Subscription.</h1>
	<p>You may now proceed to Publish your site.</p>
	<p>Details: Account: <?php echo $account; ?> sitename: <?php echo $site; ?></p>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="text" name="sitename" value="<?php echo $site; ?>" hidden>
		<button type="submit" class="btn btn-primary">Publish my site now!</button>
	</form>
</div>
<?php include('../general/footer.php'); ?>