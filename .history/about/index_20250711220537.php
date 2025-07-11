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
                                    <a href="mail-to_<?php echo $sitename ?>%40gmail.html"><?php echo $site_email ?></a>
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
                                                    <li class=" main-nav">
                                                        <a class="main-menu" href="<?php echo $domain ?>">Home</a>

                                                    </li>

                                                    <li class="main-nav">
                                                        <a class="main-menu" href="<?php echo $domain ?>about/">About Us</a>
                                                    </li>


                                                    <li class="main-nav ">
                                                        <a class="main-menu" href="<?php echo $domain ?>shop/">Shop</a>

                                                    </li>
                                                    <li class="main-nav"><a class="main-menu" href="<?php echo $domain ?>contact/">Contact</a></li>
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
                        <h1 class="title">About</h1>
                        <div class="nav-bread-crumb">
                            <a href="index-2.html">Home</a>
                            <a href="#" class="current">About</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rts breadcrumb area end -->
            <!-- Breadcrumb area end -->
            <!-- About Area Start -->
            <section class="rts-about-area inner two rts-section-gapTop">
                <div class="container">
                    <div class="section-inner">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="about-image-area-two">
                                    <div class="left wow scaleIn" data-wow-delay=".5s" data-wow-duration="1s">
                                        <img style="border:2px solid; border-radius: 10px;" src="<?php echo $domain ?>assets/images/1.jpg" width="339" alt="Car Engine Product">
                                    </div>
                                    <div class="right wow scaleIn" data-wow-delay=".5s" data-wow-duration="1s">
                                        <img style="border:2px solid; border-radius: 10px;" src="<?php echo $domain ?>assets/images/2.jpg" width="280" alt="Our Store">
                                        <div class="counter-area">
                                            <h2 class="title"><span class="counter">500</span><span>+</span></h2>
                                            <p class="desc">Engines & Parts Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-content-area">
                                    <div class="section-title-area">
                                        <p class="sub-title wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">About Us</p>
                                        <h2 class="section-title wow move-right">
                                            Quality You Can Trust: Explore & Visit for
                                            <span>Engine Products</span>
                                        </h2>
                                    </div>
                                    <p class="desc wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                                        Welcome to <?php echo $sitename ?> — your reliable source for high-performance car engine parts and accessories. Browse our range of products online, then visit our store to see them up close and make your purchase. We’re here to keep your vehicle running at its best.
                                    </p>
                                    <a href="<?php echo $domain ?>shop/" class="rts-btn call-btn wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                                        <span>
                                            <i class="fa-solid fa-shop"></i>
                                        </span>
                                        <div class="content">
                                            <h6>Visit Our Store</h6>
                                            <p>See & Buy In-Store</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-shape-area">
                    <img src="<?php echo $domain ?>assets/images/category/shape/shape-01.svg" alt="">
                    <img src="<?php echo $domain ?>assets/images/category/shape/shape-02.svg" alt="">
                </div>
            </section>

            <!-- About Area End -->
            <!-- Counter Area Start -->
            <section class="rts-counter-area-two">
                <div class="container">
                    <div class="counter-inner">
                        <div class="inner wow zoomIn" data-wow-delay=".2s" data-wow-duration="1s">
                            <div class="icon">
                                <img src="<?php echo $domain ?>assets/images/counter/icon-01.svg" width="74" alt="">
                            </div>
                            <div class="text">
                                <h3 class="title"><span class="counter">500</span><span>K</span></h3>
                                <p class="desc">Engine Parts Sold</p>
                            </div>
                        </div>

                        <div class="inner wow zoomIn" data-wow-delay=".4s" data-wow-duration="1s">
                            <div class="icon">
                                <img src="<?php echo $domain ?>assets/images/counter/icon-02.svg" alt="">
                            </div>
                            <div class="text">
                                <h3 class="title"><span class="counter">3500</span><span>+</span></h3>
                                <p class="desc">Happy Customers</p>
                            </div>
                        </div>

                        <div class="inner wow zoomIn" data-wow-delay=".6s" data-wow-duration="1s">
                            <div class="icon">
                                <img src="<?php echo $domain ?>assets/images/counter/icon-03.svg" alt="">
                            </div>
                            <div class="text">
                                <h3 class="title"><span class="counter">1200</span><span>+</span></h3>
                                <p class="desc">Verified Mechanics</p>
                            </div>
                        </div>

                        <div class="inner wow zoomIn" data-wow-delay=".8s" data-wow-duration="1s">
                            <div class="icon">
                                <img src="<?php echo $domain ?>assets/images/counter/icon-04.svg" alt="">
                            </div>
                            <div class="text">
                                <h3 class="title"><span class="counter">25</span><span>K</span></h3>
                                <p class="desc">Daily Visitors</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Counter Area End -->
            <!-- Testimonials Area Start -->
            <section class="rts-testimonials-area area-2 rts-section-gap">
                <div class="bg-shape-area">
                </div>
                <div class="shape wow slideInLeft" data-wow-delay=".5s" data-wow-duration="2s">
                    <img src="<?php echo $domain ?>assets/images/testimonials/03.webp" width="1107" alt="">
                </div>
                <div class="container">
                    <div class="section-inner">
                        <div class="row align-items-center justify-content-end">
                            <div class="col-xl-5">
                                <div class="section-title-area">
                                    <p class="sub-title wow fadeInUp" data-wow-delay=".1s" data-wow-duration=".8s">Testimonials</p>
                                    <h2 class="section-title wow move-right">
                                        What Our <span>Customers</span> Say
                                    </h2>
                                </div>
                                <div class="slider-inner mt--50">
                                    <div class="swiper testimonialSlider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="review-wrapper">
                                                    <p class="desc">
                                                        The engine part I bought from <?php echo $sitename ?> worked perfectly and gave my car a new life! Great quality and knowledgeable staff who helped me choose the right part. Highly recommend visiting their store.
                                                    </p>
                                                    <div class="author-area d-flex align-items-center">
                                                       
                                                        <div class="text">
                                                            <h6 class="title">Rafael Costa</h6>
                                                            <p class="designation">Car Owner</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="review-wrapper">
                                                    <p class="desc">
                                                        I was impressed with the variety of engine products available. I checked the products online, then visited the store to pick them up. Everything fit perfectly, and my mechanic was impressed too!
                                                    </p>
                                                    <div class="author-area d-flex align-items-center">
                                                        
                                                        <div class="text">
                                                            <h6 class="title">Beatriz Silva</h6>
                                                            <p class="designation">Auto Enthusiast</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="review-wrapper">
                                                    <p class="desc">
                                                        <?php echo $sitename ?> is my go-to for car engine parts. The parts are durable, affordable, and the team is friendly and professional. My car runs smoother than ever!
                                                    </p>
                                                    <div class="author-area d-flex align-items-center">
                                                     
                                                        <div class="text">
                                                            <h6 class="title">Lucas Almeida</h6>
                                                            <p class="designation">Fleet Manager</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="review-wrapper">
                                                    <p class="desc">
                                                        The staff helped me choose exactly what my car needed. The product quality was top-notch, and I could see the difference right away after installation. Thanks, <?php echo $sitename ?>!
                                                    </p>
                                                    <div class="author-area d-flex align-items-center">
                                                     
                                                        <div class="text">
                                                            <h6 class="title">Camila Moreira</h6>
                                                            <p class="designation">Satisfied Customer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="review-wrapper">
                                                    <p class="desc">
                                                        Excellent service and excellent products. I was able to find the exact engine part I needed quickly and at a good price. I’ll definitely shop here again for future needs.
                                                    </p>
                                                    <div class="author-area d-flex align-items-center">
                                                      
                                                        <div class="text">
                                                            <h6 class="title">Mariana Rocha</h6>
                                                            <p class="designation">Local Mechanic</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials Area End -->
            <!-- Team Area Start -->
            <section class="rts-team-area rts-section-gap">
                <div class="container">
                    <div class="section-title-area2">
                        <p class="sub-title wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">Our Portfolio</p>
                        
                    </div>
                    <div class="section-inner mt--60">
                        <div class="row g-5">
                            <div class="col-lg-3 col-md-6">
                                <div class="team-wrapper">
                                    <div class="image-area">
                                        <a href="#">
                                            <img src="<?php echo $domain ?>assets/images/4.jpg" alt="">
                                        </a>
                                        <div class="content">
                                            <h6 class="title cw"></h6>
                                            <p class="designation cw">Office Executive</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="team-wrapper">
                                    <div class="image-area">
                                        <a href="#">
                                            <img src="<?php echo $domain ?>assets/images/5.jpg" alt="">
                                        </a>
                                        <div class="content">
                                            <h6 class="title cw"></h6>
                                            <p class="designation cw">Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="team-wrapper">
                                    <div class="image-area">
                                        <a href="#">
                                            <img src="<?php echo $domain ?>assets/images/6.jpg" alt="">
                                        </a>
                                        <div class="content">
                                            <h6 class="title cw"></h6>
                                            <!-- <p class="designation cw">Office Executive</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="team-wrapper">
                                    <div class="image-area">
                                        <a href="#">
                                            <img src="<?php echo $domain ?>assets/images/7.jpg" alt="">
                                        </a>
                                        <div class="content">
                                            <h6 class="title cw"></h6>
                                            <p class="designation cw">Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team Area End -->
            <!-- Brand Area Start -->
            <section class="rts-brand-area">
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
                                <img src="<?php echo $domain ?>assets/images/cta/call.svg" alt="">
                                <?php echo $sitephone_number ?> <br><br>
                                +244 935 459 394 <br><br>
                                +244 942 735 262 <br><br>


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
                    <li class="">
                        <a href="<?php echo $domain ?>" class="main">Home</a>

                    </li>
                    <li><a href="<?php echo $domain ?>about/" class="main">About</a></li>
                    <li class="has-droupdown">
                        <a href="<?php echo $domain ?>shop/" class="main">Shop</a>

                    </li>
                    <li><a href="<?php echo $domain ?>contact/" class="main">Contact</a></li>
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

</html>