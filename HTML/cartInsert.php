<?php
    session_start();
    require '../connection.php';
    require '../cartProducts.php';

    if(isset($_POST['confirm'])){
            $fname = $_POST['C-fname'];
            $lname = $_POST['C-lname'];
            $phoneNumber = $_POST['C-phoneNumber'];
            $city = $_POST['C-city'];
            $address = $_POST['C-address'];
            $order_number= $_POST['order_number'];
    
            $sql = "INSERT INTO `order` (ID,customer_first_name, customer_last_name,customer_phone_number, city, address) VALUES (:ID,:fname, :lname, :phoneNumber, :city, :address)";
            
            $statement2 = $pdo->prepare($sql);
            $statement2->bindParam(':ID', $order_number, PDO::PARAM_INT);
            $statement2->bindParam(':fname', $fname, PDO::PARAM_STR);
            $statement2->bindParam(':lname', $lname, PDO::PARAM_STR);
            $statement2->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
            $statement2->bindParam(':city', $city, PDO::PARAM_STR);
            $statement2->bindParam(':address', $address, PDO::PARAM_STR);
            $confirm1 = $statement2->execute();
            
    
            
            foreach($_SESSION['cart'] as $keys => $values){
                $sql1 = "INSERT INTO order_item (order_ID, product_ID, quantity) VALUES ($order_number, :product_id, :quantity)";
                $statement3 = $pdo->prepare($sql1);
                $statement3->bindParam(':product_id', $values['product_id'], PDO::PARAM_INT);
                $statement3->bindParam(':quantity', $values['quantity'], PDO::PARAM_INT);
                $confirm2 = $statement3->execute();
            }
            
            if($confirm1 && $confirm2){
                echo"<script>alert('Order Confirmed')</script>";
                echo "<script>window.location = '../index.php'</script>";
                session_destroy();
            }
            else{
                echo"<script>alert('Error')</script>";
            }
        }
        
    
    ?>