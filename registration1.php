<?php

session_start();
header('location:index1.php');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$user = $_POST['user'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$phone = $_POST['phone'];
$date = $_POST['date'];

$s= "select * from admintable where user= '$user'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num==1){
	echo" Username Already Taken";
}else{
	$reg=" insert into admintable(user, email, password1, password2, phone, date) values ('$user' ,'$email','$password1','$password2','$phone','$date')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
}
?>
