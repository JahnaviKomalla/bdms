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


#sub{
	 background-color: white; /* Green */
  border: none;
  color: red;
  padding: 8px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  border-radius: 5px;
  font-weight: bold;
}

label{
	font-size: 18px;
	margin-right: 10px;
	color: red;
}
#one{
	margin-top: 30px;
}
table{
	margin-top: 38px;
	

}
select{
border-radius: 5px;
background-color: white;
margin-right: 15px;
color: red;
}

table,th,td{
	color: red;
	/*border: 1px solid gray;*/
	
	border-collapse: collapse;
	font-size: 15px;
	background-color: white;
	font-family: Arial;
	text-align: center;
	border-radius: 10px;

}
th{
	height: 50px;
}
tr{
	height: 35px;
	text-align: center;
}
.container{
	border-collapse: collapse;
	border-color: transparent;
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
					<li><a href="trialsendreq.php">Send Request</a></li>
					<li><a href="#">View Request</a></li>
					
					
				</ul>
			</div>
			</div>
		</nav>
		<div class="container">
		<center>
			<form  action="" method="post">
<div id="one">
	<label>Select Bloodtype:</label>
	<select name="bloodgrp">
		<option value="All">All</option>
	<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select><br><br>
<input type="submit" name="submit" id="sub" value="See Requests" />
</div>

</form>

	

<?php
	$servername="localhost";
	$user="root";
	$password="root";
	$db="bdms";

	$conn= new mysqli($servername, $user, $password, $db);

	if(isset($_POST["submit"]))
	{
		$bloodgrp=$_POST["bloodgrp"];
		if($bloodgrp=='All')
		{
			$sql="select * from request2  order by Date1 ASC";
		}
		else
		{
		$sql="select * from request2 where Bloodtype='".$bloodgrp."' order by Date1 ASC";
		}
		$result=$conn->query($sql);

		if($result->num_rows>0)
		{ 
			?>
			<div class="table-responsive">
<table class="table">
	<th>Name</th>
	<th>Email</th>
	<th>Mobile No</th>
	<th>Bloodtype</th>
	<th>Needed Before </th></div>
		<?php
			while($row=$result->fetch_assoc())
			{
				?>
				<tr>
				<td>  <?php echo $row["Fullname"] ?> </td>
				<td>  <?php echo $row["Email"] ?> </td>
				<td>  <?php echo $row["Mobile"] ?> </td>
				<td>  <?php echo $row["Bloodtype"] ?> </td>
				<td>  <?php echo $row["Date1"] ?> </td>
				</tr>


			<?php
			}
		}
		else
		{
			?>
			</table><br><br><br>
			<?php 
			echo '<h3 align=center style=font-size:150%;color:white;font-family:Arial;>No Requests<br></h3>';
		}
	}
	
?>
</div>
</center>
</div>
</body>
</html>
