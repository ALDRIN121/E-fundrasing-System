<?php



 $host ="localhost";
 $user = "root";
 $password ="";
 $db ="project";

 $con = mysqli_connect($host,$user,$password,$db);

 if(isset($_POST['submit']))
{
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = sha1($_POST['password']);
    $filename = $_FILES["file"]["name"]; 
    $tempname = $_FILES["file"]["tmp_name"];     
    $folder = 'C:/xampp/htdocs/image/'.$filename;
    $sql = "INSERT INTO hospital_register (hname,hemail,photo,pass,verify) VALUES ('$name','$email','$filename','$pass','NOT_VERIFIED')";

    mysqli_query($con, $sql); 

    if (move_uploaded_file($tempname, $folder))  { 
        header('Location: http://localhost/Final/hospital/Login/index.html');
    }else{ 
        $msg = "Failed to upload image"; 
  } 
}
else{
    echo "error";
}
?>
