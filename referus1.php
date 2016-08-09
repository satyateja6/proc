<?php
include "db.php";
if(isset($_POST['referus']))
{
$id=$_POST['id'];
$fname=$_POST['rname'];
$email=$_POST['remail'];
$phone=$_POST['rphone'];
$rurl=$_POST['rurl'];
$sql="insert into refer(name,email,phone,linkedin_url,user_id) values('$fname','$email','$phone','$rurl','$id')";
echo $sql;
$result=mysql_query($sql);
if($result)
{
$to      = $email; 
	$subject = 'e-Procure Talent'; 
	$message = '
 
Welcome to e-Procure Talent. You have been invited to join us. 
Please follow the link to join us:
http://itpnprojects.com/ats_2/divya/proj/register.php

 
'; // Our message above including the link
                     
$headers = 'From:noreply@itpnprojects.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email

echo "<p> Thank you for referring us. </p>";
header("Location: referus.php?id=$id");
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank</p>";
}
}
?>