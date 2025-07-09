<?php include("../server/connection.php") ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themewant.com/autovault/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jul 2025 17:00:22 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.svg">
    <title>AutoVault - Car Dealer
        HTML Template</title>
    <meta name="description" content="Your trusted source for expert healthcare services and car information. Providing personalized care, advanced treatments, and reliable car dealing to help you achieve better health.">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/plugins/magnifying-popup.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/fonts/rt-icon.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/style.css">
</head>

<body class="with-sidebar">
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
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
                                    <a href="call-to_12505550199"><?php echo $Short_number ?></a>
                                </div>
                                <div class="map-area">
                                    <i class="rt-icon-envelope"></i>
                                    <a href="mail-to_Autovault%40gmail.html"><?php echo $site_email ?></a>
                                </div>
                                <div class="map-area">
                                    <i class="rt-icon-marker"></i>
                                    <a href="#"><?php echo $short_site_address ?></a>
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
                                            <img src="assets/images/logo/logo.svg" width="99" alt="logo_area">
                                        </a>
                                    </div>
                                    <div class="header-right d-block">
                                        <div class="bottom d-flex align-items-center justify-content-between">
                                            <div class="nav-area">
                                                <ul class="">
                                                    <li class=" main-nav">
                                                        <a class="main-menu" href="<?php echo $domain ?>index.php">Home</a>
                                        
                                                    </li>

                                                    <li class="main-nav">
                                                        <a class="main-menu" href="<?php echo $domain ?>about/index.php">About Us</a>
                                                    </li>
                                                
                                                  
                                                    <li class="main-nav ">
                                                        <a class="main-menu" href="<?php echo $domain ?>shop/index.php">Shop</a>
                                                        
                                                    </li>
                                                    <li class="main-nav"><a class="main-menu" href="<?php echo $domain ?>contact/contact.php">Contact</a></li>
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
                                        <img src="assets/images/about/12.webp" width="339" alt="">
                                    </div>
                                    <div class="right wow scaleIn" data-wow-delay=".5s" data-wow-duration="1s">
                                        <img src="assets/images/about/13.webp" width="280" alt="">
                                        <div class="counter-area">
                                            <h2 class="title"><span class="counter">1000</span><span>+</span></h2>
                                            <p class="desc">Car Sold Already</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-content-area">
                                    <div class="section-title-area">
                                        <p class="sub-title wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">About
                                            Us</p>
                                        <h2 class="section-title wow move-right">Driven by Excellence: Your Trusted Partner for Premium
                                            <span>Vehicles</span>
                                        </h2>
                                    </div>
                                    <p class="desc wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">Welcome to Autovault where innovation drives every journey. Discover a
                                        range
                                        of designed to elevate your driving experience.</p>
                                    <a href="call-to_%2b12505550199.html" class="rts-btn call-btn wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                                        <span>
                                            <i class="fa-regular fa-phone"></i>
                                        </span>
                                        <div class="content">
                                            <h6>Call Us Now</h6>
                                            <p>+12505550199</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-shape-area">
                    <img src="assets/images/category/shape/shape-01.svg" alt="">
                    <img src="assets/images/category/shape/shape-02.svg" alt="">
                </div>
            </section>
            <!-- About Area End -->
            <!-- Counter Area Start -->
            <section class="rts-counter-area-two">
                <div class="container">
                    <div class="counter-inner">
                        <div class="inner wow zoomIn" data-wow-delay=".2s" data-wow-duration="1s">
                            <div class="icon">
                                <img src="assets/images/counter/icon-01.svg" width="74" alt="">
                            </div>
                            <div class="text">
                                <h3 class="title"><span class="counter">320</span><span>M</span></h3>
                                <p class="desc">Cars For Sale</p>
                            </div>
                        </div>
                        <div class="inner wow zoomIn" data-wow-delay=".4s" data-wow-duration="1s">
                            <div class="icon">
                                <img src="assets/images/counter/icon-02.svg" alt="">
                            </div>
                            <div class="text">
                                <h3 class="title"><span class="counter">5500</span><span>+</span></h3>
                                <p class="desc">Dealer Review</p>
                            </div>
                        </div>
                        <div class="inner wow zoomIn" data-wow-delay=".6s" data-wow-duration="1s">
                            <div class="icon">
                                <img src="assets/images/counter/icon-03.svg" alt="">
                            </div>
                            <div class="text">
                                <h3 class="title"><span class="counter">300</span><span>M</span></h3>
                                <p class="desc">Verified User</p>
                            </div>
                        </div>
                        <div class="inner wow zoomIn" data-wow-delay=".8s" data-wow-duration="1s">
                            <div class="icon">
                                <img src="assets/images/counter/icon-04.svg" alt="">
                            </div>
                            <div class="text">
                                <h3 class="title"><span class="counter">10</span><span>M</span></h3>
                                <p class="desc">Visitor Per Day</p>
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
                    <img src="assets/images/testimonials/03.webp" width="1107" alt="">
                </div>
                <div class="container">
                    <div class="section-inner">
                        <div class="row align-items-center justify-content-end">
                            <div class="col-xl-5">
                                <div class="section-title-area">
                                    <p class="sub-title wow fadeInUp" data-wow-delay=".1s" data-wow-duration=".8s">Testimonial</p>
                                    <h2 class="section-title wow move-right">What Our <span>Client</span> Says
                                    </h2>
                                </div>
                                <div class="slider-inner mt--50">
                                    <div class="swiper testimonialSlider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="review-wrapper">
                                                    <p class="desc">
                                                        Choosing Bokinn was one of the best decisions we've ever made. They
                                                        have proven to be a reliable and innovative partner, always ready to
                                                        tackle new challenges with and expertise.Their commitment to and
                                                        delivering tailored.
                                                    </p>
                                                    <div class="author-area d-flex align-items-center">
                                                        <div class="image">
                                                            <img src="assets/images/testimonials/author-01.svg" alt="">
                                                        </div>
                                                        <div class="text">
                                                            <h6 class="title">Sarah Martinez</h6>
                                                            <p class="designation">CEO of Apex Solutions</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="review-wrapper">
                                                    <p class="desc">
                                                        Choosing Bokinn was one of the best decisions we've ever made. They
                                                        have proven to be a reliable and innovative partner, always ready to
                                                        tackle new challenges with and expertise.Their commitment to and
                                                        delivering tailored.
                                                    </p>
                                                    <div class="author-area d-flex align-items-center">
                                                        <div class="image">
                                                            <img src="assets/images/testimonials/author-01.svg" alt="">
                                                        </div>
                                                        <div class="text">
                                                            <h6 class="title">Sarah Martinez</h6>
                                                            <p class="designation">CEO of Apex Solutions</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="review-wrapper">
                                                    <p class="desc">
                                                        Choosing Bokinn was one of the best decisions we've ever made. They
                                                        have proven to be a reliable and innovative partner, always ready to
                                                        tackle new challenges with and expertise.Their commitment to and
                                                        delivering tailored.
                                                    </p>
                                                    <div class="author-area d-flex align-items-center">
                                                        <div class="image">
                                                            <img src="assets/images/testimonials/author-01.svg" alt="">
                                                        </div>
                                                        <div class="text">
                                                            <h6 class="title">Sarah Martinez</h6>
                                                            <p class="designation">CEO of Apex Solutions</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="review-wrapper">
                                                    <p class="desc">
                                                        Choosing Bokinn was one of the best decisions we've ever made. They
                                                        have proven to be a reliable and innovative partner, always ready to
                                                        tackle new challenges with and expertise.Their commitment to and
                                                        delivering tailored.
                                                    </p>
                                                    <div class="author-area d-flex align-items-center">
                                                        <div class="image">
                                                            <img src="assets/images/testimonials/author-01.svg" alt="">
                                                        </div>
                                                        <div class="text">
                                                            <h6 class="title">Sarah Martinez</h6>
                                                            <p class="designation">CEO of Apex Solutions</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="review-wrapper">
                                                    <p class="desc">
                                                        Choosing Bokinn was one of the best decisions we've ever made. They
                                                        have proven to be a reliable and innovative partner, always ready to
                                                        tackle new challenges with and expertise.Their commitment to and
                                                        delivering tailored.
                                                    </p>
                                                    <div class="author-area d-flex align-items-center">
                                                        <div class="image">
                                                            <img src="assets/images/testimonials/author-01.svg" alt="">
                                                        </div>
                                                        <div class="text">
                                                            <h6 class="title">Sarah Martinez</h6>
                                                            <p class="designation">CEO of Apex Solutions</p>
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
                        <p class="sub-title wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">Our Team</p>
                        <h2 class="section-title wow move-right">Let’s Meet Our <span>Expert</span></h2>
                    </div>
                    <div class="section-inner mt--60">
                        <div class="row g-5">
                            <div class="col-lg-3 col-md-6">
                                <div class="team-wrapper">
                                    <div class="image-area">
                                        <a href="#">
                                            <img src="assets/images/team/01.webp" alt="">
                                        </a>
                                        <div class="content">
                                            <h6 class="title cw">Amelia Scot</h6>
                                            <p class="designation cw">Office Executive</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="team-wrapper">
                                    <div class="image-area">
                                        <a href="#">
                                            <img src="assets/images/team/02.webp" alt="">
                                        </a>
                                        <div class="content">
                                            <h6 class="title cw">Michael Roy</h6>
                                            <p class="designation cw">Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="team-wrapper">
                                    <div class="image-area">
                                        <a href="#">
                                            <img src="assets/images/team/03.webp" alt="">
                                        </a>
                                        <div class="content">
                                            <h6 class="title cw">Emma Elizabeth</h6>
                                            <p class="designation cw">Office Executive</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="team-wrapper">
                                    <div class="image-area">
                                        <a href="#">
                                            <img src="assets/images/team/04.webp" alt="">
                                        </a>
                                        <div class="content">
                                            <h6 class="title cw">Michael Roy</h6>
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
                            <li class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s"><img src="assets/images/brand/01-w.svg" alt=""></li>
                            <li class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s"><img src="assets/images/brand/02.svg" alt=""></li>
                            <li class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s"><img src="assets/images/brand/03.svg" alt=""></li>
                            <li class="wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s"><img src="assets/images/brand/04.svg" alt=""></li>
                            <li class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s"><img src="assets/images/brand/05.svg" alt=""></li>
                            <li class="wow fadeInUp" data-wow-delay="1.2s" data-wow-duration="1s"><img src="assets/images/brand/06.svg" alt=""></li>
                            <li class="wow fadeInUp" data-wow-delay="1.4s" data-wow-duration="1s"><img src="assets/images/brand/07.svg" alt=""></li>
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
                                <img src="assets/images/cta/call.svg" alt="">
                                +1-654-452-1505</a>
                        </div>
                        <img class="shape one" src="assets/images/cta/round.svg" alt="">
                        <img class="shape two" src="assets/images/cta/line.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts footer area start -->
    <div class="rts-footer-area footer-three" id="rts-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-wrapper-style-between">
                        <div class="single-wized logo-area">
                            <a href="index-2.html" class="logo">
                                <img src="assets/images/logo/logo.svg" width="99" alt="">
                            </a>
                            <p class="desc">Don’t miss out on the latest updates, exclusive offers, and insider news. Join our community and get everything</p>
                            <form action="#">
                                <input type="email" placeholder="Enter your email" required>
                                <button type="submit" class="rts-btn radius-small btn-primary">Subscribe</button>
                            </form>
                        </div>
                        <div class="single-wized">
                            <h6 class="title">Contact & legal </h6>
                            <div class="body">
                                <ul class="nav-bottom">
                                    <li><a href="#">Legal</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Cookies policy </a></li>
                                    <li><a href="#">Disclaimer</a></li>
                                </ul>
                            </div>
                        </div>
                       
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area-inner d-flex align-items-center justify-content-between">
                            <p>Copyright ©
                                <script>
                                    document.write(
                                        new Date().getFullYear()
                                    )
                                </script>
                                All Rights Reserved by Autovalut 
                            </p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts footer area end -->
    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu">X</button>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="">
                        <a href="<?php echo $domain ?>index.php" class="main">Home</a>
                       
                    </li>
                    <li><a href="<?php echo $domain ?>about/about.php" class="main">About</a></li>
                    <li class="">
                        <a href="#" class="main">Listing</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="portfolio.html">Car One</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-two.html">Car Two</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-three.html">Car Three</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-details.html">Car Single</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-details-2.html">Car Single Two</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Pages</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="service.html">Service</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="sold-car.html">Sold Car</a></li>
                            <li><a href="calculator.html">Calculator</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-2.html">Blog Two</a></li>
                            <li><a href="blog-details.html">Blog Single</a></li>
                            <li><a href="team.html">Team</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Shop</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="shop.html">Shop</a></li>
                            <li><a class="mobile-menu-link" href="shop-2.html">Shop Two</a></li>
                            <li><a class="mobile-menu-link" href="shop-3.html">Shop Three</a></li>
                            <li><a class="mobile-menu-link" href="shop-details.html">Shop Single</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html" class="main">Contact</a></li>
                </ul>
            </nav>

            <div class="rts-social-style-one pl--20 mt--50">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
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
    <script src="<?php echo $domain ?> assets/js/main.js"></script>
</body>


<!-- Mirrored from html.themewant.com/autovault/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jul 2025 17:00:25 GMT -->
</html>