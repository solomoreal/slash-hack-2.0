<?php 
    
    include_once 'include/assault.php';
    $msg = '';
    if (isset($_POST['submitReport'])){
    
        $report = AssaultReport::instantiate($_POST);
        // var_dump($reporter);
          if($report){
                if ($report->insertNewReport()){
                   $msg = "<div class='alert alert-success alert-dismissable'>
                <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h4 class='text-center'><strong>Report Sent Successfully.</strong></h4>
                <p class='text-center'>Thank You For Confiding In Us, We will Keep In Touch With You Through the contact Information You provided In the Form.</p>
                </div>";
                }else {
                  $msg = "<div class='alert alert-danger alert-dismissable'>
                <a href='#' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
                <h4 class='text-center'><strong>Oops.. Something went Wrong.</strong></h4>
                <p class='text-center'>Please check your Inputs and try again.</p>
                </div>";
                }
            
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
                style="background-image: url('assets/img/full-screen-image.jpg')">
            </div>
            <div class="container">
                <div class="content">
                    <?php echo "$msg"; ?>
                    <div class="title-area">
                        <h1 class="title-modern">Make A Report</h1>
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
                    <h2>Why You Should Make A Report.</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">The information that will be collected here is used to help enhance understanding of our society climate so that we may strengthen sexual violence response and prevention efforts.
                    Survivors can also use this form to request support. Survivors who may not initially be inclined to report a sexual assault to the police or to other Law Enforcement have the right to change their mind at any time. Information the Individual provides on this reporting form can be used at any time should the survivor so choose.</p>
                </div>
        </div>
    </div>

    <div class="section section-our-team-freebie">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('assets/img/bokeh-1569531_1920.jpg')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">Report Form</h2>
                </div>
            <form action="report.php" method="post">
                <div class="col-md-offset-2 col-md-8 col-sm-4 col-md-offset-2" style="text-align: center;">
                    <h3>Reporter's Information (the reporter and survivor can be different People)</h3>
                    <div class="separator line-separator">♦</div>
                      <div class="form-group">
                        <h4>First Name:</h4>
                        <input type="text" class="form-control" name="reporter_first_name" required="">
                      </div>
                      <div class="form-group">
                        <h4>Last Name(Optional):</h4>
                        <input type="text" class="form-control" name="reporter_last_name">
                      </div>
                      <div class="form-group">
                        <h4>Email:</h4>
                        <input type="email" class="form-control" name="reporter_email" required="">
                      </div>
                </div>

                <div class="col-md-offset-2 col-md-8 col-sm-4 col-md-offset-2" style="text-align: center;">
                    <h3>Survivor's Information</h3>
                    <div class="separator line-separator">♦</div>
                      <div class="form-group">
                        <h4>First Name:</h4>
                        <input type="text" class="form-control" name="survivor_first_name" required="">
                      </div>
                      <div class="form-group">
                        <h4>Last Name(Optional):</h4>
                        <input type="text" class="form-control" name="survivor_last_name">
                      </div>
                      <div class="form-group">
                        <h4>Survivor's Gender:<h4><br>
                        <label class="radio-inline"><input type="radio" name="survivor_gender" value="Male">Male</label>
                        <label class="radio-inline"><input type="radio" name="survivor_gender" value="Female">Female</label>
                      </div>
                </div>

                <div class="col-md-offset-2 col-md-8 col-sm-4 col-md-offset-2" style="text-align: center;">
                    <h3>Offender(s) Information</h3>
                    <div class="separator line-separator">♦</div>
                      <div class="form-group">
                        <h4>Number Of Offender(s):</h4>
                        <input type="text" class="form-control" name="num_offenders">
                      </div>
                      <div class="form-group">
                        <h4>Names of Offender(s) (if Known):</h4>
                        <input type="text" class="form-control" name="name_offenders">
                      </div>
                      <div class="form-group">
                        <h4>Gender(s) of Offender(s):</h4><br>
                        <label class="radio-inline"><input type="radio" name="gender_offenders" value="Male">Male</label><br>
                        <label class="radio-inline"><input type="radio" name="gender_offenders" value="Female">Female</label><br>
                        <label class="radio-inline"><input type="radio" name="gender_offenders" value="Multiple Males">Multiple Males</label><br>
                        <label class="radio-inline"><input type="radio" name="gender_offenders" value="Multiple Females">Multiple Females</label><br>
                        <label class="radio-inline"><input type="radio" name="gender_offenders" value="Males and Females">Males and Females</label><br>
                        <label class="radio-inline"><input type="radio" name="gender_offenders" value="Unknown">Unknown</label>
                      </div>
                      <div class="form-group">
                        <h4>Offender(s) Relationship to Survivor:</h4>
                        <label class="radio-inline"><input type="radio" name="relationship" value="Partner,Girlfriend, or Boyfriend">Partner,Girlfriend, or Boyfriend</label><br>
                        <label class="radio-inline"><input type="radio" name="relationship" value="Friend">Friend</label><br>
                        <label class="radio-inline"><input type="radio" name="relationship" value="Ex-Partner,Ex-Girlfriend, or Ex-Boyfriend">Ex-Partner,Ex-Girlfriend, or Ex-Boyfriend</label><br>
                        <label class="radio-inline"><input type="radio" name="relationship" value="Colleague or co-worker">Colleague or co-worker</label><br>
                        <label class="radio-inline"><input type="radio" name="relationship" value="Acquaintance">Acquaintance</label><br>
                        <label class="radio-inline"><input type="radio" name="relationship" value="Stranger">Stranger</label>
                      </div>
                </div>

                <div class="col-md-offset-2 col-md-8 col-sm-4 col-md-offset-2" style="text-align: center;">
                    <h3>Assault Information</h3>
                    <div class="separator line-separator">♦</div>
                      <div class="form-group">
                        <h4>Date of Assault:</h4>
                        <input type="date" class="form-control" name="date_of_assault">
                      </div>
                      <div class="form-group">
                        <h4>Time of Assault:</h4>
                        <input type="time" class="form-control" name="time_of_assault">
                      </div>
                      <div class="form-group">
                        <h4>Location Of Assault:</h4>
                        <input type="text" class="form-control" name="location_assault">
                      </div>
                      <div class="form-group">
                        <h4>Reported Assault (Check all that Apply):</h4>
                        <label class="checkbox"><input type="checkbox" name="assault_type" value="Attempted Sexual Assault/Misconduct/Harassment">Attempted Sexual Assault/Misconduct/Harassment</label>
                        <label class="checkbox"><input type="checkbox" name="assault_type" value="Completed Sexual Assault/Misconduct/Harassment">Completed Sexual Assault/Misconduct/Harassment</label>
                        <label class="checkbox"><input type="checkbox" name="assault_type" value="Attempted Domestic Violence">Attempted Domestic Violence</label>
                        <label class="checkbox"><input type="checkbox" name="assault_type" value="Completed Domestic Violence">Completed Domestic Violence</label>
                      </div>
                      <div class="form-group">
                        <h4>Was the Survivor given Alcohol and/or other drugs without consent or Knowledge? (check all that apply):</h4>
                        <label class="checkbox"><input type="checkbox" name="influence" value="Yes, alcohol">Yes, alcohol</label>
                        <label class="checkbox"><input type="checkbox" name="influence" value="Yes, Drugs">Yes, Drugs</label>
                        <label class="checkbox"><input type="checkbox" name="influence" value="No">No</label>
                        <label class="checkbox"><input type="checkbox" name="influence" value="Unknown">Unknown</label>
                      </div>                                           
                </div>

                <div class="col-md-offset-2 col-md-8 col-sm-4 col-md-offset-2" style="text-align: center;">
                    <h3>Description of the Incident:</h3>
                    <div class="separator line-separator">♦</div>
                      <div class="form-group">
                        <h4>If you wish, write a description of the incident and attach to this form:</h4>
                        <textarea class="form-control" rows="10" name="assault_desc"></textarea>
                      </div>

                    <div class="button-get-started">
                         <input class="btn btn-danger btn-fill btn-lg " role="button" name="submitReport" type="submit" value="SUBMIT REPORT" aria-pressed="true">
                    </div>

                </div>
            </form>
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
