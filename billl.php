<html>
<body>
<style>
body {
	background-image:url("http://aptel.gov.in/img/hutto_salado-7.png");
	background-size:cover;
}
</style>
<center>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('elec') or die(mysql_error());

		$var=mysql_query("select * from bill");
	echo "<table BORDER=10 BORDERCOLORLIGHT=YELLOW BORDERCOLORDARK=BLUE>";

	echo '<tr><thead><th>bill_no</th> <th>cus_id</th> <th>units</th> <th>tarrif_id</th> <th>tarrif_per_unit</th> <th>tax</th> <th>cur_date</th><th>due_date</th><th>total</th></thead></tr>';
	while($arr=mysql_fetch_row($var))
		{

			echo "<tr><tbody> <td>$arr[0]</td>  <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td> <td>$arr[7]</td><td>$arr[8]</td><tbody> </tr>";
		}
	echo "</table>";

echo '<a href="options.html"><br>options</br>';
?>
</center>
</body>
</html>