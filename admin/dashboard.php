<?php 
session_start();
If(!isset($_SESSION["user"])){
      header('location: ../login.php');
 }
  $data = $_SESSION["user"];

?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>Dashboard Page</title>
</head>
<body>
<?php
echo "You have registered succesfully </br>";
echo " Your  username: ".$data['username']. "</br>";
echo "Your password : ".$data['password'];
?>
<a href="../logout.php">Logout</a>
</body>
</html>


