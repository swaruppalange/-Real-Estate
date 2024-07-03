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
    <title>Document</title>
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/home.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <style>

        * {
            transition: all .2s linear;
        }
        h1 {
            text-align: center;
        }

        th {
            border: 1px solid;
            text-align: center;
            background-color: rgb(26,0,26);
            color: #f7f7f7;
            border: none;
            padding: 5px 38px;
            height: 55px;
            font-size: 19px;
            font-weight: 500;
        }

        tr:nth-child(odd) {
            background-color: #ff5a3c;
            border: none;
            color: #f7f7f7;
        }

        tr:hover {
            transform: scale(1.3);
            box-shadow: 0px 0px 15px rgba(0,0,0,.3);
        }

        tr:nth-child(even) {
            background-color: #f7f7f7;
            border: none;
            color: #ff5a3c;
        }

        td {
            height: 55px;
            text-align: left;
            padding: 5px 10px;
            border: none;
            font: 1.2em "Fira Sans", sans-serif;
            text-align: center;
        }

        table {
            box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5); 
            border-collapse: collapse;
            font-size: 15px;
            margin: auto;
        }

        body {
            background: #f7f7f7;
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

    <h1 class="heading"> our <span>Sells</span></h1>

    <table>
        <tr>
            <th>City</th>
            <th>Year</th>
            <th>Flats</th>
            <th>Lands</th>
            <th>Row Houses</th>
        </tr>
        <tr>
            <td>Mumbai</td>
            <td>2015 </td>
            <td>30%</td>
            <td>18%</td>
            <td>25%</td>
        </tr>
        <tr>
            <td>Delhi</td>
            <td>2016</td>
            <td>27%</td>
            <td>20%</td>
            <td>30%</td>
        </tr>
        <tr>
            <td>Bangalore</td>
            <td>2017</td>
            <td>45%</td>
            <td>17%</td>
            <td>40%</td>
        </tr>
        <tr>
            <td>Hyderabad</td>
            <td>2018</td>
            <td>36%</td>
            <td>25%</td>
            <td>12%</td>

        </tr>
        <tr>
            <td>Ahmedabad</td>
            <td>2019</td>
            <td>45%</td>
            <td>15%</td>
            <td>18%</td>
        </tr>
        <tr>
            <td>Chennai </td>
            <td>2020</td>
            <td>19%</td>
            <td>97%</td>
            <td>23%</td>
        </tr>
        <tr>
            <td>Pune</td>
            <td>2021</td>
            <td>43%</td>
            <td>35%</td>
            <td>70%</td>
        </tr>
        <tr>
            <td>Pimpri & Chinchwad</td>
            <td>2022</td>
            <td>70%</td>
            <td>27%</td>
            <td>45%</td>
        </tr>
    </table>





    <!-- service section start -->
    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span></h1>

        <div class="box-container">
            <div class="box">
                <img src="./images/s-1.png" alt="">
                <h3>selling home</h3>
                <p style="font-size: 1.7rem;">Find Genuine Buyers. Manage your Listings Easily. Get assistance at every step. Content Support</p>
                <a href="#" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src="./images/s-3.png" alt="">
                <h3>Rent your property</h3>
                <p style="font-size: 1.7rem;">Post your flat/property ads for free and meet the genuine people looking for rental home.</p>
                <a href="#" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src="./images/s-2.png" alt="">
                <h3>Be a agent</h3>
                <p style="font-size: 1.7rem;">Beginner’s Guide to Being a Real Estate Agent. Key Qualities to become a Real Estate Agent?</p>
                <a href="#" class="btn">learn more</a>
            </div>
        </div>
    </section>
    <!-- service section end -->


    <!-- external script link  -->
    <script src="./javascript/script.js"></script>

</body>

</html>