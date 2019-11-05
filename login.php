<?php
session_start();
  $dbhost = 'localhost';
$username = 'root';
$password = '';
$db = 'home decor';
// Create connection
$conn = mysqli_connect("$dbhost" , "$username" , "$password");
//echo "Connected" ;
mysqli_select_db($conn,$db);
    $email = (isset($_POST['email']) ? $_POST['email'] : '');
  $pass = (isset($_POST['password']) ? $_POST['password'] : '');
  $query = "select * from data where email = '$email' && pass = '$pass' ";
  $result = mysqli_query($conn,$query);
  $rows = mysqli_num_rows($result);
  if($rows == 1){
  $_SESSION['email'] = $email;
  header('location:index1.php');
}
?>
</script>
<html>
<head>
  <title>Login</title>
<link rel = "icon" src="icon.png">
<link rel="stylesheet" type="text/css" href="register.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- <script src="validation.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="index.html">
    <img src="img/logo.png" width="150px" height="30px">
  </a>

  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Furniture 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Drawing room</a>
        <a class="dropdown-item" href="#">Bedrooms</a>
        <a class="dropdown-item" href="#">Study room</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Decor 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Wall Clocks</a>
        <a class="dropdown-item" href="#">Show pieces</a>
        <a class="dropdown-item" href="#">Spritual</a>
        <a class="dropdown-item" href="#">Wall arts</a>
      </div>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Interior Designs
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Kitchen</a>
        <a class="dropdown-item" href="#">Study room</a>
        <a class="dropdown-item" href="#">Gym</a>
        <a class="dropdown-item" href="#">Bathroom</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Lighting 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Wall lights</a>
        <a class="dropdown-item" href="#">Ceiling lights</a>
        <a class="dropdown-item" href="#">Outdoor lights</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
         Shop 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Cart</a>
        <a class="dropdown-item" href="#">Wishlist</a>
      </div>
    </li>
    <li>
    <form class="form-inline" action="">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-secondary" type="submit">Search</button>
  </form>
</li>
<li class="nav-item">
  <a class="nav-link" style="color: #ffd9b3; font-weight: bolder;" href="register.php">New Customer?</a>
</li>
<li class="nav-item">
  <p style="margin-top: 7px; color: grey">||</p>
</li>
<li class="nav-item">
  <a class="nav-link" style="color: #ffd9b3; font-weight: bolder;" href="login.php">Login</a>
</li>
  </ul>
</nav>
<div class="container1" style="margin-top: 90px;">
  <form class="was-validated" style="width: 500px; float: right;margin-right: 50px;" method="POST" >
  <div class="form-group">
    <label for="email1">Email address</label>
    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" name="email" placeholder="Enter email" required>
    <div class="valid-feedback">
    Looks good!</div>
  </div>
  <div class="form-group">
    <label for="pass1">Password</label>
    <input type="password" class="form-control" id="pass1" name="password" placeholder="Password" required>
    <div class="valid-feedback">
    Looks good!</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
