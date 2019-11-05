<?php
$dbhost = 'localhost';
$username = 'root';
$password = '';
$db = 'home decor';
// Create connection
$conn = mysqli_connect("$dbhost" , "$username" , "$password");
//echo "Connected" ;
mysqli_select_db($conn,$db);
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $query = "insert into data(Email,pass,phone,address) values('$email','$pass','789','abc');";
  $result = mysqli_query($conn,$query);
?>
