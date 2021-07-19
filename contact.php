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
    <style type="text/css">
        button{
            position: relative;
    display: inline-block;
    padding: 12px 36px;
    margin: 10px 0;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 18px;
    letter-spacing: 2px;
    border-radius: 8px;
    background-color: #9dc5c3;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
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
                   <center> <h1>Contact Us</h1></center>
                </div>
                </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        <!-- Activity section -->
    </div>
    <div class="card-body">
    <div class="container">
  <form action="contact_script.php" method="POST">
  <div class="form-group">
      <label for="name">Name:</label>
      <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"   required = "true">
    </div>
    <div class="form-group">
  <label for="message">meaasge:</label>
  <textarea name="message" class="form-control" raws="6" cols="60" id="message" ></textarea>
</div>
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

    </div>
    <div class="card bg-dark text-white text-center">
        <p>&copy 2021. Made by <b>Pankaj soni</b> <br> For the Project of  <b>The Sparks Foundation internship</b></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>