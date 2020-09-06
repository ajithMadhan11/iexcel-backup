<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>iExcel</title>
    <link rel="stylesheet" href="./style/style.css">
    <script src="./js/index.js"> </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <style>
    /* *{
  background-color: red;
    box-sizing: border-box;
    padding: 0;
    margin: 0;
  } */

  body {
    background-color: #E8EEEF;
    color: rgb(56, 64, 71);
    font-family: Nunito, sans-serif;
  }

  form {

    margin: auto;
    margin-top: 15px;
    padding: 30px;
    width:100%;
    border: rgb(232, 238, 239);
    background-color: rgb(232, 238, 239);
    background-clip: border-box;
  }

  h1 {
    margin-bottom: 20px;
    text-align: center;
  }

  fieldset {
    border: none;
    margin-bottom: 60px;
  }

  legend {
    text-align: center;
    padding-bottom: 10px;
    font-size: 1.5em;
    margin-bottom: 20px;
  }

  .number {
    background-color: #5fcf80;
    border-radius: 50%;
    color: #fff;
    font-size: 1rem;
    padding: 5px 10px;
  }

  label {
    display: block;
    margin: 10px ;
    margin-left: 15px;
  }

  input[type="text"],
  input[type="email"],
  input[type="number"],
  input[type="password"],
  textarea,
  select {
    background: rgba(0,0,0,0.031);
    border: none;
    border-radius: 2px;
    color: rgb(138, 151, 160);
    margin-bottom: 20px;
    padding: 20px;
    width: 94%;
  }

  select {
    font-size: 1em;
    padding: 5px;
    border: 1px solid  #29D9A3 !important;
  }

  .light {
    display: inline-block;
  }

  .button {
    background: linear-gradient(to right, rgb(44, 221, 155) 0%, rgb(29, 200, 204) 100%);
    border: none;
    border-radius: 7px;
    color: #fff;
    font-size: 1.2em;
    margin-top: 20px;
    padding: 20px;
    width: 100%;
  }
  p{
    padding-top: 15px;
  }
  .text{
    text-align: center;
    margin-bottom: 50px;
  }
  .lform{
    text-align: center;
    width: 50%;
    margin:auto;

  }

    </style>

<!-- Header with navbar -->

