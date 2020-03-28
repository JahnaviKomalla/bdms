<?php
	$servername="localhost";
	$user="root";
	$password="root";
	$db="bdms";

	$conn= new mysqli($servername, $user, $password, $db);

	if(isset($_POST["submit"]))
	{
		$email=$_POST["email"];
		$pass=$_POST["pass"];
		$sql="select * from register where Email='".$email."' and Password='".$pass."'";

		$result=$conn->query($sql);

		if($result->num_rows==1)
		{ 
			echo '<h1 align=center style=font-size:150%;>You have Successfully Logged in <br></h1>';
			 header("location:homeafter.html");
		}
		else
		{
			
			// header("location:login.html");
			echo ' <script type="text/javascript"> alert("Invalid email  or password.") </script> ';
			echo '<a href="login.html" ><button style=margin-left:600px;font-size:25px;>Go back</button></a>';
		}
	}
	
?>