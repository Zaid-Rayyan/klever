<?php
session_start();
	require "../connection.php";
    if(isset($_GET['ID'])){
        $sql = "SELECT * FROM product where ID = :ID";
        $ID = $_GET['ID'];
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':ID', $ID, PDO::PARAM_INT);
        $statement->execute();
        $row = $statement->fetch();
        $pdo = null;
    }
    else{
        header('Location: ../index.php');
    }


    
	
    require '../cartProducts.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../Images/sliders/Logo.png" type="image/png">
    <title>Klever | Product Details</title>
    <!--Style CSS-->
    <link rel="stylesheet" href="../CSS/Product-Details.css" />
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('#imgclick').forEach(function (image) {
                image.addEventListener('click', function () {
                    const imgsrc = image.src;
                    document.querySelector('#bigImg').src = imgsrc;
                });
            });
        });

    </script>
</head>

<body>
        <?php
            include 'header2.php';
        ?>
    <main>
        <section>
            <div class="Product-Image">
                <img src="../<?php echo $row['img1']?>" width="200" alt="Product Image" id="bigImg">
                <div class="S-imgs">
                    <img src="../<?php echo $row['img1'];?>" width="50" alt="Product Image" id="imgclick">
                    <img src="../<?php echo $row['img2'];?>" width="50" alt="Product Image" id="imgclick">
                    <img src="../<?php echo $row['img3'];?>" width="50" alt="Product Image" id="imgclick">
                </div>
            </div>
            <form action="Product-Details.php" method="post">
            <div class="product-info">
                <h3 id="P-name">
                    <?php echo $row['name'];?>
                </h3>
                <p id="P-price">
                    <span>Price: </span> <?php echo $row['price'];?> JD
                </p>
                <p id="P-description">
                    <span>Description: </span> <?php echo $row['description'];?>
                </p>
                <input type="hidden" name='product_id' value="<?php echo $row['ID'];?>">
                <input type="hidden" name="img1" value="<?php echo $row['img1']?>">
                <input type="hidden" name="name" value="<?php echo $row['name']?>">
                <input type="hidden" name="price" value="<?php echo $row['price']?>">
                <div class = 'Quantity'><input type="number" name="quantity" id="quantity" value = "1" min = "1">
                <button type= "submit" class="cart-button" name="add">Add to Cart <i class="fa fa-shopping-cart" id="cartA"></i></button>
            </div>
            </form>
        </section>
    </main>
    <?php
        include 'footer2.html';
    ?>

</body>

</html>