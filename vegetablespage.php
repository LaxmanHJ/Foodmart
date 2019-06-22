
<?php
    session_start();
    if(empty($_SESSION["login"])){

      $login="login";
      unset($_SESSION["cart"]);
    }
    $database_name = "Product_details";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';

            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);

                }
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodMart :)</title>  
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="newcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
     
        table, th, tr{
            text-align: center;
        }
       
        #offer{
            background-color: lightpink;
    padding-left: 20px;
    padding-bottom: 5px;
    margin-left: -20px;
    margin-right: -15px;
    margin-top: -20px;
        }        
        table th{
            background-color: #efefef;
        }
    </style>
        <script>
    function cart()
    {
      alert("Ordered successfully.....");
    }
    </script>
</head>
<body>
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">FoodMart :)</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div   class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
               
    
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fruits<span class="caret"></span></a>
                  <ul class="dropdown-menu ">
                      <li><a href="fruitspage.php">Apple</a></li>
                    <li><a href="fruitspage.php">Citrus</a></li>
                    <li><a href="fruitspage.php">Berries</a></li>
                    <li><a href="fruitspage.php">Melons</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="fruitspage.php">Mango</a></li>
                    <li><a href="fruitspage.php">More</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="active">Vegetables<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="vegetablespage.php">Capsicum</a></li>
                      <li><a href="vegetablespage.php">Lady's Finger</a></li>
                      <li><a href="vegetablespage.php">RedChilli</a></li>
                      <li><a href="vegetablespage.php">More</a></li>
                    
                    </ul>
                  </li>
                  <li class="active"><a href="abouts.html">About Us</a></li>
              </ul>
              <form class="navbar-form navbar-right" role="search" method="post" action="search.php"><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                 <div class="form-group">
                  <input type="text" name="search" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
             
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
     
       


    <div class="container-fluid" style="padding:40px;" >
        
        <?php
            $query = "SELECT * FROM vegetables ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-sm-12 col-md-3" >

                    <form method="post" action="vegetablespage.php?action=add&id=<?php echo $row["id"]; ?>">

                    <div >
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                        <h1><?php echo $row["vname"]; ?></h1>
                        </div>
                        <div class="panel-body">
                          <img class="gallery" src="<?php echo $row["vimage"]; ?>"  alt="..." width="100%" height="175px">
                  
                        </div>
                        <div class="panel-footer">
                          <h3>₹<?php echo $row["vprice"]; ?></h3>
                          <h4>per Dozon</h4>
                          
                          <input type="text" name="quantity" class="form-control" value="1">
                 <input type="hidden" name="hidden_name" value="<?php echo $row["vname"]; ?>">
                        <input type="hidden" name="hidden_price" value="<?php echo $row["vprice"]; ?>">
                      <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-lg"
                      value="Add to Cart">
                        </div>
                      </div> 
                     
                
              
                  
                         </div>
                    </form>
        </div>
                    <?php
                }
            }
        ?>

          
        </div>

        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

        <h3 style="color:red;text-align:center;">Shopping Cart Details<button type="button" class="btn btn-danger" onclick="cart()">Order</button></h3></h3>
        <div class="table-responsive">
            <table class="table table-bordered" style="background-color:pink">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>
            <?php
                  if(!empty($login)){
                    echo "<script>alert('please Login')</script>";
                  }
            else if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr style="color:black">
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="index.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>

    </div>
    </div>    <footer>
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-3 col-sm-6 footer-col">
                      <div class="logofooter">Our College</div>
              <p>Karnatak Law Society's</p>
              <p><h4 style="color:white;">Gogate Institute of Technology</h4></p>
              <p><i class="fa fa-map-pin"></i>Udyambag,Belagavi-590008, Karnatak, India</p>
              <p><i class="fa fa-phone"></i> Phone (India) : +91 8312498500</p>
              <p><i class="fa fa-envelope"></i>Website:www.git.edu</p>
                      
                      </div>
                      <div class="col-md-3 col-sm-6 footer-col">
                        <h6 class="heading7">GENERAL LINKS</h6>
                        <ul class="footer-ul">
                          <li><a href="#"> Career</a></li>
                          <li><a href="#"> Privacy Policy</a></li>
                          <li><a href="#"> Terms & Conditions</a></li>
                          <li><a href="#"> Client Gateway</a></li>
                          <li><a href="#"> Ranking</a></li>
                          <li><a href="#"> Case Studies</a></li>
                          <li><a href="#"> Frequently Ask Questions</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-6 footer-col">
                        <h6 class="heading7">LATEST POST</h6>
                        <div class="post">
                        <p>facebook:"Peace begins with a smile" <span>August 3,2020</span></p>
                          <p>facebook:“Smile, smile, smile at your mind as often as possible. Your smiling will considerably reduce your mind’s tearing tension.”<span>August 3,2019</span></p>
                          <p>facebook:“Smile, it’s free therapy.”<span>August 3,2018</span></p>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 footer-col">
                        <h6 class="heading7">Social Media</h6>
                        <ul class="footer-social">
                          <li><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i></li>
                          <li><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></li>
                          <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></li>
                          <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </footer>
                <!--footer start from here-->
                
                <div class="copyright">
                  <div class="container">
                    <div class="col-md-6">
                      <p>© 2016 - All Rights with PK</p>
                    </div>
                    <div class="col-md-6">
                      <ul class="bottom_ul">
                        <li><a href="#">prabuuideveloper.com</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Faq's</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Site Map</a></li>
                      </ul>
                    </div>
                  </div>
                </div>

                



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
