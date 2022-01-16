<!-- Navigation -->
  <nav>
    <div class='container'>
      <object type='image/svg+xml' data='https://content.codecademy.com/courses/jquery/audit/images/sole-logo.svg'></object>
      <div>
        <span class='menu-button'>Menu</span>
        <span class='register-button'><a href="register.php">Register</a></span>
        <span class='<?php if(is_login())
         { 
          echo "";
         }
         else {
        echo "login-button";
       }
   ?>'><a href="<?php if(is_login())
         { 
          echo 'logout.php';
         }
         else {
        echo '';
       }
   ?>">
      <?php 
        if(is_login())
         { 
          echo 'logout';
         }
         else {
        echo 'login';
       }
   ?></a></span>

      </div>
    </div>
  </nav>

  <!-- Nav Menu -->
  <div class='nav-menu hide'>
    <div class='container'>
      <ul>
        <li>Shoes</li>
        <li>Women's Shoes</li>
        <li>Men's Shoes</li>
        <li>Shoe Accessories</li>
        <li>Wholesale</li>
      </ul>
      <ul>
        <li>Contact</li>
        <li>Twitter</li>
        <li>Facebook</li>
        <li>Instagram</li>
        <li>Email</li>
      </ul>
    </div>
  </div>
<!-- Login Form -->
<?php include "login.php" ;?>
