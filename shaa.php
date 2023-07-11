<?php

$servername="localhost";
$username="root";
$password="";
$database="my_project";
$conn=mysqli_connect($servername,$username,$password,$database);
	if (!$conn) {
		die("connection failed:" .mysqli_connect_error());
	}
	else{
		echo "connection done!";
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$firstname = $_POST['Firstname'];
		$surname = $_POST['Surname'];
		$username = $_POST['Username'];
		$gender = $_POST['Gender'];
		$password = $_POST['password'];
		$email = $_POST['Email'];
		

$query = mysqli_query($conn,"INSERT INTO user VALUES('$firstname','$surname','$username','$gender','$password','$email')");			 
     if ($query){
echo "data sucessfull sent!!!!";

     }
		
	
		
		mysqli_close($conn); // Closing Connection
	}

	?>
