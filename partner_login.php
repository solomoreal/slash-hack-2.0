
<?php 
  include_once 'include/partner.php';
  include_once 'include/function.php';
  include_once 'include/session.php';

  $msg = '';
  
  if(isset($_POST['login'])){
    $password = $_POST['password'];
    $email = $_POST['email'];
    
 $partner = Partner::authenticate($password, $email);
    if($partner)
    {
                 $session->login($partner); 
                // $msg = 'login Successful.';
                 header("location: dashboard.php");
    
             }
      else{
        $msg =  "<div class='alert alert-danger alert-dismissable'>
                <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h4 class='text-center'><strong> Login Failed!</strong></h4>
                <p class='text-center'>Something went wrong, check your inputs and try again.</p>
                </div>";
        }
    }
  
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>assault</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/gaia.css" rel="stylesheet"/>
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="index.php" class="navbar-brand active" style="font-size: 1em; font-family: 'Lobster', cursive;" id="Victorious">
                    Victorious
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li>
                        <a href="aboutus.html" id="menu" >About Us</a>
                    </li>
                    
                    <li>
                        <a href="report.php" id="menu" >Make A Report</a>
                    </li>

                   <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" id="menu">
                         Get Involved
                        </a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="get_involved.php"> Sign Up</a>
                            </li>
                            <li>
                                <a href="partner_login.php"> Log In</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>


    <div class="section section-header">
        <div class="parallax filter filter-color-black">
            <div class="image"
                style="background-image: url('assets/img/christmas-2971961_1920.jpg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area" style="margin-top: 80px;">
                        <h2>Today is a good day to lend a helping hand!</h2>
                        <div class="separator line-separator">♦</div>
                        <h4>please fill the login form to see latest reports in your dashboard</h4>
                        <div class="separator line-separator">♦</div>
                        <form method="post" action="partner_login.php">
                      <div class="form-group">
                        <h4>email:</h4>
                        <input type="email" class="form-control" name="email">
                      </div>
                      <div class="form-group">
                        <h4>password:</h4>
                        <input type="password" class="form-control" name="password">
                      </div>
                      <div class="button-get-started">
                        <input value="login" class="btn btn-danger btn-fill btn-lg" type="submit" name="login">
                    </div>
                    </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    
    <footer class="footer footer-big footer-color-black" data-color="black">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="info">
                        <h5 class="title">Navigate</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a></li>
                                <li>
                                    <a href="aboutus.html">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Work placr Assualt</a>
                                </li>
                                <li>
                                    <a href="#">Domestic Assualt</a>
                                </li>
                                <li>
                                    <a href="#">Campus Assualt</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-5">
                    <div class="info">
                        <h5 class="title">Follow us on</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-reddit btn-simple">
                                        <i class="fa fa-google-plus-square"></i> Google+
                                    </a>
                                    
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-twitter btn-simple">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                    
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                        <i class="fa fa-facebook-square"></i> Facebook
                                    </a>
                                    
                                </li>
                                <li>
                                 <a href="#" class="btn btn-social btn-dribbble btn-simple">
                                        <i class="fa fa-instagram"></i> Instagram
                                 </a>   
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                 © <script> document.write(new Date().getFullYear()) </script> Slash-hack-2.0 Team .
            </div>
        </div>
    </footer>

</body>

<!--   core js files    -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>

</html>
