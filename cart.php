<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .top{
            width: 200px;
        }

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

    .item {
    width: 200px;
      margin: 20px;
      padding: 10px;
      box-sizing: border-box;
      background-color:  whitesmoke;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
        /* .top img{
            width: 100%;
            display: block;
        } */
        /* button{
            margin-left: 20px;
        } */
        /* .button-container {
      display: flex;
      justify-content: space-between;
    } */
.bt {
      display: flex;
      justify-content: space-between;
    }
    button {
      padding: 8px 15px;
      background-color:  #1aa3ff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
    .item img {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .dis {
      margin-bottom: 10px;
    }

    .pri {
      font-weight: bold;
      color: black;
    }
       
    </style>
</head>
<body>
    <h2>cart page</h2>
    <div class="first">
    <?php
        session_start();
        include('conn.php');
        if(!isset($_SESSION['id'])){
            header("location:login.php");
        }
        $custid = $_SESSION['id'];
        $sql="SELECT * FROM `cart` WHERE uid='$custid'";
         $result = mysqli_query($conn, $sql);
         
         
       while($row = mysqli_fetch_assoc($result)) {
    ?>
    
    <div class="item">
        <img src="<?php echo $row['pimg']; ?>" alt="">
                <div class="dis"><?php echo  $row['discription']; ?></div>

        <div class="pri"><?php echo  $row['price']; ?></div>
    
    <?php
       echo '<div class="bt"><a href="deletecart.php?edited='.$row['pid'].'"> <button>Delete</button> </a>';
        echo '<a href="buynow.php?edited='.$row['pid'].'"> <button>buynow</button> </a></div></div>';
    ?>
       <?php
       };
       ?>
    </div>
</body>
</html>