
<?php
session_start();
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=="POST"){
    include 'connect.php';
    if(isset($_POST['login'])){
        $username = $_POST['lusername'];
        $password=($_POST['lpassword']);    
        $sql="SELECT * FROM `data` WHERE name='$username' and Password='$password'";
        $result=mysqli_query($con,$sql);
        
        if($result){         
            $num=mysqli_num_rows($result);          
            if($num>0){
              
                $login=1;
                $_SESSION['username']=$username;
                header('location:welcome.php');
            }else{
           
                $invalid=1;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <?php 
    if($login){        
        echo "<div class='alert alert-success' role='alert'>
        login Successfully
      </div>";
      echo ' <br>';
      echo ('welcome '.$username);
    }
     if($invalid){
        echo "<div class='alert alert-danger' role='alert'>
        invalid Creadential
      </div>";
    }
    
    
    ?>
</body>
</html>