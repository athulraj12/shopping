<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Online Store</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body { 
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            
        }

        .topnav {
            background-color:rgba(0, 0, 0, 0.6 ) ;
            padding: 8px 80px;
            text-transform: uppercase;
            width: 100%;
            left: 0;
            top: 0;
            height: 70px;
            box-sizing: border-box;
            position: fixed;
        }

        .topnav a {
            list-style: none;
            float: left;
            margin: 0;
           line-height: 80px;
            color: #fff;
            text-align: center; 
            padding: 15px 24px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            
            display: flex;
            line-height: 30px;
        }

        .topnav a:hover {
            background-color:#D2B48C;
            color: white;
            border-radius: 8px;
        }

        .topnav a.active {
           
            color:#fff;
            padding: 15px 24px;
            float: left;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;

        }
        

        .lo {
            float: right;
        }

        .lo a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
            
        }

        .lo a:hover {
            background-color: #D2B48C; 
            color: white;
        }

        .hero {
            background-image: url('dress1.png');
            background-size: cover;
            background-position: center;
            
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }

        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2em;
        }


        .footer {
            background-color: #8B4513; 
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
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
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5 );
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
    .h{
        text-align: center;
    }

    </style>
</head>
<body>
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="men.php">Men</a>
        <a href="women.php">Ladies</a>
        <a href="kids.php">Kids</a>
        <a href="cart.php">Cart</a>
        <div class="lo">
        <a href="sign.php">Sign Up</a>
        <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="hero">
        <div>
            <h1>Welcome to our Online Store</h1>
            <p>Discover the latest trends in fashion</p>
        </div>
    </div>
<div class="h"><h2>Featured Products</h2></div>
    <div class="first">
        
    
<?php
 include('conn.php');
  $sql="SELECT * FROM product WHERE catagory='featured' ";
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

    <div class="footer">
        <p>&copy; 2024 Your Online Store. All rights reserved.</p>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="/js/bootstrap.js"></script>
</body>
</html>
