<?php 
session_start();
require "../cartProducts.php";?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../Images/sliders/Logo.png" type="image/png">
    <title>Klever | Contact Us</title>
    <!--Style CSS-->
    <link rel="stylesheet" href="../CSS/Contact-Us.css" />
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
        <div class="contactUs">
            <img src="../Images/sliders/Contact-us.jpg" alt="" class="CU-img">
            <div class="CU-text">
                <h1>Contact Us: </h1>
                <p>Email: <a href="mailto: Klever2021@gmail.com">Klever2021@gmail.com</a></p>
                <p>Phone Number: (+962)7 8600 3963</p>
                <p>Address: Jordan-Amman-AlShmeisani-Building no.23</p>
            </div>
        </div>
    </main>
    <?php
        include 'footer2.html';
    ?>
</body>

</html>