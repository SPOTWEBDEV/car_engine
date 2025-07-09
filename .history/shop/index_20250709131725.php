<?php include("../server/connection.php") ?>


<!DOCTYPE html>
<html lang="en">
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

<body>
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
                                            <img src="<?php echo $domain ?>assets/images/logo/logo.png" width="99" alt="logo_area">
                                        </a>
                                    </div>
                                    <div class="header-right d-block">
                                        <div class="bottom d-flex align-items-center justify-content-between">
                                            <div class="nav-area">
                                                <ul class="">
                                                    <li class="">
                                                        <a class="main-menu" href="<?php echo $domain ?>index.php">Home</a>
                                                       
                                                    </li>

                                                    <li class="main-nav">
                                                        <a class="main-menu" href="<?php echo $domain ?>about/index.">About Us</a>
                                                    </li>
                                                   
                                                    <li class="">
                                                        <a class="main-menu" href="j<?php echo $domain ?>shop/index.php">Shop</a>
                                                        
                                                    </li>
                                                    <li class="main-nav"><a class="main-menu" href="contact.html">Contact</a></li>
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
                        <h1 class="title">Shop</h1>
                        <div class="nav-bread-crumb">
                            <a href="index-2.html">Home</a>
                            <a href="#" class="current">Shop</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rts breadcrumb area end -->
            <!-- Breadcrumb area end -->
            <div class="rts-shop-area inner rts-section-gapTop">
                <div class="container">
                    <div class="shop-filter-area">
                        <p>Showing 1-9 of 19 results</p>
                        <div class="select-area">
                            <form action="#" method="get" accept-charset="utf-8">
                                <select name="my_select" class="mySelect">
                                    <option value="2" selected>Car Make</option>
                                    <option value="10">Mazda</option>
                                    <option value="1">Citroen</option>
                                    <option value="13">Honda</option>
                                    <option value="14">Mitsubishi</option>
                                    <option value="15">Peugeot</option>
                                </select>
                            </form>
                            <form class="select-2" action="#" method="get" accept-charset="utf-8">
                                <select name="my_select2" class="my_select2">
                                    <option value="2" selected>Car Model</option>
                                    <option value="10">155</option>
                                    <option value="1">151</option>
                                    <option value="13">150</option>
                                    <option value="14">152</option>
                                    <option value="15">156</option>
                                </select>
                            </form>
                            <form class="select-2" action="#" method="get" accept-charset="utf-8">
                                <select name="my_select2" class="my_select2">
                                    <option value="2" selected>Price</option>
                                    <option value="10">22,000$</option>
                                    <option value="1">27,000$</option>
                                    <option value="13">30,000$</option>
                                    <option value="14">32,000$</option>
                                    <option value="15">38,000$</option>
                                </select>
                            </form>
                            <form class="select-2" action="#" method="get" accept-charset="utf-8">
                                <select name="my_select2" class="my_select2">
                                    <option value="2" selected>Sort By</option>
                                    <option value="10">22,000$</option>
                                    <option value="1">27,000$</option>
                                    <option value="13">30,000$</option>
                                    <option value="14">32,000$</option>
                                    <option value="15">38,000$</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-4 col-md-6">
                            <div class="project-wrapper4">
                                <div class="image-area">
                                    <a href="shop-details.html"><img src="assets/images/portfolio/11.webp" alt=""></a>
                                </div>
                                <div class="content-area">
                                    <ul class="star-rating">
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star-sharp-half-stroke"></i></li>
                                    </ul>
                                    <h6 class="title "><a href="shop-details.html">Car Parts Gears and Equipment</a>
                                    </h6>
                                    <div class="button-area">
                                        <p class="">$400</p>
                                        <a href="cart.html" class="rts-btn btn-primary radius-big icon">
                                            Add To Cart
                                            <svg width="14" height="14" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1201_1501)">
                                                    <path d="M3.22189 6.46492H3.22235C3.22273 6.46492 3.22311 6.46484 3.22349 6.46484H8.53515C8.66592 6.46484 8.78089 6.37809 8.81683 6.25236L9.9887 2.1508C10.014 2.06238 9.99625 1.96731 9.94094 1.89392C9.88555 1.82053 9.79896 1.77734 9.70702 1.77734H2.54623L2.33681 0.834885C2.30697 0.700836 2.18811 0.605469 2.05078 0.605469H0.292969C0.131149 0.605469 0 0.736618 0 0.898437C0 1.06026 0.131149 1.19141 0.292969 1.19141H1.81579C1.85287 1.35841 2.81799 5.70152 2.87353 5.95138C2.56218 6.08673 2.34375 6.39717 2.34375 6.75781C2.34375 7.24243 2.73804 7.63671 3.22265 7.63671H8.53515C8.69697 7.63671 8.82812 7.50557 8.82812 7.34375C8.82812 7.18193 8.69697 7.05078 8.53515 7.05078H3.22265C3.06114 7.05078 2.92969 6.91932 2.92969 6.75781C2.92969 6.59652 3.06068 6.4653 3.22189 6.46492ZM9.31861 2.36328L8.31413 5.8789H3.45764L2.67639 2.36328H9.31861Z" fill="white" />
                                                    <path d="M2.92969 8.51562C2.92969 9.00024 3.32397 9.39453 3.80859 9.39453C4.29321 9.39453 4.6875 9.00024 4.6875 8.51562C4.6875 8.03101 4.29321 7.63672 3.80859 7.63672C3.32397 7.63672 2.92969 8.03101 2.92969 8.51562ZM3.80859 8.22266C3.97011 8.22266 4.10156 8.35411 4.10156 8.51562C4.10156 8.67714 3.97011 8.80859 3.80859 8.80859C3.64708 8.80859 3.51562 8.67714 3.51562 8.51562C3.51562 8.35411 3.64708 8.22266 3.80859 8.22266Z" fill="white" />
                                                    <path d="M7.07031 8.51562C7.07031 9.00024 7.4646 9.39453 7.94922 9.39453C8.43384 9.39453 8.82812 9.00024 8.82812 8.51562C8.82812 8.03101 8.43384 7.63672 7.94922 7.63672C7.4646 7.63672 7.07031 8.03101 7.07031 8.51562ZM7.94922 8.22266C8.11073 8.22266 8.24219 8.35411 8.24219 8.51562C8.24219 8.67714 8.11073 8.80859 7.94922 8.80859C7.7877 8.80859 7.65625 8.67714 7.65625 8.51562C7.65625 8.35411 7.7877 8.22266 7.94922 8.22266Z" fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="10" height="10" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="project-wrapper4">
                                <div class="image-area">
                                    <a href="shop-details.html"><img src="assets/images/portfolio/12.webp" alt=""></a>
                                </div>
                                <span class="price">14,000$</span>
                                <div class="content-area">
                                    <ul class="star-rating">
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star-sharp-half-stroke"></i></li>
                                    </ul>
                                    <h6 class="title "><a href="shop-details.html">Power Steering Pump</a>
                                    </h6>
                                    <div class="button-area">
                                        <p class="">$599</p>
                                        <a href="cart.html" class="rts-btn btn-primary radius-big icon">
                                            Add To Cart
                                            <svg width="14" height="14" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1201_1501)">
                                                    <path d="M3.22189 6.46492H3.22235C3.22273 6.46492 3.22311 6.46484 3.22349 6.46484H8.53515C8.66592 6.46484 8.78089 6.37809 8.81683 6.25236L9.9887 2.1508C10.014 2.06238 9.99625 1.96731 9.94094 1.89392C9.88555 1.82053 9.79896 1.77734 9.70702 1.77734H2.54623L2.33681 0.834885C2.30697 0.700836 2.18811 0.605469 2.05078 0.605469H0.292969C0.131149 0.605469 0 0.736618 0 0.898437C0 1.06026 0.131149 1.19141 0.292969 1.19141H1.81579C1.85287 1.35841 2.81799 5.70152 2.87353 5.95138C2.56218 6.08673 2.34375 6.39717 2.34375 6.75781C2.34375 7.24243 2.73804 7.63671 3.22265 7.63671H8.53515C8.69697 7.63671 8.82812 7.50557 8.82812 7.34375C8.82812 7.18193 8.69697 7.05078 8.53515 7.05078H3.22265C3.06114 7.05078 2.92969 6.91932 2.92969 6.75781C2.92969 6.59652 3.06068 6.4653 3.22189 6.46492ZM9.31861 2.36328L8.31413 5.8789H3.45764L2.67639 2.36328H9.31861Z" fill="white" />
                                                    <path d="M2.92969 8.51562C2.92969 9.00024 3.32397 9.39453 3.80859 9.39453C4.29321 9.39453 4.6875 9.00024 4.6875 8.51562C4.6875 8.03101 4.29321 7.63672 3.80859 7.63672C3.32397 7.63672 2.92969 8.03101 2.92969 8.51562ZM3.80859 8.22266C3.97011 8.22266 4.10156 8.35411 4.10156 8.51562C4.10156 8.67714 3.97011 8.80859 3.80859 8.80859C3.64708 8.80859 3.51562 8.67714 3.51562 8.51562C3.51562 8.35411 3.64708 8.22266 3.80859 8.22266Z" fill="white" />
                                                    <path d="M7.07031 8.51562C7.07031 9.00024 7.4646 9.39453 7.94922 9.39453C8.43384 9.39453 8.82812 9.00024 8.82812 8.51562C8.82812 8.03101 8.43384 7.63672 7.94922 7.63672C7.4646 7.63672 7.07031 8.03101 7.07031 8.51562ZM7.94922 8.22266C8.11073 8.22266 8.24219 8.35411 8.24219 8.51562C8.24219 8.67714 8.11073 8.80859 7.94922 8.80859C7.7877 8.80859 7.65625 8.67714 7.65625 8.51562C7.65625 8.35411 7.7877 8.22266 7.94922 8.22266Z" fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="10" height="10" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="project-wrapper4">
                                <div class="image-area">
                                    <a href="shop-details.html"><img src="assets/images/portfolio/13.webp" alt=""></a>
                                </div>
                                <div class="content-area">
                                    <ul class="star-rating">
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star-sharp-half-stroke"></i></li>
                                    </ul>
                                    <h6 class="title "><a href="shop-details.html">High-Performance Tires</a>
                                    </h6>
                                    <div class="button-area">
                                        <p class="">$399</p>
                                        <a href="cart.html" class="rts-btn btn-primary radius-big icon">
                                            Add To Cart
                                            <svg width="14" height="14" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1201_1501)">
                                                    <path d="M3.22189 6.46492H3.22235C3.22273 6.46492 3.22311 6.46484 3.22349 6.46484H8.53515C8.66592 6.46484 8.78089 6.37809 8.81683 6.25236L9.9887 2.1508C10.014 2.06238 9.99625 1.96731 9.94094 1.89392C9.88555 1.82053 9.79896 1.77734 9.70702 1.77734H2.54623L2.33681 0.834885C2.30697 0.700836 2.18811 0.605469 2.05078 0.605469H0.292969C0.131149 0.605469 0 0.736618 0 0.898437C0 1.06026 0.131149 1.19141 0.292969 1.19141H1.81579C1.85287 1.35841 2.81799 5.70152 2.87353 5.95138C2.56218 6.08673 2.34375 6.39717 2.34375 6.75781C2.34375 7.24243 2.73804 7.63671 3.22265 7.63671H8.53515C8.69697 7.63671 8.82812 7.50557 8.82812 7.34375C8.82812 7.18193 8.69697 7.05078 8.53515 7.05078H3.22265C3.06114 7.05078 2.92969 6.91932 2.92969 6.75781C2.92969 6.59652 3.06068 6.4653 3.22189 6.46492ZM9.31861 2.36328L8.31413 5.8789H3.45764L2.67639 2.36328H9.31861Z" fill="white" />
                                                    <path d="M2.92969 8.51562C2.92969 9.00024 3.32397 9.39453 3.80859 9.39453C4.29321 9.39453 4.6875 9.00024 4.6875 8.51562C4.6875 8.03101 4.29321 7.63672 3.80859 7.63672C3.32397 7.63672 2.92969 8.03101 2.92969 8.51562ZM3.80859 8.22266C3.97011 8.22266 4.10156 8.35411 4.10156 8.51562C4.10156 8.67714 3.97011 8.80859 3.80859 8.80859C3.64708 8.80859 3.51562 8.67714 3.51562 8.51562C3.51562 8.35411 3.64708 8.22266 3.80859 8.22266Z" fill="white" />
                                                    <path d="M7.07031 8.51562C7.07031 9.00024 7.4646 9.39453 7.94922 9.39453C8.43384 9.39453 8.82812 9.00024 8.82812 8.51562C8.82812 8.03101 8.43384 7.63672 7.94922 7.63672C7.4646 7.63672 7.07031 8.03101 7.07031 8.51562ZM7.94922 8.22266C8.11073 8.22266 8.24219 8.35411 8.24219 8.51562C8.24219 8.67714 8.11073 8.80859 7.94922 8.80859C7.7877 8.80859 7.65625 8.67714 7.65625 8.51562C7.65625 8.35411 7.7877 8.22266 7.94922 8.22266Z" fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="10" height="10" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="project-wrapper4">
                                <div class="image-area">
                                    <a href="shop-details.html"><img src="assets/images/portfolio/14.webp" alt=""></a>
                                </div>
                                <div class="content-area">
                                    <ul class="star-rating">
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star-sharp-half-stroke"></i></li>
                                    </ul>
                                    <h6 class="title "><a href="shop-details.html">Micrometer with check ring</a>
                                    </h6>
                                    <div class="button-area">
                                        <p class="">$790</p>
                                        <a href="cart.html" class="rts-btn btn-primary radius-big icon">
                                            Add To Cart
                                            <svg width="14" height="14" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1201_1501)">
                                                    <path d="M3.22189 6.46492H3.22235C3.22273 6.46492 3.22311 6.46484 3.22349 6.46484H8.53515C8.66592 6.46484 8.78089 6.37809 8.81683 6.25236L9.9887 2.1508C10.014 2.06238 9.99625 1.96731 9.94094 1.89392C9.88555 1.82053 9.79896 1.77734 9.70702 1.77734H2.54623L2.33681 0.834885C2.30697 0.700836 2.18811 0.605469 2.05078 0.605469H0.292969C0.131149 0.605469 0 0.736618 0 0.898437C0 1.06026 0.131149 1.19141 0.292969 1.19141H1.81579C1.85287 1.35841 2.81799 5.70152 2.87353 5.95138C2.56218 6.08673 2.34375 6.39717 2.34375 6.75781C2.34375 7.24243 2.73804 7.63671 3.22265 7.63671H8.53515C8.69697 7.63671 8.82812 7.50557 8.82812 7.34375C8.82812 7.18193 8.69697 7.05078 8.53515 7.05078H3.22265C3.06114 7.05078 2.92969 6.91932 2.92969 6.75781C2.92969 6.59652 3.06068 6.4653 3.22189 6.46492ZM9.31861 2.36328L8.31413 5.8789H3.45764L2.67639 2.36328H9.31861Z" fill="white" />
                                                    <path d="M2.92969 8.51562C2.92969 9.00024 3.32397 9.39453 3.80859 9.39453C4.29321 9.39453 4.6875 9.00024 4.6875 8.51562C4.6875 8.03101 4.29321 7.63672 3.80859 7.63672C3.32397 7.63672 2.92969 8.03101 2.92969 8.51562ZM3.80859 8.22266C3.97011 8.22266 4.10156 8.35411 4.10156 8.51562C4.10156 8.67714 3.97011 8.80859 3.80859 8.80859C3.64708 8.80859 3.51562 8.67714 3.51562 8.51562C3.51562 8.35411 3.64708 8.22266 3.80859 8.22266Z" fill="white" />
                                                    <path d="M7.07031 8.51562C7.07031 9.00024 7.4646 9.39453 7.94922 9.39453C8.43384 9.39453 8.82812 9.00024 8.82812 8.51562C8.82812 8.03101 8.43384 7.63672 7.94922 7.63672C7.4646 7.63672 7.07031 8.03101 7.07031 8.51562ZM7.94922 8.22266C8.11073 8.22266 8.24219 8.35411 8.24219 8.51562C8.24219 8.67714 8.11073 8.80859 7.94922 8.80859C7.7877 8.80859 7.65625 8.67714 7.65625 8.51562C7.65625 8.35411 7.7877 8.22266 7.94922 8.22266Z" fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="10" height="10" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="project-wrapper4">
                                <div class="image-area">
                                    <a href="shop-details.html"><img src="assets/images/portfolio/15.webp" alt=""></a>
                                </div>
                                <div class="content-area">
                                    <ul class="star-rating">
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star-sharp-half-stroke"></i></li>
                                    </ul>
                                    <h6 class="title "><a href="shop-details.html">Car Parts Mufflers And Pipes</a>
                                    </h6>
                                    <div class="button-area">
                                        <p class="">$270</p>
                                        <a href="cart.html" class="rts-btn btn-primary radius-big icon">
                                            Add To Cart
                                            <svg width="14" height="14" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1201_1501)">
                                                    <path d="M3.22189 6.46492H3.22235C3.22273 6.46492 3.22311 6.46484 3.22349 6.46484H8.53515C8.66592 6.46484 8.78089 6.37809 8.81683 6.25236L9.9887 2.1508C10.014 2.06238 9.99625 1.96731 9.94094 1.89392C9.88555 1.82053 9.79896 1.77734 9.70702 1.77734H2.54623L2.33681 0.834885C2.30697 0.700836 2.18811 0.605469 2.05078 0.605469H0.292969C0.131149 0.605469 0 0.736618 0 0.898437C0 1.06026 0.131149 1.19141 0.292969 1.19141H1.81579C1.85287 1.35841 2.81799 5.70152 2.87353 5.95138C2.56218 6.08673 2.34375 6.39717 2.34375 6.75781C2.34375 7.24243 2.73804 7.63671 3.22265 7.63671H8.53515C8.69697 7.63671 8.82812 7.50557 8.82812 7.34375C8.82812 7.18193 8.69697 7.05078 8.53515 7.05078H3.22265C3.06114 7.05078 2.92969 6.91932 2.92969 6.75781C2.92969 6.59652 3.06068 6.4653 3.22189 6.46492ZM9.31861 2.36328L8.31413 5.8789H3.45764L2.67639 2.36328H9.31861Z" fill="white" />
                                                    <path d="M2.92969 8.51562C2.92969 9.00024 3.32397 9.39453 3.80859 9.39453C4.29321 9.39453 4.6875 9.00024 4.6875 8.51562C4.6875 8.03101 4.29321 7.63672 3.80859 7.63672C3.32397 7.63672 2.92969 8.03101 2.92969 8.51562ZM3.80859 8.22266C3.97011 8.22266 4.10156 8.35411 4.10156 8.51562C4.10156 8.67714 3.97011 8.80859 3.80859 8.80859C3.64708 8.80859 3.51562 8.67714 3.51562 8.51562C3.51562 8.35411 3.64708 8.22266 3.80859 8.22266Z" fill="white" />
                                                    <path d="M7.07031 8.51562C7.07031 9.00024 7.4646 9.39453 7.94922 9.39453C8.43384 9.39453 8.82812 9.00024 8.82812 8.51562C8.82812 8.03101 8.43384 7.63672 7.94922 7.63672C7.4646 7.63672 7.07031 8.03101 7.07031 8.51562ZM7.94922 8.22266C8.11073 8.22266 8.24219 8.35411 8.24219 8.51562C8.24219 8.67714 8.11073 8.80859 7.94922 8.80859C7.7877 8.80859 7.65625 8.67714 7.65625 8.51562C7.65625 8.35411 7.7877 8.22266 7.94922 8.22266Z" fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="10" height="10" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="project-wrapper4">
                                <div class="image-area">
                                    <a href="shop-details.html"><img src="assets/images/portfolio/16.webp" alt=""></a>
                                </div>
                                <div class="content-area">
                                    <ul class="star-rating">
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star"></i></li>
                                        <li><i class="rt-icon-star-sharp-half-stroke"></i></li>
                                    </ul>
                                    <h6 class="title "><a href="shop-details.html">Car Gears Machine part</a>
                                    </h6>
                                    <div class="button-area">
                                        <p class="">$699</p>
                                        <a href="cart.html" class="rts-btn btn-primary radius-big icon">
                                            Add To Cart
                                            <svg width="14" height="14" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1201_1501)">
                                                    <path d="M3.22189 6.46492H3.22235C3.22273 6.46492 3.22311 6.46484 3.22349 6.46484H8.53515C8.66592 6.46484 8.78089 6.37809 8.81683 6.25236L9.9887 2.1508C10.014 2.06238 9.99625 1.96731 9.94094 1.89392C9.88555 1.82053 9.79896 1.77734 9.70702 1.77734H2.54623L2.33681 0.834885C2.30697 0.700836 2.18811 0.605469 2.05078 0.605469H0.292969C0.131149 0.605469 0 0.736618 0 0.898437C0 1.06026 0.131149 1.19141 0.292969 1.19141H1.81579C1.85287 1.35841 2.81799 5.70152 2.87353 5.95138C2.56218 6.08673 2.34375 6.39717 2.34375 6.75781C2.34375 7.24243 2.73804 7.63671 3.22265 7.63671H8.53515C8.69697 7.63671 8.82812 7.50557 8.82812 7.34375C8.82812 7.18193 8.69697 7.05078 8.53515 7.05078H3.22265C3.06114 7.05078 2.92969 6.91932 2.92969 6.75781C2.92969 6.59652 3.06068 6.4653 3.22189 6.46492ZM9.31861 2.36328L8.31413 5.8789H3.45764L2.67639 2.36328H9.31861Z" fill="white" />
                                                    <path d="M2.92969 8.51562C2.92969 9.00024 3.32397 9.39453 3.80859 9.39453C4.29321 9.39453 4.6875 9.00024 4.6875 8.51562C4.6875 8.03101 4.29321 7.63672 3.80859 7.63672C3.32397 7.63672 2.92969 8.03101 2.92969 8.51562ZM3.80859 8.22266C3.97011 8.22266 4.10156 8.35411 4.10156 8.51562C4.10156 8.67714 3.97011 8.80859 3.80859 8.80859C3.64708 8.80859 3.51562 8.67714 3.51562 8.51562C3.51562 8.35411 3.64708 8.22266 3.80859 8.22266Z" fill="white" />
                                                    <path d="M7.07031 8.51562C7.07031 9.00024 7.4646 9.39453 7.94922 9.39453C8.43384 9.39453 8.82812 9.00024 8.82812 8.51562C8.82812 8.03101 8.43384 7.63672 7.94922 7.63672C7.4646 7.63672 7.07031 8.03101 7.07031 8.51562ZM7.94922 8.22266C8.11073 8.22266 8.24219 8.35411 8.24219 8.51562C8.24219 8.67714 8.11073 8.80859 7.94922 8.80859C7.7877 8.80859 7.65625 8.67714 7.65625 8.51562C7.65625 8.35411 7.7877 8.22266 7.94922 8.22266Z" fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="10" height="10" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="rts-btn load-more-btn btn-border">Load More</a>
                </div>
            </div>
            <div class="rts-cta-area area-2">
                <div class="container">
                    <div class="cta-inner">
                        <h2 class="title">If you have any questions Please Call.</h2>
                        <div class="contact">
                            <a href="call-to_%2b16544521505.html">
                                <img src="assets/images/cta/call.svg" alt="">
                                <?php echo $Short_number ?> <br> <br>
                                +244 935 459 394  <br> <br>
                                +244  942 735 262
                            
                            </a>
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
                                All Rights Reserved by <?php echo $sitename ?> 
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
                    <li><a href="<?php echo $domain ?>about/index.php" class="main">About</a></li>
                    
                 
                    <li class="">
                        <a href="<?php echo $domain ?>shop/index.php" class="main">Shop</a>
                    </li>
                    <li><a href="<?php echo $domain ?>contact/index.php" class="main">Contact</a></li>
                </ul>
            </nav>
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