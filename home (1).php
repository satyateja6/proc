<?php session_start(); ?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
    
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <style type="text/css">
  body{
  padding: 20px;
  }
  .container{
  padding: 20px;
  padding-bottom: 150px;
  	height: auto;
  	background-color: white; 
-webkit-box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.4); 
-moz-box-shadow: 0px 1px 6px rgba(23, 69, 88, .5);
-webkit-border-radius: 12px;
-moz-border-radius: 7px; 
border-radius: 7px;
  }
  #btn1{
  background-color: green;
  width: 200px;
  height: 50px;
  margin: 0 auto;
  margin-top: 50px;
  color: white;
  }
  #btn{
  text-align: center;
  }
  .footer
  {
  margin-bottom: 0px;
  }
  </style>
  <body>
  <div class="container-fluid">
  <div class="container">
  <?php 
  $id= $_SESSION['id'];
  if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();
    header("Location: index.php");   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
  if(isset($_SESSION['id']))
  {
  include "header.php";
  ?>
 <div id="btn"> <form action="ptalent1.php" method="post" >
    <button class="btn" id="btn1" type="submit">Procure Talent</button></form></div>
 <div id="btn">   <form action="referus.php" method="post" >
    <button class="btn" id="btn1" name="referus" type="submit">Refer Us</button></form></div>
    
 
</div>
</div>
</body>
</html> 
<?php  } 
 else
 {
 echo "User logged out. Please login again";
 }
 ?>


