<!doctype html>
<html class="no-js" lang="zxx">
<?php 

include 'controller/conn.php';

$id_artikel = $_GET['id_artikel'];

$result_head = mysqli_query($db2,"select * from `artikel` where id_article= '$id_artikel' ");
while($d_head = mysqli_fetch_array($result_head)){
   $judul = $d_head['judul'];
   $thumbnail = $d_head['thumbnail'];
   $deskripsi = $d_head['deskripsi'];
   $tags = $d_head['tags'];
   $tanggal_posting = $d_head['tanggal_posting'];
   $view = $d_head['view'];
};

$tagsX = explode(", ","$tags");

?>
<!-- Start section HEAD -->
<?php 
	include 'view/head.html';
?>
<!-- End section HEAD -->

<body>


    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <?php 
            include 'view/header.php';
        ?>
        <!-- End Header Area -->

        <!-- Start Bradcaump area -->
        <div class="bradcaump_area bg_image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump_inner text-center">
                            <h2 class="bradcaump-title">Blog Details</h2>
                            <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="index.php">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Blog Details</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        <div class="blog_area section-ptb-xl bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="blog_details">
                            <div class="blog_inner">

                                <div class="blog__content">
                                    <ul class="meta">
                                        <li><?php if ($view == null) { echo '0'; } else echo $view ?> Views</li>
                                        <li><?php echo $tanggal_posting ?></li>
                                    </ul>
                                    <h3><?php echo $judul;?></h3>
                                </div>

                                <div class="thumb">
                                    <img src="img/thumbnail/<?php echo $thumbnail?>" alt="blog img">
                                </div>


                                <div class="bl_details">
                                    <?php echo $deskripsi; ?>
                                </div>

                                <div class="blog_share">
                                    <p>Share</p>

                                    <ul class="user_share">
                                        <li><a href="#"><span class="ti-facebook"></span></a></li>
                                        <li><a href="#"><span class="ti-twitter"></span></a></li>
                                        <li><a href="#"><span class="ti-pinterest"></span></a></li>
                                        <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                    </ul>

                                </div>

                                <!-- <div class="blog_pagenation">
                                    <a href="#"><i class="fa fa-angle-left"></i> prev post</a>
                                </div> -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 sm-mt--30 md-mt--30">
                        <div class="shop_sidebar">


                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget search mb--60">
                                <h2 class="sidebar_title">Search</h2>
                                <div class="sidebar_search">
                                    <form action="blog-three-column.php">
                                        <input type="text" placeholder="Search for:">
                                        <button type="submit">
                                            <i class="ti-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- End Single Wedget -->

                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget recent_post mb--60">
                                <h2 class="sidebar_title">Recent Posts</h2>
                                <ul class="sidebar_post">
                                    <?php 
                                    $result_head = mysqli_query($db2,"select * from `artikel`");
                                    while($d_head = mysqli_fetch_array($result_head)){
                                    ?>
                                    <li>
                                        <div class="post_img">
                                            <a href="blog-details.php?id_artikel=<?php echo $d_head['id_article'];?>">
                                                <img src="img/thumbnail/<?php echo $d_head['thumbnail']; ?>" style="width: 120px; height: 100px;" alt="post img">
                                            </a>
                                        </div>
                                        <div class="post_text">
                                            <h4>
                                                <a href="blog-details.php?id_artikel=<?php echo $d_head['id_article'];?>">Suspendisse maximus neque a magna porttitor pharetra</a>
                                            </h4>
                                            <span><?php echo $d_head['tanggal_posting']; ?></span>
                                        </div>
                                    </li>
                                    <?php } ?>
                                    <!-- <li>
                                        <div class="post_img">
                                            <a href="blog-details.html">
                                                <img src="img/blog/post2.jpg" alt="post img">
                                            </a>
                                        </div>
                                        <div class="post_text">
                                            <h4>
                                                <a href="blog-detals.html">Maecenas justo augue, blandit vitae leo non, </a>
                                            </h4>
                                            <span>July 10, 2018</span>
                                        </div>
                                    </li> -->

                                </ul>
                            </div>
                            <!-- End Single Wedget -->


                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget widget_categories mb--60">
                                <h2 class="sidebar_title">Categories</h2>
                                <ul class="sidebar_categories">
                                    <?php 
                                    $result_head = mysqli_query($db2,"select * from `kategori`");
                                    while($d_head = mysqli_fetch_array($result_head)){
                                    ?>
                                    <li>
                                        <a href="#"><?php echo $d_head['kategori']; ?></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!-- End Single Wedget -->

                            <!-- Start Single Wedget -->
                            <!-- <div class="sidebar_widget widget_banner mb--60">
                                <div class="sidebar_banner">
                                    <a href="#">
                                        <img src="img/banner/sidebar-banner.png" alt="sidebar banner">
                                    </a>
                                </div>
                            </div> -->
                            <!-- End Single Wedget -->

                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget widget_tag">
                                <h2 class="sidebar_title">Tags</h2>
                                <?php 
                                for($i=0; $i < count($tagsX) ; $i++) { ?>
                                    <ul class="sidebar_tag">
                                        <li>
                                            <a href="#"> <?php echo $tagsX[$i] ?> </a>
                                        </li>
                                    </ul>
                                <?php }; ?>
                                
                            </div>
                            <!-- End Single Wedget -->




                        </div>
                    </div>
                </div>
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