<?php session_start(); 
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();
    header("Location: index.php");   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); 
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Refer Us</title>
   
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  
  <style type="text/css">
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
  body{
  padding: 20px;
  }
  #btn1{
    width: 200px;
  text-align: center;
  background-color: green;
  margin: 30px;
  }
  @media screen and (min-width: 700px){
 .container1{
  width: 700px; 
  margin: 0 auto;
  }
  }
   @media screen and (min-width: 320px) and (max-width: 699px){
 .container1{
  width: 400px; 
  
  }
  }
  label.error{
  color: red;
  }
  label{
  color: #808080;
  }
  </style>
  <body>
  <div class="container-fluid">
  <div class="container">
  <?php
  if($_SESSION['id'])
  {
  $id=$_SESSION['id'];
   include "header.php";?>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> 
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/additional-methods.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>
    
  <form action= "referus1.php" method= "post" role="form" id="myform">
  <div class="container1">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="row form-group" style="border: none; margin: 5px;">
<div class="col-xs-4"><label>Name</label></div>
<div class="col-xs-4"><input type="text" name="rname" class="form-control lettersonly"></div>
</div>
<div class="row form-group" style="border: none; margin: 5px;">
<div class="col-xs-4"><label>Email</label></div>
<div class="col-xs-4"><input type="text" name="remail" class="form-control"></div>
</div>
<div class="row form-group" style="border: none; margin: 5px;">
<div class="col-xs-4"><label>Phone</label></div>
<div class="col-xs-4"><input type="text" name="rphone" class="form-control" id="rphone"></div>
</div>
<div class="row form-group" style="border: none; margin: 5px;">
<div class="col-xs-4"><label>LinkedIn URL</label></div>
<div class="col-xs-4"><input type="text" name="rurl" class="form-control"></div>
</div>
<button class="btn btn-primary btn-lg" name="referus" id="btn1">Refer Us</button>
</button>
</form>
</div>
</div>
<script>
$(document).ready(function(){
$("#myform").validate({
	rules:{
	rname:{
		required: true
		},
	remail: {
		required: true,
		email: true
	},
	rphone: {
		phoneUS: true
	},
	rurl:{
	url: true
	}
},
	messages:{
		remail: "Please enter a valid email",
		rphone: {
		phoneUS: "Please enter a valid phone number"
		},
		rname:{
		required: "Please enter full name"
		},
		rurl:{
		url: "Please enter a valid url"
		}
	}
});

jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Alphabets only please");

});

jQuery(function($){
   $("#rphone").mask("(999) 999-9999");
});

  </script>
</body>
</html>
<?php
}
 else
  {
  ?>
  <p> Click here to <a href="index.php">Login</a></p>
  <?php
  }
  ?>
