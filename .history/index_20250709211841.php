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
                                                <li class="">
                                                    <a class="main-menu" href="<?php echo $domain ?>index.php">Home</a>
                                                
                                                </li>

                                                <li class="main-nav">
                                                    <a class="main-menu" href="<?php echo $domain ?>about/index.php">About Us</a>
                                                </li>
                                             
                                            
                                                <li class="main-nav">
                                                    <a class="main-menu" href="<?php echo $domain ?>shop/index.php">Shop</a>
                                               
                                                </li>
                                                <li class="main-nav"><a class="main-menu" href="<?php echo $domain ?>index.php">Contact</a></li>
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
                                            <a href=" <?php echo $domain ?>shop/index.php" class="rts-btn btn-primary radius-big">Get Started Now</a>
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
                                            <a href="<?php echo $domain ?>shop/index.php" class="rts-btn btn-primary radius-big">Get Started Now</a>
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
                                                    "Fantastic value for money! I got a high-performance engine for a great price. It’s been running smoothly for months now. I’d definitely buy from <?php echo $sitename ?> again."
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
                                                   "I was nervous about buying a used engine online, but <?php echo $sitename ?> made the process stress-free. The engine came with a warranty, was clean, and worked right out of the box. Totally trustworthy!"
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
                        <div class="col-xl-7 col-lg-12">
                    <div class="rts-faq__accordion ">
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
                               <?php echo $Short_number ?>  <br> <br>
                                 +244 935 459 394 <br> <br>
                                 +244 942 735 262 <br> <br>
                            
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

                    <li><a href="<?php echo $domain ?>about/about.php" class="main">About</a></li>
                    <li class="">
                        <a href="<?php echo $domain ?>shop/index.php" class="main">Shop</a> 
                    </li>
                    <li><a href="<?php echo $domain ?>contact/index.php" class="main">Contact</a></li>
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