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
		$sql=" CREATE TABLE `bdms`.`register` ( `Firstname` VARCHAR(30) NOT NULL , `Lastname` VARCHAR(30) NOT NULL , `Username` VARCHAR(30) NOT NULL , `Email` VARCHAR(30) NOT NULL , `Password` VARCHAR(30) NOT NULL , `Conpassword` VARCHAR(30) NOT NULL , `Age` VARCHAR(30) NOT NULL , `Mobile` VARCHAR(30) NOT NULL , `Location` VARCHAR(30) NOT NULL , `Bloodtype` VARCHAR(30) NOT NULL , `Lastdate` DATE NOT NULL , `Units` INT(30) NOT NULL, PRIMARY KEY (`Email`))";
		if($conn->query($sql)===TRUE)
		{
			echo "created";
		}
		else
		{
			echo "error".$conn->error;
		}
	
?>


