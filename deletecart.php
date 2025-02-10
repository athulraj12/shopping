<?php
include('conn.php');
$d_id=$_GET['edited'];
$sql="DELETE FROM cart WHERE pid=$d_id";
$result= mysqli_query($conn, $sql);
if($result==true){
    header("location:cart.php");
}

?>
