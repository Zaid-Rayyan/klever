
<!DOCTYPE html>
<html>

<head>
<meta name="keywords" content="smart home automation system , automation residential , 
home automation, house automation system, automated smart house, automatic home systems,
home automation and control, home automation and smart home systems, in home automation system">
</head>

<body>
    <header>
        <div class="upperHeader">
            <div class="logoH">
                <img src="../Images/sliders/Logo.png" alt="" id="logoIH">
                <a href="../index.php" id="logoTH"> Klever</a>
            </div>
            <div class="cart"><a href="Cart.php"><img src="../Images/sliders/Cart.png" alt="" id="cartI"></a>
            <?php if(isset($_SESSION['cart'])){?>
                        <?php $count = count($_SESSION['cart']);?>
                        <p><?php echo $count?></p>
                    <?php }?>
        </div>

        </div>
        <nav class="navBar">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars" id="hamburger-menu"> Menu</i>
            </a>
            <ul id="navLinks">
                <li id="link"><a href="../index.php">Home</a></li>
                <li id="link"><a href="../index.php#product">Products</a></li>
                <li id="link"><a href="About-Us.php">About Us</a></li>
                <li id="link"><a href="FAQ.php">FAQ</a></li>
                <li id="link"><a href="Contact-Us.php">Contact Us</a></li>
            </ul>
        </nav>
        <script>
            function myFunction() {
                var x = document.getElementById("navLinks");
                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }
        </script>
    </header>
</body>

</html>