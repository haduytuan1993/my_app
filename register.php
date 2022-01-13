<?php 
include 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Page</title>
</head>
<body>
<html>
<body>

<?php

   $data = [
     'username' => '',
     'password' => ''
    ];
   $error = [ ];
   //Kiểm tra xem user có đang trong trạng thái đăng nhập không ? nếu đăng nhập rồi thì chuyển sang 
   //trang dashboard.php
 $user = get_user_active();
 if(!empty($user)) {
    header('location: admin/dashboard.php');
 }
   If(isset($_POST["submit"])){   
      $data["username"] =$_POST["username"];    
      $data["password"] = $_POST["password"];
  If(empty($data["username"])) {
     $error["username"] = "Do not empty this username" ;
}  

  If(empty($data["password"])) {
     $error["password"] = "Do not empty this password" ;
}  

If(empty($error)) {        
 registersucess($data["username"],$data["password"]);
 header("location: admin/dashboard.php");
   }
}
?>
  <div class="container">
     <form method="post">
        <div class="user">
        <lable>Username</label>
        <input type="username" name="username" value="<?php echo $data['username'] ; ?>"/>
    <?php echo !empty($error["username"]) ? $error["username"] : " "; ?>
         </div>
         <div class="psw">
         <label>Password</label>
         <input type="password" name="password" value="<?php echo $data['password'] ; ?>"/> 
 <?php echo !empty($error["password"]) ? $error["password"] : " "; ?>
         </div>
          <input type="submit" name="submit" value="Submit" />
     </form>


  </div>
</body>
</div>
</html>
</body>
</html>