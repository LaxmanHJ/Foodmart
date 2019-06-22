
<html>
<head>
<?php 
//  <input type="password" name="pw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one">
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding-left:10%;
    padding-right:10%;
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {

    display: block; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
    
}
</style>
</head>
<body>
<script>
function myfun()
{
var pass=document.getElementById('pass').value;
var repass=document.getElementById('repass').value;
if(pass!=repass){
    alert("Password not matching");
    return false;
}
if (email.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 


}

</script>
<h2></h2>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="registerdb.php" method="post" onsubmit="return myfun()" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"><a href="index.php">&times;</a></span>
          </div>
          <div class="container signin">
    <p>Already have an account?    <button type="submit" class="registerbtn" onclick="change()">Signin</button></p>    
    </div>
    <div class="container">
          <h1>Register</h1></br>
    <p>Please fill in this form to create an account.</p>
    </br>

     
    <b>First Name</b>
    <input type="text" placeholder="Enter First Name" name="fname" required>
</br>
<b>Last Name</b>
    <input type="text" placeholder="Enter Last Name" name="lname" required>
</br>
   <b>Email</b>    
    <input type="email" placeholder="Enter Email" name="email" required>

    </br>
    <b>Phone No</b>
    <input type="text" placeholder="Phone no" name="phno" required>

</br>
    <b>Addres</b>
    <input type="text" placeholder="Enter Addres" name="address" required>
</br>   
    <b>Create Password</b>
    <input type="text" placeholder="Enter password" name="password" id="pass" required>
</br>
<b>Re-type Password</b>
    <input type="text" placeholder="Enter password" id="repass" id="repass" required>
</br>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  


    
  </form>
</div>


<!-- login-->
<div id="id02" class="modal">
  
        <form class="modal-content animate" action="login.php">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"><a href="index.php">&times;</a></span>
                </div>
      
          <div class="container">
                <h1>Signin</h1></br>
          <p>Please fill in this form to create an account.</p>
          </br>
      
           
         <b>Email</b>    
          <input type="email" placeholder="Enter Email" name="lemail" required>
      
          </br>
          <b>Password</b>
          <input type="text" placeholder="password" name="lpassword" required>
          <hr>

          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      
          <button type="submit" class="registerbtn" >Signin</button>
    
        </div>
        
      
          
        </form>
      </div>




<script>
// Get the modal
var register = document.getElementById('id01');
var login = document.getElementById('id02');
login.style.display="none";
function change()
{
    login.style.display="block";
    register.style.display="none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == register) {
        register.style.display = "none";
        window.open('index.php');
    }
    if (event.target == login) {
        login.style.display = "none";
        window.open('index.php');
    }
}

</script>

</body>
</html>