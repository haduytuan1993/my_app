<?php session_start(); ?>
<?php 
  if(isset($_SESSION['user'])) {
  	  session_destroy();
  }
  header('location: /my_app');
?>

