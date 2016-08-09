<?php session_start(); ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Header</title>
    
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script> 
<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <style>
  .btn{
  height: 55px;
  width: 90px;
  }
  body {margin:0;}
  @media screen and (min-width: 320px) and (max-width: 699px) {
 
.nav1 > li > a {
 padding-top: 0px !important;
 padding-bottom: 0px !important;
 }
 .navbar{
 min-height: 100px !important;
 }
 .navbar-brand { min-height: inherit; }
  }

  </style>
  
  <nav class="navbar navbar-default">
  <ul class="nav navbar-nav nav1">
  <li><a href="#">Phone: 630-566-8780</a></li>
  <li><a href="#">Email: info@itpeoplenetwork.com</a></li>
  <li><a href="#">Address: 2800 Beverly Dr, Aurora, IL, 60502</a></li>
  </ul>
  </nav>
 
  <div class="navbar navbar-default" role="navigation">
<div class="container-fluid">
<div class="navbar-header" style="height: 60px;">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
 <a href="home.php" class="navbar-brand"><img src="logo1.png" class="img-responsive" style="height: 40px; width: 180px;"></a>
 </div>
 <div class="navbar-collapse collapse">
<ul class="topnav nav navbar-nav navbar-right" id="myTopnav">
  <li><a href="home.php">Home</a></li>
<li><a href="myprofile.php">My Profile</a></li>
<li><a href="referus.php">Refer Us</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
</div>
</div>


 <?php 
 $id=$_SESSION['id'];
 ?>


</html>