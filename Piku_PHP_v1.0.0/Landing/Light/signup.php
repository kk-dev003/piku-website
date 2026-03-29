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
                        <div><a href="index.php" class="fw-500 text-dark">Go to home</a></div>
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
                <div class="user-data-form ">
                    <div class="form-wrapper">
                        <div class="mb-30 text-center">
                            <h2>Register</h2>
                            <p>Already have an account? <a href="login.php">Login</a></p>
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
                                    <div class="input-group-meta position-relative mb-30">
                                        <label>Email*</label>
                                        <input type="email" placeholder="zubayerhasan@gmail.com">
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
                                            <input type="checkbox" id="remember2">
                                            <label for="remember2">By hitting the "Register" button, you agree to the <a href="#">Terms conditions</a> & <a href="#">Privacy Policy</a></label>
                                        </div>
                                    </div> <!-- /.agreement-checkbox -->
                                </div>
                                <div class="col-12">
                                    <button class="btn-four w-100 tran3s d-block mt-20 mb-20">SignUp</button>
                                </div>
                            </div>
                        </form>

                        <div class="d-flex align-items-center justify-content-center mb-10">
                            <span class="pe-3 ps-3 fs-6">OR</span>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
                                    <img src="assets/images/icon/google.png" alt="">
                                    <span class="ps-3">Signup with Google</span>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
                                    <img src="assets/images/icon/facebook.png" alt="">
                                    <span class="ps-3">Signup with Facebook</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.form-wrapper -->
                </div>
                <!-- /.user-data-form  -->
            </div>
			<p class="copyright-text"> <span class="fw-500">@2024 Piku inc.</span> All Right Reserved</p>
			<img src="assets/images/shape/shape_94.svg" alt="" class="shapes shape_01">
        </div>





	<?php include 'partials/vendor-scripts.php'; ?>
	</div> <!-- /.main-page-wrapper -->
</body>

</html>