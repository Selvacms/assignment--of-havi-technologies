<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:index1.php');
}


?>

<html>
<head>
<style>
.box {
  color:white;
}
th,table {
  color:white;
}
</style>
<title> Home Page </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">

	<a class="float-right" href="logout.php"> LOGOUT </a>
	<h1>Welcome <?php echo $_SESSION['username'];?> </h1>
	
	<form action="data.php" method="post">
			<div class="form-group">
				<label style="color:white;">Enter your Data</label>
				<input type="text" name="data" class="form-control" required>
				</div>
			<button type="submit" class="btn btn-primary"> Enter </button>
	</form>
	<div class="box">
	<table border="2">
	<tr>
	<th>Username</th>
	<th>Email</th>
	<th>Password</th>
	<th>Retype Password</th>
	<th>Phone number</th>
	<th>Date</th>
	</tr>
	</div>
<?php
include("connection.php");
error_reporting(0);
$query="select * from usertable";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo"
		<tr>
		<th>".$result[user]."</th>
		<th>".$result[email]."</th>
		<th>".$result[password1]."</th>
		<th>".$result[password2]."</th>
		<th>".$result[phone]."</th>
		<th>".$result[date]."</th>
		</tr>
		";
	}
}
?>
</div>
</body>
</html>