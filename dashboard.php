<?php
    include_once 'include/session.php';
    include_once 'include/partner.php';
if(!($session->is_logged_in())) redirect('login.php');
$partner = Partner::find($session->user_id);





?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard by Creative Tim</title>
=======
	<title>dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/icons.css">

</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="#e78b90" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    SiteName
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.php">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Welcome  <?php echo $partner->username;?> </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Account
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Your profile</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Notifications</a></li>
                                <li class="divider"></li>
                                <li><a href="http://www.Facebook.com">Invite people or organizations</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="partner_login.php">
                                <p>Log out</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


      <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            
                            <div class="content all-icons">
                                <div class="row">


                                  <div class="font-icon-list col-lg-6 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                      <a href="table.php">
                                        <div class="font-icon-detail"><i class="pe-7s-user"></i>
                                          <input type="text" value="Get in touch with the people affected">
                                        </div>
                                      </a>
                                  </div>

                                  <div class="font-icon-list col-lg-6 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                    <a href="table.php">
                                        <div class="font-icon-detail"><i class="pe-7s-global"></i>
                                          <input type="text" value="Get in touch with the organisations involved">
                                        </div>
                                      </a>
                                  </div>
                                      
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer footer-big footer-color-black" data-color="black">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="info">
                            <h5 class="title">Navigate</h5>
                            <nav>
                                <ul style="text-align: center;">
                                    <li>
                                        <a href="index.hml">Home</a></li>
                                    <li>
                                        <a href="aboutus.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Work place Assualt</a>
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
                            <ul style="text-align: center;">
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
            </div>
                <p class="copyright">
                    &copy; <script>document.write(new Date().getFullYear())</script> Slash-hack-2.0 Team 
                </p>
            </div>
        </footer>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/table.js"></script>
    <script src="assets/js/demo.js"></script>



</html>
