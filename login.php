<html>
<?php
  $login_id = $_REQUEST['login_id'];
  $password = $_REQUEST['password'];

 $login_id = stripcslashes($login_id);
 $password = stripcslashes($password);
 $login_id = mysql_real_escape_string($login_id);
 $password = mysql_real_escape_string($password);


mysql_connect("localhost","root","");
mysql_select_db("elec");

$result = mysql_query("select * from admin where login_id = '$login_id' and password = '$password'")
           or die("failed to query database ".mysql_error());
$row = mysql_fetch_array($result);
if ($row['login_id'] == $login_id && $row['password'] == $password ){
	include('options.html');
	echo "you are logged in";
} else {
  echo "failed to login!!";
}
?>
</html>