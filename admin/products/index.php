<?php
    include '../../server/connection.php';
    include '../../server/admin/auth/index.php';
    if (isset($_GET['del_id'])) {
        // Get the ID from the URL query string
        $id = $_GET['del_id'];

        

        // Sanitize the input to avoid SQL injection
        $id = mysqli_real_escape_string($connection, $id);

        // Prepare the delete query
        $delete = mysqli_query($connection, "DELETE FROM product WHERE id = '$id'");

        // Check if the query was successful
        if ($delete) {
            // Successful deletion alert
            echo "<script>alert('Your delete request was successful.'); window.location.href='index.php';</script>";
        } else {
            // If deletion fails, display an error message
            echo "<script>alert('Error: Could not delete select product.');</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="<?php echo $domain ?>admin/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Product List -- <?php echo $sitename ?></title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?php echo $domain ?>admin/assets/img/favicon/favicon.ico" />

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

  <!-- beautify ignore:end -->
  <script src="<?php echo $domain ?>admin/assets/jsjquery-3.6.0.min.js"></script>
    <script src="<?php echo $domain ?>admin/assets/jssweetalert2.all.min.js"></script>

</head>

<body>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">

      <!-- Menu -->
      <?php include '../includes/side_bar.php'?>
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
              <span class="text-muted fw-light">Admin /</span> Products
            </h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
    <h5 class="card-header">All Product List</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php
                    $sql = mysqli_query($connection, "SELECT * FROM `product` ORDER BY id DESC");
                    if (mysqli_num_rows($sql) > 0) {
                        $count = 1;
                        while ($details = mysqli_fetch_assoc($sql)) {
                            $id        = $details['id'];
                            $imagePath = "../../upload/product/" . $details['image'];
                            $status = $details['status'];
                        ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo htmlspecialchars($details['title']); ?></td>
                            <td>
                                <img src="<?php echo $imagePath; ?>" alt="Product Image"  height="100" style="border-radius: 5px;">
                            </td>
                            <td>
                            <?php

                                if ($status == 'notinsell') {
                                  echo "<button style='text-transform: capitalize;' class='btn btn-danger'>$status</button>";
                                } else if ($status == 'outstock') {
                                  echo "<button style='text-transform: capitalize;' class='btn btn-primary'>$status</button>";
                                } else if ($status == 'instock') {
                                  echo "<button style='text-transform: capitalize;' class='btn btn-success'>$status</button>";
                                } else {
                                  echo "<button style='text-transform: capitalize;' class='btn btn-info'>$status</button>";
                                }

                                ?>
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure you want to delete this product?')" href="?del_id=<?php echo $id; ?>">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                <?php
                    $count++;
                        }
                    } else {
                        echo "<tr><td class='bg-danger text-white' colspan='6'>No Events Found</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

            <!--/ Basic Bootstrap Table -->
          </div>
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