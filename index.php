<?php

session_start();
// if we come on this page without having session
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Real Estate Kolhapur</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/home.css">

    <style>

        

        body {
            position: relative;
        }


        .home {
            min-height: 80vh;
            background: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(./images/homeback.jpg);
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            margin: 8% 9% 2% 9%;
            border-radius: 5rem;
        }

        .container {
            min-height: 80vh;
            margin: 8% 9% 2% 9%;
            border-radius: 5rem;
        }


        .home .home-text {
            font-size: 4.1rem;
            line-height: 80px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
        }

        .btn {
            background-color: blue;
            color: #fff;
            padding: 5px 15px;
            font-size: 2rem;
            border-radius: 15px;
            cursor: pointer;
        }



        /* about section css  */

        .about {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(18rem, auto));
            gap: 2rem;
        }


        .about-img img {
            border-radius: 3rem 0 3rem 3rem;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        .about-text span {
            font-size: 2rem;
            text-transform: uppercase;
            font-weight: 500;
            color: #fff;
            /* margin-bottom: 30px; */
        }

        .about-text h2 {
            font-size: 3.2rem;
            padding-bottom: 30px;
            font-weight: 600;
            border-radius: 10px;
            padding: 5px 10px;
            background-color: #80BFFF;
            backdrop-filter: blur(1px);
            margin-bottom: 20px;
        }

        .about-text .details {
            text-align: left;
            /* background-color: pink; */
            gap: 10px;
        }

        .details p:nth-child(odd) {
            background-color: rgb(255, 227, 167);
        }

        .details p:nth-child(even) {
            background-color: rgb(252, 192, 64);
        }

        .details p {
            margin-bottom: 20px;
            font-size: 1.6rem;
            text-transform: lowercase;
            font-weight: 600;
            border-radius: 10px;
            padding: 5px 10px;
        }


        .home-text a {
            margin-top: 8px;
            background-color: white;
            padding: 10px 30px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.6rem;
        }

        .home-text h2:hover{
           -webkit-text-stroke : .00001px #fff;
            color:transparent;
        }

        .btn-view {
            background-color: darkgreen;
            padding: 10px 30px;
            color: #fff;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 400;
            font-size: 1.6rem;
        }

        .home-btn:hover {
            transform: translateY(-10px);
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
        <source src="./video/homeVideo.mp4" type="video/mp4">
    </video>



    <section class="home" id="home">
        <div class="home-text">
            <h2>Find your next <br> perfect home to <br> live</h2>
            <a href="./featured.php" class="home-btn">view flats</a>
        </div>
    </section>

    <section id="about" class="about">
        <div class="about-img">
            <img src="./images/about-img.jpg">
        </div>
        <div class="about-text">
            <span>About us</span>
            <h2>We provide the best <br> Property for you!</h2>
            <div class="details">
                <p>Better service & more savings</p>
                <p>Save an average of $10,000 in realty fees when you sell with us! We only charge 1% compared to the traditional 3% commission.</p>
                <p>Our Pricing Agents have accurately priced thou sands of homes. They will use their expertise to develop a customized pricing strategy to meet your timeline and needs.</p>

            </div>
            <a href="./services.php" class="btn-view home-btn">view services</a>
        </div>
    </section>

    <!-- external script link  -->
    <script src="./javascript/script.js"></script>
</body>

</html>