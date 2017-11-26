<?php

include_once 'PHP_FOLDER/story.php';
    $result = '';
    if (isset($_POST['click'])){
        $story = Story::instantiate($_POST);
             $header = ' Share Story';
          $message ='Your Story was successsfully Shared.';
          $message2 = 'your story was not shared, Try again!';
          if($story)
            if ($story->TellStory()){
               $result = '<div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <strong>Success!</strong>'." $header ".'<hr/>'." $message ".'</div>';
            }else {
              $result = '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong> OOops! </strong>' ." $header ". '<hr/>'." $message2 ".'</div>';
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
                        <a href="get-involved.html" id="menu">Get Involved</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>


    <div class="section section-header">
        <div class="parallax filter filter-color-black">
            <div class="image"
                style="background-image: url('assets/img/report.jpg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <h1 class="title-modern">SHARE YOUR STORY </h1>
                        <div class="separator line-separator">♦</div>
                        <h3>If you think you don't want to share your report for others to see and read, you can reach directly to por partners.</h2>
                        <div class="separator line-separator">♦</div>
                    </div>
                </div>
                 <div>
                    <?php echo $result;?>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row"   >
                <div class="separator line-separator">♦</div>
                        <h3>share your stories of experience to you or anyone you know was affected by this evil act.</h2>
                <div class="separator line-separator">♦</div
        </div>
    </div>

    <div class="section section-our-team-freebie">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('assets/img/grassland.jpg')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">Story Form</h2>

                </div>
               
                <div class="col-md-offset-2 col-md-8 col-sm-4 col-md-offset-2" style="text-align: center;">
                    <h3>Please leave this section blank if you do not wish to be contacted</h3>
                    <div class="separator line-separator">♦</div>
                    <form action="share_story.php" method="post">
                          <div class="form-group">
                            <h4>Phone Number:</h4>
                            <input type="phone" class="form-control" name="phone">
                          </div>
                          <div class="form-group">
                            <h4>Email:</h4>
                            <input type="email" class="form-control" name="email">
                          </div>
                        
                    </div>

                    <div class="col-md-offset-2 col-md-8 col-sm-4 col-md-offset-2" style="text-align: center;">
                        <h3>Reporter Information</h3>
                        <div class="separator line-separator">♦</div>
                        
                          <div class="form-group">
                            <h4>First Name:</h4>
                            <input type="text" class="form-control" name="first_name">
                          </div>
                          <div class="form-group">
                            <h4>Last Name(Optional):</h4>
                            <input type="text" class="form-control" name="last_name">
                          
                          
                        
                    </div>    
                  
                    <div class="col-md-offset-2 col-md-8 col-sm-4 col-md-offset-2" style="text-align: center;">

                        <h3>make report:</h3>
                        <div class="separator line-separator">♦</div>
                            <div class="form-group">
                            <h4>make sure the story guine. </h4>
                            <textarea class="form-control" rows="10" name="story">
                            
                                
                            </textarea>
                           </div> 
                  
                  <div class="button-get-started">
                        <input class="btn btn-danger btn-fill btn-lg active" role="button" aria-pressed="true" name="click" type="submit">
                    </div>
                 </form>    
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
