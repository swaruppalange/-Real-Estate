<?php

include 'config.php';

error_reporting(0);

session_start();

// if we came on this page with having session
if (!isset($_SESSION['username'])) {
    header("Location: welcome.php");
}


if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email = $_POST['email'];


    $sql = "INSERT INTO contactus(id, email, subject, message)
                    VALUES('NULL', '$email', '$subject', '$message')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "<script> alert('Form not submited please try again...');</script>";
    } else {
        echo "<script> alert('Contact form submitted');</script>";
        $subject = "";
        $email = "";
        $message = "";
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <!-- header section start  -->
    <header>

        <a href="./index.php" class="logo"><span>Ram</span>Estate</a>

        <nav class="navbar">
            <a href="./index.php">home</a>
            <a href="./services.php">services</a>
            <a href="./featured.php">featured</a>
            <a href="./agent.php">agents</a>
            <a href="./contact.php">contact</a>
        </nav>

        <div class="icons">
            <div id="menu-bars" class="fas fa-bars"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="./logout.php" class="fas fa-sign-out-alt"></a>
        </div>

    </header>
    <!-- header section end  -->


    <!-- contact section start -->

    <section class="contact" id="contact">
        <h1 class="heading"><span>contact</span> us</h1>

        <div class="icons-container">

            <div class="icons">
                <img src="./images/icon-1.png" alt="">
                <h3>phone number</h3>
                <p>+91 7385483821</p>
                <p>+91 9899999999</p>
            </div>
            <div class="icons">
                <img src="./images/icon-2.png" alt="">
                <h3>Email address</h3>
                <p>shubham7102001@gmail.com</p>
                <p>swaruppalange2222@gmail.com</p>
            </div>
            <div class="icons">
                <img src="./images/icon-3.png" alt="">
                <h3>office number</h3>
                <p>231-738-5483</p>
                <p>392-283-1939</p>
            </div>
        </div>

        <div class="row">
            <form action="" method="POST">
                <div class="inputBox">
                    <input type="email" id="email" name="email" placeholder="email">
                    <input type="text" name="subject" placeholder="subject">
                </div>

                <textarea name="message" id="message" cols="30" rows="10" placeholder="message"></textarea>
                <input type="submit" name="submit" class="btn" value="send message">
            </form>

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.750582683741!2d74.2185148142529!3d16.689360026954414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc10008565727b9%3A0xb3da268a51ebad7!2sThe%20New%20College!5e0!3m2!1sen!2sin!4v1652676826340!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </section>
    <!-- contact section end -->
    <!-- external script link  -->
    <script src="./javascript/script.js"></script>
</body>

</html>