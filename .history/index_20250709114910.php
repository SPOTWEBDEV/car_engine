<?php include("./server/connection.php") ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.svg">
    <title><?php echo $sitename ?> - Car Dealer
        HTML Template</title>
    <meta name="description" content="Your trusted source for expert healthcare services and car information. Providing personalized care, advanced treatments, and reliable car dealing to help you achieve better health.">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/plugins/magnifying-popup.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/fonts/rt-icon.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/style.css">
</head>

<body class="home-four">
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
            <header class="header-four header--sticky">
                <div class="header-top">
                    <div class="container">
                        <div class="inner">
                            <div class="logo-area">
                                <a href="index-2.html"><img src="<?php echo $domain ?>assets/images/logo/logo.png" width="99" alt=""></a>
                            </div>
                            <div class="get-touch-area">
                                <div class="map-area">
                                    <div class="icon">
                                        <i class="rt-icon-phone-flip"></i>
                                    </div>
                                    <div class="text">
                                        <p>Call Us Now</p>
                                        <a href="call-to_12505550199"><?php echo $Short_number ?></a>
                                    </div>
                                </div>
                                <div class="map-area">
                                    <div class="icon">
                                        <i class="rt-icon-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <p>Send US Email</p>
                                        <a href="mail-to_<?php echo $sitename ?>%40gmail.html"><?php echo $site_email ?></a>
                                    </div>
                                </div>
                                <div class="map-area">
                                    <div class="icon">
                                        <i class="rt-icon-marker"></i>
                                    </div>
                                    <div class="text">
                                        <p>Our Location</p>
                                        <a href="#"><?php echo $short_site_address ?></a>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-wrapper-4">
                                <div class="header-right d-block">
                                    <div class="bottom d-flex align-items-center justify-content-between">
                                        <div class="logo-area">
                                            <a href="index-2.html"><img src="assets/images/logo/logo.png" width="99" alt=""></a>
                                        </div>
                                        <div class="nav-area">
                                            <ul class="">
                                                <li class="has-dropdown main-nav">
                                                    <a class="main-menu" href="javascript:void(0)">Home</a>
                                                
                                                </li>

                                                <li class="main-nav">
                                                    <a class="main-menu" href="about.html">About Us</a>
                                                </li>
                                             
                                            
                                                <li class="main-nav">
                                                    <a class="main-menu" href="javascript:void(0)">Shop</a>
                                               
                                                </li>
                                                <li class="main-nav"><a class="main-menu" href="contact.html">Contact</a></li>
                                            </ul>
                                        </div>
                                        <div class="bottom-right">
                                            <div class="social-area-transparent">
                                                <div class="search-area">
                                                    <a href="javascript:void(0)" class="search"><img src="assets/images/icon/search.svg" alt=""></a>
                                                </div>
                                       
                                            </div>
                                            <div class="menu-btn" id="menu-btn">
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
            </header>
            <!-- header area end -->


            <!-- header area end -->

            <!-- Banner area start -->
            <section class="rts-banner-slider-area">
                <div class="swiper bannerSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="rts-banner-wrapper bg bg-one">
                                <div class="container">
                                    <div class="banner-inner">
                                        <h2 class="section-title cw">Shop for Quality <br> Car Parts</h2>
                                        <div class="button-area">
                                            <a href="contact.html" class="rts-btn btn-primary radius-big">Get Started Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rts-banner-wrapper bg bg-three">
                                <div class="container">
                                    <div class="banner-inner">
                                        <h2 class="section-title cw">Shop for Quality <br> Car Parts</h2>
                                        <div class="button-area">
                                            <a href="contact.html" class="rts-btn btn-primary radius-big">Get Started Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rts-banner-wrapper bg bg-four">
                                <div class="container">
                                    <div class="banner-inner">
                                        <h2 class="section-title cw">Shop for Quality <br> Car Parts</h2>
                                        <div class="button-area">
                                            <a href="contact.html" class="rts-btn btn-primary radius-big">Get Started Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-btn-area">
                        <div class="swiper-btn swiper-button-prev"><img src="assets/images/banner/arrow-left.svg" alt=""></div>
                        <div class="swiper-btn swiper-button-next"><img src="assets/images/banner/arrow-right.svg" alt=""></div>
                    </div>
                </div>
                <div class="select-area-down wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s">
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
                    <button type="submit" class="rts-btn radius-big icon btn-primary">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.69 10.69L13 13M12.3333 6.68575C12.3333 9.826 9.796 12.3715 6.667 12.3715C3.53725 12.3715 1 9.826 1 6.6865C1 3.54475 3.53725 1 6.66625 1C9.796 1 12.3333 3.5455 12.3333 6.68575Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Search
                    </button>
                </div>
            </section>
            <!-- Banner area end -->

          

            <!-- Portfolio Area Start -->
            <section class="rts-portfolio-area2 area-3 rts-section-gapBottom">
                <div class="container">
                    <div class="section-top d-flex justify-content-between align-items-end">
                        <div class="section-title-area">
                            <p class="sub-title wow fadeInUp" data-wow-delay=".1s" data-wow-duration=".8s">Select Car
                            </p>
                            <h2 class="section-title wow move-right">Our Amazing <span>Parts</span></h2>
                        </div>
                        <div class="tab-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link radius-big active" id="new-cars-tab" data-bs-toggle="tab" data-bs-target="#new-cars" type="button" role="tab" aria-controls="new-cars" aria-selected="true">Latest Items</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link radius-big" id="used-tab" data-bs-toggle="tab" data-bs-target="#used" type="button" role="tab" aria-controls="used" aria-selected="false">Popular Items</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section-inner mt--80 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class=" tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="new-cars" role="tabpanel" aria-labelledby="new-cars-tab">
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
                            </div>
                            <div class="tab-pane fade" id="used" role="tabpanel" aria-labelledby="used-tab">
                                <div class="row g-5">
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
                                </div>
                            </div>
                        </div>
                        <a href="#" class="rts-btn radius-big btn-border load-more-btn">Load More</a>
                    </div>
                </div>
            </section>
            <!-- Portfolio Area End -->


                   <!-- Why Choose Us Area End -->
                    <section class="rts-why-choose-us3 rts-section-gap">
                        <div class="container">
                            <div class="section-title-area2">
                                <p class="sub-title wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">Why Choose Us</p>
                                <h2 class="section-title wow move-right">Why Choose <span>Us</span></h2>
                            </div>
                            <div class="section-inner mt--80">
                                <div class="row g-5">
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="why-choose-us-wrapper">
                                            <h6 class="title">Competitive Pricing</h6>
                                            <p class="desc">We offer affordable prices on all car engine parts without compromising quality.</p>
                                            <div class="icon">
                                                <img src="assets/images/why-choose/icon-05.svg" alt="">
                                                <div class="left"></div>
                                                <div class="right"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="why-choose-us-wrapper">
                                            <h6 class="title">Easy Online Browsing</h6>
                                            <p class="desc">Find the exact engine parts you need online, then visit our store to make your purchase.</p>
                                            <div class="icon">
                                                <img src="assets/images/why-choose/icon-06.svg" alt="">
                                                <div class="left"></div>
                                                <div class="right"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="why-choose-us-wrapper">
                                            <h6 class="title">In-Store Pickup</h6>
                                            <p class="desc">Reserve your car engine parts online and pick them up easily at our store location.</p>
                                            <div class="icon">
                                                <img src="assets/images/why-choose/icon-07.svg" alt="">
                                                <div class="left"></div>
                                                <div class="right"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="why-choose-us-wrapper">
                                            <h6 class="title">Expert Guidance</h6>
                                            <p class="desc">Our knowledgeable team is ready to assist you in choosing the right parts for your car.</p>
                                            <div class="icon">
                                                <img src="assets/images/why-choose/icon-08.svg" alt="">
                                                <div class="left"></div>
                                                <div class="right"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Why Choose Us Area End -->






            <!-- Brand Area Start -->
            <section class="rts-brand-area rts-section-gapBottom">
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

            <!-- Cta Area Start -->
            <div class="rts-cta-area">
                <div class="container">
                    <div class="section-inner">
                        <div class="row g-5">
                            <div class="col-lg-6 col-md-12">
                                <div class="cta-wrapper">
                                    <div class="image-area jarallax jara-mask-1">
                                        <img src="assets/images/cta/01.webp" class="jarallax-img" alt="">
                                    </div>
                                    <div class="content">
                                        <span class="tag radius-big">30% Off</span>
                                        <h4 class="title cw">For Online Order</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="cta-wrapper">
                                    <div class="image-area jarallax jara-mask-1">
                                        <img src="assets/images/cta/02.webp" class="jarallax-img" alt="">
                                    </div>
                                    <div class="content">
                                        <span class="tag radius-big">30% Off</span>
                                        <h4 class="title cw">Our Trending Product</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cta Area End -->

            

            <!-- Testimonials Area End -->
            <section class="rts-testimonials-area area-3 bg-primary">
                <div class="container">
                    <div class="slider-inner mt--50">
                        <div class="row align-items-end">
                            <div class="col-lg-6">
                                <div class="swiper rts-imageSlider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-image-area3">
                                                <img src="assets/images/testimonials/04.webp" width="512" alt="">
                                                <div class="author-content">
                                                    <div class="inner">
                                                        <h5 class="title">Jonathon Doe</h5>
                                                        <p class="desc">COO At Mazda</p>
                                                    </div>
                                                    <div class="top-right"></div>
                                                    <div class="bottom-left"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-image-area3">
                                                <img src="assets/images/testimonials/05.webp" width="512" alt="">
                                                <div class="author-content">
                                                    <div class="inner">
                                                        <h5 class="title">Nathan Macks</h5>
                                                        <p class="desc">COO At Mazda</p>
                                                    </div>
                                                    <div class="top-right"></div>
                                                    <div class="bottom-left"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="swiper rts-testimonialSlider3">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="review-wrapper3">
                                                <div class="section-title-area">
                                                    <p class="sub-title cw wow fadeInUp" data-wow-delay=".1s" data-wow-duration=".8s">Testimonial</p>
                                                    <h2 class="section-title cw wow move-right">What Our Customers Are Saying</h2>
                                                </div>
                                                <div class="inner d-flex align-items-start">
                                                    <div class="quote"><img src="assets/images/testimonials/quote-sm.svg" alt=""></div>
                                                    <div class="content">
                                                        <p class="desc cw">
                                                            I had an amazing experience with [Your Company Name]. The booking process was so simple, and the car was in excellent condition. The staff was friendly and helpful, making for it buy everything I needed. I will definitely use their again!
                                                        </p>
                                                        <ul class="star-rating">
                                                            <li class="cw"><i class="rt-icon-star"></i></li>
                                                            <li class="cw"><i class="rt-icon-star"></i></li>
                                                            <li class="cw"><i class="rt-icon-star"></i></li>
                                                            <li class="cw"><i class="rt-icon-star"></i></li>
                                                            <li class="cw"><i class="rt-icon-star-sharp-half-stroke"></i></li>
                                                        </ul>
                                                        <div class="quote-big text-end">
                                                            <img src="assets/images/testimonials/quote-big.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="review-wrapper3">
                                                <div class="section-title-area">
                                                    <p class="sub-title cw wow fadeInUp" data-wow-delay=".1s" data-wow-duration=".8s">Testimonial</p>
                                                    <h2 class="section-title cw wow move-right">What Our Customers Are Saying</h2>
                                                </div>
                                                <div class="inner d-flex align-items-start">
                                                    <div class="quote"><img src="assets/images/testimonials/quote-sm.svg" alt=""></div>
                                                    <div class="content">
                                                        <p class="desc cw">
                                                            I had an amazing experience with [Your Company Name]. The booking process was so simple, and the car was in excellent condition. The staff was friendly and helpful, making for it buy everything I needed. I will definitely use their again!
                                                        </p>
                                                        <ul class="star-rating">
                                                            <li class="cw"><i class="rt-icon-star"></i></li>
                                                            <li class="cw"><i class="rt-icon-star"></i></li>
                                                            <li class="cw"><i class="rt-icon-star"></i></li>
                                                            <li class="cw"><i class="rt-icon-star"></i></li>
                                                            <li class="cw"><i class="rt-icon-star-sharp-half-stroke"></i></li>
                                                        </ul>
                                                        <div class="quote-big text-end">
                                                            <img src="assets/images/testimonials/quote-big.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-btn-area">
                    <div class="swiper-btn swiper-button-prev"><i class="fa-regular fa-arrow-left"></i></div>
                    <div class="swiper-btn swiper-button-next"><i class="fa-regular fa-arrow-right"></i></div>
                </div>
            </section>
            <!-- Testimonials Area End -->

            <!-- Blog Area Start -->
            <section class="rts-blog-area rts-section-gap">
                <div class="container">
                    <div class="section-title-area2">
                        <p class="sub-title wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">Latest Blog</p>
                        <h2 class="section-title wow move-right">Our Latest <span>Blog</span></h2>
                    </div>
                    <div class="section-inner mt--80">
                        <div class="row g-5">
                            <div class="col-lg-6">
                                <div class="blog-wrapper">
                                    <div class="image-area">
                                        <a href="blog-details.html"><img src="assets/images/blog/05.webp" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <p class="blog-meta">March 26, 2024</p>
                                        <h5><a href="blog-details.html">Braking It Down Understanding the Key Parts of Your Car's Brake Parts System </a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-list-style mb--30">
                                    <div class="blog-wrapper d-flex align-items-center">
                                        <div class="image-area">
                                            <a href="blog-details.html"><img src="assets/images/blog/03.webp" width="263" alt=""></a>
                                        </div>
                                        <div class="content mt-0">
                                            <p class="blog-meta">March 26, 2024</p>
                                            <h6><a href="blog-details.html">A Beginner's Guide to Understanding Your Car's Engine Components</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-list-style">
                                    <div class="blog-wrapper d-flex align-items-center">
                                        <div class="image-area">
                                            <a href="blog-details.html"><img src="assets/images/blog/04.webp" width="263" alt=""></a>
                                        </div>
                                        <div class="content mt-0">
                                            <p class="blog-meta">March 26, 2024</p>
                                            <h6><a href="blog-details.html">The Ultimate Guide to Car Suspension: What You Need to Know</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Area End -->

            <!-- FAQ Area Start -->
            <section class="rts-faq-area two rts-section-gapBottom">
                <div class="container">
                    <div class="section-title-area2">
                        <p class="sub-title wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">FAQ</p>
                        <h2 class="section-title wow move-right">Frequently Asked <span>Question</span></h2>
                    </div>
                    <div class="section-inner mt--80">
                        <div class="row g-5">
                        <div class="col-xl-7 col-lg-6">
                    <div class="rts-faq__accordion">
                        <div class="accordion accordion-flush" id="rts-accordion">
                            <div class="accordion-item active">
                                <div class="accordion-header" id="faq1">
                                    <h4 class="accordion-button collapse show" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="true" aria-controls="item1">
                                        Do you offer home delivery for products?
                                    </h4>
                                </div>
                                <div id="item1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        We currently do not offer home delivery. Customers are encouraged to visit our store to view and purchase products directly.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="faq2">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="false" aria-controls="item2">
                                        Can I reserve a product online before coming to the store?
                                    </h4>
                                </div>
                                <div id="item2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Yes, you can contact us through the website to reserve a product for pick-up at the store. Reservations are usually held for 24 hours.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="faq3">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item3" aria-expanded="false" aria-controls="item3">
                                        Are all products displayed on the website available in the store?
                                    </h4>
                                </div>
                                <div id="item3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        We strive to keep the website updated, but availability may vary. We recommend calling ahead to confirm stock before visiting.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="faq4">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item4" aria-expanded="false" aria-controls="item4">
                                        Do you offer discounts or promotions in-store?
                                    </h4>
                                </div>
                                <div id="item4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Yes, we regularly run in-store promotions and discounts. Visit our store or follow us on social media for the latest offers.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="faq5">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item5" aria-expanded="false" aria-controls="item5">
                                        How can I contact you for more information?
                                    </h4>
                                </div>
                                <div id="item5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        You can use the contact form on this page, call us directly, or visit our store during working hours. We’re happy to help!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-5 col-lg-6">
                                <div class="contact-form">
                                    <h5>Get In Touch</h5>
                                    <form class="form__content" method="post" action="https://html.themewant.com/<?php echo $sitename ?>/mailer.php" id="contact-form">
                                        <div class="form__control">
                                            <span class="icon">
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57349 7.70726C7.63232 7.70726 8.54907 7.3275 9.29834 6.57823C10.0474 5.82909 10.4272 4.91247 10.4272 3.85351C10.4272 2.79492 10.0475 1.87817 9.29822 1.12878C8.54895 0.37976 7.6322 0 6.57349 0C5.51453 0 4.5979 0.37976 3.84875 1.1289C3.09961 1.87805 2.71973 2.79479 2.71973 3.85351C2.71973 4.91247 3.09961 5.82921 3.84875 6.57836C4.59814 7.32738 5.51489 7.70726 6.57349 7.70726ZM4.51184 1.79187C5.08667 1.21704 5.76099 0.93762 6.57349 0.93762C7.38586 0.93762 8.0603 1.21704 8.63525 1.79187C9.21008 2.36682 9.48962 3.04125 9.48962 3.85351C9.48962 4.66601 9.21008 5.34032 8.63525 5.91527C8.0603 6.49022 7.38586 6.76964 6.57349 6.76964C5.76123 6.76964 5.08691 6.4901 4.51184 5.91527C3.93689 5.34044 3.65735 4.66601 3.65735 3.85351C3.65735 3.04125 3.93689 2.36682 4.51184 1.79187Z" fill="#555555"/>
                                                    <path d="M13.3165 12.3031C13.2949 11.9913 13.2512 11.6512 13.1869 11.2921C13.1219 10.9303 13.0383 10.5883 12.9382 10.2756C12.8347 9.95251 12.6942 9.63342 12.5203 9.32763C12.34 9.01025 12.1281 8.73388 11.8903 8.50647C11.6416 8.26855 11.3372 8.07727 10.9851 7.93774C10.6343 7.79895 10.2455 7.72864 9.82959 7.72864C9.66626 7.72864 9.5083 7.79565 9.20325 7.99426C9.0155 8.1167 8.7959 8.2583 8.55078 8.41492C8.34119 8.54846 8.05725 8.67358 7.70654 8.78686C7.36438 8.89758 7.01697 8.95373 6.67395 8.95373C6.33118 8.95373 5.98376 8.89758 5.64136 8.78686C5.29102 8.6737 5.00696 8.54858 4.79773 8.41504C4.55493 8.25989 4.33521 8.11829 4.14465 7.99414C3.83984 7.79553 3.68188 7.72852 3.51855 7.72852C3.10254 7.72852 2.71387 7.79895 2.36316 7.93787C2.01135 8.07715 1.70679 8.26843 1.45789 8.50659C1.22009 8.73413 1.00818 9.01037 0.828003 9.32763C0.654297 9.63342 0.513672 9.95239 0.410156 10.2758C0.310181 10.5884 0.226562 10.9303 0.161621 11.2921C0.097168 11.6507 0.0535889 11.991 0.0319824 12.3035C0.0107422 12.609 0 12.927 0 13.2483C0 14.0835 0.265503 14.7596 0.789062 15.2583C1.30615 15.7503 1.99023 15.9999 2.82239 15.9999H10.5265C11.3584 15.9999 12.0425 15.7503 12.5597 15.2583C13.0834 14.76 13.3489 14.0836 13.3489 13.2482C13.3488 12.9258 13.3379 12.6078 13.3165 12.3031ZM11.9132 14.579C11.5715 14.9042 11.1179 15.0622 10.5264 15.0622H2.82239C2.23071 15.0622 1.7771 14.9042 1.43555 14.5791C1.10046 14.2601 0.937622 13.8247 0.937622 13.2483C0.937622 12.9485 0.94751 12.6525 0.967285 12.3683C0.986572 12.0895 1.026 11.7832 1.08447 11.4578C1.14221 11.1363 1.2157 10.8347 1.3031 10.5616C1.38696 10.2998 1.50134 10.0405 1.64319 9.79077C1.77856 9.55273 1.93433 9.34851 2.1062 9.18396C2.26697 9.03003 2.4696 8.90405 2.70837 8.80957C2.9292 8.72217 3.17737 8.67431 3.44678 8.66711C3.47961 8.68457 3.53809 8.71789 3.63281 8.77966C3.82556 8.90527 4.04773 9.04858 4.29333 9.20544C4.57019 9.38195 4.92688 9.54138 5.35303 9.67895C5.7887 9.81982 6.23303 9.89135 6.67407 9.89135C7.11511 9.89135 7.55957 9.81982 7.995 9.67907C8.42151 9.54126 8.77808 9.38195 9.0553 9.2052C9.30664 9.04455 9.52258 8.90539 9.71533 8.77966C9.81006 8.71802 9.86853 8.68457 9.90137 8.66711C10.1709 8.67431 10.4191 8.72217 10.64 8.80957C10.8787 8.90405 11.0813 9.03015 11.2421 9.18396C11.4139 9.34839 11.5697 9.55261 11.7051 9.79089C11.847 10.0405 11.9615 10.2999 12.0453 10.5615C12.1328 10.835 12.2064 11.1365 12.264 11.4576C12.3224 11.7837 12.3619 12.0901 12.3812 12.3684V12.3686C12.4011 12.6517 12.4111 12.9476 12.4113 13.2483C12.4111 13.8248 12.2483 14.2601 11.9132 14.579Z" fill="#555555"/>
                                                </svg>
                                            </span>
                                            <input type="text" class="input-form" name="name" id="name" placeholder="what is your name?" required>
                                        </div>
                                        <div class="form__control">
                                            <span class="icon">
                                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.6667 0H3.33333C2.4496 0.00101045 1.60237 0.336561 0.97748 0.933049C0.352588 1.52954 0.00105857 2.33826 0 3.18182L0 10.8182C0.00105857 11.6617 0.352588 12.4705 0.97748 13.067C1.60237 13.6634 2.4496 13.999 3.33333 14H12.6667C13.5504 13.999 14.3976 13.6634 15.0225 13.067C15.6474 12.4705 15.9989 11.6617 16 10.8182V3.18182C15.9989 2.33826 15.6474 1.52954 15.0225 0.933049C14.3976 0.336561 13.5504 0.00101045 12.6667 0ZM3.33333 1.27273H12.6667C13.0659 1.27348 13.4557 1.38824 13.786 1.60224C14.1163 1.81624 14.3719 2.11969 14.52 2.47355L9.41467 7.34745C9.03895 7.70465 8.53028 7.90521 8 7.90521C7.46972 7.90521 6.96105 7.70465 6.58533 7.34745L1.48 2.47355C1.6281 2.11969 1.88374 1.81624 2.21403 1.60224C2.54432 1.38824 2.93414 1.27348 3.33333 1.27273ZM12.6667 12.7273H3.33333C2.8029 12.7273 2.29419 12.5261 1.91912 12.1681C1.54405 11.8101 1.33333 11.3245 1.33333 10.8182V4.13636L5.64267 8.24727C6.26842 8.84307 7.11617 9.17766 8 9.17766C8.88383 9.17766 9.73158 8.84307 10.3573 8.24727L14.6667 4.13636V10.8182C14.6667 11.3245 14.456 11.8101 14.0809 12.1681C13.7058 12.5261 13.1971 12.7273 12.6667 12.7273Z" fill="#555555"/>
                                                </svg>                                                    
                                            </span>
                                            <input type="email" class="input-form" name="email" id="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="form__control">
                                            <span class="icon">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.9792 1.02532L12.3258 0.453589C11.7308 -0.141473 10.7217 -0.170643 10.08 0.482759L8.98917 1.91207C8.37667 2.52464 8.37667 3.52224 8.98917 4.12897L9.85834 5.02156C8.91334 7.23846 7.16917 8.98864 5.02251 9.86374L4.13001 8.99448C3.83251 8.69695 3.44167 8.5336 3.02167 8.5336C2.60168 8.5336 2.21084 8.69695 1.94251 8.97114L0.460843 10.1146C-0.151656 10.7272 -0.151656 11.7248 0.449177 12.3198L1.04418 13.0024C1.68584 13.6441 2.54918 14 3.48834 14C8.00917 14 14 8.00271 14 3.48724C14 2.55381 13.6442 1.68455 12.9908 1.03115L12.9792 1.02532ZM3.47667 13.4108C2.69501 13.4108 1.97751 13.1191 1.45834 12.5999L0.863343 11.9114C0.478343 11.5264 0.478344 10.9022 0.834177 10.5405L2.31584 9.39702C2.50251 9.21033 2.74751 9.10532 3.01584 9.10532C3.28417 9.10532 3.52917 9.21033 3.71584 9.39702L4.74834 10.4063C4.83001 10.488 4.94667 10.5113 5.05751 10.4705C7.49 9.54287 9.4675 7.56516 10.4767 5.05657C10.5175 4.95156 10.4942 4.82905 10.4125 4.74154L9.40334 3.70893C9.01834 3.32389 9.01834 2.69966 9.42667 2.28545L10.5175 0.856131C10.9025 0.471091 11.5267 0.471091 11.9292 0.867799L12.5825 1.43953C13.1133 1.97041 13.405 2.68799 13.405 3.46974C13.405 7.64684 7.65334 13.3991 3.47667 13.3991V13.4108Z" fill="#555555"/>
                                                </svg>                                                    
                                            </span>
                                            <input type="text" class="input-form" name="phone" id="phone" placeholder="Phone Number" required>
                                        </div>
                                        <div class="form__control">
                                            <span class="icon">
                                                <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.2309 4.67871H6.49742C6.32626 4.67871 6.1875 4.8373 6.1875 5.03291C6.1875 5.22852 6.32626 5.38711 6.49742 5.38711H14.2309C14.4021 5.38711 14.5408 5.22852 14.5408 5.03291C14.5408 4.8373 14.402 4.67871 14.2309 4.67871Z" fill="#555555"/>
                                                    <path d="M3.26685 6.2832H2.12145C1.95029 6.2832 1.81152 6.44179 1.81152 6.6374C1.81152 6.83301 1.95029 6.9916 2.12145 6.9916H3.26685C3.83285 6.9916 4.31014 7.4342 4.44766 8.03247H2.20083C2.02967 8.03247 1.89091 8.19105 1.89091 8.38666C1.89091 8.58227 2.02967 8.74086 2.20083 8.74086H4.79738C4.96854 8.74086 5.10731 8.58227 5.10731 8.38666C5.10735 7.22679 4.28171 6.2832 3.26685 6.2832Z" fill="#555555"/>
                                                    <path d="M17.4616 6.9916H18.607C18.7782 6.9916 18.9169 6.83301 18.9169 6.6374C18.9169 6.44179 18.7782 6.2832 18.607 6.2832H17.4616C16.4467 6.2832 15.6211 7.22679 15.6211 8.38666C15.6211 8.58227 15.7599 8.74086 15.931 8.74086H18.5276C18.6987 8.74086 18.8375 8.58227 18.8375 8.38666C18.8375 8.19105 18.6987 8.03247 18.5276 8.03247H16.2808C16.4183 7.4342 16.8956 6.9916 17.4616 6.9916Z" fill="#555555"/>
                                                    <path d="M19.5243 4.72735C19.0899 4.20848 18.5 3.92271 17.8631 3.92271C17.8352 3.92271 17.8075 3.92701 17.7806 3.93551L16.7846 4.24999L15.3173 1.02849C15.0546 0.451767 14.4032 0 13.8344 0H6.89271C6.32381 0 5.67243 0.451767 5.40974 1.02849L3.94247 4.24999L2.94645 3.93551C2.91959 3.92701 2.89182 3.92271 2.86393 3.92271C2.2271 3.92271 1.63712 4.20848 1.20273 4.72735C0.768343 5.24623 0.544536 5.93243 0.572677 6.66165L0.7976 11.7866C0.805865 11.9751 0.942025 12.1231 1.10715 12.1231H1.21046V13.6698C1.21046 13.8654 1.34923 14.0239 1.52039 14.0239H4.78125C4.95241 14.0239 5.09118 13.8654 5.09118 13.6698V13.1857C5.09118 12.9901 4.95241 12.8315 4.78125 12.8315C4.61009 12.8315 4.47133 12.9901 4.47133 13.1857V13.3156H1.83027V12.1231H18.8968V13.3156H16.2558V13.1857C16.2558 12.9901 16.117 12.8315 15.9459 12.8315C15.7747 12.8315 15.6359 12.9901 15.6359 13.1857V13.6698C15.6359 13.8654 15.7747 14.0239 15.9459 14.0239H19.2067C19.3779 14.0239 19.5167 13.8654 19.5167 13.6698V12.1231H19.62C19.7851 12.1231 19.9212 11.9751 19.9295 11.7866L20.1545 6.65957C20.1826 5.93243 19.9588 5.24623 19.5243 4.72735ZM19.5353 6.62618L19.3252 11.4146H1.40191L1.19187 6.62831C1.17133 6.09616 1.33422 5.595 1.65064 5.21714C1.95784 4.85019 2.37305 4.64334 2.8236 4.63172L4.01594 5.00821C4.01669 5.00844 4.01743 5.00868 4.01822 5.00892L5.17461 5.37402C5.33953 5.42611 5.51028 5.31551 5.55586 5.12694C5.60144 4.93841 5.50466 4.74332 5.33965 4.69123L4.55344 4.443L5.95959 1.35568C6.11662 1.01093 6.55266 0.708489 6.89275 0.708489H13.8344C14.1745 0.708489 14.6105 1.01093 14.7676 1.35568L16.1737 4.443L15.3875 4.69123C15.2225 4.74332 15.1257 4.93841 15.1713 5.12694C15.2169 5.31551 15.3876 5.42607 15.5525 5.37402L17.9036 4.63172C18.3541 4.64339 18.7693 4.85024 19.0765 5.21714C19.3929 5.595 19.5558 6.09616 19.5353 6.62618Z" fill="#555555"/>
                                                    <path d="M17.8636 3.21425H18.9433C19.1145 3.21425 19.2533 3.05567 19.2533 2.86006C19.2533 2.66445 19.1145 2.50586 18.9433 2.50586H17.8636C17.6925 2.50586 17.5537 2.66445 17.5537 2.86006C17.5537 3.05567 17.6925 3.21425 17.8636 3.21425Z" fill="#555555"/>
                                                    <path d="M1.78453 3.21425H2.86423C3.03539 3.21425 3.17416 3.05567 3.17416 2.86006C3.17416 2.66445 3.03539 2.50586 2.86423 2.50586H1.78453C1.61337 2.50586 1.47461 2.66445 1.47461 2.86006C1.47461 3.05567 1.61337 3.21425 1.78453 3.21425Z" fill="#555555"/>
                                                    <path d="M13.8011 9.05078H6.92614C6.75497 9.05078 6.61621 9.20937 6.61621 9.40498V10.3516C6.61621 10.5472 6.75497 10.7058 6.92614 10.7058C7.0973 10.7058 7.23606 10.5472 7.23606 10.3516V9.75918H13.4912V10.3516C13.4912 10.5472 13.63 10.7058 13.8011 10.7058C13.9723 10.7058 14.1111 10.5472 14.1111 10.3516V9.40498C14.1111 9.20937 13.9723 9.05078 13.8011 9.05078Z" fill="#555555"/>
                                                    <path d="M12.0824 7.27578C12.2536 7.27578 12.3923 7.11719 12.3923 6.92158C12.3923 6.72597 12.2536 6.56738 12.0824 6.56738H8.64489C8.47372 6.56738 8.33496 6.72597 8.33496 6.92158C8.33496 7.11719 8.47372 7.27578 8.64489 7.27578H12.0824Z" fill="#555555"/>
                                                </svg>                                                    
                                            </span>
                                            <input type="text" class="input-form" name="car" id="car" placeholder="Car Type" required>
                                        </div>
                                        <div class="form__control">
                                            <span class="icon">
                                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.05371 5.68493C5.05371 5.33605 5.33654 5.05322 5.68542 5.05322H9.05454C9.40342 5.05322 9.68625 5.33605 9.68625 5.68493C9.68625 6.03381 9.40342 6.31664 9.05454 6.31664H5.68542C5.33654 6.31664 5.05371 6.03381 5.05371 5.68493Z" fill="#555555"/>
                                                    <path d="M5.05371 9.05334C5.05371 8.70447 5.33654 8.42163 5.68542 8.42163H12.4237C12.7725 8.42163 13.0554 8.70447 13.0554 9.05334C13.0554 9.40221 12.7725 9.68505 12.4237 9.68505H5.68542C5.33654 9.68505 5.05371 9.40221 5.05371 9.05334Z" fill="#555555"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.34169 -0.000244141H10.7674C11.9227 -0.000244141 12.8285 -0.000252525 13.5566 0.0592293C14.2979 0.119798 14.9103 0.24518 15.4646 0.527622C16.376 0.991946 17.1168 1.73285 17.5812 2.64414C17.8636 3.19848 17.989 3.8109 18.0496 4.55223C18.109 5.28025 18.109 6.18606 18.109 7.34143V8.36714V8.49087C18.1092 9.79523 18.1094 10.5909 17.9134 11.2593C17.4493 12.8421 16.2115 14.0799 14.6286 14.544C13.9603 14.74 13.1646 14.7398 11.8602 14.7397C11.8195 14.7397 11.7783 14.7397 11.7365 14.7397H11.2743L11.2235 14.7397C10.493 14.7444 9.78157 14.9725 9.18448 15.3932L9.14304 15.4227L6.94411 16.9934C5.67689 17.8985 4.01168 16.5913 4.59004 15.1454C4.66778 14.9511 4.52466 14.7397 4.31535 14.7397H3.80851C1.70512 14.7397 0 13.0346 0 10.9311V7.34144C0 6.18607 -8.38404e-06 5.28026 0.0594735 4.55223C0.120042 3.8109 0.245424 3.19848 0.527866 2.64414C0.99219 1.73285 1.73309 0.991946 2.64438 0.527622C3.19872 0.24518 3.81114 0.119798 4.55248 0.0592293C5.2805 -0.000252525 6.18632 -0.000244141 7.34169 -0.000244141ZM4.65535 1.31846C3.99216 1.37264 3.56451 1.47677 3.21797 1.65334C2.5444 1.99653 1.99678 2.54416 1.65358 3.21772C1.47701 3.56426 1.37288 3.99191 1.3187 4.65511C1.26391 5.32568 1.26342 6.17998 1.26342 7.36971V10.9311C1.26342 12.3368 2.40289 13.4762 3.80851 13.4762H4.31535C5.41848 13.4762 6.1728 14.5904 5.7631 15.6146C5.65336 15.889 5.96932 16.137 6.20976 15.9653L8.45667 14.3604C9.2645 13.7912 10.2271 13.4826 11.2154 13.4763L11.2743 13.4762H11.7365C13.2037 13.4762 13.8019 13.4698 14.2731 13.3316C15.443 12.9886 16.3579 12.0737 16.701 10.9038C16.8392 10.4325 16.8456 9.83431 16.8456 8.36714V7.36971C16.8456 6.17998 16.8451 5.32568 16.7904 4.65511C16.7361 3.99191 16.632 3.56426 16.4555 3.21772C16.1122 2.54416 15.5646 1.99653 14.8911 1.65334C14.5445 1.47677 14.1169 1.37264 13.4537 1.31846C12.7831 1.26367 11.9288 1.26318 10.7391 1.26318H7.36996C6.18023 1.26318 5.32593 1.26367 4.65535 1.31846Z" fill="#555555"/>
                                                </svg>                                                    
                                            </span>
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="form__control">
                                            <button type="submit" class="submit__btn">Submit Now</button>
                                        </div>
                                    </form>
                                    <div id="form-messages"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FAQ Area End -->

            <div class="rts-cta-area area-3 rts-section-gapBottom">
                <div class="container">
                    <div class="cta-inner">
                        <h2 class="title">If you have any questions Please Call.</h2>
                        <div class="contact">
                            <a href="call-to_%2b16544521505.html">
                                <img src="assets/images/cta/call.svg" alt="">
                               <?php echo $Short_number ?></a>
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
                                <img src="assets/images/logo/logo.png" width="99" alt="">
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
                     
                        <div class="single-wized">
                            <h6 class="title">Download App</h6>
                            <div class="body d-flex gap-3">
                                <a href="#">
                                    <img src="assets/images/about/app-store.svg" alt="">
                                </a>
                                <a href="#">
                                    <img src="assets/images/about/play-store.svg" alt="">
                                </a>
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
                    <li class="has-droupdown">
                        <!-- <a href="#" class="main">Home</a>
                  -->       <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="index-2.html">Dealer One</a></li>
                            <li><a class="mobile-menu-link" href="index-two.html">Dealer Two</a></li>
                            <li><a class="mobile-menu-link" href="index-three.html">Dealer Three</a></li>
                            <li><a class="mobile-menu-link" href="index-four.html">Shop Demo</a></li>
                            <li><a class="mobile-menu-link" href="index-five.html">Wash Demo</a></li>
                            <li><a class="mobile-menu-link" href="index-six.html">Repair Demo</a></li>
                            <li><a class="mobile-menu-link" href="index-seven.html">Dealer Slider</a></li>
                            <li><a class="mobile-menu-link" href="index-eight.html">Dealer Video</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html" class="main">About</a></li>
                    <li class="has-droupdown">
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
                <p>Design And Develop By <a href="">SPOTWEB TECH</a></p>
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
    <script src="<?php echo $domain ?>assets/js/main.js"></script>
</body>


<!-- Mirrored from html.themewant.com/<?php echo $sitename ?>/index-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jul 2025 16:57:32 GMT -->
</html>