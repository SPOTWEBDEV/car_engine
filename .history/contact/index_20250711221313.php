<?php include("../server/connection.php") ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain ?>assets/images/fav.svg">
    <title><?php echo $sitename ?> - Car Dealer
        HTML Template</title>
    <meta name="description" content="Your trusted source for expert healthcare services and car information. Providing personalized care, advanced treatments, and reliable car dealing to help you achieve better health.">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/plugins/magnifying-popup.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/fonts/rt-icon.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/style.css">
</head>

<body class="with-sidebar">

    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
        
    </div>
    <div id="anywhere-home">
    </div>
    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- progress area end -->

    <div class="rts-wrapper">
        <div class="rts-wrapper-inner">
            <!-- header area start -->
            <!-- header area start -->
            <header class="header-three header--sticky">
                <div class="header-top">
                    <div class="container">
                        <div class="header-top-inner d-flex align-items-center justify-content-between">
                            <div class="left d-flex align-items-center">
                                <div class="map-area">
                                    <i class="rt-icon-phone-flip"></i>
                                    <a href="call-to_12505550199"><?php echo $sitephone_number ?></a>
                                </div>
                                <div class="map-area">
                                    <i class="rt-icon-envelope"></i>
                                    <a href="mail-to_<?php echo $sitename ?>%40gmail.html"><?php echo $siteaddress ?></a>
                                </div>
                                <div class="map-area">
                                    <i class="rt-icon-marker"></i>
                                    <a href="#"><?php echo $siteaddress ?></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="header-bottom">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="header-wrapper-1">
                                    <div class="logo-area-start">
                                        <a href="index-2.html" class="logo">
                                            <img src="<?php echo $domain ?>assets/images/logo/logo.png" width="99" alt="logo_area">
                                        </a>
                                    </div>
                                    <div class="header-right d-block">
                                        <div class="bottom d-flex align-items-center justify-content-between">
                                            <div class="nav-area">
                                                <ul class="">
                                                    <li class="main-nav">
                                                        <a class="main-menu" href="<?php echo $domain ?>index.php">Home</a>

                                                    </li>

                                                    <li class="main-nav">
                                                        <a class="main-menu" href="<?php echo $domain ?>about/index.php">About Us</a>
                                                    </li>


                                                    <li class="main-nav">
                                                        <a class="main-menu" href="<?php echo $domain ?>shop/index.php">Shop</a>

                                                    </li>
                                                    <li class="main-nav"><a class="main-menu" href="<?php echo $domain ?>contact/index.php">Contact</a></li>
                                                </ul>
                                            </div>
                                            <div class="bottom-right">
                                                <div class="button-area">
                                                    <a href="account.html" class="rts-btn btn-border radius-small icon">
                                                        Sign In
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.61999 10.96H5.49999C5.28445 10.96 5.10999 10.7856 5.10999 10.57C5.10999 10.3545 5.28445 10.18 5.49999 10.18H8.61999C9.26518 10.18 9.78999 9.65523 9.78999 9.01004V1.99004C9.78999 1.34485 9.26518 0.820039 8.61999 0.820039H5.49999C5.28445 0.820039 5.10999 0.645579 5.10999 0.430039C5.10999 0.214499 5.28445 0.0400391 5.49999 0.0400391H8.61999C9.69522 0.0400391 10.57 0.914809 10.57 1.99004V9.01004C10.57 10.0853 9.69522 10.96 8.61999 10.96ZM7.33572 5.22431L5.38572 3.27431C5.23336 3.12195 4.98662 3.12195 4.83426 3.27431C4.6819 3.42667 4.6819 3.67341 4.83426 3.82577L6.11853 5.11004H0.819993C0.604453 5.11004 0.429993 5.2845 0.429993 5.50004C0.429993 5.71558 0.604453 5.89004 0.819993 5.89004H6.11853L4.83426 7.17431C4.6819 7.32667 4.6819 7.57341 4.83426 7.72577C4.91044 7.80195 5.01015 7.84004 5.10999 7.84004C5.20983 7.84004 5.30954 7.80195 5.38572 7.72577L7.33572 5.77577C7.48808 5.62341 7.48808 5.37667 7.33572 5.22431Z" fill="#FF3600" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="menu-btn radius-small" id="menu-btn">
                                                    <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="55" height="55" rx="15" fill="#FF3600" />
                                                        <rect x="18" y="33" width="10" height="2" fill="#ffffff" />
                                                        <rect x="18" y="26" width="20" height="2" fill="#ffffff" />
                                                        <rect x="18" y="19" width="10" height="2" fill="#ffffff" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- header area end -->


            <!-- header area end -->

            <!-- Breadcrumb area start -->
            <!-- rts breadcrumb area start -->
            <div class="rts-breadcrumb-area service jarallax">
                <div class="container">
                    <div class="breadcrumb-area-wrapper">
                        <h1 class="title">Get In Touch</h1>
                        <div class="nav-bread-crumb">
                            <a href="<?php echo $domain ?>">Home</a>
                            <a href="#" class="current">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rts breadcrumb area end -->
            <!-- Breadcrumb area end -->
            <!-- Contact Start -->
            <section class="rts-contact-area inner rts-section-gap">
                <div class="container">
                    <div class="section-inner d-flex">
                        <div class="map-area">
                            <div class="contact-map-area-fluid">
                                <iframe class="contact-map" height="607" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63072.99104060337!2d13.216012346880166!3d-8.873826186242326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRu%2017%20%20setembro%20Bairro%20golf%201%20ao%20lado%20do%20Hospital%20Avokumbi%20Kilamba%20Kiaxi%20luandam-Angola%20loja%20Zone%20A%2021!5e0!3m2!1sen!2sng!4v1752208181297!5m2!1sen!2sng" width="100% !important" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Contact End -->

            <!-- Contact Start -->
            <div class="rts-contact-area2 rts-section-gapBottom">
                <div class="container">
                    <div class="inner">
                        <div class="contact-wrapper">
                            <div class="icon">
                                <img src="<?php echo $domain ?>assets/images/contact/01.svg" alt="">
                            </div>
                            <h5 class="title">Location</h5>
                            <ul>
                                <li> <?php echo $siteaddress ?></li>
                            </ul>
                        </div>
                        <div class="contact-wrapper">
                            <div class="icon">
                                <img src="<?php echo $domain ?>assets/images/contact/02.svg" alt="">
                            </div>
                            <h5 class="title">Email</h5>
                            <ul>
                                <li><a href="mail-to:<?php echo $site_email ?>"><?php echo $site_email ?></a></li>
                                <li><a href="mail-to:support@josemaka.com">support@josemaka.com</a></li>
                            </ul>
                        </div>
                        <div class="contact-wrapper">
                            <div class="icon">
                                <img src="<?php echo $domain ?>assets/images/contact/03.svg" alt="">
                            </div>
                            <h5 class="title">Phone</h5>
                            <ul>
                                <li><a href="call-to_%2b12134521505.html"><?php echo $sitephone_number ?></a></li>
                                <li><a href="call-to_%2b15677891559.html">+244 935 459 394</a></li>
                                <li><a href="call-to_%2b15677891559.html">+244 942 735 262</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->


            <!-- Brand Area Start -->
            <section class="rts-brand-area rts-section-gapTop">
                <div class="container">
                    <div class="section-title-area2">
                        <p class="sub-title wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">Partners</p>
                        <h2 class="section-title wow move-right">Browse by <span>Company</span></h2>
                    </div>
                    <div class="section-inner mt--80">
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s"><img src="<?php echo $domain ?>assets/images/brand/01-w.svg" alt=""></li>
                            <li class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s"><img src="<?php echo $domain ?>assets/images/brand/02.svg" alt=""></li>
                            <li class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s"><img src="<?php echo $domain ?>assets/images/brand/03.svg" alt=""></li>
                            <li class="wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s"><img src="<?php echo $domain ?>assets/images/brand/04.svg" alt=""></li>
                            <li class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s"><img src="<?php echo $domain ?>assets/images/brand/05.svg" alt=""></li>
                            <li class="wow fadeInUp" data-wow-delay="1.2s" data-wow-duration="1s"><img src="<?php echo $domain ?>assets/images/brand/06.svg" alt=""></li>
                            <li class="wow fadeInUp" data-wow-delay="1.4s" data-wow-duration="1s"><img src="<?php echo $domain ?>assets/images/brand/07.svg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Brand Area End -->
            <div class="rts-cta-area area-2">
                <div class="container">
                    <div class="cta-inner">
                        <h2 class="title">If you have any questions Please Call.</h2>
                        <div class="contact">
                            <a href="call-to_%2b16544521505.html">
                                <img src="<?php echo $domain?>assets/images/cta/call.svg" alt="">
                                <?php echo $sitephone_number ?> br     
                            
                            
                            </a>
                        </div>
                        <img class="shape one" src="<?php echo $domain ?>assets/images/cta/round.svg" alt="">
                        <img class="shape two" src="<?php echo $domain ?>assets/images/cta/line.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts footer area start -->
    <?php include('../include/footer.php')  ?>
    <!-- rts footer area end -->
    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu">X</button>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="<?php echo $domain ?>index.php" class="main">Home</a>

                    </li>
                    <li><a href="<?php echo $domain ?>about/index.php" class="main">About</a></li>
                    <li class="">
                        <a href="<?php echo $domain ?>shop/index.php" class="main">Shop</a>

                    </li>
                    <li><a href="<?php echo $domain ?><?php echo $domain ?>contact/index.php" class="main">Contact</a></li>
                </ul>
            </nav>

               <p>Design And Develop By <a target="_blank" href="https://spotwebtech.com.ng/">SPOTWEB TECH</a></p>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->
    <script src="<?php echo $domain ?>assets/js/plugins/jquery.js"></script>
    <script src="<?php echo $domain ?>assets/js/plugins/jquery-ui.js"></script>
    <script src="<?php echo $domain ?>assets/js/vendor/waw.js"></script>
    <script src="<?php echo $domain ?>assets/js/plugins/counter-up.js"></script>
    <script src="<?php echo $domain ?>assets/js/plugins/contact-form.js"></script>
    <script src="<?php echo $domain ?>assets/js/plugins/swiper.js"></script>
    <script src="<?php echo $domain ?>assets/js/plugins/metismenu.js"></script>
    <script src="<?php echo $domain ?>assets/js/vendor/jarallax.js"></script>
    <script src="<?php echo $domain ?>assets/js/plugins/smooth-scroll.js"></script>
    <script src="<?php echo $domain ?>assets/js/plugins/magnifying-popup.js"></script>
    <script src="<?php echo $domain ?>assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/vendor/waypoint.js"></script>
    <!-- main js here -->
    <script src="<?php echo $domain ?>assets/js/main.js"></script>
</body>


<!-- Mirrored from html.themewant.com/<?php echo $sitename ?>/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jul 2025 17:02:26 GMT -->

</html>