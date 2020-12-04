<?php

session_start();


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$user = $_POST['user'];
$password = $_POST['password'];


$s= "select * from usertable where user= '$user' && password1='$password'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['username']=$user;
	header('location:home1.php');
}else{
	echo"Your username not registered. Please contact Admin";
}
?>
