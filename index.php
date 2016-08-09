<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="text/javascript" href="http://code.jquery.com/jquery-1.10.2.min.js">
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <style type="text/css">
  
  body{
  	padding: 10px;
  }
.container{
height: auto;
padding: 20px;
padding-bottom: 150px;
background-color: white; 
-webkit-box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.4); 
-moz-box-shadow: 0px 1px 6px rgba(23, 69, 88, .5);
-webkit-border-radius: 12px;
-moz-border-radius: 7px; 
border-radius: 7px;
}
label.error{
  color: red;
  font-style:italic;
  font-family: "Comic Sans MS", cursive, sans-serif;
  }
@media screen and (min-width: 700px){
.container1{
width: 500px;
margin: 0 auto;
}
}
@media screen and (max-width: 300px){
input{
width: 100%;
}

body{
background-color: black;
}
.btn {
        width: 100%;
    }
}
  </style>
  <body>
  <div class="container-fluid">
	<div class="container">
	<?php include "header1.php";?>
	<form class="form-horizontal" method="post" action="home1.php" id="form1">
	<div class="container1">
	<span></span>
	<label>Email</label>
	<input type="text" name="email" id="mob1" class="form-control" required><br />
	<label>Password</label>
	<input type="password" name="password" id="mob2" class="form-control" required>
	
	<div style="text-align: center; margin-top: 15px;"><button type="submit" name="login" class="btn btn-primary btn-lg">Login </button></div>
	</div>
</form>
<p style="margin-left: 90px; margin-top: 15px;">
		New User?<a href="register.php">Register Here</a>
	</p>

</div>
</div>
</body>
</html>
<script>
$("#form1").validate();
</script>
 