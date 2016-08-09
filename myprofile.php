<?php
 include_once "db.php";
  session_start();
  if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();
    header("Location: index.php");   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); 
 $id=$_SESSION['id'];
 $sql="SELECT * from customers where user_id='$id'";
 $result=mysql_query($sql);
 $row=mysql_fetch_assoc($result);
 $fname=$row['name'];
 $title=$row['title'];
 $email=$row['email1'];
 $company=$row['company'];
 $phone=$row['phone'];
$email2=$row['email2'];

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link src="css/bootstrap.min.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <style type="text/css">
  
  body{
  	padding: 10px;
  }
  #btn1 {
	margin: 0 auto;
	margin-left: 140px;
	margin-top: 20px;
	margin-bottom: 20px;
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
label{
  color: #808080;
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
	<?php 
  if($_SESSION['id'])
  {
  include "header.php";
  ?>
	<form role="form" id="myform"method="post" action="editprofile.php" >
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-2"><label>Full Name</label></div>
		<div class="col-xs-4"><?php echo $fname; ?></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-2"><label>Title</label></div>
		<div class="col-xs-4"><?php echo $title; ?></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-2"><label>Name of Company</label></div>
		<div class="col-xs-4"><?php echo $company; ?></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-2"><label>Phone</label></div>
		<div class="col-xs-4"><?php echo $phone; ?></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-2"><label>Email1</label></div>
		<div class="col-xs-4"><?php echo $email; ?></div>
	</div>
	<div class="row form-group" style="border: none; margin: 5px;">
		<div class="col-xs-2"><label>Email2</label></div>
		<div class="col-xs-4"><?php echo $email2; ?></div>
	</div>
	
	<div id="btn1"><button type="submit" name="submit" class="btn btn-md btn-primary" style="width: 100px; height: 50px;">Edit Profile</button></div>

</form>



	
</div>
</div>
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
	