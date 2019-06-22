<?php
session_start();

// Create connection
$con=mysqli_connect("localhost","root","","product_details");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $email = mysqli_real_escape_string($con, $_REQUEST['lemail']);
  $password = mysqli_real_escape_string($con, $_REQUEST['lpassword']);


if ($result=mysqli_query($con,"SELECT * FROM userdetails WHERE email = '$email'"))
{
  // Fetch one and one row
  $row=mysqli_fetch_array($result);
    
      if($row["email"]==$email && $row["password"]==$password){
        $_SESSION["login"] = $row["fname"];
        $_SESSION["fname"] = $row["fname"];
        $_SESSION["lname"] = $row["lname"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["phno"] = $row["phoneno"];
        $_SESSION["address"] = $row["address"];
        unset($_SESSION["cart"]);
        header("Location: index.php");
        //echo "login success";
        }else
        echo"Sorry, your credentials are not valid, Please try again.";
       
    
}

else
    echo"Sorry, your credentials are not valid, Please try again.";

//mysqli_close($con);
?>
