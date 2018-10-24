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
	$conn = mysqli_connect("localhost","root","","fashionhub");
	$sql = "INSERT INTO customer (name,phone,area,flatno,pincode,city,emailid) VALUES ('$name','$contact','$street','$detailadd','$pincode','$city','$email') ON DUPLICATE key UPDATE name=name and phone=phone and area=area and flatno=flatno and pincode=pincode and city=city and emailid=emailid";
	$query1 = mysqli_query($conn,$sql);
	$sql1 = "INSERT INTO  account(username,password,cphone) VALUES ('$username','$password','$contact') ON DUPLICATE key UPDATE username=username and cphone=cphone and password=password";

	$query2 = mysqli_query($conn,$sql1);
	  if($query2 && $query1)
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