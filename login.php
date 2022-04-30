<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>ระบบร้านเสน่ห์​หนังสือ​ออนไลน์​</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <style>
    .cont
    {
      height: 550px;
    }
    @media only screen and (max-width: 991px)
    {
      .cont
      {
        height: auto;
      }
      .authentication-main .auth-innerright .card-body .theme-form
      {
          margin-bottom: 450px;
      }

        .authentication-main .auth-innerright .card-body .s--signup .theme-form
        {
          height: 470px;
          margin-top: 280px;
        }

  }
  </style>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="typewriter">
        <h1>Welcome  Loading..</h1>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <!-- login page start-->
        <div class="authentication-main">
          <div class="row">
            <div class="col-md-12">
              <div class="auth-innerright">
                <div class="authentication-box">
                  <div class="card-body p-0">
                    <div class="cont text-center">
                      <div> 
                        <form class="theme-form" action="action/login.php?ac=login" method="POST">
                          <h4>LOGIN</h4>
                          <h6>Enter your Username and Password</h6>
                          <div class="form-group">
                            <label class="col-form-label pt-0">Your Name</label>
                            <input class="form-control" type="text" name="mem_email" required>
                          </div>
                          <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input class="form-control" type="password"name="mem_password"  required>
                          </div>
                          
                          <div class="float-left">
                            <input id="checkbox1" type="checkbox">
                            <label for="checkbox1">Remember me</label>
                          </div>
                          <div class="float-right">
                            <a href="forgot.php" class="p-0 text-lg text-dark text-decoration-none " >Forgotpassword?</a>
                          </div>
                          <div class="form-group  mt-3 mb-0">
                            <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
                          </div>

                        </form>
                      </div>
                      <div class="sub-cont">
                        <div class="img">
                          <div class="img__text m--up">
                            <h2>New here?</h2>
                            <p>Sign up and discover great amount of new opportunities!</p>
                          </div>
                          <div class="img__text m--in">
                            <h2>One of us?</h2>
                            <p>If you already has an account, just sign in. We've missed you!</p>
                          </div>
                          <div class="img__btn" style=" margin-top:-50px;"><span class="m--up">Sign up</span><span class="m--in">Sign in</span></div>
                        </div>
                        <div>
                          <form class="theme-form" action="action/login.php?ac=reg" method="post" >
                            <h4 class="text-center">NEW USER</h4>
                            <h6 class="text-center">Enter your Username and Password For Signup</h6>
                            <div class="form-row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <input class="form-control" name="mem_name" type="text" placeholder="First Name - Last Name">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <input class="form-control" name="mem_phone" type="text" placeholder="Phone">
                                </div>
                              </div>
                              <div class="col-md-12">
                              <div class="form-group">
                                <textarea class="form-control" name="mem_address" col="5" rows="3" placeholder="Address" ></textarea>
                              </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <input class="form-control" name="mem_email" type="text" placeholder="User Name">
                            </div>
                            <div class="form-group">
                              <input class="form-control" name="new-mem_password1" id="mem_password1" type="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                              <input class="form-control" name="mem_password" id="mem_password2" type="password" placeholder="Password">
                            </div>
                            <div class="form-row">
                              <div class="col-sm-12">
                                <button class="btn btn-primary" type="submit">Sign Up</button>
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
          </div>
        </div>
        <!-- login page end-->
      </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/login.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizers.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>