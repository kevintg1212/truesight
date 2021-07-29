<!doctype html>
<html class="no-js" lang="zxx">

<?php 
include 'controller/conn.php';

?>

<?php include "./view/head.html" ?>

<body>

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
                            <h2 class="bradcaump-title">Links</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        <!-- Start Contact Area -->
        <div class="contact_area section-ptb-xl">
            <div class="containe d-flex justify-content-center" style="text-align: center;">
                <div class="row">
                    <div class="sidebar_widget widget_tag">
                            <h2 class="sidebar_title">Look the right way.</h2>
                                <ul class="sidebar_tag">
                                    <?php 
									$result_head = mysqli_query($db2,"select * from `links`");
									while($d_head = mysqli_fetch_array($result_head)){
									?>
                                    <li class="col-12">
                                        <a target="_blank" href="controller/conn_update_links_view.php?id_links=<?php echo  $d_head['id_links']; ?>" style="width: 90%; padding: 20px;"><?php echo  $d_head['judul']; ?></a><br>
                                    </li>
                                    <?php } ?>
                                </ul>
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