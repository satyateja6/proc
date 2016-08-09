<html>
<head>
</head>
<body>
<?php 

$hostname= "localhost";
$username= "itpnproj_ats_2";
$password= "Eddie@123$";
$dbname= "itpnproj_eprocure"; 

$db= mysql_connect($hostname, $username, $password);
if(!$db)
{
die("connection failed:" .connect_error);
}
else
//echo "connected successfully"; 
mysql_select_db($dbname);


?>
</body>
</html>