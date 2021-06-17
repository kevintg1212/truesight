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

		<!-- Cart Overlay -->
        <div class="body_overlay"></div>
        <!-- Start Bradcaump area -->
        <div class="bradcaump_area bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump_inner text-center">
                        	<h2 class="bradcaump-title">Shop</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Shop</span>
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
                                    <form action="#">
                                        <input type="text" placeholder="Search for:">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- End Single Wedget -->

                            <!-- Start Single Wedget -->
                            <!-- <div class="sidebar_widget widget_price_filter mb--60">
								<h2 class="sidebar_title">Filter</h2>
								

                                <div class="sidebar_filter">
									<div class="nstSlider" data-range_min="0" data-range_max="100" data-cur_min="10"    data-cur_max="80">
										<div class="bar"></div>
										<div class="leftGrip"></div>
										<div class="rightGrip"></div>
									</div>
									<div class="leftLabel"></div>
									<div class="rightLabel"></div>

								</div>
								


								
                            </div> -->
                            <!-- End Single Wedget -->

                            <!-- Start Single Wedget -->
                            <!-- <div class="sidebar_widget widget_categories mb--60">
                                <h2 class="sidebar_title">Categories</h2>
                                <ul class="sidebar_categories">
                                    <li><a href="#">Accessories <span>(01)</span></a></li>
                                    <li><a href="#">All <span>(01)</span></a></li>
                                    <li><a href="#">Anthologies <span>(01)</span></a></li>
                                    <li><a href="#">bestproduct <span>(01)</span></a></li>
                                    <li><a href="#">Corner <span>60</span></a></li>
                                </ul>
                            </div> -->
                            <!-- End Single Wedget -->

                            <!-- Start Single Wedget -->
                            <!-- <div class="sidebar_widget widget_banner mb--60">
                                <div class="sidebar_banner">
                                    <a href="#"><img src="img/banner/sidebar-banner.png" alt="sidebar banner"></a>
                                </div>
                            </div> -->
                            <!-- End Single Wedget -->

                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget widget_tag">
                                <h2 class="sidebar_title">Tags</h2>
                                <ul class="sidebar_tag">
                                    <li><a href="#">Anthologies</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Sports</a></li>
                                    <li><a href="#">Anthologies</a></li>
                                    <li><a href="#">Watch</a></li>
                                </ul>
                            </div>
                            <!-- End Single Wedget -->




                        </div>
					</div>
					
                    <div class="col-lg-9 col-12 order-1 order-lg-2">
						<div class="shop_product_area">
							<div class="shop-bar-area">
								<div class="shop-filter-tab">
									<div class="view_mode justify-content-center nav" role="tablist">
										<a class="active" href="#tab1" data-toggle="tab"> <i class="ti-layout-grid4-alt"></i></a>
										<a class="" href="#tab2" data-toggle="tab"><i class="ti-list"></i></a>
									</div>
								</div>
								<div class="shop-found-selector">
									<p>Showing 1–12 of 16 results</p>
									<select>
										<option>Sort by popularity</option>
										<option>Sort by average rating</option>
										<option>Sort by newness</option>
										<option>Sort by price: low to high</option>
										<option>Sort by price: high to low</option>
									</select>
								</div>
							</div>

							<div class="tab_content">
								<div class="row single_grid_product tab-pane fade show active" id="tab1" role="tabpanel">
									<?php 
									$result_head = mysqli_query($db2,"select * from `produk`");
									while($d_head = mysqli_fetch_array($result_head)){
									?>
									<!-- Start Single Product -->
									<div class="col-lg-6 col-xl-4 col-sm-6 col-12">
										<div class="product">
											<div class="thumb">
												<a href="single-product.php?id_produk=<?php echo $d_head['id_produk'] ?>">
													<img src="img/gambarUtama/<?php echo $d_head['gambar']; ?>" alt="product img" style="width: 270px;">
												</a>
												<div class="product_action">
													<h4><a href="single-product.php?id_produk=<?php echo $d_head['id_produk'] ?>"><?php echo $d_head['nama']; ?></a></h4>
													<!-- <ul class="cart_action">
														<li><a href="cart.html"><img src="img/icons/add_to_cart.png" alt="icons"></a></li>
														<li><a href="#"><img src="img/icons/compare_icon.png" alt="icons"></a></li>
														<li><a href="wishlist.html"><img src="img/icons/wishlist_icon.png" alt="icons"></a></li>
														<li><a title="Quick View" class="quickview" href="#"><img src="img/icons/quick_view.png" alt="icons"></a></li>
													</ul> -->
												</div>
												<div class="content">
													<h4><a href="single-product.php?id_produk=<?php echo $d_head['id_produk'] ?>"><?php echo $d_head['nama']; ?></a></h4>
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
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. adipiscing cursus eu, suscipit id nulla.</p>
                            
                            <div class="price-box">
                                <span class="pricebox-price">£80.00</span>
                            </div>
            
                            <div class="product-details-quantity">
                                <div class="quantity-select">
									<div class="pro-quantity"><div class="pro-qty"><input type="text" value="1"></div></div>
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
</body>

</html>