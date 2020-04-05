<?php
	$servername="localhost";
	$user="root";
	$password="root";
	$db="bdms";
	$conn= new mysqli($servername, $user, $password, $db);

	 if($conn->connect_error)
		{
			die("Unsuccessful Connection");
			exit(0);
		}
		$sql="CREATE TABLE `bdms`.`request2` ( `Fullname` VARCHAR(30) NOT NULL , `Email` VARCHAR(30) NOT NULL , `Mobile` VARCHAR(30) NOT NULL , `Bloodtype` VARCHAR(30) NOT NULL , `Date1` DATE NOT NULL , PRIMARY KEY (`Email`)) ";
		if($conn->query($sql)===TRUE)
		{
			echo "created";
		}
		else
		{
			echo "error".$conn->error;
		}
	
?>
