
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>AMT</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/media.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="src/font-awesome/css/font-awesome.min.css" type="text/css">



<link href="src/slick/slick.css" rel="stylesheet" type="text/css">
<link href="src/slick/slick-theme.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="src/utilcarousel-files/utilcarousel/util.carousel.css" type="text/css"/>
<link rel="stylesheet" href="src/utilcarousel-files/utilcarousel/util.carousel.skins.css" type="text/css"/>
<link rel="stylesheet" href="css/responsiveTabs.css" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
  <!-- Temporary code, will be fixed in yii implementation -->
  <?php
    $domain = 'http://localhost/amt';
    $page_banner = '';
  ?>

<?php

$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if (strpos($url,'about-us') !== false) {
    $page_banner = 'about';
} elseif (strpos($url,'index') !== false) {
    $page_banner = 'home';
} elseif (strpos($url,' ') !== false) {
    $page_banner = 'home';
} elseif  (strpos($url,'meet-the-team') !== false) {
      $page_banner = 'meet_team';
} else {
  $page_banner = 'home';
}



?>


<header class="<?= $page_banner ?>_banner">
  <div class="top-head hidden-xs">
    <div class="container">
      <div class="col-md-12">
        <ul>
          <li><a href="#"><i><img src="images/icons/email.svg"></i>Email us</a></li>
          <li><a href="#"><i><img src="images/icons/call.svg"></i>Request Callback</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container-fluid hidden-sm hidden-sm hidden-md hidden-lg">
    <div class="row">
      <div class="my_showroom">
        <div class="dropdown showroom_drop">
          <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> My Showroom <span class="show_num">1</span>
          <p>Compare up to 3 vehicles</p>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dLabel">
            <div class="show_header"> <img src="images/car1.jpg"> BMW 3 Series </div>
            <div class="showbtn">
              <ul>
                <li><a href="#"><i><img src="images/delete.png"></i>Delete</a></li>
                <li><a href="#"><i><img src="images/copy.png"></i>Copy</a></li>
              </ul>
            </div>
            <div class="my-list">
              <ul>
                <li>
                  <div class="list-col">
                    <div class="list-pic"> <img src="images/icon1.png"> </div>
                    <div class="lis-des">
                      <h6>Second slot empty</h6>
                      <p>Add more vehicles to compare deals</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="list-col">
                    <div class="list-pic"> <img src="images/icon1.png"> </div>
                    <div class="lis-des">
                      <h6>Third slot empty</h6>
                      <p>Add more vehicles to compare deals</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="list-bottom-button"> <a href="#" class="btn btn-red"><i><img src="images/search.png"></i>go to my showroom</a> <a href="#" class="clear-btn">Clear list</a> </div>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="middle-head">
    <div class="container-fluid">
      <div class="col-lg-6 col-md-7">
        <nav class="navbar navbar-default menu">
          <!-- Brand and toggle get grouped for better mobile display -->

          <div class="navbar-header">
            <button type="button" class="navbar-toggle x collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="<?= $domain ?>/index.php"><img src="images/logo-lg.png" class="hidden-xs"> <img src="images/logo-mob.png" class="hidden-sm hidden-sm hidden-md hidden-lg"></a> <a href="<?= $domain ?>/index.php" class="icon-mob"><img src="images/mob-phone.png"></a> <a href="#" class="icon-mob"><img src="images/email-mob.png"></a> </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Leasing <span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu ldrop">
                  <li><a href="<?= $domain ?>/personal-leasing.php">Personal Car leasing</a></li>
                  <li><a href="<?= $domain ?>/business-leasing.php">Business Car Leasing</a></li>
                  <li><a href="<?= $domain ?>/van-leasing.php">Van Leasing</a></li>
                  <li>
                    <div class="lg-box">
                      <p>Not Sure what you want?</p>
                      <a href="advanced-search.php">Help me choose a car</a> </div>
                  </li>
                </ul>
              </li>
              <li><a href="special-offers.php">Special Offers</a></li>
              <li><a href="<?= $domain; ?>/services.php">Services</a></li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Leasing Guide<span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= $domain ?>/wear-and-tear.php">wear and tear</a></li>
                  <li><a href="#">deprecation</a></li>
                  <li><a href="<?= $domain ?>/bik-tax-calculator.php">Bik calculator</a></li>
                  <li><a href="<?= $domain ?>/fuel-cost-calculator.php">fuel cost calculator</a></li>
                  <li><a href="<?= $domain ?>/glossary.php">Glossary of terms</a></li>
                  <li><a href="#">end of contract</a></li>
                  <li><a href="<?= $domain ?>/faq.php">Frequently asked questions</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More<span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= $domain ?>/about-us.php">About AMT</a></li>
                  <li><a href="<?= $domain ?>/meet-the-team.php">Meet the Team</a></li>
                  <li><a href="<?= $domain ?>/blog.php">Blog</a></li>
                  <li><a href="<?= $domain ?>/contact-us.php">Contact Us</a></li>
                </ul>
              </li>
            </ul>

			 <div class="top-head hidden-sm hidden-sm hidden-md hidden-lg">
    <div class="container">
      <div class="col-md-12">
        <ul>
          <li><a href="#"><i><img src="images/email.png"></i>Email us</a></li>
          <li><a href="#"><i><img src="images/call.png"></i>Request Callback</a></li>
        </ul>
      </div>
    </div>
  </div>

          </div>
          <!-- /.navbar-collapse -->
        </nav>
      </div>
      <div class="col-lg-6 col-md-5 top_rtl">
        <div class="my_showroom">
          <div class="dropdown showroom_drop">
            <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> My Showroom <span class="show_num">1</span>
            <p>Compare up to 3 vehicles</p>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dLabel">
              <div class="show_header"> <img src="images/car1.jpg"> BMW 3 Series </div>
              <div class="showbtn">
                <ul>
                  <li><a href="#"><i><img src="images/delete.png"></i>Delete</a></li>
                  <li><a href="#"><i><img src="images/copy.png"></i>Copy</a></li>
                </ul>
              </div>
              <div class="my-list">
                <ul>
                  <li>
                    <div class="list-col">
                      <div class="list-pic"> <img src="images/icon1.png"> </div>
                      <div class="lis-des">
                        <h6>Second slot empty</h6>
                        <p>Add more vehicles to compare deals</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="list-col">
                      <div class="list-pic"> <img src="images/icon1.png"> </div>
                      <div class="lis-des">
                        <h6>Third slot empty</h6>
                        <p>Add more vehicles to compare deals</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="list-bottom-button"> <a href="#" class="btn btn-red"><i><img src="images/search.png"></i>go to my showroom</a> <a href="#" class="clear-btn">Clear list</a> </div>
            </ul>
          </div>
        </div>
        <div class="feefo-rating">
          <ul>
            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
          </ul>
          <p>XXXX reviews</p>
          <div class="feefologo"> <img src="images/feefo-logo.png"> </div>
        </div>
        <div class="top_phone">
          <p>Mon-Fri 9am - 5.30pm</p>
           <h4><img src="images/icons/phone.svg">0113 3502784</h4>
        </div>
      </div>
    </div>
  </div>
  <!--
  <div class="site-breadcrum">
    <div class=" container">
      <div class="col-md-12">
        <div class="sitebread-inner">
          <ul>
            <li><a href="#"><img src="images/home.png"></a></li>
            <li class="active"><?php // print basename($_SERVER['PHP_SELF']); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>-->
