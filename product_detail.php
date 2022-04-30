<?php 
    session_start();
    include("confic.php");
    $sql = $conn->query("UPDATE tb_product SET pro_hit = pro_hit +1 WHERE pro_id = '".$_REQUEST['pro_id']."' ");
?>


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
    <link rel="stylesheet" type="text/css" href="assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/rating.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pe7-icon.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <style>
      .page-wrapper .page-body-wrapper .iconsidebar-menu .iconMenu-bar li:active .bar-icons:before, .page-wrapper .page-body-wrapper .iconsidebar-menu .iconMenu-bar li:focus .bar-icons:before, .page-wrapper .page-body-wrapper .iconsidebar-menu .iconMenu-bar li.open .bar-icons:before
      {
        height: auto;
      }
      .page-wrapper .page-body-wrapper .iconsidebar-menu .iconMenu-bar
      {
        width: 115px;
      }
    </style>
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="typewriter">
        <h1>New Era Admin Loading..</h1>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
       <!-- Page Header Start-->
       <div class="page-main-header">
        <div class="main-header-right">
          <div class="main-header-left text-center">
            <div class="logo-wrapper"><a href="index.php"><img src="images/logo.jpg" height="80" style=" object-fit: cover;" ></a></div>
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
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
 <!-- Page Sidebar Start-->
 <div class="iconsidebar-menu iconbar-mainmenu-close">
          <div class="sidebar">
            <ul class="iconMenu-bar custom-scrollbar">

                <?php 
                    $sql = $conn->query("SELECT * FROM tb_category ");
                    while($fet=$sql->fetch_object()){
                ?>
              <li><a class="bar-icons" href="index.php?p=showproduct&category_id=<?php echo $fet->category;  ?>">
                 <span><?php echo $fet->cate_name; ?></span></a>

              </li>
              <?php }?>

             
            </ul>
          </div>
        </div>
        <!-- Page Sidebar Ends-->

        <div class="page-body">
<?php 
  $sql = $conn->query("SELECT * FROM tb_product WHERE pro_id = '".$_REQUEST['pro_id']."'");
  $fetp = $sql->fetch_object();
?>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="row product-page-main">
                    <div class="col-xl-4">
                      <div class="product-slider owl-carousel owl-theme" id="sync1">
                        <div class="item"><img src="images/<?php echo $fetp->pro_img1;?>" height="400" alt="" style="object-fit:cover ;"></div>
                        <div class="item"><img src="images/<?php echo $fetp->pro_img2;?>" height="400" alt="" style="object-fit:cover ;"></div>
                        <div class="item"><img src="images/<?php echo $fetp->pro_img3;?>" height="400" alt="" style="object-fit:cover ;"></div>
                        <div class="item"><img src="images/<?php echo $fetp->pro_img4;?>" height="400" alt="" style="object-fit:cover ;"></div>
                        <div class="item"><img src="images/<?php echo $fetp->pro_img5;?>" height="400" alt="" style="object-fit:cover ;"></div>
                      </div>
                      <div class="owl-carousel owl-theme" id="sync2">
                        <div class="item"><img src="images/<?php echo $fetp->pro_img1;?>" alt=""></div>
                        <div class="item"><img src="images/<?php echo $fetp->pro_img2;?>" alt=""></div>
                        <div class="item"><img src="images/<?php echo $fetp->pro_img3;?>" alt=""></div>
                        <div class="item"><img src="images/<?php echo $fetp->pro_img4;?>" alt=""></div>
                        <div class="item"><img src="images/<?php echo $fetp->pro_img5;?>" alt=""></div>
                      </div>
                    </div>
                    <div class="col-xl-8">
                      <div class="product-page-details">
                        <h5><?php echo $fetp->pro_name;?></h5>
                        <div class="d-flex">
                          <select id="u-rating-fontawesome" name="rating" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select><span>(<?php echo $fetp->pro_hit;?> review)</span>
                        </div>
                      </div>
                      <hr>
                      <p><?php echo $fetp->pro_detail;?></p>
                      <div class="product-price digits">
                       $<?php echo $fetp->pro_price;?>
                      </div>
                      <hr>
                      <div>
                        <table class="product-page-width">
                          <tbody>
                            <tr>
                              <td>Availability :</td>
                              <td class="in-stock"><?php if($fetp->pro_hit > 0 ){echo "In stock";}else{echo "Out Of stock";}?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <hr>

                      <div class="m-t-15">
                        <a href="index.php?p=cart&pro_id=<?php echo $fetp->pro_id;?>" data-original-title="btn btn-info-gradien" class="btn btn-primary-gradien m-r-10">Add To Cart</a>

                      </div>
                    </div>
                  </div>
                </div>



               
<?php 

$sql = $conn->query("SELECT * FROM tb_product ORDER BY pro_hit DESC LIMIT 5");
$fet = $sql->fetch_object();
?>
<div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-12  main-header">
                  <center>
                  <h2>สินค้าที่คุณอาจสนใจ</h2>
                  </center>
                </div>
              </div>
            </div>
          </div>
<div class="col-xl-3 col-sm-6 box-col-4a">


              <div class="card">
                <div class="product-box">
                  <div class="product-img"><img class="img-fluid" src="images/<?php echo $fet->pro_img1;?>" alt="">
                    <div class="product-hover">
                      <ul>
                      <a href="product_detail.php?pro_id=<?php echo $fet->pro_id;?>"> <li><i class="icon-shopping-cart "></i></li></a>
                      <a href="most_product.php.php"> <li><i class="icon-heart "></i></li></a>
                      </ul>
                    </div>
                  </div>
                  <div class="product-details">
                    <h4><?php echo $fet->pro_name; ?></h4>
                    <p><?php echo $fet->pro_detail;?></p>
                    <div class="product-price">
                      $<?php echo $fet->pro_price;?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           


              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright © 2021 Poco. All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand-crafted & made with<i class="fa fa-heart"></i></p>
              </div>
            </div>
          </div>
        </footer>
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
    <script src="assets/js/sidebar-menus.js"></script>
    <script src="assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="assets/js/rating/jquery.barrating.js"></script>
    <script src="assets/js/rating/rating-script.js"></script>
    <script src="assets/js/chat-menu.js"></script>
    <script src="assets/js/ecommerce.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizers.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>