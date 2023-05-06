<?php
if(isset($_POST['add'])){
    if(isset($_SESSION['cart'])){
        $item_array_id = array_column($_SESSION['cart'], 'product_id');
        

        if(in_array($_POST['product_id'], $item_array_id)){
            echo"<script>alert('Product is already added in the Cart')</script>";
        }else{
            $count = count($_SESSION['cart']);
            $item_array = array('product_id'=>$_POST['product_id'], 'quantity'=>$_POST['quantity'], 'img1'=>$_POST['img1'], 'price'=>$_POST['price'], 'name'=>$_POST['name']);
            $_SESSION['cart'][$count] = $item_array;
        }
    }else{
        $item_array = array('product_id'=>$_POST['product_id'], 'quantity'=>$_POST['quantity'], 'img1'=>$_POST['img1'], 'price'=>$_POST['price'], 'name'=>$_POST['name']);
        $_SESSION['cart'][0] = $item_array;
    }
}
?>