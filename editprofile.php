<?php
session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();
    header("Location: index.php");   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); 
include_once "db.php";
if(isset($_SESSION['id'])) {
$id=$_SESSION['id'];
        $sql= "SELECT * FROM customers WHERE user_id='$id'";
        $result=mysql_query($sql);
        $row=mysql_fetch_array($result);
        $num_rows=mysql_num_rows($result);
    }
    else
    echo "Something went wrong";

?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
 
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
  	padding: 10px;
  }
  label.error{
  color: red;
  font-style:italic;
  font-family: "Comic Sans MS", cursive, sans-serif;
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
	display: inline;
	margin-left: 250px;
}	

@media screen and (min-width: 320px) and (max-width: 699px){
 .row{
  width: 400px; 
  }
  #btn1{
  margin-left: 45px;
  width: 50px;
  }
  }
  </style>
  <body>
  <div class="container-fluid"> 
	<div class="container">
	<?php include "header.php";

	if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
     echo '<h3 style="color:#006600">Your Profile has been submitted successfully !!</h3>';
}
	
	?>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> 
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/additional-methods.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    
    <script type="text/javascript" src="register.js"></script>  
    <span></span>
    <div>
	<form role="form" id="myform" method="post" action="edit_profile.php">
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-3"><label>*Full Name</label></div>
		<div class="col-xs-4"><input type="text" name="username" class="form-control lettersonly" value="<?php echo $row['name']; ?>" required></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-3"><label>*Title</label></div>
		<div class="col-xs-4"><input type="text" name="title" class="form-control lettersonly" value="<?php echo $row['title']; ?>" required></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-3"><label>*Name of Company</label></div>
		<div class="col-xs-4"><input type="text" name="company" class="form-control" value="<?php echo $row['company']; ?>" disabled></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-3"><label>*Phone</label></div>
		<div class="col-xs-4"><input type="text" name="phone" class="form-control" id="phone" value="<?php echo $row['phone']; ?>" required></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-3"><label>*Email</label></div>
		<div class="col-xs-4"><input type="text" name="email1" class="form-control" id="email1" value="<?php echo $row['email1']; ?>" readonly></div>
	</div>
	
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-3"><label>*Password</label></div>
		<div class="col-xs-4"><input type="password" name="password" class="form-control alphanumeric" value="<?php echo $row['password']; ?>" required></div>
	</div>
	
	<div id="btn1"><button type="submit" name="submit" class="btn btn-md btn-success" style="width: 110px; height: 50px; margin-top: 10px;">Update</button></div>
</form>
</div>
</div>
</div>
	</body>
	</html>