<?php 
 // $user = is_login();
 // if(!empty($user)) {
 // 	 header('location: /my_app');
 // }

 if(isset($_POST['submit'])) { 
   	  $username = $_POST['username'];
   	  $password = $_POST['password'];
   get_user($username,$password); 
   header('location: /my_app');
  }

?>
  <div class='login-form'>
    <div class="container">
     <form method="post">
        <div class="user">
        <h4>Username</h4>
        <input type="text" name="username" class='username' value=""/>
         </div>
         <div class="psw">
         <h4>Password</h4>
         <input type="password" name="password" value=""/> 
         </div>
          <input type="submit" class='sign-in-button' name="submit" value="Submit" />
     </form>
 </div>
</div>
