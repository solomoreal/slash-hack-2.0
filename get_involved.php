<?php 

    include_once "include/Organisation.php";
      include_once "include/Individual.php";
      include_once ('include/session.php');
      include_once ('include/function.php'); 
      // if(!$session->is_logged_in()) redirect('logout.php');
      $msg = '';
      if(isset($_POST['IndividualSubmit'])){
        $ind = Individual::instantiate($_POST);
       
        if($ind){
          if($ind->insertPartner()){
            $msg = "<div class='alert alert-success alert-dismissable'>
                <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h4 class='text-center'><strong>Thank You for Partnering with Us.</strong></h4>
                <p class='text-center'>You are almost there, go to your inbox and confirm the link sent to You.</p>
                </div>";
          }else{
            $msg = "<div class='alert alert-danger alert-dismissable'>
                <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h4 class='text-center'><strong>Registration Failed!</strong></h4>
                <p class='text-center'>Something went wrong, check your inputs and try again.</p>
                </div>";
          }
        }else{
          $msg = 'Failed to create Organisation .';
        }
      }

      if(isset($_POST['OrganisationSubmit'])){
        $ind = Organisation::instantiate($_POST);
       
        if($ind){
          if($ind->insertPartner()){
            $msg = "<div class='alert alert-success alert-dismissable'>
                <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h4 class='text-center'><strong>Thank You for Partnering with Us.</strong></h4>
                <p class='text-center'>You are almost there, go to your inbox and confirm the link sent to You.</p>
                </div>";
          }else{
            $msg = "<div class='alert alert-danger alert-dismissable'>
                <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h4 class='text-center'><strong>Registration Failed!</strong></h4>
                <p class='text-center'>Something went wrong, check your inputs and try again.</p>
                </div>";
          }
        }else{
          $msg = 'Failed to create Organisation .';
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
    <title>Get Involved</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/gaia.css" rel="stylesheet"/>
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
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
                <a href="index.html" class="navbar-brand" id="sitename">
                    SiteName
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li>
                        <a href="aboutus.html" id="menu" >About Us</a>
                    </li>
                    
                    <li>
                        <a href="report.html" id="menu" >Make A Report</a>
                    </li>

                   <li>
                        <a href="get_involved.php" id="menu">Get Involved</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>


    <div class="section section-header">
        <div class="parallax filter filter-color-black">
            <div class="image"
                style="background-image: url('assets/img/full-screen-image-3.jpg')">
            </div>
            <div class="container">
                <div class="content">
                <?php
                    echo "$msg";
                 ?>
                    <div class="title-area">
                        <h1 class="title-modern">Get Involved</h1>
                        <div class="separator line-separator">♦</div>
                        <h3>Reporting a sexual crime is already a daunting task in our today society, so we hope to remove stigmas surrounding sexual assault and other related Violence.</h2>
                        <div class="separator line-separator">♦</div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row"   >
                <div class="title-area">
                    <h2>Who are our Partners</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">We are willing to work with any Concerned  Individual or Organisation to provide help to Individuals Affected by these Issues. Help Us try to Make the world a better place devoid from Sexual Assault and Domestic Violence</p>
                </div>
        </div>
    </div>

    <div class="section section-our-team-freebie">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('assets/img/grassland.jpg')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">Get Involved As an Organisation</h2>
                </div>
                <div class="col-md-offset-2 col-md-8 col-sm-4 col-md-offset-2" style="text-align: center;">
                    <div class="separator line-separator">♦</div>
                    <form action="get_involved.php" method="post">

                        <div class="form-group">
                            <h4>Name of organisation</h4>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <h4>Email</h4>
                            <input type="email" class="form-control" name="email">
                        </div>

                        <div class="form-group">
                            <h4>Headquarters</h4>
                            <input type="text" class="form-control" name="location">
                        </div>

                        <div class="form-group">
                            <h4>Website (if available):</h4>
                            <input type="text" class="form-control" name="website">
                        </div>

                        <div class="form-group">
                            <h4>Password</h4>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <!-- make reason drop down -->
                         <div class="form-group">
                            <h4>Reason for interest</h4>
                            <!-- <input type="text" class="form-control" name="reason"> -->
                            <textarea class="form-control" name="interest" rows="5"></textarea>
                        </div>

                       

                        <div class='col'>
                            <button type='submit' name='OrganisationSubmit' class ='btn button-get-started'>Submit Form</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <div class="section section-our-team-freebie">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('assets/img/invovle.jpg')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">Get Involved As an Individual</h2>
                </div>
                <div class="col-md-offset-2 col-md-8 col-sm-4 col-md-offset-2" style="text-align: center;">
                    <div class="separator line-separator">♦</div>
                    <form action="get_involved.php" method="post">

                        <div class="form-group">
                            <h4>First name</h4>
                            <input type="text" class="form-control" name="first_name">
                        </div>

                        <div class="form-group">
                            <h4>Last name</h4>
                            <input type="text" class="form-control" name="last_name">
                        </div>

                        <div class="form-group">
                            <h4>Email:</h4>
                            <input type="email" class="form-control" name="email">
                        </div>

                        <div class="form-group">
                            <h4>Password</h4>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <h4>Location:</h4>
                            <input type="text" class="form-control" name="location">
                        </div>

                        <div class="form-group">
                            <h4>Reason for Interest:</h4>
                            <!-- <input type="password" class="form-control" name="interest"> -->
                            <textarea class="form-control" name="interest" rows="5"></textarea>
                        </div>

                        <div class='col'>
                            <button type='submit' name='IndividualSubmit' class ='btn button-get-started'>Submit Form</button>
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
                                    <a href="#">Home</a></li>
                                <li>
                                    <a href="#">About Us</a>
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