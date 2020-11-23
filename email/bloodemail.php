<?php
session_start();

$host ="localhost";
$user = "root";
$password ="";
$db ="project";

$con = mysqli_connect($host,$user,$password,$db);

$id = $_SESSION["id"];

$sql = "select * from blood where ID='$id'";
		
			$query = mysqli_query($con,$sql);
	 		$result = mysqli_fetch_array($query); 

$to_email = $result["email"];
$subject = "Requested Blood has been recived";
$body = "MR   "  .$result['uname'].   " your blood request has been approved";
$headers = "From: E-fundraiser";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
    
    $sqlc ="DELETE FROM blood WHERE ID='$id'";
    if (mysqli_query($con, $sqlc)) {
        echo "Record deleted successfully";
        header('Location: http://localhost/Final/select/index.html');
      } else {
        echo "Error deleting record: " . mysqli_error($con);
        header('Location: http://localhost/Final/error/index.html');
      }
    
      
} else {
    echo "Email sending failed...";
    header('Location: http://localhost/Final/error/index.html');
}
?>