<html>
<body>
<style>
a:link, a:visited {
	background-color:darkblue;
	color: white;
	padding: 14px 25px;
	font-size: 16px;
	text-align: right;
	text-decoration: none;
	display: inline-block;
}
a:hover, a:active {
background-color:blue;
a:link, a:visited {
	background-color: darkblue;
	color: white;
	padding: 14px 25px;
	font-size: 16px;
	text-align: right;
	text-decoration: none;
	display: inline-block;
}
</style>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('elec') or die(mysql_error());

	$tarrif_id=$_REQUEST['tarrif_id'];
	$connid=$_REQUEST['connid'];
	$tarrif_per_unit=$_REQUEST['tarrif_per_unit'];



	$query="INSERT INTO tarrif VALUES('$tarrif_id','$connid','$tarrif_per_unit')";
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
<a href="updatetar.html">update</a>