<?php
include "db.php";
if(isset($_POST['submit']))
{
$fname=$_POST['username'];
$title=$_POST['title'];
$phone=$_POST['phone'];
$email1=$_POST['email1'];
$email2=$_POST['email2'];
$company=$_POST['company'];
$password=$_POST['password'];
$hash= password_hash($password, PASSWORD_BCRYPT);

$sql="insert into customers(name,title,company,phone,email1,email2,password) values('$fname','$title','$company','$phone','$email1','$email2','$hash')";
$result=mysql_query($sql);
if($result)
{
echo "Successfuly registered. Please login now";
include "index.php";
}
else
echo "failed";
}
else
{
echo "failed";
header("Location: register.php");
}
?>