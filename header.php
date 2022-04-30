      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right">
          <div class="main-header-left text-center">
            <div class="logo-wrapper"><a href="index.php"><img src="images/logo.jpg" height="80" style=" object-fit: coverว" ></a></div>
          </div>
          <div class="mobile-sidebar">
            <div class="media-body text-right switch-sm">
              <label class="switch ml-3"><i class="font-primary" id="sidebar-toggle" data-feather="align-center"></i></label>
            </div>
          </div>
          <div class="vertical-mobile-sidebar"><i class="fa fa-bars sidebar-bar"></i></div>
          <div class="nav-right col pull-right right-menu">
            <ul class="nav-menus">
              <li>
                <form class="form-inline search-form" action="index.php?p=showproduct" method="post">
                  <div class="form-group">
                    <div class="Typeahead Typeahead--twitterUsers">
                      <div class="u-posRelative">
                        <input class="Typeahead-input form-control-plaintext" id="demo-input" type="text" name="keyword" placeholder="Search Your Product...">
                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                      </div>
                      <div class="Typeahead-menu"></div>
                    </div>
                  </div>
                </form>
              </li>
              <?php  if(isset($_SESSION['mem_id']) <> session_id()){ ?>  
        <li class="nav-item">
        <a class="nav-link mt-2 font-weight-bold" href="login.php">REGISTER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mt-2 font-weight-bold" href="login.php">SIGN IN</a>
      </li>
   <?php } ?>


              <li><a class="right_side_toggle" href="<?php if(isset($_SESSION['inline']) != ''){echo "index.php?p=cart";}else{ echo "javascript: void(0);";}?>"><i class="icon-shopping-cart h4"></i></a></li>
              <li class="onhover-dropdown"> <span class="media user-header"><img class="img-fluid" src="assets/images/dashboard/user.png" alt=""></span>
                <ul class="onhover-show-div profile-dropdown">
                  <li class="gradient-primary">
                    <h5 class="f-w-600 mb-0"><?php echo $_SESSION['mem_name'];?></h5>
                  </li>
                  <a href="index.php?p=showorder"><li><i data-feather="hard-drive"> </i>Show order</li></a> 
                 <a href="index.php?p=profile"><li><i data-feather="user"> </i>Profile</li></a> 
                 <a href="logout.php"><li><i data-feather="settings"> </i>Logout</li></a> 
                </ul>
              </li>
            </ul>
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
          </div>
          <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><i class="pe-7s-home"></i></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->