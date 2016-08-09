<?php
  include_once "db.php";
  if(!isset($_SESSION))
  {
  session_start();
  }
  else
  {
  session_destroy();
  session_start();
  }
  
if(isset($_POST['login']))
{
$email= $_POST['email'];
$password= $_POST['password'];
$sql= "SELECT * FROM customers WHERE email1='$email'";
$result= mysql_query($sql, $db);
$row= mysql_fetch_assoc($result);
$num_rows = mysql_num_rows($result); 
$hash= row['password'];  
if(password_verify($password, $hash)){
$id=$row['user_id'];
$_SESSION['id']=$id;

header("location:home.php");   
}
else
{
echo '<script type="text/javascript">alert("Invalid username or password");</script>';
include "index.php";
}
}
else
{
echo "failed";
}
?>