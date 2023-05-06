<?php
require '../connection.php';
require 'cartInsert.php';
	$pdo = null;

    if(isset($_POST['remove'])){
        if($_GET['action']=='remove'){
            foreach($_SESSION['cart'] as $key => $value){
                if($value["product_id"] == $_GET['ID']){
                    unset($_SESSION['cart'][$key]);
                    echo "<script>alert('Product has been Removed!!')</script>";
                    echo "<script>wondow.location = 'Cart.php'</script>";
                }
            }
        }
    }
    if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
    }
    require '../cartProducts.php';    
?>

    
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../Images/sliders/Logo.png" type="image/png">
    <title>Klever | Cart</title>
    <!--Style CSS-->
    <link rel="stylesheet" href="../CSS/Cart.css" />
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
        <section class="Cart-Products">
            
            <?php $total = 0;?>
            <?php if(isset($_SESSION['cart'])){?>
                                <!-- // solve get and post problem -->
                                <?php foreach($_SESSION['cart'] as $keys => $values){ ?>
                                        <div class="C-product">
                                        <form action="Cart.php?action=remove&ID=<?php echo $values['product_id']?>" method = "post" id="cart-product-form">
                                        <img src="../<?php echo $values['img1']; ?>" alt="<?php $values['name']; ?> Product" id="productImg">
                                        <h3><?php echo $values['name']; ?></h3>
                                        <p>Price: <?php echo $values['price']; ?></p>
                                        <p>Quantity: <?php echo $values['quantity']; ?></p>
                                        <?php $total = $total +(int)$values['price'] * (int)$values['quantity'];?>
                                        <div class="remove"><button type="submit" name="remove" id="remove-btn">&#x2715</button></div>
                                        </form>
                                </div>
                        <?php } ?>
                    <?php } 
                        if($count == 0){ ?>
                        <?php echo"<script>alert('Cart Is Empty!')</script>";
                            echo "<script>window.location = '../index.php'</script>";?>
                    <?php } ?>
                    <div id="total">
                <h3>Total: <?php echo $total?> JD</h3>
                </div>
            </section>
            
        

        <section class="Cart-CustomerInfo">
            <form action="cartInsert.php" id="Cart-CustomerForm" method="POST">
                <div class="Contact-info">
                    <h1>Contact Information</h1>
                    <input type="text" name="C-fname" id="" required placeholder="First Name">
                    <input type="text" name="C-lname" id="" required placeholder="Last Name">
                    <input type="text" name="C-phoneNumber" id="" required placeholder="Phone Number">
                </div>
                <div class="Address">
                    <h1>Shipping Address</h1>
                    <input type="text" name="C-city" id="" required placeholder="City">
                    <input type="text" name="C-address" id="" required placeholder="Address">
                </div>
                <input type="hidden" name="order_number" value="<?php echo rand(1,999999);?>">
                <button type="submit" class="submit-btn" name="confirm">Confirm</button>
            </form>

        </section>
    </main>
    <?php
        include 'footer2.html';
    ?>

</body>

</html>