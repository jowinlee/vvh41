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
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="text" name="sitename" value="<?php echo $_SESSION['site']; ?>" hidden>
		<button type="submit" class="btn btn-primary">Publish my site now!</button>
	</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  // collect value of input field
		  $siteName = $_POST['sitename'];
		  if (empty($siteName)) {
		    echo "SiteName is empty";
		  } else {
		  	$sample = publishSite($siteName);
		    echo '<a href="'.$sample.'">'.$sample.'</a>'
		  }
		}
	?>
</div>
<?php include('../general/footer.php'); ?>