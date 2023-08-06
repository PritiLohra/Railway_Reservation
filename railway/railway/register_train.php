<?php
session_start();
require('firstimport.php');

$tbl_name = "train_list"; // Table name

mysqli_select_db($conn, "$db_name") or die("cannot select DB");

$Number = $_POST['train_no'];
$Name = $_POST['tname'];
$Origin = $_POST['org'];
$Destination = $_POST['des'];
$Arrival = $_POST['ari'];
$Departure = $_POST['dep'];
$Mon = $_POST['select'];
$Tue = $_POST['select'];
$Wed = $_POST['select'];
$Thu = $_POST['select'];
$Fri = $_POST['select'];
$Sat = $_POST['select'];
$Sun = $_POST['select'];

$sql = "INSERT INTO $tbl_name(Number, Name, Origin, Destination, Arrival, Departure, Mon, Tue, Wed, Thu, Fri, Sat, Sun) VALUES ('$Number','$Name','$Origin','$Destination','$Arrival','$Departure','$Mon','$Tue','$Wed','$Thu','$Fri','$Sat','$Sun')";
$result = mysqli_query($conn, $sql);
$_SESSION['train_no']=$Number;
	header("location:add_train.php");
?>