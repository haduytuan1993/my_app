<?php
global $conn;
function is_login() {
    return isset($_SESSION['user']) ? $_SESSION['user'] : array();
}
 function db_connect() {
    global $conn;
$conn = mysqli_connect("localhost","root","", "my_app");
If(!$conn) {
  die ('Connection failed to database');
 }
}
function register_user($username,$email,$password) {
   global $conn;
   db_connect();
   $data_user = [
     'username' => $username,
     'email' => $email,
     'password' => $password
   ];
 $query = "INSERT INTO register_user(username, email, password) VALUES ('$username','$email','$password')";
 
$result = mysqli_query($conn, $query);
If(!$result){ 
   die('this query to database failed');
  }
  $_SESSION["user"] = $data_user;
  return $data_user;
 }

 function get_user($username,$password) {
      global $conn;
      db_connect();
   $query = "SELECT * FROM register_user";
   $result = mysqli_query($conn, $query);
   while($row = mysqli_fetch_assoc($result)) {
        if($row['username'] == $username && $row['password'] == $password ) {
            $_SESSION["user"] = $row;
            $_SESSION['timeout'] = time();
        }
        else {
            header('location: admin/dashboard.php');
        }
   }
 }


?>
