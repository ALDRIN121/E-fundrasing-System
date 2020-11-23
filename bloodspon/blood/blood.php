<?php

session_start();
$blood = $_SESSION["blood"];
$tname = $_SESSION["tname"];
$toemail = $_SESSION["toemail"];

 $host ="localhost";
 $user = "root";
 $password ="";
 $db ="project";

 $con = mysqli_connect($host,$user,$password,$db);

 if(isset($_POST['submit']))
{
    $fname = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO blood_donate (fromname,toname,fromemail,toemail,blood) VALUES ('$fname','$tname','$email','$toemail','$blood')";
  
 
      
    
    if(mysqli_query($con,$sql)){
        $last_id = mysqli_insert_id($con);
         header('Location: http://localhost/Final/email/bloodemail.php');
        
    }else{
        echo 'There were erros while saving the data.';
        header('Location: http://localhost/Final/error/index.html');
    }
}
else{
    echo "error";
    header('Location: http://localhost/Final/error/index.html');
}
?>
