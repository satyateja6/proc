<?php

include 'db.php';
// mysql select query
$result1 = mysql_query("SELECT * FROM job_order");
?>

<html>

    <head>

        <title>PHP DATA ROW TABLE FROM DATABASE</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>

            table,th,tr,td
            {
                border: 1px solid black;
            }

        </style>

    </head>

    <body>

        <table>

            <tr>
                                <th>job_id </th>
                                <th>job_title</th>
				<th>openings</th>
                                <th>city</th>
                                <th>state</th>
				<th>baselevel</th>
				<th>detail_level1</th>
				<th>detail_level2</th>
				<th>detail_level3</th>
				<th>rate1</th>
				<th>rate2</th>
				<th>duration1</th>
				<th>duration2</th>
				<th>email</th>
				<th>phone</th>
				<th>best_time1</th>
				<th>best_time2</th>
				<th>best_time3</th>
				<th>notes</th>
				<th>user_id</th>
            </tr>
<?php
             while($row1 = mysql_fetch_array($result1))
			{

 $val5= row1['best_time3'];
 if ($val5==1)
 {
 $val6='alasaka tz';
 }
 elseif ($val5==2)
 {
 $val6='atlantic tz';
 }
 elseif ($val5==3)
 {
 $val6='british tz';
 }
 elseif ($val5==4)
{
$val6='central tz';
} 
elseif ($val5==5)
{
$val6='chamorro tz';
}
elseif ($val5==6)
{
$val6='eastern tz';
}
elseif ($val5==7)
{
$val6='greenwich mean tz';
}
elseif ($val5==8)
{
$val6='hawaii-aleutian tz';
}
elseif ($val5==9)
{
$val6='mountain tz';
}
elseif ($val5==10)
{
$val6='pacific tz';
}
elseif ($val5==11)
{
$val6='samoa tz';
}
elseif ($val5==12)
{
$val6='azores tz';
}
elseif ($val5==13)
{
$val6='western euro tz';
}
elseif ($val5==14)
{
$val6='central euro tz';
}
elseif ($val5==15)
{
$val6='eastern euro tz';
}
elseif ($val5==16)
{
$val6='moscow tz';
}
elseif ($val5==17)
{
$val6='further eastern tz';
}
elseif ($val5==18)
{
$val6='irish tz';
}	
		?>
            <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
				<td><?php echo $row1[4];?></td>
				<td><?php echo $row1[5];?></td>
				<td><?php echo $row1[6];?></td>
				<td><?php echo $row1[7];?></td>
				<td><?php echo $row1[8];?></td>
				<td><?php echo $val2[9];?></td>
				<td><?php echo $row1[10];?></td>
				<td><?php echo $row1[11];?></td>
				<td><?php echo $row1[12];?></td>
				<td><?php echo $row1[13];?></td>
				<td><?php echo $row1[14];?></td>
				<td><?php echo $row1[15];?></td>
				<td><?php echo $val4[16];?></td>
				<td><?php echo $val6[17];?></td>
				<td><?php echo $row1[18];?></td>
				<td><?php echo $row1[19];?></td>
				</tr>
				
            <?php } 
			 ?>
          
        </table>

</html>