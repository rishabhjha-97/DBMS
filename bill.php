<html>
<body>
<style>
body {
	background-image:url("http://aptel.gov.in/img/hutto_salado-7.png");
	background-size:cover;
}
</style>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('elec') or die(mysql_error());

	$bill_id=$_REQUEST['bill_id'];
	$cus_id=$_REQUEST['cus_id'];
	$units=$_REQUEST['units'];
	$tarrif_id=$_REQUEST['tarrif_id'];
	$tarrif_per_unit=$_REQUEST['tarrif_per_unit'];
	$tax=$_REQUEST['tax'];
	$cur_date=$_REQUEST['cur_date'];
	$due_date=$_REQUEST['due_date'];
        $total=null;


	$query="INSERT INTO bill VALUES('$bill_id','$cus_id','$units','$tarrif_id','$tarrif_per_unit','$tax','$cur_date','$due_date','$total')";
	$result=mysql_query($query) or die(mysql_error());

	echo "data inserted successfully!!!";
	$var=mysql_query("select * from bill");
	echo "<table border size=1>";

	echo '<tr><thead><th>bill_no</th> <th>cus_id</th> <th>units</th> <th>tarrif_id</th> <th>tarrif_per_unit</th> <th>tax</th> <th>cur_date</th><th>due_date</th><th>total</th></thead></tr>';
	while($arr=mysql_fetch_row($var))
		{

			echo "<tr><tbody> <td>$arr[0]</td>  <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td> <td>$arr[7]</td><td>$arr[8]</td><tbody> </tr>";
		}
	echo "</table>";

echo '<a href="options.html"><br>options</br></a>';
?>
<?php

	$db_host="localhost";
	$db_name="elec";
	$db_user="root";
	$db_pass="";
	$con=mysql_connect("$db_host","$db_user","$db_pass")or die("could not connect");
	mysql_select_db('elec') or die(mysql_error());
	$p0=mysql_query("call totalcost(@out);");
        $rs=mysql_query('select @out');
   while($row=mysql_fetch_row($rs))
{
echo 'Total bill amount='.$row[0];
}
mysql_close($dbh);

?>

</body>
</html>
