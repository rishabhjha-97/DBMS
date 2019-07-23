
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('elec') or die(mysql_error());

	$cus_id=$_REQUEST['cus_id'];

	$query="delete from customer where cus_id ='$cus_id'";
	$result=mysql_query($query) or die(mysql_error());

	echo "data deleted successfully!!!";
        $var=mysql_query("select * from customer");
	echo "<table border size=1>";
	echo '<tr><th>cus_id</th> <th>cus_meter_no</th> <th>connid</th> <th>tarrif_id</th> <th>phone_no</th> <th>email</th> </tr>';
	while($arr=mysql_fetch_row($var))
		
			echo "<tr> <td>$arr[0]</td>  <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> </tr>";


?>
