<?php include 'partials/main.php'; ?>

<?php include 'partials/title-meta.php'; ?>

<?php include 'partials/head-css.php'; ?>

<body>
	<div class="main-page-wrapper dark-bg-two">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		<?php include 'partials/preloader.php'; ?>


		
		<!-- 
		=============================================
			Theme Main Menu
		============================================== 
		-->
		<header class="theme-main-menu menu-style-two sticky-menu menu-overlay">
			<div class="inner-content gap-one">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index.php" class="d-flex align-items-center">
								<img src="assets/images/logo/logo_02.svg" alt="">
							</a>
						</div>
						<!-- logo -->
                        <div><a href="index.php" class="fw-500 text-white">Go to home</a></div>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header> 
		<!-- /.theme-main-menu -->



		<!--
		=====================================================
			Login Page
		=====================================================
		-->
		<div class="login-page position-relative z-1 d-flex align-items-center justify-content-center">
            <div class="bg-wrapper">
                <div class="user-data-form dark-bg-two">
                    <div class="form-wrapper">
                        <div class="mb-50 sm-mb-30">
                            <h2>Login</h2>
                            <p>Don’t have any account? <a href="signup.php">Register</a></p>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group-meta position-relative mb-30">
                                        <label>Email*</label>
                                        <input type="email" placeholder="Youremail@gmail.com">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group-meta position-relative mb-20">
                                        <label>Password*</label>
                                        <input type="password" placeholder="Enter Password" class="pass_log_id">
                                        <span class="placeholder_icon"><span class="passVicon"><img src="assets/images/icon/icon_102.svg" alt=""></span></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="agreement-checkbox d-flex justify-content-between align-items-center">
                                        <div>
                                            <input type="checkbox" id="remember">
                                            <label for="remember">Keep me logged in</label>
                                        </div>
                                        <a href="#">Forget Password?</a>
                                    </div> <!-- /.agreement-checkbox -->
                                </div>
                                <div class="col-12">
                                    <button class="btn-four w-100 tran3s d-block mt-20 mb-50">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.form-wrapper -->
                </div>
                <!-- /.user-data-form  -->
            </div>
			<p class="copyright-text"> <span class="fw-500">@2024 Piku inc.</span> All Right Reserved</p>
			<img src="assets/images/shape/shape_94.svg" alt="" class="shapes shape_01">
			<img src="assets/images/shape/shape_95.svg" alt="" class="shapes shape_02">
        </div>




		<?php include 'partials/vendor-scripts.php'; ?>
</body>

</html>