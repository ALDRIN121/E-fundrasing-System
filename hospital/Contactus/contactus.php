<?php

$host ="localhost";
$user = "root";
$password ="";
$db ="project";

$con = mysqli_connect($host,$user,$password,$db);


if(isset($_POST)){
	$uname          = $_POST["name"];
	$email 			= $_POST["email"];
	$msg		= $_POST["message"];
	
	
	
		$sql = "INSERT INTO contatus (uname,email,msg) VALUES ('$uname','$email','$msg')";
		
		if(mysqli_query($con,$sql)){
			$last_id = mysqli_insert_id($con);
			 header('Location: http://localhost/Final/hospital/index.html');
			
		}else{
			echo 'There were erros while saving the data.';
			header('Location: http://localhost/Final/error/index.html');
		}
	
}
 else{
	echo 'No data';
	header('Location: http://localhost/Final/error/index.html');
     } 





?>