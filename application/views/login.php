<!DOCTYPE html>
<?php
?>
<html>
<head>
  <link rel="stylesheet" href="http://mydev.com/assests/css/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://mydev.com/assests/js/login.js"></script>
</head>






  <body>
      <div id="fullscreen_bg" class="fullscreen_bg"/>
      <div id="regContainer" class="container">
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="panel panel-login">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-6">
                      <a href="#" class="active" id="login-form-link">Login</a>
                    </div>
                    <div class="col-xs-6">
                      <a href="#" id="register-form-link">Register</a>
                    </div>
                  </div>
                  <hr>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <form id="login-form" action="#" method="post" role="form" style="display: block;">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Enter Email" value="">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="paswrd" id="paswrd" tabindex="2" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group text-center">
                          <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                          <label for="remember"> Remember Me</label>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                              <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                            </div>
                          </div>
                        </div>
                      </form>
                      <form id="register-form" action="http://mydev.com/Registration/add_user" method="post" role="form" style="display: none;">
                        <div class="form-group">
                          <label for="firstname">First Name</label>
                          <input type="text" name="fname" id="fname" tabindex="1" class="form-control" placeholder="Enter First Name" value="">
                        </div>
                          <div class="form-group">
                              <label for="lastname">Last Name</label>
                              <input type="text" name="lname" id="lname" tabindex="1" class="form-control" placeholder="Enter Last Name" value="">
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="text" name="email" id="reemail" tabindex="1" class="form-control" placeholder="Enter Email" value="" onkeyup='validateEmail();'>
                              <span id='mesage'></span>
                          </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="paswrd" id="rePaswrd" tabindex="2" class="form-control" placeholder="Enter Password" >
                        </div>
                        <div class="form-group">
                          <label for="confirm-password">Confirm password</label>
                          <input type="password" name="confirm-paswrd" id="confirm-paswrd" tabindex="2" class="form-control" placeholder="Confirm Password" onkeyup='check();'>
                            <span id='message'></span>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                              <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </body>
</html>