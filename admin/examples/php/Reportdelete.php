<?php
$host ="localhost";
$user = "root";
$password ="";
$db ="project";

$con = mysqli_connect($host,$user,$password,$db);
if(isset($_POST))
{
$usrno =$_POST['usrno'];


$sql = "DELETE FROM contatus WHERE ID = '$usrno'";

if (mysqli_query($con,$sql)) {
    header('Location: http://localhost/Final/admin/examples/dashboard.php');
} else {
  echo "Error updating record: " . $con->error;
}
}

?>