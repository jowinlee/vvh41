<?php include('../functions/functions.php'); ?>
<?php include('../general/head.php'); ?>
<?php include('../general/header.php'); ?>
<?php
	session_start();
	if (isset($_SESSION['site'])){
		$_SESSION['site'] = $_SESSION['site'];
	    $_SESSION['account'] = $_SESSION['account'];
	}else{
		echo "no value";
	}
?>
<div class="container">
	<h1>Thank You for your Subscription.</h1>
	<p>You may now proceed to Publish your site.</p>
	<p>Details: Account: <?php echo $_SESSION['account']; ?> sitename: <?php echo $_SESSION['site']; ?></p>
	<form method="post" action="publishsite.php">
		<input type="text" name="sitename" value="<?php echo $_SESSION['site']; ?>" hidden>
		<button type="submit" class="btn btn-primary">Publish my site now!</button>
	</form>
</div>
<?php include('../general/footer.php'); ?>