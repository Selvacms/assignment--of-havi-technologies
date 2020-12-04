<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:index.html');
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
	
</div>
</body>
</html>