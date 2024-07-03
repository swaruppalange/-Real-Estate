<?php

include 'config.php';

error_reporting(0);

session_start();

// if we came on this page with having session
if(isset($_SESSION['username'])) {
    header("Location: welcome.php");
}   


if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $email = $_POST['email'];

    if($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            echo "<script> alert('Woops, Email Already Exists.');</script>";
        } else {
            $sql = "INSERT INTO user(username, email, password)
                    VALUES('$username', '$email', '$password')";
    
            $result = mysqli_query($conn, $sql);
    
            if(!$result) {
                echo "<script> alert('Opps, Something went wrong...');</script>";
            } else {
                echo "<script> alert('😎User Registration Completed😎');</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            }
        }
    } else {
        echo "<script> alert('Password Not Matched!');</script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/login-register.css">
</head>
<body>
    <div class="login-container">
        <form action="" method="post" class="form">
            <h1 class="login-text">register</h1>
            <div class="input-group">
                <input type="text" placeholder="User name" name="username" required value="<?php echo $username;?>">
            </div>
            <div class="input-group">
                <input type="text" placeholder="Email" name="email" required value="<?php echo $email;?>">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required value="<?php echo $_POST['password'];?>">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" required value="<?php echo $_POST['password'];?>">
            </div>
            <div class="input-group">
                <button class="btn" name="submit">Register</button>
            </div>
            <p class="login-register-text">have an account? <a href="./login.php">login here</a>.</p>
        </form>
    </div>
</body>
</html>