<?php
     session_start();
    
        unset($_SESSION["fname"]);
        unset($_SESSION["lname"]);
        unset($_SESSION["email"]);
        unset($_SESSION["phno"]);
        unset($_SESSION["address"]);
        unset($_SESSION["login"]);
        unset($_SESSION["cart"]);
        header("Location: index.php");
    

?>
