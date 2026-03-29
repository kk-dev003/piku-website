<?php include 'partials/main.php'; ?>
<?php include 'partials/title-meta.php'; ?>

<?php include 'partials/head-css.php'; ?>

<body>
	<div class="main-page-wrapper bg-five">
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
					<div><a href="login.php" class="btn-five w-100 tran3s">Login</a></div>
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
								<img src="assets/images/logo/logo_01.svg" alt="">
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
		=====================================================
			Project Section One
		=====================================================
		-->
		<div class="project-section-one mt-200 xl-mt-150">
			<div class="container xl">
				<div class="position-relative">
					<div class="title-three text-center pb-50 lg-pb-10">
						<h2>Latest Work</h2>
					</div>

					<div class="project-block-one overflow-hidden mt-60 sm-mt-40">
						<div class="row gx-0">
							<div class="col-lg-6 d-flex">
								<div class="text-meta w-100">
									<div class="num font-Montserrat">01.</div>
									<a href="project-details.php" class="title text-uppercase fw-500">Mobile app UI & Branding</a>
									<p class="fs-28 text-dark">Successful companies through collaborative efforts and strategic implementation.</p>
									<a href="project-details.php" class="arow-icon"><i class="fa-light fa-arrow-up-right"></i></a>
									<ul class="style-none d-flex flex-wrap">
										<li><a href="project-details.php">Mobile app</a></li>
										<li><a href="project-details.php">UI/UX</a></li>
										<li><a href="project-details.php">BRANDING</a></li>
									</ul>
								</div>
								<!-- /.text-meta -->
							</div>
							<div class="col-lg-6 d-flex">
								<div class="image-meta w-100" style="background: #45F08D;">
									<img src="assets/images/media/img_16.png" alt="" class="ms-auto wow fadeInRight">
								</div>
							</div>
						</div>
					</div>
					<!-- /.project-block-one -->

					<div class="project-block-one overflow-hidden mt-60 sm-mt-40">
						<div class="row gx-0">
							<div class="col-lg-6 d-flex">
								<div class="text-meta w-100">
									<div class="num font-Montserrat">02.</div>
									<a href="project-details.php" class="title text-uppercase fw-500">TASK & PROJECT DASHBOARD</a>
									<p class="fs-28 text-dark">Lorem ipsum dolor sit amet. Ut omnis nisi nam modi ipsum aut blanditiis omnis</p>
									<a href="project-details.php" class="arow-icon"><i class="fa-light fa-arrow-up-right"></i></a>
									<ul class="style-none d-flex flex-wrap">
										<li><a href="project-details.php">CRM</a></li>
										<li><a href="project-details.php">DASHBOARD</a></li>
										<li><a href="project-details.php">UI</a></li>
										<li><a href="project-details.php">Management</a></li>
									</ul>
								</div>
								<!-- /.text-meta -->
							</div>
							<div class="col-lg-6 d-flex">
								<div class="image-meta d-flex align-items-end justify-content-end w-100" style="background: #FFE073;">
									<img src="assets/images/media/img_17.png" alt="" class="wow fadeInUp">
								</div>
							</div>
						</div>
					</div>
					<!-- /.project-block-one -->

					<div class="project-block-one overflow-hidden mt-60 sm-mt-40">
						<div class="row gx-0">
							<div class="col-lg-6 d-flex">
								<div class="text-meta w-100">
									<div class="num font-Montserrat">03.</div>
									<a href="project-details.php" class="title text-uppercase fw-500">Finance & Banking Application</a>
									<p class="fs-28 text-dark">At saepe commodi a sunt quaerat est impedit qui ullam delectus et consequatur</p>
									<a href="project-details.php" class="arow-icon"><i class="fa-light fa-arrow-up-right"></i></a>
									<ul class="style-none d-flex flex-wrap">
										<li><a href="project-details.php">Mobile app</a></li>
										<li><a href="project-details.php">FINANCE</a></li>
									</ul>
								</div>
								<!-- /.text-meta -->
							</div>
							<div class="col-lg-6 d-flex">
								<div class="image-meta d-flex align-items-end justify-content-center w-100" style="background: #FF92DF;">
									<img src="assets/images/media/img_18.png" alt="" class="wow fadeInUp">
								</div>
							</div>
						</div>
					</div>
					<!-- /.project-block-one -->

                    <div class="project-block-one overflow-hidden mt-60 sm-mt-40">
						<div class="row gx-0">
							<div class="col-lg-6 d-flex">
								<div class="text-meta w-100">
									<div class="num font-Montserrat">04.</div>
									<a href="project-details.php" class="title text-uppercase fw-500">Mockup - MacBook Pro m1</a>
									<p class="fs-28 text-dark">At saepe commodi a sunt quaerat est impedit qui ullam delectus et consequatur</p>
									<a href="project-details.php" class="arow-icon"><i class="fa-light fa-arrow-up-right"></i></a>
									<ul class="style-none d-flex flex-wrap">
										<li><a href="project-details.php">Mobile app</a></li>
										<li><a href="project-details.php">FINANCE</a></li>
									</ul>
								</div>
								<!-- /.text-meta -->
							</div>
							<div class="col-lg-6 d-flex">
								<div class="image-meta d-flex align-items-end justify-content-center w-100" style="background: #000;">
									<img src="assets/images/media/img_50.jpg" alt="" class="wow fadeInUp w-100">
								</div>
							</div>
						</div>
					</div>
					<!-- /.project-block-one -->

                    <div class="project-block-one overflow-hidden mt-60 sm-mt-40">
						<div class="row gx-0">
							<div class="col-lg-6 d-flex">
								<div class="text-meta w-100">
									<div class="num font-Montserrat">05.</div>
									<a href="project-details.php" class="title text-uppercase fw-500">Poster — Product Branding</a>
									<p class="fs-28 text-dark">At saepe commodi a sunt quaerat est impedit qui ullam delectus et consequatur</p>
									<a href="project-details.php" class="arow-icon"><i class="fa-light fa-arrow-up-right"></i></a>
									<ul class="style-none d-flex flex-wrap">
										<li><a href="project-details.php">CRM</a></li>
										<li><a href="project-details.php">DASHBOARD</a></li>
                                        <li><a href="project-details.php">Management</a></li>
									</ul>
								</div>
								<!-- /.text-meta -->
							</div>
							<div class="col-lg-6 d-flex">
								<div class="image-meta d-flex align-items-center justify-content-center w-100" style="background: #BCA5FF;">
									<img src="assets/images/media/img_51.png" alt="" class="wow fadeInUp">
								</div>
							</div>
						</div>
					</div>
					<!-- /.project-block-one -->
				</div>
			</div>
		</div>




		<!--
		=====================================================
			Fancy Banner Eight
		=====================================================
		-->
		<div class="fancy-banner-eight position-relative z-1 mt-200 xl-mt-150 lg-mt-100 mb-120 lg-mb-80">
			<div class="container xl">
				<div class="row">
					<div class="col-xl-10 col-lg-10 m-auto text-center">
						<h2 class="hero-heading font-Montserrat d-flex align-items-center justify-content-center flex-wrap">
                            <span>ANY &nbsp;</span>
                            <span class="position-relative">
                                PROJECT
								<img src="assets/images/icon/smile.svg" alt="" class="shapes smile_icon">
                                <img src="assets/images/shape/shape_78.png" alt="" class="shapes shape_01">
                            </span>
                            <img src="assets/images/shape/shape_61.svg" alt="" class="shape shape_02 me-lg-4">
                            <span>IN MIND?</span>
                            <img src="assets/images/shape/shape_77.svg" alt="" class="shape shape_03 ms-lg-4">
                        </h2>
						<a href="contact-v2.php" class="btn-seventeen mt-50 lg-mt-30">Let’s Talk</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-eight -->





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