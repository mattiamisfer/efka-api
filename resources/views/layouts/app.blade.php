<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from templates.hibootstrap.com/eduon/default/log-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Aug 2020 05:28:56 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS --> 
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Owl Theme Default CSS --> 
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<!-- Owl Carousel CSS --> 
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<!-- Owl Magnific CSS --> 
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!-- Animate CSS --> 
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- Boxicons CSS --> 
		<link rel="stylesheet" href="assets/css/boxicons.min.css"> 
		<!-- Flaticon CSS --> 
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<!-- Meanmenu CSS -->
		<link rel="stylesheet" href="assets/css/meanmenu.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="assets/css/nice-select.css">
		<!-- Odometer CSS-->
		<link rel="stylesheet" href="assets/css/odometer.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/img/favicon.png">
		<!-- Title -->
		<title>EFA KSA</title>
    </head>

    <body>
		<!-- Start Preloader Area -->
	<!--	<div class="loader-wrapper">
			<div class="loader">
				<div class="dot-wrap">
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
				</div>
			</div>
		</div> -->
		<!-- End Preloader Area -->
 
		<!-- Start Navbar Area -->
		<div class="navbar-area">
			<!-- Menu For Mobile Device -->
			<div class="mobile-nav">
				<a href="index.html" class="logo">
					<img src="assets/img/efa/logoen.png" width="600px" height="auto" alt="Logo">
				</a>
			</div>

			<!-- Menu For Desktop Device -->
			<div class="main-nav">
				<div class="container-fluid">
					<nav class="navbar navbar-expand-md">
						<a class="navbar-brand" href="index.html">
							<img src="assets/img/efa/logoen.png" width="300px" height="auto" alt="Logo">
						</a>
						<div class="collapse navbar-collapse mean-menu">
							
							
							<!-- Start Other Option -->
							<div class="others-option">
								

                                @php $locale = session()->get('locale'); @endphp
                                
								
								<div class="register">
									<a href="lang/ar" class="default-btn">
										Arabic
									</a>
								</div>	
								<div class="register">
									<a href="lang/en" class="default-btn">
										English
									</a>
								</div>	
							</div>
							<!-- End Other Option -->
							
							
						</div>
						
					</nav>
				</div>
			</div>

			<!-- Start Others Option For Responsive -->
			
			<!-- End Others Option For Responsive -->
		</div>
		<!-- End Navbar Area -->

		<!-- Start Page Title Area -->
		<div class="page-title-area bg-8">
			<div class="container">
				<div class="page-title-content">
					<h2>{{ __('register.welcome') }}</h2>
					
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Log In Area -->
        <section class="user-area-style ptb-100">
	@yield('content')
</section>

		<!-- End Log In Area -->

		<!-- Start Footer Top Area -->
		
		<!-- End Footer Top Area -->

		<!-- Start Footer Bottom Area -->
		
		<!-- End Footer Bottom Area -->
		
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class='bx bx-chevrons-up'></i>
			<i class='bx bx-chevrons-up'></i>
		</div>
		<!-- End Go Top Area -->
		

        <!-- Jquery-3.5.1.Slim.Min.JS -->
        <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
        <!-- Popper JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
		<script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.js"></script>
        <!-- Owl Magnific JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
		<script src="assets/js/jquery.nice-select.min.js"></script>
		<!-- Parallax JS --> 
		<script src="assets/js/parallax.min.js"></script>
		<!-- Appear JS --> 
        <script src="assets/js/jquery.appear.js"></script>
		<!-- Odometer JS --> 
		<script src="assets/js/odometer.min.js"></script>
		<!-- Form Validator JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="assets/js/contact-form-script.js"></script>
		<!-- Ajaxchimp JS -->
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Custom JS -->
		<script src="assets/js/custom.js"></script>
    </body>

<!-- Mirrored from templates.hibootstrap.com/eduon/default/log-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Aug 2020 05:28:56 GMT -->
</html>