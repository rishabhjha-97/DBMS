<html>
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

		$var=mysql_query("select * from customer");
	echo "<table BORDER=10 BORDERCOLORLIGHT=YELLOW BORDERCOLORDARK=BLUE>";

	echo '<tr><thead><th>cus_id</th> <th>cus_meter_no</th> <th>connid</th><th>tarrif_id</th><th>phone_no</th><th>email</th> </thead> </tr>';
	while ($arr=mysql_fetch_row($var))
		{

			echo "<tr> <td>$arr[0]</td>  <td>$arr[1]</td> <td>$arr[2]</td>  <td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td></tr>";
		}
	echo "</table>";

echo '<a href="options.html"><br>options</br>';
?>
</center>
</html>