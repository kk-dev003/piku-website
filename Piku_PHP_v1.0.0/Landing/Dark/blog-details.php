<?php include 'partials/main.php'; ?>

<?php include 'partials/title-meta.php'; ?>

<?php include 'partials/head-css.php'; ?>


<body>
	<div class="main-page-wrapper">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		<?php include 'partials/preloader.php'; ?>


        <!-- 
		=============================================
			Sidenav
		============================================== 
		-->
        <div class="offcanvas offcanvas-end sidebar-nav" tabindex="-1" id="sideNav" aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header p0">
            	<div class="logo order-lg-0">
					<a href="index.php" class="d-flex align-items-center">
						<img src="assets/images/logo/logo_02.svg" alt="">
					</a>
				</div>
            	<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="wrapper mt-10 h-100">
				<div class="d-flex flex-column h-100">
					<div class="sidebar-nav-item">
						<ul class="style-none">
							<li class="nav-item">
								<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Home</a>
								<ul class="dropdown-menu">
									<li><a href="index.php" class="dropdown-item"><span>Payment Service</span></a></li>
									<li><a href="index-2.php" class="dropdown-item"><span>AI Writer</span></a></li>
									<li><a href="index-3.php" class="dropdown-item"><span>Website Builder</span></a></li>
									<li><a href="index-4.php" class="dropdown-item"><span>CRM</span></a></li>
									<li><a href="index-5.php" class="dropdown-item"><span>Project Management</span></a></li>
									<li><a href="index-6.php" class="dropdown-item"><span>Mobile App Landing</span></a></li>
									<li><a href="index-7.php" class="dropdown-item"><span>Digital Agency</span></a></li>
									<li><a href="index-8.php" class="dropdown-item"><span>Help Desk</span></a></li>
									<li><a href="index-9.php" class="dropdown-item"><span>Web Hosting</span></a></li>
									<li><a href="index-10.php" class="dropdown-item"><span>Cyber Security</span></a></li>
							  	</ul>
							</li>
							<li class="nav-item dropdown">
							  	<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Portfolio</a>
							  	<ul class="dropdown-menu">
									<li><a href="project-v1.php" class="dropdown-item"><span>Project-1</span></a></li>
									<li><a href="project-v2.php" class="dropdown-item"><span>Project-2</span></a></li>
									<li><a href="project-v3.php" class="dropdown-item"><span>Project-3</span></a></li>
									<li><a href="project-v4.php" class="dropdown-item"><span>Project-4</span></a></li>
									<li><a href="project-v5.php" class="dropdown-item"><span>Project-5</span></a></li>
									<li><a href="project-v6.php" class="dropdown-item"><span>Project-6</span></a></li>
									<li><a href="project-details.php" class="dropdown-item"><span>Project Details</span></a></li>
							 	</ul>
						  </li>
							<li class="nav-item">
								<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Pages</a>
								<ul class="dropdown-menu">
									<li><a href="about-us-v1.php" class="dropdown-item"><span>About Us</span></a></li>
									<li><a href="team-v1.php" class="dropdown-item"><span>Team</span></a></li>
									<li><a href="service-v1.php" class="dropdown-item"><span>Service</span></a></li>
									<li><a href="pricing-v1.php" class="dropdown-item"><span>Pricing</span></a></li>
									<li><a href="faq-v1.php" class="dropdown-item"><span>FAQ's</span></a></li>
							  </ul>
							</li>
							<li class="nav-item"><a href="blog-v3.php">News</a></li>
							<li class="nav-item"><a href="contact-v1.php">Contact us</a></li>
						</ul>
					</div>
					<div><a href="login.php" class="btn-eleven style-two w-100 tran3s">Login</a></div>
					<div class="address-block mt-50">
						<h4 class="title pb-15">Our Address</h4>
						<p>Chowrastar Mirpur- 1210, Sangu <br>River, Dhaka</p>
						<p>Urgent issue? call us at <br><a href="tel:310.841.5500">310.841.5500</a></p>
					</div>
					<ul class="style-none d-flex flex-wrap w-100 justify-content-between align-items-center social-icon pt-25 mt-auto">
						<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-viber"></i></a></li>
					</ul>
				</div>
            </div>
        </div>


		
		<!-- 
		=============================================
			Theme Main Menu
		============================================== 
		-->
		<header class="theme-main-menu menu-style-four sticky-menu menu-overlay">
			<div class="inner-content gap-one">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index.php" class="d-flex align-items-center">
								<img src="assets/images/logo/logo_01.1.svg" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto ms-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li class="d-none d-sm-inline-block">
									<a href="contact-v1.php" class="btn-five tran3s">Let’s Talk</a>
                                </li>
								<li class="ms-4"><button class="sidenavbtn rounded-circle tran3s" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideNav" aria-controls="sideNav"><i class="fa-sharp fa-light fa-bars-filter"></i></button></li>
							</ul>
						</div>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header> 
		<!-- /.theme-main-menu -->



		<!-- 
		=============================================
			Blog Details
		============================================== 
		-->
		<div class="blog-details mt-200 lg-mt-150 mb-120 lg-mb-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-11 m-auto">
						<div class="pe-xl-5 ps-xl-5">
							<article class="blog-details-post">
								<div class="post-info text-center">Maria Jonas  /  2 Comments  /  o comment </div>
								<div class="title-three text-center mb-55 lg-mb-40">
									<h2>Make Productive Day with AI app</h2>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaum laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit volupta velit esse cillum dolore eu fugiat nulla pariatur ut enim ad minim veniam.</p>
								<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum magna quis nostured sed do eiusmod tempor .</p>
								<div class="media">
									<img src="assets/images/blog/blog_img_18.jpg" alt="" class="w-100">
								</div>
								<h3>How I become my own mentor?</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaum laboris nisi ut aliquip ex ea in reprehenderit volupta velit esse cillum dolore eu fugiat nulla pariatur.</p>
								<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum magna quis nostured sed do eiusmod tempor .</p>

								<div class="quote-wrapper">
									<blockquote>"Budget your desires, investing knowledge, & let compound interest build your future."</blockquote>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>

								<p>quis nostrud exercitation ullaum laboris nisi ut aliquip ex ea in reprehenderit volupta velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum magna quis nostured sed do eiusmod tempor . minim veniam, quis nostrud exercitation ullaum laboris nisi ut aliquip ex ea  in reprehenderit.</p>
								<div class="bottom-widget d-lg-flex align-items-center justify-content-between">
                                    <ul class="d-flex align-items-center flex-wrap tags style-none pt-20">
                                        <li>Tag</li>
										<li><a href="blog-v1.php">AI</a></li>
                                        <li><a href="blog-v1.php">Application</a></li>
                                        <li><a href="blog-v1.php">Technology</a></li>
                                    </ul>
                                    <ul class="d-flex share-icon align-items-center style-none pt-20">
                                        <li>Share</li>
                                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    </ul>
                                </div>
							</article>

							<div class="blog-comment-form">
								<h3 class="blog-inner-title text-center">Leave A Reply</h3>
								<p class="text-center"><a href="#"><a href="#">Login</a> to post your comment or <a href="#">signup</a> if you dont have any account</p>
								<form action="#" class="mt-50 md-mt-30">
									<div class="input-wrapper mb-35">
										<label>Name*</label>
										<input type="text" placeholder="Full Name">
									</div> <!-- /.input-wrapper -->
									<div class="input-wrapper mb-40">
										<label>Email*</label>
										<input type="email" placeholder="Email Address">
									</div> <!-- /.input-wrapper -->
									<div class="input-wrapper mb-30">
										<textarea placeholder="Write Message here.."></textarea>
									</div> <!-- /.input-wrapper -->
									<div class="text-center mt-50"><button class="btn-eleven style-two text-uppercase m-auto">Post Comment</button></div>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- /.blog-details -->


	



		<!--
		=====================================================
			Footer Two
		=====================================================
		-->
		<div class="footer-two p-30">
			<div class="bg-wrapper">
				<div class="container">
					<div class="position-relative">
						<div class="row">
							<div class="col-lg-5 me-auto">
								<div class="footer-intro mb-30 me-xxl-5 pe-xxl-4">
                                    <h3 class="text-white">Subscribe to our <span>newsletter.</span></h3>
									<form action="#" class="position-relative">
                                        <input type="email" placeholder="Your email address">
                                        <button class="tran3s"><img src="assets/images/icon/icon_05.svg" alt="" class="m-auto"></button>
                                    </form>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-6">
								<div class="footer-nav mb-40">
									<ul class="footer-nav-link style-none">
										<li><a href="about-us-v1.php">About </a></li>
										<li><a href="project-v1.php">Work Gallery</a></li>
										<li><a href="pricing-v2.php">Pricing</a></li>
										<li><a href="blog-v1.php">Blog</a></li>
										<li><a href="contact-v1.php">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-6">
								<div class="footer-nav mb-40">
									<ul class="footer-nav-link style-none">
										<li><a href="faq-v1.php">Faq’s</a></li>
										<li><a href="faq-v1.php">Privacy Policy</a></li>
										<li><a href="faq-v2.php">Terms</a></li>
									</ul>
									<img src="assets/images/shape/shape_18.svg" alt="" class="mt-50">
								</div>
							</div>
							<div class="col-xxl-2 col-xl-3">
								<div class="footer-contact mb-20">
									<p class="fw-500">210 Wallent Street, California, Main OC, USA</p>
									<a href="#" class="tel fw-500 tran3s">(+91) 0187 34 377</a>
									<ul class="style-none d-flex align-items-center social-icon">
									<li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="https://x.com/"><i class="fa-brands fa-twitter"></i></a></li>
										<li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="container">
					<div class="bottom-footer">
						<div class="d-md-flex align-items-center justify-content-between">
							<div class="d-flex justify-content-center align-items-center sm-mb-20">
								<ul class="style-none d-flex justify-content-center">
									<li><a href="faq-v1.php">Demo .</a></li>
									<li><a href="faq-v2.php">Partners .</a></li>
									<li><a href="faq-v1.php">Careers</a></li>
								</ul>
								<img src="assets/images/shape/shape_19.svg" alt="" class="ms-5 d-none d-md-block">
							</div>
							<p class="copyright-text text-center m0"><span>@2024 Piku inc.</span> All Right Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.footer-two -->




		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>



		<?php include 'partials/vendor-scripts.php'; ?>
        <!-- isotop -->
		<script  src="assets/vendor/isotope.pkgd.min.js"></script>

</body>

</html>