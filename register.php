<?php
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
  $phone = (isset($_POST['phone']) ? $_POST['phone'] : '');
  $add = (isset($_POST['address']) ? $_POST['address'] : '');
  $query = "insert into data(id,email,pass,phone,address) values(NULL,'$email','$pass','$phone','$add');";
  $result = mysqli_query($conn,$query);
  $rows = mysqli_num_rows($result);?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    // alert('successfully');{}
    {
      Swal.fire(
      'Sign up',
      'successfully',
      'success'
    )
  }
</script>
<html>
<head>
	<title>Register</title>
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
<body style="background:url('img/registerbb.jpg');background-repeat: no-repeat;background-size: 100%;background-position: center;height: 100%;width: 100%;">
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
<!-- <div class="container1" style="margin-top: 90px;">
  <form style="width: 500px; float: right;margin-right: 50px;" method="POST" >
  <div class="form-group">
    <label for="email1">Email address</label>
    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" name="email" placeholder="Enter email" required>
  <div class="form-group">
    <label for="pass1">Password</label>
    <input type="password" class="form-control" id="pass1" name="password" placeholder="Password" required>
  <div class="form-group">
    <label for="Phone1">Phone Number</label>
    <input type="text" class="form-control" id="Phone1" name="phone" placeholder="Phone Number" required>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Accept Terms&conditions</label>
  </div>
  <button type="submit" class="btn btn-primary">sign up</button>
</form> -->
</div>
<div class="ii">
  <div class="ff" style="width: 30%;background-color: #f2f2f2;padding: 50px;margin-top: 125px;margin-left: 550px;">
        <h1 style="text-align:center;font-family: Gabriola;"><b>Register Here</b></h1>
      <form class="was-validated" method="POST" >
      <div class="form-group">
        <label for="email1">Email</label>
        <input type="email" style="border:0; outline: 0;
  background: transparent;border-bottom: 1px solid black;" class="form-control" id="email1" name="email" placeholder="Enter email" required="">
       <div class="valid-feedback">
        Looks good!</div>
      </div>
       <div class="form-group">
         <label for="pass1">Password</label>
         <input type="password" style="border:0; outline: 0;
  background: transparent;border-bottom: 1px solid black;" class="form-control" id="pass1" name="password" placeholder="Password" required>
        <div class="valid-feedback">
        Looks good!</div>
      </div>
      <div class="form-group">
         <label for="pass1">Phone No.</label>
         <input type="text" style="border:0; outline: 0;
  background: transparent;border-bottom: 1px solid black;" class="form-control" id="pass2" name="phone" placeholder="Phone No." required>
        <div class="valid-feedback">
        Looks good!</div>
      </div>
      <div class="form-group">
         <label for="pass1">Address</label>
         <input type="text" style="border:0; outline: 0;
  background: transparent;border-bottom: 1px solid black;" class="form-control" id="pass3" name="address" placeholder="Address" required>
        <div class="valid-feedback">
        Looks good!</div>
      </div>
       <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Accept Terms&conditions</label>
  </div>
  <center><button type="submit" class="btn btn-primary">Sign up</button></center>
</form>
</div>
</div>
<footer id="f1" style="background-color: #f2f2f2;" class="footer mt-5">
        <div class="text-center py-5">
            <h2 class="py-3">Home Decor</h2>
            <div class="mx-auto heading-line"></div>
        </div>
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <p>We are here to provide you the best in class services for your home decoration dream. Feel free to contact we are 24*7 available for your help.</p>
                    <ul class="nav justify-content-center ">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop now</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright text-center py-3 border-top text-muted">
                <p>Made by Abhishek Sharma &copy; 2019</p>
                <p><a href="#">https://www.HomeDecor.com</a></p>
            </div>
        </div>
    </footer>
