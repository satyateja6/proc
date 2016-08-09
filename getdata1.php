<?php 
include "db.php";
if(!empty($_POST["id2"])){
	$id = $_POST["id2"];
	$query = "SELECT * from dd3 where id2 = $id";
	$result = mysql_query($query);
	
	while ($row=mysql_fetch_assoc($result)) {
	
	echo '<option value="' . $row['id3'] . '">' . $row['menu3'] . '</option>';
	
	}

}
?>