<?php 
include "header.php";
include "navigation.php";
?>

<?php

   $data = [
     'username' => '',
      'email'   => '',
     'password' => ''
    ];
   $error = [ ];
   //Kiểm tra xem user có đang trong trạng thái đăng nhập không ? nếu đăng nhập rồi thì chuyển sang trang dashboard.php
 $user = is_login();
 if(!empty($user)) {
    header('location: /my_app');
 }
 If(isset($_POST["submit"])){   
      $data["username"] =$_POST["username"];    
      $data["email"] = $_POST["email"];
      $data["password"] = $_POST["password"];
     If(empty($data["username"])) {
        $error["username"] = "Do not empty this username" ;
      }  
     If(empty($data["email"])) {
        $error["email"] = "Do not empty this email" ;
      }  
     If(empty($data["password"])) {
        $error["password"] = "Do not empty this password" ;
      }  

If(empty($error)) {        
 register_user($data["username"],$data["email"],$data["password"]);
 header("location: /my_app");
   }
}
?>
  <div class="container">
    <div class="register-form">
     <form method="post">
      <div class="user">
        <lable>Username</label>
        <input type="username" name="username" value="<?php echo $data['username'] ; ?>"/>
    <?php echo !empty($error["username"]) ? "<strong style='color:red;'>".$error["username"]. "</strong>" : " "; ?>
       </div>
       <div class="email">
         <label>Email</label>
         <input type="email" name="email" value="<?php echo $data['email'] ; ?>"/> 
    <?php echo !empty($error["email"]) ? "<strong style='color:red;'>".$error["email"]. "</strong>" : " "; ?>
       </div>
       <div class="psw">
         <label>Password</label>
         <input type="password" name="password" value="<?php echo $data['password'] ; ?>"/> 
    <?php echo !empty($error["password"]) ? "<strong style='color:red;'>".$error["password"]. "</strong>" : " "; ?>
       </div>
     
          <input type="submit" name="submit" value="Register Now" />
     </form>

    </div>
  </div>
  <?php include "footer.php"; ?>