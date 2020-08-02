<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('../functions/functions.php'); ?>
	<?php include('../general/head.php');?>
</head>
<body>

<?php
  session_start();
    if (isset($_GET['sitename'])){
        print "sitename".$_GET['sitename'];
        $_SESSION['site'] = $_GET['sitename'];
    }
  //   $siteName = $_GET['site']; 

  //   if (isset($siteName)){

		// $mysite = publishSite($siteName);

		// if (isset($mysite)){
		// 	alert('Thank you for publishing your site with us!')
		// 	header('Location: ' . $mysite);
		// }
  //   }else{

  //   	echo "Publishing Site Error! Please Try Again.";
  //   }  	
?>
	<form action="../plans_page" method="GET">
		<input type="text" name="sitename" value="1324">
		<input type="submit">
	</form>
</body>
</html>
<script type="text/javascript">
	MemberStack.onReady.then(function(member) {   
  // do things with the member object
  member["email"]
  member["name"]
  member["id"] //current member id   
console.log("test",member["email"]+" "+ member["site-name"]+" "+ member["id"])
  // member's specific page if set.
  member.memberPage

  // check if member is logged in   
  member.loggedIn // returns true or false
})
</script>
