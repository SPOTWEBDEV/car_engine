<?php include("../server/connection.php");


$where = "WHERE `status`='instock'";
$orderBy = "ORDER BY RAND()"; // Default is random
$limit = "LIMIT 400";

// Handle Search
if (!empty($_GET['search'])) {
    $search = mysqli_real_escape_string($connection, $_GET['search']);
    $where .= " AND `title` LIKE '%$search%'";
}

// Handle Sort
if (!empty($_GET['sort'])) {
    switch ($_GET['sort']) {
        case 'id':
            $orderBy = "ORDER BY `id` DESC";
            break;
        case 'date':
            $orderBy = "ORDER BY `created_at` DESC";
            break;
        case 'alpha':
            $orderBy = "ORDER BY `title` ASC";
            break;
    }
}

$query = mysqli_query($connection, "
    SELECT `id`, `title`, `status`, `image`, `created_at`
    FROM `product`
    $where
    $orderBy
    $limit
");



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

<body>

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
            <?php include('../include/nav.php') ?>
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
                                <input type="text">
                            </form>


                            <form class="select-2" action="#" method="get" accept-charset="utf-8">
                                <select name="my_select2" class="my_select2">
                                    <option value="2" selected>Sort By</option>
                                    <option value="10">id</option>
                                    <option value="1">Date</option>
                                    <option value="13">Aphate</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="row g-5">
                        <?php while ($row = mysqli_fetch_assoc($query)):
                            $product_image = $domain . 'upload/product/' . $row['image'];
                        ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-wrapper4">
                                    <div class="image-area">
                                        <a href="shop-details.php?id=<?= $row['id'] ?>">
                                            <img style="height: 300px;" src="<?php echo $product_image ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="content-area">
                                        <h6 class="title">
                                            <a href="shop-details.php?id=<?= $row['id'] ?>">
                                                <?= htmlspecialchars($row['title']) ?>
                                            </a>
                                        </h6>
                                        <div class="button-area">
                                            <p>In-Store Purchase Only</p> <!-- replace with real price if available -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>

                </div>
            </div>
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
                        <img class="shape one" src="assets/images/cta/round.svg" alt="">
                        <img class="shape two" src="assets/images/cta/line.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts footer area start -->
    <?php include('../include/footer.php') ?>
    <!-- rts footer area end -->
    <!-- header style two -->
    <?php include('../include/side-bar.php') ?>
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