<!-- <div class="conainer"> -->
  <?php
      if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
          include 'user.php';
          $user = new User();
          $conditions['where'] = array(
              'id' => $sessData['userID'],
          );
          $conditions['return_type'] = 'single';
          $userData = $user->getRows($conditions);
  ?>
  <div class="L-tewelve">
    <div class="row">
      <header class="header">
        <div class="logo-container">
          <h1>iExcel</h1>
          <span class="toggle-btn">&#9776;</span>
        </div>
        <ul class="display-none-mobile">
          <li><a href="#home">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#contact">Contact</a></li>
          <div class="dropdown show">
          <a class="btn btn_head btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user">&nbsp;<?php echo $userData['first_name']; ?></span></a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="#">Dashboard</a>
        <a class="dropdown-item logout" href="userAccount.php?logoutSubmit=1">Logout</a>
      </div>
    </div>
        </ul>
      </header>
      <div id="home" class="banner-wrapper-fixed">
        <div class="foreground">
          <h1>iEXCEL</h1>
          <h2>Insight for Future</h2>
        </div>
      </div>
      <div class="wrapper">
      </div>
    </div>
  </div>
  <!-- end of header -->

  <!-- Services section -->

  <div class="L-tewelve">
  <div class="row">
  <div id="services" class="section">
  <h1 class="heading">Services</h1>
  <div class="bg-light py-5 service-11 ser">
    <div class="container">
      <!-- Row  -->
      <div class="row">
        <!-- Column -->
        <div class="col-md-4 wrap-service11-box">
          <div class="card card-shadow border-0 mb-4">
            <div class="p-4">
              <div class="icon-space">
                <div class="icon-round text-center d-inline-block rounded-circle bg-success-gradiant"><span class="fa fa-info"></span></div>
              </div>
              <h6 class="font-weight-medium">Inplace Training</h6>
              <p class="mt-3">You can relay on our amazing training experience in which you can gain a Real industry experience.</p>
              <input class="explorebtn" align="center" type="button" value="Learn More →"   data-toggle="modal" data-target="#modal1">
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-4 col-sm-12 wrap-service11-box">
          <div class="card card-shadow border-0 mb-4">
            <div class="p-4">
              <div class="icon-space">
                <div class="icon-round text-center d-inline-block rounded-circle bg-success-gradiant"><i class="fa fa-child" aria-hidden="true"></i></div>
              </div>
              <h6 class="font-weight-medium">Inplant Training</h6>
              <p class="mt-3">You can relay on our amazing training experience in which you can gain a Real industry experience.</p>
              <input class="explorebtn" align="center" type="button" value="Learn More →"   data-toggle="modal" data-target="#modal2">

            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-4 wrap-service11-box">
          <div class="card card-shadow border-0 mb-4">
            <div class="p-4">
              <div class="icon-space">
                <div class="icon-round text-center d-inline-block rounded-circle bg-success-gradiant"><i class="fa fa-users" aria-hidden="true"></i></div>
              </div>
              <h6 class="font-weight-medium">Internship Training</h6>
              <p class="mt-3">You can relay on our amazing training experience in which you can gain a Real industry experience.</p>
              <input  class="explorebtn" align="center" type="button" value="Learn More →"   data-toggle="modal" data-target="#modal3">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>

  <!-- services section modal -->

  <!-- 1st modal -->
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Conatent head</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
        <button class=" contact_btn btn-primary btn-block" type="submit">Register now</button>

        </div>
      </div>
    </div>
  </div>
  <!-- 2nd modal -->
  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Conatent head</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
        <button class=" contact_btn btn-primary btn-block" type="submit">Register now</button>

        </div>
      </div>
    </div>
  </div>
  <!-- 3rd modal -->
  <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Conatent head</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
        <button class=" contact_btn btn-primary btn-block" type="submit">Register now</button>

        </div>
      </div>
    </div>
  </div>


  <!-- About us section -->

          <div id="about" class="section">
            <h1 class="heading">About us</h1>
            <div class="container" data-aos="fade-up">
              <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                  <h2 class="title">Few Words About Us</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>

                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                    <h4 class="title"><a href="">Content 1</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                  </div>

                  <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="fa fa-home"></i></div>
                    <h4 class="title"><a href="">Content 2</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                  </div>

                  <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="fa fa-home"></i></div>
                    <h4 class="title"><a href="">Content 3</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                  </div>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100">
                  <img class="abt-img" src="./images/about-img.jpg" alt="">
                </div>
              </div>

            </div>

            <!-- team card section -->
            <div class="container">
              <h2 class="mb-2 title">Our Team</h2>
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="our-team">
                    <img src="https://images.pexels.com/photos/157646/title-photo-logo-shirt-157646.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="team member" class="img-responsive">
                    <div class="team-content">
                      <h3 class="name">Peter</h3>
                      <span class="post">Chief Executive Officer</span>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-6">
                  <div class="our-team">
                    <img src="https://static.pexels.com/photos/38554/girl-people-landscape-sun-38554.jpeg" alt="team member" class="img-responsive">
                    <div class="team-content">
                      <h3 class="name">Kellie Smith</h3>
                      <span class="post">Chief Financial Officer</span>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-6">
                  <div class="our-team">
                    <img src="https://images.pexels.com/photos/157646/title-photo-logo-shirt-157646.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="team member" class="img-responsive">
                    <div class="team-content">
                      <h3 class="name">Johnson</h3>
                      <span class="post">Chief Operating Office</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

  <!-- Testmonial Section -->

          <div id="testimonials" class="section">
            <div class="testimonials text-center">

                <div class="container">
                  <h3>Testimonials</h3>
                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                      <div class="card border-light bg-light text-center">
                        <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                        <div class="card-body blockquote">
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer bibendum enim eu nibh finibus</p>
                          <footer class="blockquote-footer"><cite title="Source Title">Mohamed Nady</cite></footer>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                      <div class="card border-light bg-light text-center">
                        <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                        <div class="card-body blockquote">
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer bibendum enim eu nibh finibus</p>
                          <footer class="blockquote-footer"><cite title="Source Title">Mohamed Reda</cite></footer>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                      <div class="card border-light bg-light text-center">
                        <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                        <div class="card-body blockquote">
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer bibendum enim eu nibh finibus</p>
                          <footer class="blockquote-footer"><cite title="Source Title">Mohamed Atef</cite></footer>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                </div>

  <!-- Conatct us section -->
    <div id="contact" class="row section mb-12">
      <div class="container">
    <h3 id="contactus_head">Conatct Us</h3>
  <div class="row">
    <div class="col col-md-6 col-sm-12">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4013120.5974764987!2d76.04350997803152!3d10.806480514915469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c582b1189633%3A0x559475cc463361f0!2sTamil%20Nadu!5e0!3m2!1sen!2sin!4v1599371936399!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="col col-md-6 col-sm-12 ">
      <div class=" col-md-12 ">
        <div class="contact-clean">
            <form method="post">
                <h2 class="text-center">Message us</h2>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                <div class="form-group"><input class="form-control " type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control " type="mobile" name="mobile" placeholder="Phone Number"></div>
                <div class="form-group"><textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea></div>
                <div class="form-group"><button class=" contact_btn btn-primary btn-block" type="submit">Request a Callback</button></div>
            </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

    <footer class="footer1">

        <div class="row justify-content-center">
          <div class="col-auto">
            <p>© Copyright 2020 iexcel All rights reserved</p>
          </div>
        </div>


    </footer>
  <?php }else{ ?>
  <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
  <div class="col-md-12  regisFrm">
    <div class="lform">
      <form action="userAccount.php" method="post">
        <h2> Login</h2>

          <input type="email" name="email" placeholder="Email" required="">
          <input type="password" name="password" placeholder="Password" required="">

              <input class="button" type="submit" name="loginSubmit" value="LOGIN">

          <p>Don't have an account? <a href="./registration.php">Register</a></p>

      </form>
  </div>
    </div>

  <?php } ?>








<!-- Functional Scripts -->
<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
