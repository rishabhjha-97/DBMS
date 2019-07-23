<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('elec') or die(mysql_error());

	$connid=$_REQUEST['connid'];
	$conntype=$_REQUEST['conntype'];
	$connaddress=$_REQUEST['connaddress'];
	$city=$_REQUEST['city'];



	$query="INSERT INTO connection VALUES('$connid','$conntype','$connaddress','$city')";
	$result=mysql_query($query) or die(mysql_error());

	echo "data inserted successfully!!!";

echo '<a href="options.html"><br>
back<br></a>';
	$db_host="localhost";
	$db_name="bill";
	$db_user="root";
	$db_pass="";
	$con=mysql_connect("$db_host","$db_user","$db_pass")or die("could not connect");
	mysql_select_db('elec') or die(mysql_error());
	mysql_close($con);
?>
</body>
</html>
<a href="condel.html">delete</a>
