<!doctype html>

<?php 
include 'controller/conn.php';
?>


<html class="no-js" lang="zxx">

<?php include "./view/head.html" ?>

<body>


	<!-- Wrapper -->
	<div id="wrapper" class="wrapper">

		<!-- Header -->
		<?php include "./view/header.php" ?>
		<!-- Mini Cart Wrap Start -->
		<div class="mini-cart-wrap">

			<!-- Mini Cart Top -->
			<div class="mini-cart-top">
				<button class="close-cart">Close Cart
					<i class="icofont icofont-close"></i>
				</button>
			</div>

			<!-- Mini Cart Products -->
			<ul class="mini-cart-products">
				<li>
					<a class="image">
						<img src="img/product/product-1.jpg" alt="Product">
					</a>
					<div class="content">
						<a href="single-product.html" class="title">Simple Silacon Glasses</a>
						<span class="price">Price: $59</span>
						<span class="qty">Qty: 01</span>
					</div>
					<button class="remove">
						<i class="fa fa-trash-o"></i>
					</button>
				</li>
				<li>
					<a class="image">
						<img src="img/product/product-2.jpg" alt="Product">
					</a>
					<div class="content">
						<a href="single-product.html" class="title">Simple Easin Glasses</a>
						<span class="price">Price: $20</span>
						<span class="qty">Qty: 02</span>
					</div>
					<button class="remove">
						<i class="fa fa-trash-o"></i>
					</button>
				</li>
				<li>
					<a class="image">
						<img src="img/product/product-3.jpg" alt="Product">
					</a>
					<div class="content">
						<a href="single-product.html" class="title">Simple Macrox Glasses</a>
						<span class="price">Price: $320</span>
						<span class="qty">Qty: 03</span>
					</div>
					<button class="remove">
						<i class="fa fa-trash-o"></i>
					</button>
				</li>
			</ul>
			<!-- Mini Cart Bottom -->
			<div class="mini-cart-bottom">
				<h4 class="sub-total">Total:
					<span>$120</span>
				</h4>
				<div class="button">
					<a href="checkout.html">CHECKOUT</a>
				</div>
			</div>

		</div>
		<!-- Mini Cart Wrap End -->

		<!-- Cart Overlay -->
		<div class="body_overlay"></div>

		<!--// Header -->
		<!-- Start Slider Area -->
		<div class="slider_area slide_active">

			<!-- Start Single Slide -->
			<?php 
			$result_head = mysqli_query($db2,"select * from `banner1`");
			while($d_head = mysqli_fetch_array($result_head)){
			?>
			<div class="slide slide_fixed_height d-flex align-items-center poss_relative animation__style01" 
			style="background-image: url('img/banner_1/<?php echo $d_head['gambar']; ?>');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12">

							<div class="slide_text">
								<h3><?php echo $d_head['text3']; ?></h3>
								<h1><?php echo $d_head['judul']; ?></h1>
								<a href="#">Buy Now</a>
							</div>

							<?php 
							if($d_head['text_discount'] != 0){
							?>
							<div class="rotate_titlE">
								<h2>GET UP TO
									<span><?php echo $d_head['text_discount'] ?> %</span> Off</h2>
							</div>
							
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<!-- End Single Slide -->

		</div>
		<!-- End Slider Area -->

		<!-- Start Product Area -->
		<!-- <div class="product_area section-pt-xl section-pb-xl bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section_title text-center">
							<h2>LATEST EYE GLASSES</h2>
							<p>Eye chasmish are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
						</div>
					</div>
				</div>
				<div class="row mt--20"> -->
				<!-- PRODUK TERBARU diambil 4 Teratas -->
					<?php 
					$result_head = mysqli_query($db2,"select * from `produk` LIMIT 4");
					while($d_head = mysqli_fetch_array($result_head)){
					?>
					<!-- Start Single Product -->
					<!-- <div class="col-lg-3 col-xl-3 col-sm-6 col-12">
						<div class="product">
							<div class="thumb">
								<a href="single-product.html">
									<img src="img/gambarUtama/<?php echo $d_head['gambar']; ?>" alt="product img" style="width: 270px;">
								</a>
								<div class="product_action">
									<h4>
										<a href="single-product.html"><?php echo $d_head['nama']; ?> </a>
									</h4>
									<ul class="cart_action">
										<li>
											<a href="cart.html">
												<img src="img/icons/add_to_cart.png" alt="icons">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/icons/compare_icon.png" alt="icons">
											</a>
										</li>
										<li>
											<a href="wishlist.html">
												<img src="img/icons/wishlist_icon.png" alt="icons">
											</a>
										</li>
										<li>
											<a title="Quick View" class="quickview" href="#">
												<img src="img/icons/quick_view.png" alt="icons">
											</a>
										</li>
									</ul>
								</div>
								<div class="content">
									<h4>
										<a href="single-product.html"><?php echo $d_head['nama']; ?></a>
									</h4>
									<ul class="price">
										<li><?php echo $d_head['harga']; ?></li> -->
										<!-- <li class="old-price">$35</li> -->
									<!-- </ul>
								</div>
							</div>
						</div>
					</div> -->
					<!-- End Single Product -->
					<?php } ?>
					<!-- Start Single Product -->
					<!-- <div class="col-lg-3 col-xl-3 col-sm-6 col-12">
						<div class="product">
							<div class="thumb">
								<a href="single-product.html">
									<img src="img/product/product-2.jpg" alt="product img">
								</a>
								<div class="product_action">
									<h4>
										<a href="single-product.html">Silacon Glasses</a>
									</h4>
									<ul class="cart_action">
										<li>
											<a href="cart.html">
												<img src="img/icons/add_to_cart.png" alt="icons">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/icons/compare_icon.png" alt="icons">
											</a>
										</li>
										<li>
											<a href="wishlist.html">
												<img src="img/icons/wishlist_icon.png" alt="icons">
											</a>
										</li>
										<li>
											<a title="Quick View" class="quickview" href="#">
												<img src="img/icons/quick_view.png" alt="icons">
											</a>
										</li>
									</ul>
								</div>
								<div class="content">
									<h4>
										<a href="single-product.html">Silacon Glasses</a>
									</h4>
									<ul class="price">
										<li>$35</li>
										<li class="old-price">$35</li>
									</ul>
								</div>
							</div>
						</div>
					</div> -->
					<!-- End Single Product -->
				</div>
			</div>
		</div>
		
		<!-- End Product Area -->
		<!-- Start Product Area -->
		<div class="product_area section-pt-xl section-pb-xl bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section_title text-center">
							<h2>NEW ARRIVAL SUNGLASSES</h2>
							<p>Eye chasmish are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
						</div>
					</div>
				</div>
				<div class="tab_content">
					<!-- Start Single Content -->
					<div class="row single_content tab-pane fade show active" id="item1" role="tabpanel">
						<?php 
						$result_head = mysqli_query($db2,"select * from `produk` ORDER BY created_at DESC LIMIT 16");
						while($d_head = mysqli_fetch_array($result_head)){
						?>
						<!-- Start Single Product -->
						<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.php?id_produk=<?php echo $d_head['id_produk'] ?>">
										<img src="img/gambarUtama/<?php echo $d_head['gambar']; ?>" alt="product img" style="width: 270px;">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.php?id_produk=<?php echo $d_head['id_produk'] ?>"><?php echo $d_head['nama']; ?> </a>
										</h4>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.php?id_produk=<?php echo $d_head['id_produk'] ?>"><?php echo $d_head['nama']; ?></a>
										</h4>
										<ul class="price">
											<?php $harga = $d_head['harga']; ?>
											<li>Rp <?php echo number_format($harga,2,',','.'); ?></li>
											<!-- <li class="old-price">$35</li> -->
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<?php } ?>
					</div>
					<!-- End Single Content -->
					<!-- Start Single Content -->
					<div class="row single_content tab-pane fade" id="item2" role="tabpanel">
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-1.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Rinosin Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Rinosin Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-2.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Ray Bune</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Rinosin Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$10</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-3.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Macro Melodi</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Macro Melodi</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-4.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Oakley Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Oakley Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-5.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Bledent Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Bledent Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-6.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Bledent Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Bledent Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-8.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Macrox Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Macrox Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-9.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Sipleno Rayond</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Sipleno Rayond</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-10.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Bayamo Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Bayamo Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-11.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Xenorex Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Xenorex Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-12.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Movilark Raison</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Movilark Raison</a>
										</h4>
										<ul class="price">
											<li>$10</li>
											<li class="old-price">$50</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-13.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Rinosin Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Rinosin Glasses</a>
										</h4>
										<ul class="price">
											<li>$20</li>
											<li class="old-price">$40</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
					</div>
					<!-- End Single Content -->
					<!-- Start Single Content -->
					<div class="row single_content tab-pane fade" id="item3" role="tabpanel">
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-1.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Rinosin Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Rinosin Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-2.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Ray Bune</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Rinosin Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$10</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-3.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Macro Melodi</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Macro Melodi</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-4.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Oakley Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Oakley Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-5.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Bledent Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Bledent Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-6.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Bledent Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Bledent Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-8.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Macrox Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Macrox Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-9.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Sipleno Rayond</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Sipleno Rayond</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-10.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Bayamo Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Bayamo Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-11.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Xenorex Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Xenorex Glasses</a>
										</h4>
										<ul class="price">
											<li>$35</li>
											<li class="old-price">$35</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-12.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Movilark Raison</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Movilark Raison</a>
										</h4>
										<ul class="price">
											<li>$10</li>
											<li class="old-price">$50</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="col-lg-4 col-xl-3 col-sm-6 col-12">
							<div class="product">
								<div class="thumb">
									<a href="single-product.html">
										<img src="img/product/product-13.jpg" alt="product img">
									</a>
									<div class="product_action">
										<h4>
											<a href="single-product.html">Rinosin Glasses</a>
										</h4>
										<ul class="cart_action">
											<li>
												<a href="cart.html">
													<img src="img/icons/add_to_cart.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/icons/compare_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a href="wishlist.html">
													<img src="img/icons/wishlist_icon.png" alt="icons">
												</a>
											</li>
											<li>
												<a title="Quick View" class="quickview" href="#">
													<img src="img/icons/quick_view.png" alt="icons">
												</a>
											</li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.html">Rinosin Glasses</a>
										</h4>
										<ul class="price">
											<li>$20</li>
											<li class="old-price">$40</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
					</div>
					<!-- End Single Content -->
				</div>
			</div>
		</div>
		<!-- End Product Area -->

		<!-- Start Banner Area -->
		<div class="banner_area mt--20">
			<div class="row row--2">

				<?php 
				$result_head = mysqli_query($db2,"select * from `banner2`");
				while($d_head = mysqli_fetch_array($result_head)){
				?>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="banner">
						<div class="thumb">
							<a href="#">
								<img src="img/banner_2/<?php echo $d_head['gambar']?>" alt="banner img">
							</a>
						</div>
					</div>
				</div>

				<?php } ?>

			</div>
		</div>
		<!-- End Banner Area -->


		<!-- Start How To Work Area -->
		<!-- <div class="work_area bg-dark">
			<div class="row row--0 align-items-center">
				<div class="col-lg-12 col-12 col-xl-8">
					<div class="row working_wrapper">
						<div class="col-lg-12 col-xl-4">
							<div class="work_wrap">
								<h3>It’s very simple & easy</h3>
								<h2>BUY OUR PRODUCTS VERY SIMPLE WAY</h2>
								<h4>GET
									<span>PROMO CODE</span> HERE</h4>
							</div>
						</div>
						<div class="col-lg-12 col-xl-8">
							<div class="work_process d-flex flex-wrap">

								<div class="work w-50">
									<h3>01. Search your chasmish</h3>
									<p>Eye chasmish are very important for thos whos have some difficult </p>
								</div>

								<div class="work w-50">
									<h3>02. Customize you chasmish</h3>
									<p>Eye chasmish are very important for thos whos have some difficult </p>
								</div>

								<div class="work w-50">
									<h3>03. Quickly checkout</h3>
									<p>Eye chasmish are very important for thos whos have some difficult </p>
								</div>

								<div class="work w-50">
									<h3>04. Receive your chasmish</h3>
									<p>Eye chasmish are very important for thos whos have some difficult </p>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-xl-4">
					<div class="banner">
						<div class="thumb">
							<a href="#">
								<img src="img/banner/banner-4.jpg" alt="banner img">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- End How To Work Area -->
		<!-- Start CounteUp Area bg_image--2 -->
		<div class="counterup_area section-pt-xl mb-5">
			<div class="counterup_wrapper">
				<div class="container rounded shadow-sm">
					<?php
					$i = 0;
					$result_head = mysqli_query($db2,"select * from `bannerPromo` LIMIT 1");
					while(($d_head = mysqli_fetch_array($result_head)) && $i < 1){
					$i++;
					$harga= $d_head['harga'];
					$judul= $d_head['judul'];
					$gambar= $d_head['gambar'];
					$tanggal_berlaku= $d_head['tanggal_berlaku'];
					$status_banner= $d_head['status_banner'];
					?>
					<div class="row">
						<div class="col-lg-12">
							<div class="counter_content_inner">
								<div class="counter_content" >
									<div class="thumb">
										<img src="img/banner_promo/<?php echo $gambar; ?>" alt="banner images" >
									</div>
									<div class="content">
										<h3><?php echo $judul; ?></h3>
										<a href="#">Shop Now</a>
									</div>
								</div>
								<div id="js-clock" class="counterup_count">
									<div class="box"><span id="js-clock-days">00</span>Days</div>
									<div class="box"><span id="js-clock-hours">00</span>Hours</div>
									<div class="box"><span id="js-clock-minutes">00</span>Minutes</div>
									<div class="box"><span id="js-clock-seconds">00</span>Seconds</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<!-- End CounteUp Area -->

						
		<!-- Start Product Area -->
		<!-- <div class="product_area section-pt-xl section-pb-xl bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section_title text-center">
							<h2>ALL FEATURED GLASSES</h2>
							<p>Eye chasmish are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
						</div>
					</div>
				</div>
				<div class="row mt--20"> -->
					<!-- Start Single Product -->
					<!-- <div class="col-lg-3 col-xl-3 col-sm-6 col-12">
						<div class="product">
							<div class="thumb">
								<a href="single-product.html">
									<img src="img/product/product-1.jpg" alt="product img">
								</a>
								<div class="product_action">
									<h4>
										<a href="single-product.html">Rinosin Glasses</a>
									</h4>
									<ul class="cart_action">
										<li>
											<a href="cart.html">
												<img src="img/icons/add_to_cart.png" alt="icons">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/icons/compare_icon.png" alt="icons">
											</a>
										</li>
										<li>
											<a href="wishlist.html">
												<img src="img/icons/wishlist_icon.png" alt="icons">
											</a>
										</li>
										<li>
											<a title="Quick View" class="quickview" href="#">
												<img src="img/icons/quick_view.png" alt="icons">
											</a>
										</li>
									</ul>
								</div>
								<div class="content">
									<h4>
										<a href="single-product.html">Rinosin Glasses</a>
									</h4>
									<ul class="price">
										<li>$35</li>
										<li class="old-price">$35</li>
									</ul>
								</div>
							</div>
						</div>
					</div> -->
					<!-- End Single Product -->
				<!-- </div>
			</div>
		</div> -->
		<!-- End Product Area -->
		
		<!-- Start Shipping Service bg_image--3 -->
		<div class="shipping_service bg-white ptb--90 shadow-lg">
			<div class="shipping_wrap">
				<div class="row">

					<!-- Start Single -->
					<div class="col-lg-6 col-xl-3 col-sm-6 col-12">
						<div class="service item_1">
							<div class="icon">
								<img src="img/icons/ship_icon_1.png" alt="icon">
							</div>
							<div class="content">
								<h3>Free home delivery</h3>
								<p>Eye chasmish are very important for thos whos have some difficult</p>
							</div>
						</div>
					</div>
					<!-- End Single -->
					<!-- Start Single -->
					<div class="col-lg-6 col-xl-3 col-sm-6 col-12">
						<div class="service item_2">
							<div class="icon">
								<img src="img/icons/ship_icon_2.png" alt="icon">
							</div>
							<div class="content">
								<h3>Quality Products</h3>
								<p>Eye chasmish are very important for thos whos have some difficult</p>
							</div>
						</div>
					</div>
					<!-- End Single -->
					<!-- Start Single -->
					<div class="col-lg-6 col-xl-3 col-sm-6 col-12">
						<div class="service item_3">
							<div class="icon">
								<img src="img/icons/ship_icon_3.png" alt="icon">
							</div>
							<div class="content">
								<h3>Gift Voucher</h3>
								<p>Eye chasmish are very important for thos whos have some difficult</p>
							</div>
						</div>
					</div>
					<!-- End Single -->
					<!-- Start Single -->
					<div class="col-lg-6 col-xl-3 col-sm-6 col-12">
						<div class="service item_4">
							<div class="icon">
								<img src="img/icons/ship_icon_4.png" alt="icon">
							</div>
							<div class="content">
								<h3>3 Days easy return</h3>
								<p>Eye chasmish are very important for thos whos have some difficult</p>
							</div>
						</div>
					</div>
					<!-- End Single -->

				</div>
			</div>
		</div>
		<!-- End Shipping Service -->
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

	<script>
		(function() {
			<?php
			$result_head = mysqli_query($db2,"select * from `bannerPromo` LIMIT 1");
			$d_head = mysqli_fetch_array($result_head);
			$date = $d_head['tanggal_berlaku'];
			?>

			var deadline = '<?php echo $date; ?>';
		
			function pad(num, size) {
				var s = "0" + num;
				return s.substr(s.length-size);
			}
		
			function getTimeRemaining(endtime) {
			var t = Date.parse(endtime) - Date.parse(new Date()),
				seconds = Math.floor((t / 1000) % 60),
				minutes = Math.floor((t / 1000 / 60) % 60),
				hours = Math.floor((t / (1000 * 60 * 60)) % 24),
				days = Math.floor(t / (1000 * 60 * 60 * 24));
		
			return {
				'total': t,
				'days': days,
				'hours': hours,
				'minutes': minutes,
				'seconds': seconds
			};
			}
		
			function clock(id, endtime) {
			var days = document.getElementById(id + '-days')
				hours = document.getElementById(id + '-hours'),
				minutes = document.getElementById(id + '-minutes'),
				seconds = document.getElementById(id + '-seconds');
		
			var timeinterval = setInterval(function() {
				var t = getTimeRemaining(endtime);
		
				if (t.total <= 0){
				clearInterval(timeinterval);
				}
				
				else {
					days.innerHTML = pad(t.days, 2);
					hours.innerHTML = pad(t.hours, 2);
					minutes.innerHTML = pad(t.minutes, 2);
					seconds.innerHTML = pad(t.seconds, 2);
				}
		
			}, 1000);
			}
		
			clock('js-clock', deadline);
		})();
		
		
	</script>
	

	<script src="js/main.js"></script>
</body>

</html>