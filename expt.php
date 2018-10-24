<?php
//Step1
session_start();


 $db=mysqli_connect('localhost','root','','fashionhub');
 // mysqli_select_db('smile') or die(mysqli_error());
 
if(isset($_POST['submit']))
{
  
$email  = mysqli_real_escape_string($db,$_POST["email"]);
$user  = mysqli_real_escape_string($db,$_POST["username"]);
$pwd    = mysqli_real_escape_string($db,$_POST["password"]);
$name   = mysqli_real_escape_string($db,$_POST["name"]);
$contact= mysqli_real_escape_string($db,$_POST["contact"]);
$da = mysqli_real_escape_string($db,$_POST["detailadd"]);
$city   = mysqli_real_escape_string($db,$_POST["city"]);
  $pin = mysqli_real_escape_string($db,$_POST["pincode"]);
  $street = mysqli_real_escape_string($db,$_POST["street"]);
 // $pwd=$_POST['pwd'];
 
/*$query= "INSERT INTO profiledata(name,email, password, contact,city) values ("$name","$email","$pwd","$contact","$city")";
*/
     
$query= "INSERT INTO 'customer' (name,phone,emailid,area,flatno,pincode,city) VALUES ($name,$contact,$email,$street,$da,$pin,$city)";


       if(mysqli_query($db,$query))
       {
            echo "data inserted successfully.";
            header('location:login.php');
       }
       else{
             echo "ERROR: Could not able to execute  $query. " . mysqli_error($db);
       }
 
// close connection
        mysqli_close($db);
}
?>

<!DOCTYPE html>
   <head>
     <title>SMILE-Sign Up</title>
  
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <style type="text/css">
    td{
      height: 40px;
      width: 200px;
    }
    .disp{
      height:50px;
      width:200px;
    }
    tr{
      background-color: white;
    }
    body{
      background-image: url("fashion2.gif");
    }
    table{
      border-style: solid;
      border-color: red;
    }
  </style>
    
    

  </style>
  </head> 

  <body>
    <h1 align="center"><u>WELCOME TO THE FASHIONHUB ACCOUNT</u></h1>
  <div align="center"><img src="logo1.jpg" width="60%" height="150px;"></div>
  <form action="expt.php" method="POST">
    <table align="center">
      <tr>
        <td><u>ENTER YOUR NAME</u></td>
        <td><input type="text" placeholder="name" name="name"></td>
      </tr><tr>
        <td>enter your phone number</td>
        <td><input type="text" placeholder="mobile no " name="contact"></td>
      </tr>
      <tr>
        <td>enter your email</td>
        <td><input type="email" placeholder="name" name="email"></td>
      </tr>
      <tr>
        <td>enter your username</td>
        <td><input type="text" placeholder="name" name="username"></td>
      </tr>
      <tr>
        <td>enter your password</td>
        <td><input type="password" placeholder="password" id="pwd" name="password"></td>
      </tr>
      <tr>
        <td>enter your password again</td>
        <td><input type="password" placeholder="password" name="password" id="repwd"></td>
      </tr>
      <tr>
        <td>enter your street name</td>
        <td><input type="text" placeholder="street name" name="street"></td>
      </tr>
      <tr>
        <td>enter your flat/house number</td>
        <td><input type="text" placeholder="flat/house number" name="detailadd"></td>
      </tr>
      <tr>
        <td>enter your pincode</td>
        <td><input type="text" placeholder="pincode" name="pincode"></td>
      </tr>
      <tr>
        <td>enter your city</td>
        <td><input type="text" placeholder="city" name="city"></td>
      </tr>
    </table>
    <div align="center"><a href="congo.php"><input type="submit"  name="submit" onclick="return validatePassword()" value="create my account" align="center" class="disp"></a></div>
  </form>

<script>
        
    var pwd = document.getElementById("pwd").value; 
    var repwd = document.getElementById("repwd").value;

    
    function validatePassword()
{
    if(pwd.value != repwd.value) 
    {
        repwd.setCustomValidity("Passwords Don't Match");
    }
    
    else{
            pwd.setCustomValidity('');
    }
}
pwd.onchange = validatePassword;
repwd.onkeyup = validatePassword;

</script>
                    

  </body>
</html>
