<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js" charset="utf-8"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style type="text/css">
    .carousel-inner img {
    width: 100%;
    height: 100%;
  }
 
    </style>

</head>


<body>
<?php
  include 'nav.php';
  ?>
    <div class="card-header">
    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro py-1">
            <div>
                <div  class="card bg-warning text-white" >
                   <center> <h1>About our Bank</h1></center>
                </div>
                </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        <!-- Activity section -->
    </div>
    <div class="card-body">
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bank11.jpg" alt="Los Angeles" width="1100" height="300">
    </div>
    <div class="carousel-item">
      <img src="images/bank1.jpg" alt="Chicago" width="1100" height="300">
    </div>
    <div class="carousel-item " style="center">
      <img src="images/bank2.png" alt="New York" width="1100" height="300">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br><br>
<section>
<h1 class="big-heading">WHY SHOULD YOU CHOOSE US?</h1>
    </div>

  </section>
  <div class="container-fluid">
  <div class="d-inline-flex p-3 bg-secondary text-white">
  <div class="p-2 bg-info">
	   <div class="feature-box col-lg-4">
          <i class="icon far fa-check-circle fa-4x"></i>
          <h3 class="feature-title">Do banking in just single click</h3>
          <p>Easy money transfer in one click</p>
        </div></div>
  <div class="p-2 bg-warning">
	   <div class="feature-box col-lg-4">
          <i class="icon fas fa-history fa-4x"></i>
          <h3 class="feature-title">Check your transaction history</h3>
          <p>We are providing your transaction details</p>
        </div></div>
  <div class="p-2 bg-primary"> 
	   <div class="feature-box col-lg-4">
          <i class="icon fas fa-users fa-4x"></i>
          <h3 class="feature-title">24*7 Customer Service</h3>
          <p>Send your money easily from anywhere</p>
        </div></div>
</div>
</div>
<br><br>

<div class="card bg-dark text-white text-center">
        <p>&copy 2021. Made by <b>Pankaj soni</b> <br> For the Project of  <b>The Sparks Foundation internship</b></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>