<?php



 $host ="localhost";
 $user = "root";
 $password ="";
 $db ="project";

 $con = mysqli_connect($host,$user,$password,$db);

 if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $organ = $_POST['organ'];
    $email = $_POST['email'];
    $sql = "INSERT INTO organ (uname,organ,email) VALUES ('$name','$organ','$email')";
  


      
    
    if(mysqli_query($con,$sql)){
        $last_id = mysqli_insert_id($con);
         header('Location: http://localhost/Final/hospital/index.html');
        
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
