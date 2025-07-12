<?php include("../server/connection.php") ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain ?>assets/images/logo/logo.png">
    <title><?php echo $sitename ?> - Shop Quality Products at Josemaka</title>
    <meta name="description" content="Josemaka - Discover a wide range of quality products online. View products and visit our store to purchase them with confidence. Your trusted destination for reliable shopping.">
    <meta name="keywords" content="Josemaka, buy products, view products, online store, shop, quality products, visit store, reliable shopping">
    <meta name="author" content="Josemaka">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/plugins/magnifying-popup.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/fonts/rt-icon.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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
            <?php include('../include/nav.php')  ?>
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
                            </ul>
                        </div>
                        <div class="contact-wrapper">
                            <div class="icon">
                                <img src="<?php echo $domain ?>assets/images/contact/03.svg" alt="">
                            </div>
                            <h5 class="title">Phone</h5>
                            <ul>
                                <li>
                                    <a href="https://wa.me/<?php echo preg_replace('/\D/', '', $sitephone_number) ?>" target="_blank">
                                        <?php echo $sitephone_number ?> (Whatsapp)
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+244935459394">
                                        +244 935 459 394
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/244942735262" target="_blank">
                                        +244 942 735 262 (Whatsapp)
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <div class="contact-wrapper">
                            <div class="icon">
                                <i style="font-size: 40px; color: rgb(255, 54, 0);" class="bi bi-facebook"></i>
                            </div>
                            <h5 class="title">Facebook</h5>
                            <div style="width:100%; display: flex; justify-content: center;">
                                <li> <a  target=""  href="https://www.facebook.com/profile.php?id=61577994134274&mibextid=wwXIfr&mibextid=wwXIfr"><button class="rts-btn radius-small btn-primary">Join Us</button></a></li>
                            </div>

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
                            <a href="#">


                                <img src="<?php echo $domain ?>assets/images/cta/call.svg" alt="">

                                <a href="https://wa.me/<?php echo preg_replace('/\D/', '', $sitephone_number) ?>" target="_blank">
                                    <?php echo $sitephone_number ?> (WhatsApp)
                                </a>

                                <br>


                                <a href="tel:+244935459394" target="_blank">
                                    +244 935 459 394 (TelePhone)
                                </a>
                                <br>



                                <a href="https://wa.me/244942735262" target="_blank">
                                    +244 942 735 262 (WhatsApp)
                                </a>



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
    <?php include('../include/side-bar.php')  ?>
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