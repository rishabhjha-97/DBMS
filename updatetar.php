<?php								 
    
	$dbh = mysql_connect('localhost', 'root', '') or die(mysql_error());
        mysql_select_db('elec') or die(mysql_error());


	if(isset($_POST['updatetarrif']))
	{
		$tarrif_id = $_POST['tarrif_id'];
		$connid = $_POST['connid'];
		$tarrif_per_unit = $_POST['tarrif_per_unit'];

		$query = "UPDATE tarrif SET tarrif_id='$tarrif_id',connid='$connid',tarrif_per_unit='$tarrif_per_unit' WHERE tarrif_id='$tarrif_id'";
		mysql_query($query) or die(mysql_error());
		echo "Data Updated Successfully!!!";
	}
	
	
	   $var=mysql_query("SELECT * FROM tarrif");

  echo"<table border size=1>";
  echo"<tr><th>tarrif_id</th> <th>connid</th> <th>tarrif_per_unit</th></tr>";
  while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td></tr>";
   }
   echo"</table>";
	
?>