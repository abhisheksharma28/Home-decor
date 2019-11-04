<?php
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $phn = $_POST['phone'];
  $add = $_POST['address'];

  //connection
  $conn = new mysqli('localhost','root','','home decor');
  if(@conn->connect_error){
  	die('Connection Failed :'.$conn->connect_error);
  }else
  {
  	$stmt=$conn->prepare("insert into data(Email,pass,phone,address) values(?,?,?,?)");
  	$stmt->bind_param("ssis",$email,$pass,$phn,$add);
  	$stmt->execute();
  	$stmt->close();
  	$conn->close();
  }
  ?>