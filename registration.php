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
    <title>Regstration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <style media="screen">
  <style>
  *{
background-color: red;
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

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
  width: 100%;
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

  </style>

  <body>

    <div class="container">
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
        <div class="regisFrm">

            <form action="userAccount.php" method="post">
              <h2 class="text"> iExcel Registration</h2>
<div class="row ">
<div class="col col-md-6 col-xs-12 col-sm-12">
<label for="name">First Name:</label>
  <input type="text" name="first_name" required="">

</div>
<div class="col col col-md-6 col-xs-12 col-sm-12">
  <label for="name">Last Name:</label>
  <input type="text" name="last_name"  required="">

</div>
</div>
<div class="row">
<div class="col col col-md-6 col-xs-12 col-sm-12">
  <label for="email">Email:</label>
  <input type="email" name="email" required="">

</div>
<div class="col col col-md-6 col-xs-12 col-sm-12">
  <label for="name">Mobile Number:</label>
  <input type="text" name="phone"  required="">

</div>
</div>
<div class="row">
<div class="col col col-md-6 col-xs-12 col-sm-12">
  <label for="password">Password:</label>
  <input type="password" name="password"  required="">

</div>
<div class="col col col-md-6 col-xs-12 col-sm-12">
  <label for="password"> Confirm Password:</label>
  <input type="password" name="confirm_password"  required="">

</div>
</div>

                <div class="send-button">
                    <input class="button"type="submit" name="signupSubmit" value="CREATE ACCOUNT">
                </div>
                <p> Already have a account?<a href="index.php">&nbsp;Login</a> &nbsp;&nbsp;Are you a Trainer? <a href="">&nbsp;Register</a>  as Trainer.</p>
            </form>
        </div>
    </div>

  </body>
</html>
