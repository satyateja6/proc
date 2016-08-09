  <?php
  include_once "db.php";
  
  if(isset($_POST['login'])) 
  {
$email= $_POST['email'];
$password= $_POST['password'];
$sql= "SELECT * FROM customers WHERE email1='$email' AND password='$password'";
$result= mysql_query($sql, $db);
$row= mysql_fetch_assoc($result);
$num_rows = mysql_num_rows($result); 
$id=$row['user_id'];     

  if($num_rows>0){
 /* $_SESSION['user']=$user;
        include "home.php"; */
        header("Location: home.php?id=$id");
    }
  else{
        //session_destroy();
        echo '<script language="javascript">';
        echo 'alert("Password or Email is not correct")';
    	echo '</script>';
        include "index.php";
        }       
}
?>