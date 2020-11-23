<?php



 $host ="localhost";
 $user = "root";
 $password ="";
 $db ="project";

 $con = mysqli_connect($host,$user,$password,$db);

 if(isset($_POST)){
	$uname          = $_POST['username'];
	$email 			= $_POST['email'];
	$password 		= sha1($_POST['password']);
	
	
	
		$sql = "INSERT INTO loginform (user,email,pass) VALUES ('$uname','$email','$password')";
		
		if(mysqli_query($con,$sql)){
			$last_id = mysqli_insert_id($con);
			 header('Location: http://localhost/Final/Login/index.html');
			
		}else{
			echo 'There were erros while saving the data.';
			header('Location: http://localhost/Final/error/index.html');
		}
	
}
 else{
	echo 'No data';
	header('Location: http://localhost/Final/error/index.html');
     }
mysqli_close($con);
?>