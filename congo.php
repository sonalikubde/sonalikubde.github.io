<!DOCTYPE html>
<html>
<head>
	<title>welcome to the fashionhub account</title>
</head>
<body>
	<?php
		if(isset($_GET['submit'])){
	$name = $_GET['name'];
	$password = $_GET['password'];
	$contact  = $_GET['contact'];
	$email = $_GET['email'];
	$username = $_GET['username'];
	$detailadd = $_GET['detailadd'];
	$street = $_GET['street'];
	$city = $_GET['city'];
	$pincode = $_GET['pincode'];
}
	$con = mysqli_connect("localhost","root","","fashionhub");
	$sql = "INSERT INTO customer (name,phone,email-id,area,flatno,pincode,city) VALUES ('$name','$contact','$email','$street','$detailadd','$pincode','$city')";
	$sql1 = "INSERT INTO account(username,password,cphone)VALUES('$username','$password','$contact')";
	$query1 = mysqli_query($con,$sql);
	$query2 = mysqli_query($con,$sql1);
	if($query1)
		location("header:home.html");
	 

	 ?>
</body>
</html>