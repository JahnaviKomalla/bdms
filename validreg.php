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
<!-- <html>
<body>


        <table align="center">
       
	<tr>
          <td> <form action="trial.html"> <h2 align="center"> <input type="submit" value="Redirect to Home Page"></h2></form></td>
    	</tr>
	</table>
</body>
</html> -->