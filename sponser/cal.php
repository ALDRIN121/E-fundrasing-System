<?php
session_start();
$host ="localhost";
$user = "root";
$password ="";
$db ="project";

$con = mysqli_connect($host,$user,$password,$db);


$amount = $_SESSION["amount"];
$id = $_SESSION["id"];
if(isset($_POST)){
$payable = $_POST["amount"];
if($payable <= $amount){

$newamount = $amount-$payable;
$_SESSION["newamount"]= $payable;
$_SESSION["payable"] = $newamount;







$sql = "UPDATE request SET amount = '$newamount' WHERE id = '$id'";

if (mysqli_query($con,$sql)) {
   echo "sucess";
} else {
  echo "Error updating record: " . $con->error;
  //header('Location: http://localhost/Final/error/index.html');
}



$sqlm = "select uname,email,reason from request where ID='$id'";
$query1 = mysqli_query($con,$sqlm);
$result2 = mysqli_fetch_array($query1);  
$name1 = $result2['uname'];
$email = $result2['email'];
$_SESSION['usernames']=$name1;
$_SESSION['useremial']=$email;
$_SESSION['session']=$result2['reason'];


$sqld = "select * from request where ID='$id'";
		
			$query = mysqli_query($con,$sqld);
	 		$result = mysqli_fetch_array($query); 

$to_email = $result["email"];
$subject = "Requested money has been recived";
$body = "MR  ".$result['uname']. "  your money has been sent to your Bank account";
$headers = "From: E-fundraiser";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
    if($payable == $amount){
    $sqlc ="DELETE FROM request WHERE ID='$id'";
    if (mysqli_query($con, $sqlc)) {
        echo "Record deleted successfully";
        header('Location: checkout.php');
      } else {
        echo "Error deleting record: " . mysqli_error($con);
        //header('Location: http://localhost/Final/error/index.html');
      }
    }
      else{
        header('Location: checkout.php');

      }
} else {
    echo "Email sending failed...";
    //header('Location: http://localhost/Final/error/index.html');
}


}
else{
  header('Location: http://localhost/Final/sponser/index.php');
}
}




















?>