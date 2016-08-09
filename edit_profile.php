<?php
session_start();
include_once "db.php";
if(isset($_POST['submit']))
{
$fname=$_POST['username'];
$title=$_POST['title'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email1'];
echo $email;
$sql1="select * from customers where email1='$email'";
$result1=mysql_query($sql1);
$row1=mysql_fetch_array($result1);
$id=$row1['user_id'];
$sql="update customers SET name='$fname', title='$title', phone='$phone', password='$password' where user_id='$id'";
$result=mysql_query($sql);
$num_rows=mysql_num_rows($result);
if($result)
{
$_SESSION['id']=$id;
header("Location: myprofile.php?success=1");
}
else
echo $fname;

}
?>