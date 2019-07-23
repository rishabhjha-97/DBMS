<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('elec') or die(mysql_error());

	$connid=$_REQUEST['connid'];

	$query="delete from connection where connid ='$connid'";
	$result=mysql_query($query) or die(mysql_error());

	echo "data deleted successfully!!!";
        $var=mysql_query("select * from connection");
	echo "<table border size=1>";
	echo '<tr><th>connid</th> <th>conntype</th> <th>connaddress</th> <th>city</th> </tr>';
	while($arr=mysql_fetch_row($var))
		
			echo "<tr> <td>$arr[0]</td>  <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";


?>
