<?php
 if(isset($_POST["submit"]))
 {
  $fname=$_POST["fname"];
  $email= $_POST["email"];
  $mobile=$_POST["mobile"];
  $bloodgrp=$_POST["bloodgrp"];
  $datee=$_POST["datee"];

  $secretKey="6LdkhOgUAAAAAHxEHfVSmqex6SMi3V6OBjdWyUMo";
  $responseKey=$_POST['g-recaptcha-response'];
  $userIP=$_SERVER['REMOTE_ADDR'];

  $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
  $response=file_get_contents($url);
  $response=json_decode($response);
		 if($response->success)
		  {
		  		$servername="localhost";
    $user="root";
    $pass="root";
    
      if (!preg_match("/^[a-zA-Z\s]+$/", $fname))
       {
        echo ' <script type="text/javascript"> alert("Name should be string ") </script> ';
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

    $query="INSERT INTO request2 (Fullname,Email,Mobile,Bloodtype,Date1) VALUES ('$fname','$email','$mobile','$bloodgrp','$datee')";
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
      echo ' <script type="text/javascript"> alert("Request Sent.") </script> ';
         }
         else
         {
      echo ' <script type="text/javascript"> alert(" Failed to send request. ") </script> ';
      exit(0);
         }
    }
    }
		  }
      
else
{
	 echo ' <script type="text/javascript"> alert(" Verification Failed.") </script> ';
}
    
}
?>
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
margin-top: 140px;
font-size: 17px;
align: center;
color: black;
}
input{
	border-radius: 5px;
background-color: white;
height: 20px;
color: black;
border:0px;
}
#dt{
	width: 355px;
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
  border: none;
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
					<li><a href="trial.html">Home</a></li>
					<li><a href="trialdonors.php">Donors</a></li>
					<li><a href="#">Send Request</a></li>
					<li><a href="trialviewreq.php">View Request</a></li>
					<li><a href="update.php">New Donation</a></li>
					<li><a href="settings.php">Change Password</a></li>
					<li><a href="trial.html">Logout</a></li>
					
				</ul>
			</div>
			</div>
		</nav>
			<div class="text" align="center">
<form  action="" method="post">
<table align="center" cellspacing="10">
<tr>
<td>Fullname:</td>
<td><input type="text" name="fname" size="35" required=""></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="Email" name="email" size="35" required=""></td>
</tr>
<tr>
	<td>Mobile No:</td>
	<td><input type="text" name="mobile" size="35" required=""></td>
</tr>
<tr>
<td>Bloodtype:</td>
<td><select name="bloodgrp" >
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
  <td>Needed Before:</td>
  <td><input id="dt" type="date" name="datee" size="35" required=""></td>
</tr>
<tr>
<td></td>
<td><div class="g-recaptcha" data-sitekey="6LdkhOgUAAAAABIgjKBQjC-RaJkGJ2-nXTOG7XlW"></div></td>
</tr>
<tr>
<td></td>
<td><br><input type="submit" name="submit" id="sub" value="Send Request" /></td>
</tr>
</table>

</div>
</form>
 <script src="https://www.google.com/recaptcha/api.js"></script>
	</header>
</div>

</body>
</html>

