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

if($table =='hospital_register')
{
    $sq ='hname';
}
else
{
    $sq = 'user';
}

$sql = "DELETE FROM $table WHERE $sq = '$name'";

if (mysqli_query($con,$sql)) {
    header('Location: http://localhost/Final/admin/examples/delete.html');
} else {
  echo "Error updating record: " . $con->error;
}
}

?>