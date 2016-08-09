<?php 
include "db.php";
if(!empty($_POST["id1"])){
	$id = $_POST["id1"];
	$query = "SELECT * from dd2 where id1 = $id";
	$result = mysql_query($query);
	
	while ($row=mysql_fetch_assoc($result)) {
	
	echo '<option value="' . $row['id2'] . '">' . $row['menu2'] . '</option>';
	
	}

}
?>

