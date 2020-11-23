<?php



 $host ="localhost";
 $user = "root";
 $password ="";
 $db ="project";

 $con = mysqli_connect($host,$user,$password,$db);

 if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $blood = $_POST['blood'];
    $email = $_POST['email'];
    $sql = "INSERT INTO blood (uname,blood,email) VALUES ('$name','$blood','$email')";
  

 
      
    
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
