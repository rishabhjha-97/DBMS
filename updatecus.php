<?php								 
    
	$dbh = mysql_connect('localhost', 'root', '') or die(mysql_error());
        mysql_select_db('elec') or die(mysql_error());


	if(isset($_POST['updatecus']))
	{
		$cus_id = $_POST['cus_id'];
		$cus_meter_no = $_POST['cus_meter_no'];
		$connid = $_POST['connid'];
		$tarrif_id = $_POST['tarrif_id'];
		$phone_no = $_POST['phone_no'];
		$email = $_POST['email'];
		

		$query = "UPDATE customer SET cus_id='$cus_id',cus_meter_no='$cus_meter_no',connid='$connid',tarrif_id='$tarrif_id',phone_no='$phone_no',email='$email' WHERE cus_id='$cus_id'";
		mysql_query($query) or die(mysql_error());
		echo "Data Updated Successfully!!!";
	}
	
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