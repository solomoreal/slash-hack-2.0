<?php 

      include_once "include/Organisation.php";
      include_once "include/Individual.php";
      include_once ('include/session.php');
      include_once ('include/function.php'); 
      if(!$session->is_logged_in()) redirect('logout.php');
      $msg = '';
      if(isset($_POST['submit'])){
        $org = Organisation::instantiate($_POST);
       
        if($org){
          if($org->insertOrg()){
            $msg = 'Organisation Created Successfully.';
          }else{
            $msg = 'Failed to create new Organisation .';
          }
        }else{
          $msg = 'Failed to create Organisation .';
        }
      }
       
 ?>

<!-- Template for creating additional pages -->
<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adic | Create Admin </title>
  <link rel="stylesheet" href="advanced/css/base.css">
  <link rel="stylesheet" href="advanced/css/style.css">
  <script src="advanced/js/modernizr.js"></script>
  <!-- icomoon.com -->
  <link rel="stylesheet" href="css/icomoon/demo-files/demo.css">
  <link rel="stylesheet" href="css/icomoon/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../css/Adic.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome/css/font-awesome.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src ="js/respond.js"></script>
</head>
<body class="bg-grey" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
 <div id="wrapper">
    
    <div id="header">
    </div><!-- #header -->
    
    <div id="content">
    </div><!-- #content -->
    
    <div id="footer">
    </div><!-- #footer -->
    
  </div><!-- #wrapper -->

     <div class='row'>
      <article class='col col-lg-9 col-md-8 col-sm-9'>
        <section class='row'>
          <div class='row'>
            <h1 class="col-lg-offset-4 col-md-offset-6 col-sm-offset-4 text-center">Add admin</h1>
          </div> 
          <br>         
          <div class="col-lg-offset-4 col-md-offset-5 col-sm-offset-3    ">
           <form  class='form-horizontal' action='contact.php' method='post'>           
          <div class='row text-center'>
            <?php echo $msg; ?>
          </div>
            <div>
            
              

              <div class='form-group'>
                <!-- <label class='control-label col col-lg-4'>Last Name</label> -->
                <div class='col col-lg-9 col-md-9 col-sm-9 col-xs-9'>
                  <input class='form-control' name='username' type='text' placeholder="User name">
                </div>
              </div>

              <div class='form-group'>
                <!-- <label class='control-label col col-lg-4'>email</label> -->
                <div class='col col-lg-9 col-md-9 col-sm-9 col-xs-9'>
                  <input class='form-control' name='email' type='email' placeholder="Email">
                </div>
              </div>

       
              <div class='form-group'>
                <!-- <label class='control-label col col-lg-4'>Password</label> -->
                <div class='col col-lg-9 col-md-9 col-sm-9 col-xs-9'>
                  <input class='form-control' name='password' type='password' placeholder="Password">
                </div>
              </div>

              <div class='form-group'>
                <!-- <label class='control-label col col-lg-4'>Confirm Password</label> -->
                <div class='col col-lg-9 col-md-9 col-sm-9 col-xs-9'>
                  <input class='form-control' name='password' type='password' placeholder="Confirm password">
                </div>
              </div>

             <div class='form-group'>
                <!-- <label class='control-label col col-lg-4'>Phone</label> -->
                <div class='col col-lg-9 col-md-9 col-sm-9 col-xs-9'>
                  <input class='form-control' name='phone' type='text' placeholder="Phone">
                </div>
              </div>

              <div class='form-group'>
                <!-- <label class='control-label col col-lg-4'>Address</label> -->
                <div class='col col-lg-9 col-md-9 col-sm-9 col-xs-9'>
                  <textarea class='form-control ' name='address' placeholder="Your address"></textarea>
                </div>
              </div>
              </div>
              <br>
               <div class='col col-lg-7 col-md-7 col-sm-9 col-sm-offset-5 col-lg-offset-5 col-md-offset-5 col-xs-offset-5'>
                <button type='submit' name='submit' class ='btn panel-footer-btn'>Submit Form</button>
              </div>
            </form>
            <div id="wrapper">
    
    <div id="header">
    </div><!-- #header -->
    
    <div id="content">
    </div><!-- #content -->
    
    <div id="footer">
    </div><!-- #footer -->
    
  </div><!-- #wrapper -->

          </div>
          </section>
        </article>
    <div id="wrapper">
    
    <div id="header">
    </div><!-- #header -->
    
    <div id="content">
    </div><!-- #content -->
    
    <div id="footer">
    </div><!-- #footer -->
    
  </div><!-- #wrapper -->
 <?php 
 // include_once('../footer_template.php');
 ?>