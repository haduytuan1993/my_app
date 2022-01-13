<?php include "includes/functions.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php 
 if(isset($_POST['submit'])) { 
   	  $username = $_POST['username'];
   	  $password = $_POST['password'];
   get_user($username, $password); 
   header('location: admin/dashboard.php');
  }

?>

   
<div class="container">
     <form method="post">
        <div class="user">
        <lable>Username</label>
        <input type="username" name="username" value=""/>
         </div>
         <div class="psw">
         <label>Password</label>
         <input type="password" name="password" value=""/> 
         </div>
          <input type="submit" name="submit" value="Submit" />
     </form>


  </div>

</body>
</html>
