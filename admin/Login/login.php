
<?php  

if (isset($_POST['username'])) {
    $uname =$_POST['username'];
    $password = $_POST['pass'];

    
    if($uname=='aldrin' && $password=='admin'){
    
        header('Location: http://localhost/Final/admin/examples/dashboard.php');
    }
    else{
        header('Location: http://localhost/Final/Admin/Login/index.html');
    }
}
        
        
    
?>