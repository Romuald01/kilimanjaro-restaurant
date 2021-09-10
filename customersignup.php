<html>
<head>
    <title> Guest Signup | Le Cafe' </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/managersignup.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

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

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Le Cafe'</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li  ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
    
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
      
            </ul>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
    <div class="jumbotron">
      <h1>Hi Guest, <br> Welcome to <span class="edit"> Le Cafe' </span></h1>
      <br>
        <p>Get started by creating your account</p>
    </div>
    </div>



    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading"> Create Account </div>
        <div class="panel-body">
          
          <form role="form" action="customer_registered_success.php" method="POST">
            <div class="container">
              <div class="row signin-and-login-form">
                  <div class="col-md-5">
                      <h3 class="signin-heading">Sign In</h3>
                      <p class="signin-greeting">Welcome back! Sign in to your Account</p>
                      <form action="#" method="post" class="signin-form">
                          <label for="email">Email Address</label>
                          <input type="email" placeholder="Example@gmail.com" name="email" value="<?php echo $_POST['email']; ?>" required>
                          <label for="">password</label>
                          <div class="input-container">
                              <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                              <i class="material-icons visibility">visibility_off</i>
                          </div>
                          <div class="password-sub-content">
                              <div class="input-group">
                                  <span class="input-group-addon">
                                      <input type="checkbox" aria-label="Checkbox for following text input"><span class="remember-text">Remember Me</span>
                                  </span>
                              </div>
                              <div>
                                  <a href="forget-password.php" class="change-psw-link">forget password?</a>
                              </div>
                          </div>   
                          <button class="btn  btn-login mt-3" name="login"><span class="text">Login</span></button>
                          </button> 
                          <span class="or-sign-with-text">Or sign in with</span>
                          <div class="other-social">
                          
                          <div class="">
                                    <button class="facebook-logo-button">
                                        <i class="fab fa-facebook"></i><a href="#">FACEBOOK</a> 
                                  </button>
                              </div>
                              <div>
                                  <button class="google-logo-button">
                                  <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg"><g fill="#000" fill-rule="evenodd"><path d="M9 3.48c1.69 0 2.83.73 3.48 1.34l2.54-2.48C13.46.89 11.43 0 9 0 5.48 0 2.44 2.02.96 4.96l2.91 2.26C4.6 5.05 6.62 3.48 9 3.48z" fill="#EA4335"></path><path d="M17.64 9.2c0-.74-.06-1.28-.19-1.84H9v3.34h4.96c-.1.83-.64 2.08-1.84 2.92l2.84 2.2c1.7-1.57 2.68-3.88 2.68-6.62z" fill="#4285F4"></path><path d="M3.88 10.78A5.54 5.54 0 0 1 3.58 9c0-.62.11-1.22.29-1.78L.96 4.96A9.008 9.008 0 0 0 0 9c0 1.45.35 2.82.96 4.04l2.92-2.26z" fill="#FBBC05"></path><path d="M9 18c2.43 0 4.47-.8 5.96-2.18l-2.84-2.2c-.76.53-1.78.9-3.12.9-2.38 0-4.4-1.57-5.12-3.74L.97 13.04C2.45 15.98 5.48 18 9 18z" fill="#34A853"></path><path fill="none" d="M0 0h18v18H0z"></path></g></svg><a href="#" class="google-text pl-2">GOOGLE</a>
                                  </button>
                              </div>
                          </div>        
                      </form>
                  </div>
                  <div class="col-md-2 or-box">
                          <div class="or-line">
                                  <div class="circle">
                                          <span class="or-text">Or</span>
                                  </div>
                          </div>
                  </div>
                  <div class="col-md-5">
                      <h3 class="signin-heading">Create New Account</h3>
                      <p class="signin-greeting">Create your very own Kilimanjaro Account</p>
                      <form action="#" method="post" class="signin-form create-account-form">
                          <label for="firstname">First Name</label>
                          <input type="text" placeholder="First Name*" name="fullname" value="<?php echo $_POST['firstname']; ?>" required>
                          <label for="firstname">Last Name</label>
                          <input type="text" placeholder="lastname*" name="lastname" value="<?php echo $_POST['lastname']; ?>" required>
                          <label for="firstname">Phone Number</label>
                          <input type="number" placeholder="+2349063514430*" name="contact" value="<?php echo $_POST['phonenumber']; ?>" required>
                          <label for="email">Email Address</label>
                          <input type="email" placeholder="Example@gmail.com" name="email" value="<?php echo $_POST['email']; ?>"  required>
                          <label for="">password</label>
                          <div class="input-container">
                              <input type="password" placeholder="Password" class="create-password create-accpsw" value="<?php echo $_POST['password']; ?>"  name="password" required>
                              <i class="material-icons visibility visibility__2">visibility_off</i>
                          </div>
                          <button class="btn btn-login mt-3" name="submit"><span class="text">Register</span></button>

                          <span class="or-sign-with-text my-2 d-block">Or sign in with</span>
                          <div class="other-social">
                              <div class="">
                                    <button class="facebook-logo-button">
                                        <i class="fab fa-facebook"></i><a href="#">FACEBOOK</a> 
                                  </button>
                              </div>
                              <div>
                                  <button class="google-logo-button">
                                  <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg"><g fill="#000" fill-rule="evenodd"><path d="M9 3.48c1.69 0 2.83.73 3.48 1.34l2.54-2.48C13.46.89 11.43 0 9 0 5.48 0 2.44 2.02.96 4.96l2.91 2.26C4.6 5.05 6.62 3.48 9 3.48z" fill="#EA4335"></path><path d="M17.64 9.2c0-.74-.06-1.28-.19-1.84H9v3.34h4.96c-.1.83-.64 2.08-1.84 2.92l2.84 2.2c1.7-1.57 2.68-3.88 2.68-6.62z" fill="#4285F4"></path><path d="M3.88 10.78A5.54 5.54 0 0 1 3.58 9c0-.62.11-1.22.29-1.78L.96 4.96A9.008 9.008 0 0 0 0 9c0 1.45.35 2.82.96 4.04l2.92-2.26z" fill="#FBBC05"></path><path d="M9 18c2.43 0 4.47-.8 5.96-2.18l-2.84-2.2c-.76.53-1.78.9-3.12.9-2.38 0-4.4-1.57-5.12-3.74L.97 13.04C2.45 15.98 5.48 18 9 18z" fill="#34A853"></path><path fill="none" d="M0 0h18v18H0z"></path></g></svg><a href="#" class="google-text pl-2">GOOGLE</a>
                                  </button>
                              </div>
                          </div>       
                      </form>
                  </div>
              </div>
            </div>
          </form>

<?php include("includes/app-store-div.php")?>
<?php include("includes/footer.php")?>

        

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" type="submit">Submit</button>
          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="customerlogin.php">Have an account? Login.</a></label>

        </form>

        </div>
        
      </div>
      
    </div>
    </div>
    </body>
</html>