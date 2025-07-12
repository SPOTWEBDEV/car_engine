<?php

include('../server/connection.php')



?>


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
            <!-- rts breadcrumb area start -->

            <!-- rts breadcrumb area end -->
            <div class="rts-portfolio-area inner rts-section-gapTop">
                <div class="container">
                    <div class="row g-5 justify-content-center">
                        <div class="col-lg-8">
                            <div class="portfolio-details-area">
                                <div class="image mb--40">
                                    <img src="" alt="">
                                </div>
                                <h2 class="mb--30"></h2>
                                <!-- Paragraphs will be injected here -->
                            </div>
                        </div>

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
    <script type="module">
        import {
            news
        } from "<?php echo $domain ?>assets/js/blogNew.js"

        // Get ID from URL
        const urlParams = new URLSearchParams(window.location.search);
        const postId = parseInt(urlParams.get('id'));

        // Find the blog post by ID
        const post = news.find(item => item.id === postId);

        // If not found, redirect
        if (!post) {
            window.location.href = '../index.php';
        } else {
            // Replace content dynamically
            document.querySelector('.portfolio-details-area .image img').src = post.image;
            document.querySelector('.portfolio-details-area h2').innerText = post.title;

            const paragraphsContainer = document.querySelector('.portfolio-details-area');

            // Remove existing paragraphs
            paragraphsContainer.querySelectorAll('p').forEach(p => p.remove());

            // Insert blog paragraphs
            post.paragraphs.forEach((para, index) => {
                const p = document.createElement('p');
                p.classList.add(index === post.paragraphs.length - 1 ? 'mb--40' : 'mb--30');
                p.innerText = para;
                paragraphsContainer.appendChild(p);
            });
        }
    </script>

</body>

</html>