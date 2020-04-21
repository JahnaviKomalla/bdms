<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
*{
	margin:0;
	padding: 0;
}
body{
	font-family: sans-serif;
}
html{
	font-family: sans-serif;
}
.header{
	height: 100vh;
}
.navbar-style{
	/*box-shadow: 0 5px 10px rgba(0,0,0,0.5);*/
	background-color: rgba(0,0,0,0.5);
	min-height: 90px;
	background-color: transparent;
	border-color: transparent;
	
}
 a h4{
	/*padding-left: 0px;
	padding-right: 0px;*/
	padding-top: 14px;
	/*padding-bottom: 0px;*/
	color: red;
	font-size: 38px;
	margin-left: 0px;
	font-style: oblique;
	font-family: 'Open Sans';
	font-weight: bold;
}
#main:hover{
color: transparent;
}
p{
margin-left: 70px;
color: white;
font-style: italic;
line-height: 10px;
}
.icon-bar
{
	background: white;
}
li a
{
	font-weight: bold;
	margin-top: 25px;
	color:red;
	text-transform: uppercase;
}
.bgimage{
	background-image: url('3.png');
background-size: 100% 100%;
width: 100%;
height: 100vh;
}
.text{
width: 100%;
margin-top: 80px;
font-size: 17px;
color: black;

}
input{
border-radius: 5px;
background-color: white;
height: 20px;
color: black;
border:0px;

}
select{
border-radius: 5px;
background-color: white;
width: 352px;
height: 20px;
color: black;
border: 0px;
}
tr{
	padding-left: 20px;
}
#sub{
	 background-color: white; /* Green */
  border: 1px solid black;
  
  color: black;
  padding: 6px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  height: 36px;
}
.text table td{
	padding-right: 10px;
	padding-bottom: 7px;
}
#dt{
	width: 350px;
}
</style>
</head>
<body>
	<div class="bgimage">
	<header class="header">
		<nav class="navbar navbar-style">
			<div class="container">
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a id="main" href="#">
					<h4>Give & Live</h4>
					</a>
				</div>
				<div class="collapse navbar-collapse" id="micon">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="admin.php">HOME</a></li>
					<li><a href="#">ADD DONOR</a></li>
					<li><a href="deletedonor.php">DELETE DONOR</a></li>
					<li><a href="trialviewreq.php">DELETE REQUESTS</a></li>
					<li><a href="trialviewreq.php">LOG OUT</a></li>

					
				</ul>
			</div>
			</div>
		</nav>
			
			<div class="text" align="center">
<form action="" method="post">
<table align="center" cellspacing="8">
<tr>
<td>Firstname:</td>
<td><input type="text" name="fname" size="35" required=""></td>
</tr>

<tr>
<td>Lastname:</td>
<td><input type="text" name="lname" size="35" required=""></td>
</tr>
<tr>
	<td>Username:</td>
	<td><input type="text"  name="uname" size="35" required=""></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="Email" name="email" size="35" required=""></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="Password" name="password" size="35" required=""></td>
</tr>
<tr>
<td>Re-enter Password:</td>
<td><input type="Password" name="cpassword" size="35" required=""></td>
</tr>
<tr>
	<td>Age:</td>
	<td><input type="text" name="age" size="35" required=""></td>
</tr>
<tr>
	<td>Mobile No:</td>
	<td><input type="text" name="mobile" size="35" required=""></td>
</tr>
<tr>
	<td>Location:</td>
	<td><select name="location" >
		<option value="Warangal">Warangal</option>
		<option value="Karimnagar">Karimnagar</option>
		<option value="Khammam">Khammam</option>
	</select></td>
</tr>
<tr>
<td>Bloodtype:</td>
<td><select name="bloodgrp"  >
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>

</select></td>
</tr>

<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td><!-- <button>Submit</button> --><br><input type="submit" name="submit" id="sub" value="Add Donor" /></td>
</tr>
</table>
</div>
</form>
	</header>
</div>
<?php
 if(isset($_POST["submit"]))
 {
 	$fname=$_POST["fname"];
 	$lname=$_POST["lname"];
    $uname = $_POST["uname"];
    $email= $_POST["email"];
	$password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $age=$_POST["age"];
    $mobile=$_POST["mobile"];
    $location=$_POST["location"];
    $bloodgrp=$_POST["bloodgrp"];
  		


	    $servername="localhost";
		$user="root";
		$pass="root";
		
		if($password!=$cpassword)
  		{
  			echo ' <script type="text/javascript"> alert("Passwords not matching.Try again") </script> ';
  		}
  		elseif (!preg_match("/^[a-zA-Z\s]+$/", $fname))
  		 {
  		 	echo ' <script type="text/javascript"> alert("Name should be string ") </script> ';
  		 }
  		 elseif (!preg_match("/^[a-zA-Z\s]+$/", $lname))
  		 {
  		 	echo ' <script type="text/javascript"> alert("Name should  be string") </script> ';
  		 }
  		 elseif (!preg_match("/^[a-zA-Z\s]+$/", $uname))
  		 {
  		 	echo ' <script type="text/javascript"> alert("Name should  be string") </script> ';
  		 }
  		 elseif (!preg_match('/^[0-9]*$/',$age))
  		  {
  		 	echo ' <script type="text/javascript"> alert("Please enter a valid age(Numericals only).") </script> ';
  		 }
  		 elseif (strlen($age)<2)
  		 {
  		 	echo ' <script type="text/javascript"> alert("Age should be between 18 and 55 only(length).") </script> ';
  		 }
  		 elseif (strlen($age)>2)
  		 {
  		 	echo ' <script type="text/javascript"> alert("Age should be between 18 and 55 only(length).") </script> ';
  		 }

  		 elseif($age<18)
  		 {
  		 	echo ' <script type="text/javascript"> alert("Age should be between 18 and 55 only") </script> ';
  		 }
  		 elseif($age>55)
  		 {
  		 	echo ' <script type="text/javascript"> alert("Age should be between 18 and 55 only") </script> ';
  		 }
  		 elseif (!preg_match('/^[0-9]*$/',$mobile)) 
  		 {
  		 	echo ' <script type="text/javascript"> alert("Mobile number should  contain numerical  digits only.") </script> ';
  		 }
  		 elseif (strlen($mobile)<10)
  		  {
  		 	echo ' <script type="text/javascript"> alert("Please enter a valid mobile number.") </script> ';
  		 }
  		 elseif (strlen($mobile)>10)
  		  {
  		 	echo ' <script type="text/javascript"> alert("Your mobile  number is too large.Please enter a valid number.") </script> ';
  		 }


  		else
  		{
		$conn= mysqli_connect($servername, $user,$pass);
		$db=mysqli_select_db($conn,'bdms');

		$query="INSERT INTO register (Firstname,Lastname,Username,Email,Password,Age,Mobile,Location,Bloodtype) VALUES ('$fname',
		'$lname','$uname','$email','$password','$age','$mobile','$location','$bloodgrp')";
		$query_run=mysqli_query($conn,$query);

		if($conn->connect_error)
		{
			die("Unsuccessful Connection");
			exit(0);
		}
		else
		{
		 

		     if($query_run)
		     {
			
       // header("location:login.html");
       echo ' <script type="text/javascript"> alert("Registered succesfully.") </script> ';
		     }
		     else
		     {
			echo ' <script type="text/javascript"> alert(" Check your details properly.Try unregistered mail-id.") </script> ';
			exit(0);
		     }
		}
		}
}
?>
</body>
</html>