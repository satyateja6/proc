<html >
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> 
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/additional-methods.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    
    <script type="text/javascript" src="register.js"></script>   
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <script>
  jQuery(function($){
   $("#phone").mask("(999) 999-9999");
});
</script>
  <style type="text/css">
 
  body{
  	padding: 20px;
  }
  label.error{
  color: red;
  font-style:italic;
  font-family: "Comic Sans MS", cursive, sans-serif;
  }
  label{
  color: #808080;
  }
 
  @media screen and (min-width: 700px){
 .container1{
  width: 700px; 
  margin: 0 auto;
  }
 
  }
    @media screen and (min-width: 320px) and (max-width: 699px){
 .container1{
  width:400px; 
  }
  
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
#btn1 {
	margin: 0 auto;
	margin-top: 20px;
	margin-bottom: 20px;
	margin-left: 125px;
}	

  </style>
  <body>

 
	<div class="container">
	 <div class="container-fluid">
	<?php include "header1.php";?>
	<form role="form" id="myform" method="post" action="register1.php">
	<div class="container1">
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-3"><label>*Full Name</label></div>
		<div class="col-xs-4"><input type="text" name="username" class="form-control lettersonly" required></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-3"><label>*Title</label></div>
		<div class="col-xs-4"><input type="text" name="title" class="form-control lettersonly" required></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-3"><label>*Name of Company</label></div>
		<div class="col-xs-4"><input type="text" name="company" class="form-control lettersonly" required></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-3"><label>*Phone</label></div>
		<div class="col-xs-4"><input type="text" name="phone" class="form-control" id="phone" required></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-3"><label>*Email</label></div>
		<div class="col-xs-4"><input type="text" name="email1" class="form-control" id="email1" required></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-3"><label>*Re enter Email</label></div>
		<div class="col-xs-4"><input type="text" name="email2" class="form-control" required></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-3"><label>*Password</label></div>
		<div class="col-xs-4"><input type="password" name="password" class="form-control alphanumeric" required></div>
	</div>
	<div id="btn1"><button type="submit" name="submit" class="btn btn-lg btn-primary">Register </button></div>
</div>	
</form>
<p style="font-size: 20px;">To login <a href="index.php" style="text-decoration: none;">Click Here !</a></p>
</div>
</div>


	</body>
	</html>
