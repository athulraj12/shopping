<?php
    session_start();
    $session = session_destroy();
    
    if($session == true){
       
        header("location: home.php");
    }else{
        echo " couldn't logout";
    }
?>