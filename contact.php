<!doctype html>
<html class="no-js" lang="zxx">

<?php 
include 'controller/conn.php';
 
$result_head = mysqli_query($db2,"select * from `contact_us`");
while($d_head = mysqli_fetch_array($result_head)){
$address = $d_head['address'];
$phone = $d_head['phone'];
$email = $d_head['email'];
$address_google = $d_head['address_google'];
}
?>

<?php include "./view/head.html" ?>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSN5RNH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <?php include "./view/header.php" ?>
        <!-- End Header Area -->

        <!-- Start Bradcaump area -->
        <div class="bradcaump_area bg_image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump_inner text-center">
                            <h2 class="bradcaump-title">Contact Us</h2>
                            <nav class="bradcaump-content">
                                <a class="bradcrumb_item" href="index.php">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Contact Us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        <!-- Start Contact Area -->
        <div class="contact_area section-ptb-xl">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="gogle_map">
                            <div id="googleMap">

                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row pt--120">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="contact_adress">
                            <div class="ct_address">
                                <h3 class="ct_title">Location & Details</h3>
                                <p>---------------------------------------------</p>
                            </div>

                            <div class="address_wrapper">

                                <div class="address">
                                    <div class="icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Address:</span>  <?php echo $address; ?> </p>
                                        <p><span>Click me:</span>  <a href="<?php echo $address_google; ?>"> Go To Map. </a> </p>
                                    </div>
                                </div>

                                <div class="address">
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Email: </span> <?php echo $email; ?> </p>
                                    </div>
                                </div>

                                <div class="address">
                                    <div class="icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Phone:</span> <?php echo $phone; ?> </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12 sm-mt--30">

                        <div class="contact_form">
                            <h3 class="ct_title">Send Us a Message</h3>
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input_box">
                                            <input type="text" name="name" placeholder="your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input_box">
                                            <input type="email" name="email" placeholder="your email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input_box">
                                            <input type="text" name="subject" placeholder="subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input_box">
                                            <input type="tel" name="phone" placeholder="phone number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input_box">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->

        <!-- Start Footer Area -->
        <?php 
		include 'view/footer.php';
		?>
        <!-- End Footer Area -->
    </div>
    <!--// Wrapper -->

    <!-- Js Files -->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- Google Map js -->

    
    <script src="js/main.js"></script>
</body>

</html>