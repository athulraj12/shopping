<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Login</h2>
        <input type="text" name="usname" placeholder=" Username" required/><br />
        <input type="password" name="password" placeholder="Password"  required/><br />
        <input type="submit" name="submit" /> <br>
        Don't have an account? <a href="signup.php">Sign up</a>
    </form>
    <?php
    session_start();
     include("conn.php");

     if(isset($_POST['submit'])){
        $username=$_POST['usname'];
        $password=$_POST['password'];

        $sql="SELECT * FROM user WHERE usname='$username' AND password='$password'"; 
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if($num>0){
              $row = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $row['uid'];
            $_SESSION['usrname'] = $row['name'];
            header("location: home.php");
             exit();
        }

     }
    //  else{
    //     echo "please signup";
    //  }


    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.js"></script>
</body>
</html>
