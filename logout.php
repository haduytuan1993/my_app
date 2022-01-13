<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
include 'includes/functions.php';
  if(isset($_SESSION['user'])) {
  	  unset($_SESSION['user']);
  }
   header('location: login.php');

?>
</body>
</html>
