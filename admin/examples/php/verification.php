<?php 

$host ="localhost";
$user = "root";
$password ="";
$db ="project";

$con = mysqli_connect($host,$user,$password,$db);
if(isset($_POST))
{
$id =$_POST['id'];


$sql = "UPDATE hospital_register SET verify = 'VERIFIED' WHERE ID = '$id'";

if (mysqli_query($con,$sql)) {


    $sql1 = "select * from hospital_register where ID='$id'";
		
			$query1 = mysqli_query($con,$sql1);
	 		$result1 = mysqli_fetch_array($query1); 

$to_email = $result1["hemail"];
$subject = "VERIFICATION SUCESSFUL ";
$body = "Respected "  .$result1['hname'].   " your account has been verified please log in to your account";
$headers = "From: E-fundraiser";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";  
    header('Location: http://localhost/Final/admin/examples/verification.php');
} else {
    echo "Email sending failed...";
    header('Location: http://localhost/Final/error/index.html');
}




    
}
}


?>