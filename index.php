<?php
session_start();
?>

<html>

  <head>
    <title> Home | Le Cafe' </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" type = "text/css" href ="css/index.css">
  <link rel="stylesheet" type = "text/css" href ="css/partheader.css">


  <body>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation" style="background-color:#dc042a;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="images/logo.svg" alt="" class="restaurant-logo"></a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <!-- <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li> -->

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
                        <a class="nav-link" href="index.php">Order Now</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">   
                        <a class="nav-link" href="about.php">About</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="store-location.php">Store Locations</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="career.php">Career</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                        <hr class="cool cool--m">
                        </li>
            <li><a href="#"><?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
           <li class="nav-item">
                        <a class="nav-link" href="foodlist.php">Order Now</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">   
                        <a class="nav-link" href="about.php">About</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="store-location.php">Store Locations</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="career.php">Career</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                        <hr class="cool cool--m">
                        </li>

            <!-- <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zoneeee </a></li> -->
            <li><a href="cart.php" class="other-link">Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
             
            <li><a href="#" class="other-link user-box"><?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="logout_u.php" class="other-link">Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                        <a class="nav-link" href="index.php">Order Now</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">   
                        <a class="nav-link" href="about.php">About</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="store-location.php">Store Locations</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="career.php">Career</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                        <hr class="cool cool--m">
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                        <hr class="cool cool--m">
                        </li>
            <li>
              <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <span class="signup-text"> Sign Up</span> <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                  <li> <a href="customersignup.php"> User Sign-up</a></li>
                  <li> <a href="managersignup.php"> Manager Sign-up</a></li>
                 </ul>
            </li>
    </ul>

<?php
}
?>
       </div>

      </div>
    </nav>

    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="images/LogoImage.jpg"></div>
        <div class="col-xs-5 line"><hr></div>
        <div class="tagline">Good Food is Good Mood</div>
    </div>
    <br>
    <div class="orderblock">
    <h2>Feeling Hungry?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
    </div>
<style>
  .signup-text{
    margin-top: -30px !important;
    color:#fff;
  }
  .restaurant-logo{
    margin-top: -10px !important;
    
  }
  @media screen and (max-width:767px){
    .restaurant-logo{
        margin-top: -40px;
    }
    .navbar-brand>img{
      margin-top: -12px;
    }
    .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse{
      max-height:100% !important;
    }
   
}
  @media screen and (max-width:320px){
        .restaurant-logo{
            height: 25px;
        }
}
</style>
    
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>