<style>
    /* Floating WhatsApp Button */
    .whatsapp-float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 20px;
        left: 20px;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .whatsapp-float:hover {
        background-color: #20b358;
    }

    .whatsapp-icon {
        font-family: Arial, sans-serif;
    }
</style>
<!-- Font Awesome for WhatsApp Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<div class="rts-footer-area footer-three" id="rts-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-wrapper-style-between">
                    <div class="single-wized logo-area">
                        <a href="index-2.html" class="logo">
                            <img src="<?php echo $domain ?>assets/images/logo/logo.png" width="99" alt="">
                        </a>
                        <p class="desc">Don’t miss out on the latest updates, exclusive offers, and insider news. Join our community and get everything</p>
                        <form action="#">
                            <input type="email" placeholder="Enter your email" required>
                            <button type="submit" class="rts-btn radius-small btn-primary">Subscribe</button>
                        </form>
                    </div>
                    <div class="single-wized">
                        <h6 class="title">Pages </h6>
                        <div class="body">
                            <ul class="nav-bottom">
                                <li><a href="<?php echo $domain ?>">Home</a></li>
                                <li><a href="<?php echo $domain ?>about/">About</a></li>
                                <li><a href="<?php echo $domain ?>shop/">Shop</a></li>
                                <li><a href="<?php echo $domain ?>contact/">Contact</a></li>
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
                            All Rights Reserved by <?php echo $sitename  ?>
                        </p>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<a
    href="https://wa.me/message/YDSESPRPNHYSK1"
    class="whatsapp-float"
    target="_blank"
    aria-label="Chat on WhatsApp">
    <i class="fab fa-whatsapp whatsapp-icon"></i>
</a>
<?php include('../translator/index.php')  ?>