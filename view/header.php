<header class="header chasmishco_header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-3 col-lg-2 col-md-4">
				<div class="logo">
					<div class="row" style="margin: auto;">
							<a href="index.php" style="margin-top: auto; margin-bottom: auto; margin-right: -15px;">
								<img src="img/logo/logo1.png" alt="chasmishco Logo">
							</a>
							<a href="index.php" style="margin-top: auto; margin-bottom: auto; padding-top: 10px;">
								<h5>TRUESIGHT</h5>
							</a>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-10 col-md-8">
				<div class="header_right_sidebar">
						<?php 
						$no = 1;
						$contact = mysqli_query($db2,"select * from `contact_us`");
						while($d_head = mysqli_fetch_array($contact)){
							$phone = $d_head['phone'];
							$phone = str_replace("_", "", $phone);
							$x = explode(" ", $phone);
							$phone_number = str_replace("-", "", $x[1]);
							$phone_number = str_replace("_", "", $phone_number);
						?>
						<div class="login_account">
							<div class="mini_cat_box">
								<a target="_blank" class="shop_cart_icon" href="https://api.whatsapp.com/send?phone=62<?php echo $phone_number ?>&text=Hallo%20True%20Sight.%20Saya%20mau%20tanya-tanya%20kacamata%20kerennya%20direspond%20cepat%20yah.">
								<i class="fab fa-whatsapp"></i>
									<span class="cart_text"> <?php echo $phone ?> </span>
								</a>
							</div>
						</div>
						<?php } ?>
					<div class="glass_toggle_menu">
						<nav class="mainmenu_nav mainmenu__nav">
							<ul class="main_menu">
								<li class="drop">
									<a href="index.php">Home</a>
									<!-- <ul class="dropdown">
												<li>
													<a href="index.html">Home Version 01</a>
												</li>
												<li>
													<a href="index-2.html">Home Version 02</a>
												</li>
												<li>
													<a href="index-3.html">Home Version 03</a>
												</li>
											</ul> -->
								</li>
								<li class="drop">
									<a href="shop-grid.php">Produk</a>
									<!-- <ul class="dropdown">
												<li><a href="shop-grid.html">Shop Grid</a></li>
												<li><a href="shop-list.html">Shop List</a></li>
												<li><a href="single-product.html">Shop Single</a></li>
											</ul> -->
								</li>
								<li class="drop">
									<a href="blog-three-column.php">Artikel</a>
									<!-- <ul class="dropdown">
												<li><a href="blog-three-column.html">Blog Three Column</a></li>
												<li><a href="blog-two-column.html">Blog Two Column</a></li>
												<li><a href="blog-sidebar.html">Blog Sidebar</a></li>
												<li><a href="blog-details.html">Blog Details</a></li>
											</ul> -->
								</li>
								<!-- <li>
											<a href="#">About</a>
										</li> -->
								<!-- <li class="drop">
											<a href="#">pages</a>
											<ul class="dropdown">
												<li><a href="cart.html">Cart Page</a></li>
												<li><a href="compare.html">Compare Page</a></li>
												<li><a href="wishlist.html">Wishlist Page</a></li>
												<li><a href="my-account.html">My Account</a></li>
												<li><a href="checkout.html">Checkout Page</a></li>
												<li><a href="contact.html">Contact</a></li>
											</ul>
										</li> -->
								<li>
									<a href="contact.php">Contact</a>
								</li>
							</ul>
						</nav>

						<div class="hamburger-box button mobile-toggle">
							<span class="mobile-toggle__icon"></span>
						</div>
					</div>
					<!-- Mobile Menu -->
					<div class="mobile-menu d-block d-lg-none"></div>
					<!-- Mobile Menu -->
				</div>
			</div>
		</div>



	</div>
</header>