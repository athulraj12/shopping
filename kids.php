<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="mens.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <style>
    body {
      font-family: Arial, sans-serif;
      background-color: white;
      margin: 0;
      padding: 20px;
    }

    .first {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .product-container {
       width: 200px;
      margin: 20px;
      padding: 10px;
      box-sizing: border-box;
      background-color:  whitesmoke;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .product-container img {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .product-description {
      margin-bottom: 10px;
    }

    .price {
      font-weight: bold;
      color: black;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
    }

    button {
      padding: 8px 15px;
      background-color:  #4caf50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="first">
<?php
  include('conn.php');
  $sql="SELECT * FROM product WHERE catagory='kids' ";
  $result=mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {

    $discription=$row['discription'];
    $productid = $row['pid'];
    $image=$row['pimg'];
   
    $price = $row['price'];
   echo '<div class="product-container">
                <img src="'.$image.'" alt="Product Image">
                <div class="product-description">'.$discription.'</div>
                <div class="price">'.$price.' </div>
                <div class="button-container">
                  <a href="addcart.php?edited='.$productid.'"><button>Add to cart</button></a>
                  <a href="buynow.php?edited='.$productid.'"><button>Buy now</button></a>
                </div>
              </div>';
}
?>
</div>
</body>
</html>