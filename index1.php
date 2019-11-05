<?php
   session_start();
?>
<html>
<head>
	<title>Home</title>
<link rel = "icon" src="icon.png">
<link rel="stylesheet" type="text/css" href="homecss.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
    <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-secondary" type="submit">Search</button>
  </form>
</li>
<li class="nav-item">
	<a class="nav-link" style="color: #ffd9b3; font-weight: bolder;" href="register.php">Welcome&nbsp</a>
</li> 
<li class="nav-item">
	<a class="nav-link" style="color: #ffd9b3; font-weight: bolder;" href="login.php"><?php echo ($_SESSION['email']);?></a>
</li>
<li class="nav-item">
  <p style="margin-top: 7px; color: grey">,</p>
</li>
<li class="nav-item">
  <a class="nav-link" style="color: gray; font-weight: bolder;" href="index.html">Logout</a>
</li>
  </ul>
</nav>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/c1.jpg" class="d-block w-100" alt="..." height="600px" width="100px">
    </div>
    <div class="carousel-item">
      <img src="img/c2.jpg" class="d-block w-100" alt="..." height="600px" width="100px">
    </div>
    <div class="carousel-item">
      <img src="img/c3.jpg" class="d-block w-100" alt="..." height="600px" width="100px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<h1 id="he1">Explore the future of designing</h1><hr>
<div id="d1" style="text-align: center;">
	<button class="btn btn-outline-warning btn-light btn-lg col-lg-4" style="margin-top: 200px;">SHOP NOW</button>
	<h1 id="he2">Welcome to Home Decor</h1>
</div>
</body>
</html>
