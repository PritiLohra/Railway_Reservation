<?php
session_start();

$uemail=$_POST['email'];
$pass=$_POST['psd'];

require('firstimport.php');

$tbl_name="admin"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name WHERE email='$uemail' and password='$pass'";
echo "$sql";

$result=mysqli_query($conn,$sql) or trigger_error(mysql_error.$sql);

//$row=mysql_fetch_array($result);

//echo "\n\n ..nam..".$row['f_name']."\n\n ..pass..".$row['password'];

if(mysqli_num_rows($result) < 1)
{
	echo " .... LOGIN TRY  ....";
	$_SESSION['error'] = "1";
	header("location:login1.php"); //
}
else
{
	$_SESSION['email'] = $uemail; // Make it so the username can be called by $_SESSION['name']    //
	echo " ....   LOGIN  ....";
	echo $_SESSION['email'];
	header("location:admin_dashboard.php");    //
}

?>

	