<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            background-color:white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color:whitesmoke;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
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
            color: blueviolet;
        }
        </style>
</head>
<body>
     <form method="POST" action="">
        <h2>Sign Up</h2>
        <input type="text" name="name"  placeholder="customer Name" required /><br />
       <input type="text" name="usname" placeholder="username" required /><br />
         <input type="email" name="email" placeholder="Email" required /><br />
        <input type="text" name="mno" placeholder=" mobile no:" required /><br />
        <input type="text" name="address" placeholder="address" required /><br />
        <input type="password" name="password" placeholder=" Password" required /><br />
        <input type="submit" name="submit" /> <br>
        Already have an account? <a href="login.php">Login</a>
    </form>

    <?php
    include("conn.php");

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $usname=$_POST['usname'];
        $email=$_POST['email'];
        $mobile=$_POST['mno'];
        $address=$_POST['address'];
        $password=$_POST['password'];

        $sql="INSERT INTO user( `name`, `usname`, `email`, `mobileno`, `adderss`, `password`) VALUES ('$name','$usname','$email','$mobile','$address','$password')";
        $result=$conn->query($sql);
        if($result){
            header("location:login.php");
        }
        else{
            echo "there is error while registration";

        }

    }



    ?>
</body>
</html>