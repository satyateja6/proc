<?php 
include "db.php";
if(isset($_POST['submit']))
{ 
$title= $_POST['title'];
$opening=$_POST['openings'];
$city= $_POST['city1'];
$state= $_POST['state'];
$rate1= $_POST['rate1'];
$rate2= $_POST['rate'];
$duration_1= $_POST['category1'];
$duration_2= $_POST['category2'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$best_time1= $_POST['time1'];
$best_time2= $_POST['am'];
$best_time3= $_POST['tz'];
$notes = $_POST['notes'];
//$baselevel= $_POST['hlevel'];
//$detail_level1=$_POST['level1'];
//$detail_level2=$_POST['level2'];

if(!isset($_POST['level1']))
{
$baselevel= $_POST['hlevel'];
$sql="insert into job_order ( job_title, openings, city, state, baselevel, rate1, rate2, duration_1, duration_2, email, phone, best_time1, best_time2, best_time3, notes) values ('$job_title', '$openings', '$city', '$state', '$baselevel', '$rate1', '$rate2', '$duration_1', '$duration_2', '$email', '$phone', '$best_time1', '$best_time2', '$best_time3', '$notes')";
}
elseif(!isset($_POST['hlevel']))
{
$detail_level1=$_POST['level1'];
$detail_level2=$_POST['level2'];
$detail_level3=$_POST['level3'];
$sql="insert into job_order (job_title, openings, city, state, detail_level1, detail_level2, detail_level3, rate1, rate2, duration_1, duration_2, email, phone, best_time1, best_time2, best_time3, notes) values ('$job_title', '$openings', '$city', '$state', '$detail_level1', '$detail_level2', '$detail_level3', '$rate1', '$rate2', '$duration_1', '$duration_2', '$email', '$phone', '$best_time1', '$best_time2', '$best_time3', '$notes')";
}
elseif(!isset($_POST['level2']))
{
$detail_level1=$_POST['level1'];
$sql="insert into job_order (job_title, openings, city, state, detail_level1, rate1, rate2, duration_1, duration_2, email, phone, best_time1, best_time2, best_time3, notes) values ('$job_title', '$openings', '$city', '$state', '$detail_level1', '$rate1', '$rate2', '$duration_1', '$duration_2', '$email', '$phone', '$best_time1', '$best_time2', '$best_time3', '$notes')";
}
elseif(!isset($_POST['level3'])){
$detail_level1=$_POST['level1'];
$detail_level2=$_POST['level2'];
$sql="insert into job_order (job_title, openings, city, state, detail_level1, detail_level2, rate1, rate2, duration_1, duration_2, email, phone, best_time1, best_time2, best_time3, notes) values ('$job_title', '$openings', '$city', '$state', '$detail_level1', '$detail_level2', '$rate1', '$rate2', '$duration_1', '$duration_2', '$email', '$phone', '$best_time1', '$best_time2', '$best_time3', '$notes')";
}
else
{
$baselevel= $_POST['hlevel'];
$detail_level1=$_POST['level1'];
$detail_level2=$_POST['level2'];
$detail_level3=$_POST['level3'];
$sql="insert into job_order (job_title,openings,city,state,baselevel,detail_level1,detail_level2,rate1,rate2,duration_1,duration_2,email,phone,best_time1,best_time2,best_time3,notes) values('$job_title','$openings','$city','$state','$baselevel','$detail_level1','$detail_level2','$rate1','$rate2','$duration_1','$duration_2','$email','$phone','$best_time1','$best_time2','$best_time3','$notes')";
}
$query= mysql_query($sql);
$num_row= mysql_affected_rows();

if($num_row > 0)
{
//echo "<span> Job order has been successfully submitted. A mail has been sent to your mail.</span>";
header("Location: ptalent1.php?success=1");
}
else
{
echo "fail";
header("Location: ptalent1.php");
}
}
else
echo "Form not submitting";
?>