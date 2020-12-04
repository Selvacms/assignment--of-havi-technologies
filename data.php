<?php

session_start();
header('location:home.php');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$data = $_POST['data'];


$s= "select * from datapage where data= '$data'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num==1){
	echo" This data already placed in database";
}else{
	$reg=" insert into datapage(data) values ('$data')";
	mysqli_query($con, $reg);
	echo" Data inserted successfully";
}
?>
