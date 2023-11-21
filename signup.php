<?php
$user =0;
$success=0;
$match=0;
if($_SERVER['REQUEST_METHOD']=="POST")
{
    include 'connect.php';
    if(isset($_POST['signup'])){
        $username =$_POST['username']; 
        $password=($_POST['password']);
        $cpassword =($_POST['cpassword']);

        // $sql = "INSERT INTO `data` (`ID`, `name`, `Password`) VALUES (NULL, '$username', '$password')";
        // $result=mysqli_query($con,$sql);
        // if($result){
        //     echo("Data inserted successfully");
        // }
        // else{
        //     die(mysqli_error($con));
        // }
    $sql = "SELECT  * from `data` where name='$username'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num =mysqli_num_rows($result);
        // echo $num;
        if($num>0){
            $user=1;
        }
        else{
            if($password == $cpassword){
                $sql = "INSERT INTO `data` (`ID`, `name`, `Password`) VALUES (NULL, '$username', '$password')";
                $result=mysqli_query($con,$sql);
                if($result){
                        // echo("SignUp Successfully");
                    $success=1;
                    }
                else{
                    die(mysqli_query($con));
                }
            }  else{
                // echo "Password didn't matched!!";       
                $match=1;
            }
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
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <?php 
    if($user){
        echo "<div class='alert alert-danger' role='alert'>
        User Already Exists!!!
      </div>";
    }
    if($success){        
        echo "<div class='alert alert-success' role='alert'>
        Signup Successfully
      </div>";
    }
    if($match){
        echo "<div class='alert alert-warning' role='alert'>
        Password not matched!!!
        </div>";
    }
    ?>
</body>
</html>