<?php
session_start();

// Create connection
$con=mysqli_connect("localhost","root","","product_details");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  else { echo "<h1>You're Registered successfully</h1>"; }

// Escape user inputs for security
$fname = mysqli_real_escape_string($con, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($con, $_REQUEST['lname']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
$phno = mysqli_real_escape_string($con, $_REQUEST['phno']);
$address = mysqli_real_escape_string($con, $_REQUEST['address']);
$password = mysqli_real_escape_string($con, $_REQUEST['password']);
// Attempt insert query execution
$sql = "INSERT INTO userdetails (fname, lname,email,phoneno,address,password) VALUES ('$fname', '$lname', '$email','$phno','$address','$password')";
if(mysqli_query($con, $sql)){

  header("Location: index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);


?>