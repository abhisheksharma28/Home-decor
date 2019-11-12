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
  <link rel="stylesheet" href="animate.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">
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
<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
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
</div> -->
<section class="home container mb-5">
<div class="row mt-5">
  <div class="col-lg-6 mt-5 mr-auto">
    <img style="margin-top: 150px" src="img/c1.jpg" class="animated zoomIn img-fluid"></div>
<div class="col-lg-4 mt-5 my-5 py-5 pt-5 overflow-hidden">
  <h1 style="font-size:55px;font-weight: bold;text-align: center;margin-top: 50px;font-family: Gabriola;"class="animated slideInLeft delay-1s pb-3"><u>Explore the future of designing</u></h1>
  <p style="font-size: 20px;font-family: Gabriola;" class="animated slideInLeft delay-2s pb-3">Our exclusive furniture and accessories start with a sketch inspired by the design team's travels around the world. Many Homedecor products are assembled in India. with domestic and imported parts, and quality tested so they arrive in your home, ready to enjoy for years</p>
  <button class="animated zoomIn delay-3s btn btn-lg btn-outline-secondary">Learn more</button>
  <button class="animated zoomIn delay-3s btn btn-lg btn-secondary">Contact us</button>
</div>  
</div>
</section>
<!-- <h1 id="he1" style="margin-top: 100px" class="col-lg-6">Explore the future of designing</h1><hr> -->

<div id="d1" style="text-align: center;" class="overflow-hidden">
  <a href="login.php" class="animated zoomIn delay-1s btn btn-outline-warning btn-light btn-lg col-lg-4" style="margin-top: 200px;">SHOP NOW</a>
  <h1 id="he2" class="animated slideInRight delay-0.5s">Welcome to Home Decor</h1>
</div>
<section class="services">
        <div class="text-center py-5">
            <h2 class="py-3">Services</h2>
            <div class="mx-auto heading-line"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="animated zoomIn delay-2s col-md-4 text-center">
                    <i class="fa fa-shopping-bag"></i>
                    <h4 class="py-3">Cart</h4>
                    <p class="pb-5">Add the best items to your cart.</p>
                </div>
                <div class="animated zoomIn delay-2s col-md-4 text-center">
                    <i class="fa fa-shower"></i>
                    <h4 class="py-3">Bathroom</h4>
                    <p class="pb-5">New arrivals of bathroom hardware are here.</p>
                </div>
                <div class="animated zoomIn delay-2s col-md-4 text-center">
                    <i class="fa fa-thumbs-up"></i>
                    <h4 class="py-3">Best services</h4>
                    <p class="pb-5">Apply for services sitting at home.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="text-center py-5">
                <h2 class="py-3">Contact us</h2>
                <div class="mx-auto heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <!--Google map-->
                    <div id="map-container-google-1" class="z-depth-1-half map-container">
                        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width:100%; height:420px" allowfullscreen></iframe>
                    </div>
                    <!--Google Maps-->
                </div>
                <form class="col-lg-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" aria-describedby="emailHint" placeholder="Enter email">
                        <small id="emailHint" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" placeholder="Enter message" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-outline-secondary">Submit</button>
                </form>
            </div>
        </div>
    </section>
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
  </body>
</html>
