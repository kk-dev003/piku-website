<?php include 'partials/main.php'; ?>

<?php include 'partials/title-meta.php'; ?>

<?php include 'partials/head-css.php'; ?>

<body>
	<div class="main-page-wrapper dark-bg p-30">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		<?php include 'partials/preloader.php'; ?>

		
		<!-- 
		=============================================
			Theme Main Menu
		============================================== 
		-->
		<header class="theme-main-menu menu-style-one">
			<div class="inner-content bg-wrapper bg-one border-20">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index.php" class="d-flex align-items-center">
								<img src="assets/images/logo/logo_01.svg" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto ms-lg-0 me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li class="d-none d-md-inline-block ms-3">
                                    <a href="login.php" class="btn-one">Let’s Started</a>
                                </li>
							</ul>
						</div>
						<nav class="navbar navbar-expand-lg p0 order-lg-2">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="index.php" class="d-block"><img src="assets/images/logo/logo_01.svg" alt=""></a></div></li>
									<li class="nav-item dropdown mega-dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Home
										</a>
										<ul class="dropdown-menu">
											<li class="pe-3 ps-3">
												<div class="row gx-3">
													<div class="col-lg-3">
														<a href="index.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home01.jpg" alt="" class="w-100"></div>
															<span>Payment Service</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-2.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home02.jpg" alt="" class="w-100"></div>
															<span>AI Writer</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-3.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home03.jpg" alt="" class="w-100"></div>
															<span>Website Builder</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-4.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home04.jpg" alt="" class="w-100"></div>
															<span>CRM</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-5.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home05.jpg" alt="" class="w-100"></div>
															<span>Project Management </span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-6.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home06.jpg" alt="" class="w-100"></div>
															<span>Mobile App Landing</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-7.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home07.jpg" alt="" class="w-100"></div>
															<span>Digital Agency</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-8.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home08.jpg" alt="" class="w-100"></div>
															<span>Help Desk</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-9.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home09.jpg" alt="" class="w-100"></div>
															<span>Web Hosting </span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-10.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home10.jpg" alt="" class="w-100"></div>
															<span>Cyber Security</span>
														</a>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li class="nav-item dropdown mega-dropdown-sm">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages
										</a>
						                <ul class="dropdown-menu">
							                <li class="row gx-1">
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Essential</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="about-us-v1.php" class="dropdown-item"><span>About Us-1</span></a></li>
															<li><a href="about-us-v2.php" class="dropdown-item"><span>About Us-2</span></a></li>
															<li><a href="about-us-v3.php" class="dropdown-item"><span>About Us-3</span></a></li>
															<li><a href="team-v1.php" class="dropdown-item"><span>Team-1</span></a></li>
															<li><a href="team-v2.php" class="dropdown-item"><span>Team-2</span></a></li>
															
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Features</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="service-v1.php" class="dropdown-item"><span>Service-1</span></a></li>
															<li><a href="service-v2.php" class="dropdown-item"><span>Service-2</span></a></li>
															<li><a href="service-v3.php" class="dropdown-item"><span>Service-3</span></a></li>
															<li><a href="service-details.php" class="dropdown-item"><span>Service Details</span></a></li>
															<li><a href="pricing-v1.php" class="dropdown-item"><span>Pricing-1</span></a></li>
															<li><a href="pricing-v2.php" class="dropdown-item"><span>Pricing-2</span></a></li>
															
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Others</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="faq-v1.php" class="dropdown-item"><span>FAQ-1</span></a></li>
															<li><a href="faq-v2.php" class="dropdown-item"><span>FAQ-2</span></a></li>
															<li><a href="login.php" class="dropdown-item"><span>Login</span></a></li>
															<li><a href="signup.php" class="dropdown-item"><span>Sign Up</span></a></li>
															<li><a href="404.php" class="dropdown-item"><span>404 Error</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
											</li>
						                </ul>
						            </li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Project
										</a>
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
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Blog
										</a>
										<ul class="dropdown-menu">
											<li><a href="blog-v1.php" class="dropdown-item"><span>Blog Full Width</span></a></li>
											<li><a href="blog-v2.php" class="dropdown-item"><span>Blog List</span></a></li>
											<li><a href="blog-v3.php" class="dropdown-item"><span>Blog 2 column</span></a></li>
											<li><a href="blog-details.php" class="dropdown-item"><span>Blog Details</span></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Contact
										</a>
										<ul class="dropdown-menu">
											<li><a href="contact-v1.php" class="dropdown-item"><span>Contact Us-1</span></a></li>
											<li><a href="contact-v2.php" class="dropdown-item"><span>Contact Us-2</span></a></li>
										</ul>
									</li>
									<li class="d-md-none ps-3 pe-3 mt-20">
										<a href="login.php" class="btn-one w-100">Let’s Started</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header> 
		<!-- /.theme-main-menu -->



		<!-- 
		=============================================
			Error Page
		============================================== 
		-->
		<div class="error-page bg-one border-30 z-1 pt-130 pb-90 md-pb-40 mt-30 lg-mt-20 position-relative">
			<div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-8">
                        <h2>404</h2>
                        <h3>Page Not Found </h3>
                        <p class="fs-24 pe-xxl-5 mt-30 mb-35">Publishing industries for previewing layouts & visual mockups used.</p>

                        <a href="index.php" class="btn-seven">Go Back</a>
                    </div>
                </div>
            </div>
            <img src="assets/images/assets/ils_26.png" alt="" class="illustration">
            <img src="assets/images/shape/shape_93.svg" alt="" class="shapes shape_01">
		</div>
		<!-- /.error-page -->






		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>


		<?php include 'partials/vendor-scripts.php'; ?>
        <!-- isotop -->
		<script  src="assets/vendor/isotope.pkgd.min.js"></script>

	
</body>

</html>