<?php 
session_start();
require "../cartProducts.php";?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../Images/sliders/Logo.png" type="image/png">
    <title>Klever | About Us</title>
    <!--Style CSS-->
    <link rel="stylesheet" href="../CSS/About-Us.css" />
    <link rel="stylesheet" href="../CSS/Footer&Header.css" />
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@200&family=Raleway:wght@100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
        include 'header2.php';
    ?>
    <main>
        <div class="aboutUs">
            <img src="../Images/sliders/About-us.jpg" alt="" class="AU-img">
            <div class="AU-text">
                <h1>About Us: </h1>
                <p><span>Klever</span> is a website which provides smart home solutions</p>
                <p>to offer the customers full
                    control over these appliances and the home environment, bringing convenience to life, as well as
                    security and energy-saving. All the appliances are controlled at the
                    touch of a button.</p>


            </div>
        </div>
    </main>
    <?php
        include 'footer2.html';
    ?>
</body>

</html>