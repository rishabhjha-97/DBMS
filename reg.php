<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('elec') or die(mysql_error());

	$login_id=$_REQUEST['login_id'];
	$password=$_REQUEST['password'];
	$name=$_REQUEST['name'];
	$mobile=$_REQUEST['mobile'];
	$email=$_REQUEST['email'];
	$address=$_REQUEST['address'];
	
	$query="INSERT INTO admin VALUES('$login_id','$password','$name','$mobile','$email','$address')";
	$result=mysql_query($query) or die(mysql_error());

	echo "successfully registerd";
	echo '<a href="login.html"><br>login here</br></a>';


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
