<?php

@include './config.php';
error_reporting(0);
// start session
session_start();

// if we come on this page without having session
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}


$sql = "SELECT * FROM agents";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "<script> alert('Something went wrong');</script>";
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/agent.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>

    <style>
        .beagent {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: max-content;
            margin-left: auto;
            margin-right: auto;
            margin-top: 2rem;
            padding: 10px 70px;
            background-color: lightpink;
            font-size: 1.1rem;
            border-radius: 35px;
        }

        .beagent:hover {
            box-shadow: 0px 0px 5px rgba(0, 0, 0, .3);
            transform: scale(1.1);
            transition: all .3s linear;
            background-color: rgba(26, 115, 232, 0.1);
            color: black;
        }

        .beagent a {
            margin-top: 8px;
            background-color: white;
            padding: 10px 30px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.2rem;
        }


        .back-video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }
    </style>
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


    <video autoplay loop muted plays-inline class="back-video">
        <source src="./video/agentVideo.mp4" type="video/mp4">
    </video>


    <!-- agent section start -->

    <section class="agents" id="agents">

        <h1 class="heading"> professional <span>agents</span></h1>

        <div class="box-container">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo
                '<div class="box">
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                        <img src="./images/' . $row['agent_photo'] . '" alt="">
                        <h3>' . $row['agent_name'] . '</h3>
                        <span>' . $row['agent_location'] . '</span>
                        <div class="share">
                            <a href="' . $row['agent_facebook'] . '" class="fab fa-facebook-f"></a>
                            <a href="' . $row['agent_twitter'] . '" class="fab fa-twitter"></a>
                            <a href="' . $row['agent_instagram'] . '" class="fab fa-instagram"></a>
                        </div>
                </div> ';
            }

            ?>
        </div>


    </section>

    <!-- agent section end -->


    <div class="beagent">
        <h1>
            want to be part of our team??
        </h1>
        <a href="./applyagent.php">Apply for agent</a>
    </div>


    <!-- external script link  -->
    <script src="./javascript/script.js"></script>


</body>

</html>