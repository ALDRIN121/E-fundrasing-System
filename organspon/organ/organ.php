<?php

session_start();
$organ = $_SESSION["organ"];
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
    $sql = "INSERT INTO organ_donate (fromname,toname,fromemail,toemail,organ) VALUES ('$fname','$tname','$email','$toemail','$organ')";
  
 
      
    
    if(mysqli_query($con,$sql)){
        $last_id = mysqli_insert_id($con);
         header('Location: http://localhost/Final/email/organemail.php');
        
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
