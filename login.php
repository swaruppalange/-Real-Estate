<?php

@include 'config.php';

error_reporting(0);
// start session
session_start();


// if we came on this page with having session
if(isset($_SESSION['username'])) {
    header("Location: index.php");
}   


if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];

        header("Location: ./index.php");
    } else {
        echo "<script> alert('Opps, Email or password is Wrong.');</script>"; 
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
    <link rel="stylesheet" href="./css/login-register.css">
</head>
<body>
    <div class="login-container">
        <form action="" method="post" class="form">
            <h1 class="login-text">login</h1>
            <div class="input-group">
                <input type="text" placeholder="Email" name="email" required value="<?php echo $email;?>">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password'];?>" required>
            </div>
            <div class="input-group">
                <button class="btn" name="submit">Log in</button>
            </div>
            <p class="login-register-text">don't have an account <a href="./register.php">Register here</a>.</p>
        </form>
    </div>
</body>
</html>