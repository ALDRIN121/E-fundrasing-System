<?php
session_start();

$host ="localhost";
 $user = "root";
 $password ="";
 $db ="project";

 $con = mysqli_connect($host,$user,$password,$db);
 
if(isset($_GET['id']))
{
    $id = mysqli_real_escape_string($con,$_GET['id']);
 $sql = "SELECT * FROM request where id ='$id' ";
 $_SESSION["id"]=$id;

 mysqli_select_db($con, $db);
 $query = mysqli_query($con, $sql);

 $result=mysqli_fetch_array($query) ;

$_SESSION["amount"] = $result['amount'];

header('Location: payable.html');
}
else
{
    echo "nop";
    header('Location: http://localhost/Final/error/index.html');
}
?>