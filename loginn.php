<!DOCTYPE html>
<html>
<head>
	<title>welcome!! Login your account</title>
	<style type="text/css">
		body{
			background-image: url("beauty.gif");
			background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
		}
		.abc{
			background-color: white;
		}
		img.nice
		{
			border-radius: 50%;
			display: block;
    margin-left: auto;
    margin-right: auto;
		}
		.def{
			height: 30px;
			width: 280px;
		}
		
		

	</style>
</head>
<body>
	<h2>
			<marquee>
				<img src="cloth2.jpg" height="100px;" width="100px;">
				<img src="cloth3.jpg" height="100px;" width="100px;">
				<img src="cloth4.jpg" height="100px;" width="100px;">
				<img src="men1.jpg" height="100px;" width="100px;" >
				<img src="men2.jpg" height="100px;" width="100px;">
				<img src="men.jpg" height="100px;" width="100px;">
				<img src="cloth.jpg" height="100px;" width="100px;">
				<img src="cloth1.jpg" height="100px;" width="100px;">
				<img src="cloth5.jpg" height="100px;" width="100px;">
				<img src="cloth6.jpg" height="100px;" width="100px;">
				<img src="cloth7.jpg" height="100px;" width="100px;">
				<img src="cloth8.jpg" height="100px;" width="100px;">
			</marquee>
		</h2>
	<div align="center">
		<h1 align="center" bgcolor="pink"><u>HEY WELCOME</u></h1>
		<div><img class="nice" src="roundimage.jpg" style="width:200px;"></div>
		<form action="back1.php" method="GET">
			<table align="center" margin="1px;" class="abc">
				<tr>
					<td>enter your login name</td>
					<td ><input type="text" name="email" placeholder="enter your username" class="def"></td>
				</tr>
				<tr>
					<td>enter your password</td>
					<td ><input type="password" name="pass" placeholder="password" class="def"></td>
				</tr>
				<tr>
					<td>
				<div><a href="back1.php"><input type="submit" name="submit" value="Login" class="def"></a></div></td>
				<td>
			<div><a href="new.html"><input type="button" value="create a new account"  class="def"></a></div></td>
			</tr>
			</table>
			
		</form>
</body>
</html>