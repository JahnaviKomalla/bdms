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
	
	background-color: rgba(0,0,0,0.5);
	min-height: 90px;
	background-color: transparent;
	border-color: transparent;
	
}
 a h4{
	
	padding-top: 14px;
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
  background-color: white; 
  border: 1px solid white;
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
table{
	margin-top: 160px;
	font-weight: bold;
}
#date1{
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
					<li><a href="homeafter.html">Home</a></li>
					<li><a href="trialdonors2.php">Donors</a></li>
					<li><a href="trialsendreq2.php">Send Request</a></li>
					<li><a href="trialviewreq2.php">View Request</a></li>
					
					<li><a href="#">New Donation </a></li>
					<li><a href="settings.php">Change Password</a></li>
					<li><a href="trial.html">Logout</a></li>
				</ul>
			</div>
			</div>
		</nav>
			
			<div class="text" align="center">
<form action="" method="post">
<table align="center" cellspacing="8">

<tr>
<td >Email:</td>
<td><input type="Email" name="email" size="35" required=""></td>
</tr>
<tr>
<td>Date of Donation:</td>
<td><input id="date1" type="date" name="datee" size="35" required=""></td>
</tr>
<tr>
<td>No of  units donated:</td>
<td><input type="text" name="units" size="35" required=""></td>
</tr>



<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td><br><input type="submit" name="submit" id="sub" value="Update" /></td>
</tr>
</table>
</div>
</form>
	</header>
</div>
<?php
 if(isset($_POST["submit"]))
 {
 	
    $email= $_POST["email"];
	$units = $_POST["units"];
    $datee = $_POST["datee"];
    
  		


	    $servername="localhost";
		$user="root";
		$pass="root";
		
		
  		
		$conn= mysqli_connect($servername, $user,$pass);
		$db=mysqli_select_db($conn,'bdms');

		$sql="select * from register where Email='".$email."'";
		$result=$conn->query($sql);

		if($result->num_rows>0)
		{
			$query1="UPDATE register SET Units=Units+".$units.", Lastdate='".$datee."' where Email='".$email."' ";
			

			if(mysqli_query($conn,$query1))
			{
				 echo ' <script type="text/javascript"> alert("Updated Succesfully.") </script> ';
			}
			else
			{
				echo ' <script type="text/javascript"> alert(" Sorry an error occured.Try again:(") </script> ';
			}
		}
		else
		{
		 
			echo ' <script type="text/javascript"> alert(" Enter email-id you used for registration.") </script> ';
		}
}
?>
</body>
</html> 


