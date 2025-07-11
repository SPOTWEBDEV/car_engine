<?php
include '../../server/connection.php';
include '../../server/admin/auth/index.php';

?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="<?php echo $domain ?>admin/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain ?>assets/images/logo/logo.png">
  <title><?php echo $sitename ?> - Shop Quality Products at Josemaka</title>
  <meta name="description" content="Josemaka - Discover a wide range of quality products online. View products and visit our store to purchase them with confidence. Your trusted destination for reliable shopping.">
  <meta name="keywords" content="Josemaka, buy products, view products, online store, shop, quality products, visit store, reliable shopping">
  <meta name="author" content="Josemaka">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?php echo $domain ?>admin/assets/vendor/fonts/boxicons.css" />



  <!-- Core CSS -->
  <link rel="stylesheet" href="<?php echo $domain ?>admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?php echo $domain ?>admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?php echo $domain ?>admin/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?php echo $domain ?>admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />



  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="<?php echo $domain ?>admin/assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?php echo $domain ?>admin/assets/js/config.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
  </script>
  <!-- Custom notification for demo -->
  <!-- beautify ignore:end -->
  <script src="jquery-3.6.0.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>

</head>

<body>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">

      <!-- Menu -->
      <?php include '../includes/side_bar.php' ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">

        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>


          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
              </div>
            </div>
            <!-- /Search -->



          </div>



        </nav>

        <!-- / Navbar -->


        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">

            <h4 class="fw-bold py-3 mb-4">
              <span class="text-muted fw-light">Admin /</span> Add Product
            </h4>

            <!-- Basic Layout -->
            <div class="row">
              <div class="col-xl">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Product</h5> <small class="text-muted float-end"></small>
                  </div>
                  <div class="card-body">
                    <?php
                    if (isset($_POST['insert_service'])) {
                      // Database connection (Ensure $connection is defined before this block)

                      // Sanitize form input
                      $title  = mysqli_real_escape_string($connection, $_POST['title']);
                      $status = mysqli_real_escape_string($connection, $_POST['status']);

                      // Handle image upload
                      $target_dir  = "../../upload/product/";
                      $image_name  = $_FILES["image"]["name"];
                      $image_tmp   = $_FILES["image"]["tmp_name"];
                      $image_ext   = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                      $allowed_ext = ["jpg", "jpeg", "png", "gif"];

                      if (!in_array($image_ext, $allowed_ext)) {
                        echo "<script>alert('Error: Only JPG, JPEG, PNG, and GIF files are allowed.');</script>";
                      } else {
                        // Create image name: productname_randomnumber.extension
                        $clean_title = preg_replace("/[^A-Za-z0-9]/", "_", strtolower($title)); // sanitize title
                        $random_num  = rand(1000, 9999);
                        $new_image_name = $clean_title . "_" . $random_num . "." . $image_ext;
                        $target_file = $target_dir . $new_image_name;

                        if (move_uploaded_file($image_tmp, $target_file)) {
                          // Insert into database
                          $insert_product = mysqli_query(
                            $connection,
                            "INSERT INTO product (title, status, image)
                 VALUES ('$title', '$status', '$new_image_name')"
                          );

                          if ($insert_product) {
                            echo "<script>alert('✅ Product added successfully!');</script>";
                          } else {
                            echo "<script>alert('❌ Error: Failed to insert product into database.');</script>";
                          }
                        } else {
                          echo "<script>alert('❌ Error: Failed to upload image.');</script>";
                        }
                      }
                    }
                    ?>
                    <form method="POST" id="service-form" enctype="multipart/form-data">
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-title">Product Name</label>
                        <input type="text" class="form-control" name="title" id="basic-default-title" placeholder="Enter Product Name" required />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-default-status">Product Status</label>
                        <select class="form-control" name="status" id="basic-default-status" required>
                          <option disabled selected value="">Select</option>
                          <option value="instock">In Stock</option>
                          <option value="outstock">Out of Stock</option>
                          <option value="notinsell">Not in Sell</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-default-image">Product Image</label>
                        <input type="file" class="form-control" name="image" id="basic-default-image" accept="image/*" required />
                      </div>

                      <button type="submit" class="btn btn-primary" name="insert_service">INSERT PRODUCT</button>
                    </form>


                  </div>
                </div>
              </div>
            </div>
            <!-- Basic form end -->
            <!-- / Content -->



            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>



      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>


    </div>
    <!-- / Layout wrapper -->




    <!-- <div class="buy-now">
    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
  </div> -->


    <!-- Core JS -->
    <!-- build:js <?php echo $domain ?>admin/assets/vendor/js/core.js -->
    <script src="<?php echo $domain ?>admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo $domain ?>admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo $domain ?>admin/assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo $domain ?>admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?php echo $domain ?>admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->



    <!-- Main JS -->
    <script src="<?php echo $domain ?>admin/assets/js/main.js"></script>

    <!-- Page JS -->



    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>