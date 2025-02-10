<?php
    session_start();
    if(!isset($_SESSION['id'])){
            header("location:login.php");
        }
    include("conn.php");


    
    
    $product_id = $_GET['edited'];
    $custid = $_SESSION['id'];
    $sql = "SELECT * FROM product WHERE pid=$product_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    $productimg=$row['pimg'];
    $productdesc=$row['discription'];
    $productprice=$row['price'];


$cart="INSERT INTO cart( uid, pid, pimg, discription, price) VALUES ('$custid','$product_id',' $productimg','$productdesc','$productprice')";
 $cart_result = mysqli_query($conn, $cart);
 if($cart_result == true){
    header("location: cart.php");
 }else{
    echo "Couldn't add to cart.";
 }
?>