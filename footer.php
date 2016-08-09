<?php session_start(); ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Header</title>
    
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <style>
  .btn{
  height: 55px;
  width: 90px;
  </style>
  <div class="panel panel-default" style="margin-top: 5px;">
 
<nav class="navbar navbar-default">
<div class="container-fluid">
<ul class="nav navbar-nav navbar-center">
<li class="active"><form action="home.php" method="post" ><button class="btn" name="home" type="submit">Home</button></form></li>
<li><form action="myprofile.php?user=<?php echo $_SESSION['user'];?>" method="post" >
    <button class="btn" name="edit" type="submit">My Profile</button></form></li>
<li><form action="referus.php?user=<?php echo $_SESSION['user'];?>" method="post" >
    <button class="btn" name="referus" type="submit">Refer Us</button></form></li>
</ul>
</div>
</nav> 
 <?php 
 $user=$_SESSION['user'];
 ?>
</div>
</html>