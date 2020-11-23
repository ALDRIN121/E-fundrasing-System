
<?php  
session_start();

$host ="localhost";
$user = "root";
$password ="";
$db ="project";

$con = mysqli_connect($host,$user,$password,$db);

if (isset($_POST['username'])) {
    $uname =$_POST['username'];
    $password = sha1($_POST['pass']);

    $sql = "select user,pass from loginform where user = '$uname' AND pass = '$password'";

    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result)>0)
     {
        
        header('Location: http://localhost/Final/select/index.html');
        
        
    }

    else
    {
        echo "wrong password";
        header('Location: http://localhost/Final/Login/index.html');
    }

}
$_SESSION["fromname"]=$uname;
mysqli_close($con);
?>