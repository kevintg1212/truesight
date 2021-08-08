<!doctype html>
<html class="no-js" lang="zxx">
<?php 
include 'controller/conn.php';
?>
<!-- Start section HEAD -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Look the right way.</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/icon.png">

	<!-- Plugins -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">

	<!-- Style Css -->
	<link rel="stylesheet" href="style.css">

	<!-- Custom Styles -->
	<link rel="stylesheet" href="css/custom.css">

	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="css/fontawesome-free/css/all.min.css">
      <style>
      .crt-widget-grid .crt-grid-col1 .crt-grid-post{
          max-width: 50% !important;
      }
      </style>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '5676152455791140');
	fbq('track', 'ViewCategory');
    fbq('track', 'PageView');
	</script>

	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=5676152455791140&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-M9L45CVHLD"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-M9L45CVHLD');
	</script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122244079-2">
	</script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-122244079-2');
	</script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NSN5RNH');</script>
	<!-- End Google Tag Manager -->
	
</head>
<!-- End section HEAD -->
<?php 
if(isset($_GET['sort_by'])){
    $sort_by = $_GET['sort_by'];
}else{
    $sort_by = 1;
}
if(isset($_GET['search'])){
    $search = $_GET['search'];
}else{
    $search = "";
}
if ($search != "") {
    $sql_search = "WHERE nama like '%$search%'";
}else{
    $sql_search = "";
}
if ($sort_by == 1) {
    $sql_sort = "ORDER BY nama ASC";
}else if ($sort_by == 2) {
    $sql_sort = "ORDER BY view DESC";
}else if ($sort_by == 3) {
    $sql_sort = "ORDER BY created_at DESC";
}else if ($sort_by == 4) {
    $sql_sort = "ORDER BY harga ASC";
}else if ($sort_by == 5) {
    $sql_sort = "ORDER BY harga DESC";
}
?>

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

        <!-- Cart Overlay -->
        <div class="body_overlay"></div>
        <!-- Start Bradcaump area -->
        <div class="bradcaump_area bg_image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump_inner text-center">
                            <h2 class="bradcaump-title">Produk</h2>
                            <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="index.html">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Produk</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->


        <!-- Start Shop Area -->
        <div class="shop_area section-ptb-xl bg--white">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 order-2 order-lg-1 sm-mt--30 md-mt--30">
                        <div class="shop_sidebar">
                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget search mb--60">
                            
                                <h2 class="sidebar_title">Search</h2>
                                <div class="sidebar_search">
                                    <form>
                                        <input name="search" id="search" type="text" placeholder="Search for:" value="<?php echo $search; ?>" onChange="changeSearch()">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- End Single Wedget -->

                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget widget_categories mb--60">
                                <h2 class="sidebar_title">Feed Instagram</h2>
                                <div class="sidebar_categories row">
                                    <!-- Place <div> tag where you want the feed to appear -->
                                    <div id="curator-feed-default-feed-layout" class="col-12"></div>
                                    <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
                                    <script type="text/javascript">
                                    /* curator-feed-default-feed-layout */
                                    (function(){
                                    var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
                                    i.src = "https://cdn.curator.io/published/a6bc62a7-5890-43db-97e3-08f462534b46.js";
                                    e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
                                    })();
                                    </script>
                                </div>
                            </div>
                            <!-- End Single Wedget -->



                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget widget_tag">
                                <h2 class="sidebar_title">Tags</h2>
                                <ul class="sidebar_tag">
                                    <li>
                                        <a>Kacamata</a>
                                    </li>
                                    <li>
                                        <a>Photochromic</a>
                                    </li>
                                    <li>
                                        <a>kacamatamurah</a>
                                    </li>
                                    <li>
                                        <a>kacamatatrend</a>
                                    </li>
                                    <li>
                                        <a>kacamataminus</a>
                                    </li>
                                    <li>
                                        <a>Glasses</a>
                                    </li>
                                </ul>
                            </div>




                        </div>
                    </div>

                    <div class="col-lg-9 col-12 order-1 order-lg-2">
                        <div class="shop_product_area">
                            <div class="shop-bar-area">
                                <div class="shop-filter-tab">
                                    <div class="view_mode justify-content-center nav" role="tablist">
                                        <a class="active" href="#tab1" data-toggle="tab"> <i
                                                class="ti-layout-grid4-alt"></i></a>
                                        <a class="" href="#tab2" data-toggle="tab"><i class="ti-list"></i></a>
                                    </div>
                                </div>
                                <div class="shop-found-selector">
                                    <!-- <p>Showing 1–12 of 16 results</p> -->
                                    <select name="sort_by" id="sort_by" onChange="changeCheck()" style="width: 82%;">
                                        <option value="1" <?php if ($sort_by==1) {echo "selected";}?>>Sort by alphabetical</option>
                                        <option value="2" <?php if ($sort_by==2) {echo "selected";}?>>Sort by views</option>
                                        <option value="3" <?php if ($sort_by==3) {echo "selected";}?>>Sort by lastest</option>
                                        <option value="4" <?php if ($sort_by==4) {echo "selected";}?>>Sort by price: low to high</option>
                                        <option value="5" <?php if ($sort_by==5) {echo "selected";}?>>Sort by price: high to low</option>
                                    </select>
                                </div>
                            </div>

                            <div class="tab_content">
                                <div class="row single_grid_product tab-pane fade show active" id="tab1"
                                    role="tabpanel">
                                    <?php 
									$result_head = mysqli_query($db2,"select * from `produk` $sql_search $sql_sort");
									while($d_head = mysqli_fetch_array($result_head)){
									?>
                                    <!-- Start Single Product -->
                                    <div class="col-lg-6 col-xl-4 col-sm-6 col-12">
                                        <div class="product">
                                            <div class="thumb">
                                                <a
                                                    href="controller/conn_add_produk.php?id_produk=<?php echo $d_head['id_produk']?>&view=<?php echo $d_head['view']?>">
                                                    <img src="img/gambarUtama/<?php echo $d_head['gambar']; ?>"
                                                        alt="product img" style="width: 270px;">
                                                </a>
                                                <div class="product_action">
                                                    <h4><a
                                                            href="controller/conn_add_produk.php?id_produk=<?php echo $d_head['id_produk']?>&view=<?php echo $d_head['view']?>"><?php echo $d_head['nama']; ?></a>
                                                    </h4>
                                                    <ul class="cart_action text-white">
														<li> <p> <?php echo $d_head['deskripsi_singkat'] ?></p> </li>
													</ul>
                                                </div>
                                                <div class="content">
                                                    <h4><a
                                                            href="controller/conn_add_produk.php?id_produk=<?php echo $d_head['id_produk']?>&view=<?php echo $d_head['view']?>"><?php echo $d_head['nama']; ?></a>
                                                    </h4>
                                                    <ul class="price">
                                                        <?php $harga = $d_head['harga']; ?>
                                                        <li>Rp <?php echo number_format($harga,2,',','.'); ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- End Single Product -->
                                    <!-- Start Single Product -->
                                    <!-- <div class="col-12">
										<div class="product_list">
											<div class="product_list__thumb">
												<a href="single-product.html">
													<img src="img/product/list1.png" alt="product img">
												</a>
											</div>
											<div class="product_list__content">
												<h4><a href="single-product.html">Rinosin Glasses</a></h4>
												<ul class="price">
													<li>$35</li>
													<li class="old-price">$35</li>
												</ul>
												<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</p>
												<ul class="cart_action">
													<li><a href="cart.html"><img src="img/icons/add_to_cart.png" alt="icons"></a></li>
													<li><a href="#"><img src="img/icons/compare_icon.png" alt="icons"></a></li>
													<li><a title="Quick View" class="quickview" href="#"><img src="img/icons/quick_view.png" alt="icons"></a></li>
												</ul>
											</div>
										</div>
									</div> -->
                                    <!-- End Single Product -->
                                </div>

                                <div class="row single_grid_product tab-pane fade" id="tab2" role="tabpanel">
                                    <!-- Start Single Product -->
                                    <?php
                                    $result_head = mysqli_query($db2,"select * from `produk` $sql_search $sql_sort"); 
									while($d_head = mysqli_fetch_array($result_head)){
                                        $harga = $d_head['harga'];
									?>
                                    <div class="col-12">
                                        <div class="product_list">
                                            <div class="product_list__thumb">
                                                <a
                                                    href="controller/conn_add_produk.php?id_produk=<?php echo $d_head['id_produk']?>&view=<?php echo $d_head['view']?>">
                                                    <img src="img/gambarUtama/<?php echo $d_head['gambar']; ?>"
                                                        alt="product img">
                                                </a>
                                            </div>
                                            <div class="product_list__content">
                                                <h4><a
                                                        href="controller/conn_add_produk.php?id_produk=<?php echo $d_head['id_produk']?>&view=<?php echo $d_head['view']?>"><?php echo $d_head['nama']; ?></a>
                                                </h4>
                                                <ul class="price"> <?php echo $d_head['view'] ?> views </ul>
                                                <ul class="price">
                                                    <li>Rp <?php echo number_format($harga,2,',','.'); ?></li>
                                                </ul>
                                                <p><?php echo $d_head['deskripsi_singkat']; ?> </p>
                                                <ul class="cart_action">
                                                    <li><a
                                                            href="controller/conn_add_produk.php?id_produk=<?php echo $d_head['id_produk']?>&view=<?php echo $d_head['view']?>"><img
                                                                src="img/icons/quick_view.png" alt="icons"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Product -->
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- <ul class="pagination_style">
								<li><a class="active" href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#"><i class="ti-angle-right"></i></a></li>
							</ul> -->
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- End Shop Area -->


        <!-- Start Footer Area -->
        <?php 
		include 'view/footer.php';
		?>
        <!-- End Footer Area -->
        <!-- Quick View Modal -->
        <div class="quick-view-modal">
            <div class="quick-view-modal-inner">
                <div class="container">
                    <div class="product-details">
                        <!-- Product Details Left -->
                        <div class="product-details-left">
                            <div class="product-details-images slider-navigation-2">
                                <a href="img/product/sm1.png">
                                    <img src="img/product/big-img.png" alt="product image">
                                </a>
                                <a href="img/product/sm2.png">
                                    <img src="img/product/big-img.png" alt="product image">
                                </a>
                                <a href="img/product/sm3.png">
                                    <img src="img/product/big-img.png" alt="product image">
                                </a>
                                <a href="img/product/sm1.png">
                                    <img src="img/product/big-img.png" alt="product image">
                                </a>
                                <a href="img/product/sm1.png">
                                    <img src="img/product/big-img.png" alt="product image">
                                </a>
                            </div>
                            <div class="product-details-thumbs slider-navigation-2">
                                <img src="img/product/sm1.png" alt="product image thumb">
                                <img src="img/product/sm2.png" alt="product image thumb">
                                <img src="img/product/sm3.png" alt="product image thumb">
                                <img src="img/product/sm1.png" alt="product image thumb">
                                <img src="img/product/sm1.png" alt="product image thumb">
                            </div>
                        </div>
                        <!--// Product Details Left -->

                        <!-- Product Details Right -->
                        <div class="product-details-right">
                            <h5 class="product-title">Aenean Eu Tristique</h5>

                            <div class="ratting-stock-availbility">
                                <div class="ratting-box">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                                <span class="stock-available">In stock</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis
                                justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id
                                nulla. adipiscing cursus eu, suscipit id nulla.</p>

                            <div class="price-box">
                                <span class="pricebox-price">£80.00</span>
                            </div>

                            <div class="product-details-quantity">
                                <div class="quantity-select">
                                    <div class="pro-quantity">
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                    </div>
                                </div>
                                <a href="#" class="add-to-cart-button">
                                    <span>ADD TO CART</span>
                                </a>
                            </div>

                            <div class="product-details-color">
                                <span>Color :</span>
                                <ul>
                                    <li class="red"><span></span></li>
                                    <li class="green checked"><span></span></li>
                                    <li class="blue"><span></span></li>
                                    <li class="black"><span></span></li>
                                </ul>
                            </div>

                            <div class="product-details-size">
                                <span>Size :</span>
                                <ul>
                                    <li class="checked"><span>S</span></li>
                                    <li><span>M</span></li>
                                    <li><span>L</span></li>
                                    <li><span>XL</span></li>
                                    <li><span>XXL</span></li>
                                </ul>
                            </div>

                            <div class="product-details-categories">
                                <span>Categories :</span>
                                <ul>
                                    <li><a href="shop.html">Accessories</a></li>
                                    <li><a href="shop.html">Kids</a></li>
                                    <li><a href="shop.html">Women</a></li>
                                </ul>
                            </div>

                            <div class="product-details-tags">
                                <span>Tags :</span>
                                <ul>
                                    <li><a href="shop.html">Electronic</a></li>
                                    <li><a href="shop.html">Television</a></li>
                                </ul>
                            </div>

                            <div class="product-details-socialshare">
                                <span>Share :</span>
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--// Product Details Right -->

                    </div>
                </div>
            </div>
            <button class="close-quickview-modal"><i class="fa fa-close"></i></button>
        </div>
        <!--// Quick View Modal -->


    </div>
    <!--// Wrapper -->


    <!-- Js Files -->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!-- Page specific script -->
    <script>

        function changeCheck() {
            var checkBox = document.getElementById("sort_by").value;

            window.location.replace("shop-grid.php?sort_by=" + checkBox);

        };
        function changeSearch() {
            var checkBox = document.getElementById("search").value;

            window.location.replace("shop-grid.php?search=" + checkBox + "&sort_by=<?php echo $sort_by;?>");

        };
        
    </script>
</body>

</html>