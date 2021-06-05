<footer class="footer_area">
			<div class="footer_top bg-cat--1">
				<div class="container">
					<div class="row">
						<!-- Start Single Footer -->
						<?php 
						$no = 1;
						$result_head = mysqli_query($db2,"select * from `contact_us`");
						while($d_head = mysqli_fetch_array($result_head)){
						?>
						<div class="col-lg-3 col-sm-6 col-12 mb--50">
							<div class="footer_widget">
								<h2 class="ft_widget_title">Bandung</h2>
								<div class="textwidget">
									<p> <?php echo $d_head['address']?> </p>
									<p> <?php echo $d_head['phone']?> </p>
									<p> <?php echo $d_head['email']?> </p>
								</div>
							</div>
						</div>
						<?php } ?>
						<!-- End Single Footer -->

						<!-- Start Single Footer -->
						<!-- <div class="col-lg-3 col-sm-6 col-12 mb--50">
							<div class="footer_widget">
								<h2 class="ft_widget_title">Newsletter</h2>
								<div class="textwidget">
									<div class="input_box">
										<input type="email" placeholder="Enter your email here">
										<button>Subscribe</button>
									</div>
								</div>
							</div>
						</div> -->
						<!-- End Single Footer -->
					</div>
				</div>
			</div>
			<div class="copyright bg-cat--2">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="copy_text">
								<p>Copyright © 2021, All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6">
							<ul class="footer_menu d-flex justify-content-end">
								<li>
									<a href="#">Terms & Conditions</a>
								</li>
								<li>
									<a href="/contact.php">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->