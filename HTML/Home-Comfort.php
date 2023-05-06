<?php
session_start();
    require '../cartProducts.php';
    require 'productsSql.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../Images/sliders/Logo.png" type="image/png">
    <title>Klever | Home Comfort</title>
    <!--Style CSS-->
    <link rel="stylesheet" href="../CSS/Products-Page.css" />
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
        <section class="product">
            <p id="title">Home Comfort Appliances</p>
            <div class="productP">
            <?php for($x = 40; $x < 56; $x++){ ?>
                <main class="card">
                <form action="Home-Comfort.php" method="post">
                    <article>
                        <div class="card-overlay">
                        <a href='Product-Details.php?ID=<?php echo $data[$x]['ID']?>'><?php $data[$x]['ID']?>Details &rarr;</a>
                        </div>
                        <img src="../<?php echo $data[$x]['img1']?>" alt="<?php echo $data[$x]['name']?> Product Image">
                        <div class="info">
                            <h3><?php echo $data[$x]['name']?></h3>
                            <p>Price: <?php echo $data[$x]['price']?>JD</p>
                            <input type="hidden" name="product_id" value="<?php echo $data[$x]['ID']?>">
                            <input type="hidden" name="img1" value="<?php echo $data[$x]['img1']?>">
                            <input type="hidden" name="name" value="<?php echo $data[$x]['name']?>">
                            <input type="hidden" name="price" value="<?php echo $data[$x]['price']?>">
                            <div class = 'Quantity'><input type="number" name="quantity" id="quantity" value = "1" min = "1">
                            <button type= "submit" class="button" name="add">Add to Cart <i class="fa fa-shopping-cart" id="cartA"></i></button></div>
                        </div>
                    </article>
                    </form>
                </main>
            <?php } ?>
            </div>
            <a href="../index.php" class="btn" id="back-btn"><span>Back</span></a>
        </section>
    </main>
    <?php
        include 'footer2.html';
    ?>

</body>

</html>
