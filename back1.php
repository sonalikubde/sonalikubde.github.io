<!DOCTYPE html>
<html>
<head>
	<title>congo for login</title>
</head>
<body>
<?php
	$row='null';
	$flag = 0;
	if(isset($_GET['submit'])){
	$username = $_GET['email'];
	$password = $_GET['pass'];
	echo $username;
}
	$con = mysqli_connect("localhost","root","","fashionhub");
	if($con)
		echo 'connectivity successful';
	$sql = "SELECT * FROM account";
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($result)){
	if($row["username"] == $username and $row["password"] == $password) {
		$flag = 1;
		header('location:success.html');}

	
}
if($flag == 0)
{
	

header('location:unsuccess.html');
}

	 ?>
	
	

</body>
</html>