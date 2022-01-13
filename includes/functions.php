<?php
session_start();
global $conn;
 function db_connect() {
    global $conn;
$conn = mysqli_connect("localhost","root","", "my_app");
If(!$conn) {
  die ('Connection failed to database');
 }
}
function registersucess($username,$password) {
   global $conn;
   db_connect();

   $data_user = [
     'username' => $username,
     'password' => $password
   ];
 $query = "INSERT INTO register_user(username, password) VALUES ('$username','$password')";
 
$result = mysqli_query($conn, $query);
If(!$result){ 
   die('this query to database failed');
  }
  $_SESSION["user"] = $data_user;
  return $data_user;
 }

 function get_user($username, $password) {
      global $conn;
      db_connect();
   $query = "SELECT * FROM register_user";
   $result = mysqli_query($conn, $query);
   while($row = mysqli_fetch_assoc($result)) {
        if($row['username'] == $username && $row['password'] == $password ) {
            $_SESSION["user"] = $row;
        }
        else {
            header('location: login.php');
        }
   }
 }


?>
