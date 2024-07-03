<?php

@include './config.php';
error_reporting(0);
// start session
session_start();

// if we come on this page without having session
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
}   

$sql = "SELECT * FROM Properties";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "<script> alert('Unable to fetch data 🙁');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/featured.css">
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

    <!-- featured section start -->
    <section class="featured" id="featured">
        <h1 class="heading"><span>featured</span> properties</h1>

        <div class="box-container">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo
                '<div class="box">
                        <div class="image-container">
                            <img src="./images/' . $row["prop_imageData"] . '" alt="">
                            <div class="info">
                                <h3>Posted on ' .  $row["prop_posted_date"] . '</h3>
                                <h3> ' . $row["prop_type"] . '</h3>
                            </div>
                            <div class="icons">
                                <a href="" class="fas fa-film">
                                    <h3> 2 </h3>
                                </a>
                                <a href="" class="fas fa-camera">
                                    <h3> 6 </h3>
                                </a>
                            </div>
                        </div>

                        <div class="content">
                            <div class="price">
                                <h3>Rs. ' . $row["prop_price"] . '/mo</h3>
                                <a href="" class="fas fa-heart"></a>
                                <a href="" class="fas fa-envelope"></a>
                                <a href="" class="fas fa-phone"></a>
                            </div>
                        </div>

                        <div class="location">
                            <h3>' . $row["prop_name"] . '</h3>
                            <p>' . $row["prop_address"] . '</p>
                        </div>
                        <div class="details">
                            <h3><i class="fas fa-expand"></i> ' . $row["prop_size"] . ' sqft</h3>
                            <h3><i class="fas fa-bed"></i> ' . $row["prop_beds"] . ' beds</h3>
                            <h3><i class="fas fa-bath"></i> ' . $row["prop_baths"] . ' bath </h3>
                        </div>

                        <div class="buttons">
                            <a href="#" class="btn">request info</a>
                            <a href="#" class="btn">view details</a>
                        </div>
                </div> ';
            }

            ?>

        </div>
    </section>
    <!-- featured section end -->


    <!-- external script link  -->
    <script src="./javascript/script.js"></script>
</body>

</html>