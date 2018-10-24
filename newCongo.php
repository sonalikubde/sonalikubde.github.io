<html>
<head>
	<title>welcome to the fashionhub account</title>
</head>
<body>
	<?php
		//if(isset($_GET['submit'])){
	//$name = $_GET['name'];
	//$password = $_GET['password'];
	//$contact  = $_GET['contact'];
	//$email = $_GET['email'];
	//$username = $_GET['username'];
	//$detailadd = $_GET['detailadd'];
	//$street = $_GET['street'];
	//$city = $_GET['city'];
	//$pincode = $_GET['pincode'];
//}
	$conn = mysqli_connect("localhost","root","","sm");
	$sql = "INSERT INTO customer(name,phone,emailid,area,flatno,pincode,city) VALUES ('sona','5645767','dello@gmail.com','gewgerg','67/876','435213','hubg')";
	$query1 = mysqli_query($conn,$sql);
	  if(mysqli_query($conn,$query1))
		{
            echo "data inserted successfully.";
            header('location:home.html');
       }
       else{
             echo "ERROR: Could not able to execute  $query1. " . mysqli_error($conn);
       }
	 

	 ?>
</body>
</html>