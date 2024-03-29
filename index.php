<!doctype html>

<?php 
include 'controller/conn.php';
session_start();
if (isset($_SESSION['trues'])) {
	if ($_SESSION['trues'] == "trues") {
		echo "<script type='text/javascript'>alert('Terimakasih ! Kami akan kirimkan newsletter ke email anda.');</script>";
	}
}
$_SESSION['trues'] = "";
?>


<html class="no-js" lang="zxx">

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
								<a href="shop-grid.php">Lihat Produk</a>
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
							<p>Jadilah konsumen bijak dalam memilih kacamata.</p>
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
										<h4><a
												href="controller/conn_add_produk.php?id_produk=<?php echo $d_head['id_produk']?>&view=<?php echo $d_head['view']?>"><?php echo $d_head['nama']; ?></a>
										</h4>
										<ul class="cart_action text-white">
											<li> <p> <?php echo $d_head['deskripsi_singkat'] ?></p> </li>
										</ul>
									</div>
									<div class="content">
										<h4>
											<a href="single-product.php?id_produk=<?php echo $d_head['id_produk'] ?>"><?php echo $d_head['nama']; ?></a>
										</h4>
										<ul class="price">
											<div class="price">
											<?php $harga = $d_head['harga'];
											if($d_head['discount'] != 0) {
												$harga_diskon = $harga - ($harga * $d_head['discount'] / 100);
												echo '<li class="old-price">Rp'. number_format($harga,2,',','.') .'</li>';
												echo '<li>Rp'. number_format($harga_diskon,2,',','.') .'</li>';
											} else {
												echo '<li>Rp'. number_format($harga,2,',','.') .'</li>';
											}    
											?>

											</div>
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
								<h3>Ongkir Terjangkau</h3>
								<p>Harga ongkos kirim sangat<br>tejangkau.</p>
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
								<p>Kacamata kami mengutamakan kualitas terbaik.</p>
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
								<h3>Promo</h3>
								<p>Dapatkan promo atau hadiah menarik dari kami.</p>
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
								<h3>Konsultasi</h3>
								<p>Konsultasikan kacamata yang cocok untuk anda.</p>
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
			var deadline = new Date(deadline.replace(/-/g, '/'));
		
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