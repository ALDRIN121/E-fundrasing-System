<?php
$host ="localhost";
$user = "root";
$password ="";
$db ="project";

$con = mysqli_connect($host,$user,$password,$db);
if(isset($_POST))
{
$name =$_POST['user'];
$table =$_POST['table'];
$newname =$_POST['newuser'];
if($table =='hospital_register')
{
    $sq ='hname';
}
else
{
    $sq = 'user';
}

$sql = "UPDATE $table SET $sq = '$newname' WHERE $sq = '$name'";

if (mysqli_query($con,$sql)) {
    header('Location: http://localhost/Final/admin/examples/update.html');
} else {
  echo "Error updating record: " . $con->error;
}
}

?>