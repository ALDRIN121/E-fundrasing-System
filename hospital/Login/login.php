
<?php  
$host ="localhost";
$user = "root";
$password ="";
$db ="project";

$con = mysqli_connect($host,$user,$password,$db);

if (isset($_POST['username'])) {
    $uname =$_POST['username'];
    $password = sha1($_POST['pass']);

    $sql = "select * from hospital_register where hname = '$uname' AND pass = '$password'";

    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result)>0)
     {
        if($row['verify'] == "VERIFIED"){
        header('Location: http://localhost/Final/hospital/index.html');
        }
        else{
            echo '<script>alert("Not verified yet")</script>'; 
        }
        
        
        
    }

    else
    {
        echo "wrong password";
        header('Location: http://localhost/Final/hospital/Login/index.html');
    }

}
mysqli_close($con);
?>