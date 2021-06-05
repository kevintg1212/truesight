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
        <div class="bradcaump_area bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump_inner text-center">
                        	<h2 class="bradcaump-title">Artikel</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.php">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Article</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <div class="blog_area section-ptb-xl bg--white">
            <div class="container">
                <div class="row space_bottom">
                    <!-- Start Single Blog -->
                    <?php 
                    $result_head = mysqli_query($db2,"select * from `artikel`");
                    while($d_head = mysqli_fetch_array($result_head)){
                    ?>
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-12 mb--50">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.php?id_artikel=<?php echo $d_head['id_article'];?>">
                                    <img src="img/thumbnail/<?php echo $d_head['thumbnail']; ?>" alt="blog img">
                                </a>
                            </div>
                            <div class="blog__content">
                                <ul class="meta">
                                    <li><?php if ($d_head['view'] == null) { echo '0'; } else echo $d_head['view']; ?> Views</li>
                                    <li><?php echo $d_head['tanggal_posting']; ?></li>
                                </ul>
                                <h3><a href="blog-details.php?id_artikel=<?php echo $d_head['id_article'];?>"><?php echo $d_head['judul']; ?></a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by</p>
                                <a class="blog_btn" href="blog-details.php?id_artikel=<?php echo $d_head['id_article'];?>">Read More</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- End Single Blog -->
                    
                    <!-- Start Single Blog -->
                    <!-- <div class="col-xl-4 col-lg-4 col-sm-6 col-12 mb--50">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="img/blog/blog-md1.jpg" alt="blog img">
                                </a>
                            </div>
                            <div class="blog__content">
                                <ul class="meta">
                                    <li><a href="#">1 Like</a></li>
                                    <li>63 Views</li>
                                    <li>July 10, 2018</li>
                                </ul>
                                <h3><a href="blog-details.html">Maecenas justo augue, blandit vitae leo non, faucibus</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by</p>
                                <a class="blog_btn" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Single Blog -->
                </div>

                <!-- <ul class="pagination_style">
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="ti-angle-right"></i></a></li>
                </ul> -->

            </div>
        </div>
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
	<script src="js/main.js"></script>
</body>

</html>