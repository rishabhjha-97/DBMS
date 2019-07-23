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

		$var=mysql_query("select * from connection");
	echo "<table BORDER=10 BORDERCOLORLIGHT=YELLOW BORDERCOLORDARK=BLUE>";

	echo '<tr><thead><th>connid</th> <th>conntype</th> <th>connaddress</th> <th>city</th></thead> </tr>';
	while ($arr=mysql_fetch_row($var))
		{

			echo "<tr> <td>$arr[0]</td>  <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
		}
	echo "</table>";

echo '<a href="options.html"><br>options</br>';
?>
</center>
</html>
