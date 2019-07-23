<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('elec') or die(mysql_error());

	$cus_id=$_REQUEST['cus_id'];
	$cus_meter_no=$_REQUEST['cus_meter_no'];
	$connid=$_REQUEST['connid'];
	$tarrif_id=$_REQUEST['tarrif_id'];
	$phone_no=$_REQUEST['phone_no'];
	$email=$_REQUEST['email'];



	$query="INSERT INTO customer VALUES('$cus_id','$cus_meter_no','$connid','$tarrif_id','$phone_no','$email')";
	$result=mysql_query($query) or die(mysql_error());

	echo "data inserted successfully!!!";

echo '<a href="options.html"><br>
options<br></a>';
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
<a href="custdel.html">delete</a>
<a href="updatecus.html">update</a>