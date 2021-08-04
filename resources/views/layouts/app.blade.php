<!doctype html>
<html lang="{{       $locale = App::currentLocale(); }}" dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">
    
<!-- Mirrored from templates.hibootstrap.com/eduon/default/log-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Aug 2020 05:28:56 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS --> 
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		<!-- Owl Theme Default CSS --> 
		<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
		<!-- Owl Carousel CSS --> 
		<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
		<!-- Owl Magnific CSS --> 
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
		<!-- Animate CSS --> 
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
		<!-- Boxicons CSS --> 
		<link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css')}}">  
		<!-- Flaticon CSS --> 
		<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
		<!-- Meanmenu CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css')}}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css')}}">
		<!-- Odometer CSS-->
		<link rel="stylesheet" href="{{ asset('assets/css/odometer.css')}}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">
		<!-- Title -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Comming Soon') }}...</title>
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
			{{-- <div class="mobile-nav">
				<a href="{{  url('/') }}" class="logo">
					<img src="{{ asset('assets/img/efa/efalogo.png')}}" width="150" height="auto" alt="Logo">
				</a>

 
					<!-- Links -->
 
					<!-- Links -->
				
 				
			</div> --}}

			<!-- Menu For Desktop Device -->
			<div class="">
				<div class="container-fluid ">
					{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="{{  url('/') }}">
							<img src="{{ asset('assets/img/efa/efalogo.png')}}" width="200" height="auto" alt="Logo">
						</a>
						{{-- <div class="collapse navbar-collapse mean-menu">
							
							
							<!-- Start Other Option -->
							<div class="others-option">
								

                                @php $locale = session()->get('locale'); @endphp
                                
								
								<div class="register">
									<a href="{{ url('lang/ar')}}" class="default-btn">
										Arabic
									</a>
								</div>	
								<div class="register">
									<a href="{{ url('lang/en')}}" class="default-btn">
										English
									</a>
								</div>	
							</div>
 							
							
						</div> --}}

						{{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						  </button>
						  <div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
							  <li class="nav-item active">
								<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="#">Features</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="#">Pricing</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
							  </li>
							</ul>
						  </div>
						
					</nav>   --}}

					<nav class="navbar navbar-expand-lg navbar-light ">
						<a class="navbar-brand" href="{{  url('/') }}">
							<img src="{{ asset('assets/img/efa/efalogo.png')}}" width="200" height="auto" alt="Logo">
						</a>						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						  <span class="">English/عربى</span>
						</button>
						@php $locale = session()->get('locale'); @endphp
						<div class=" collapse navbar-collapse" id="navbarNav">
						  <ul class=" navbar-nav" style="padding-left: 100px; margin-top:-60px">
							 
							<li class="nav-item register">
							  <a class="nav-link" href="{{ url('lang/en')}}">English</a>
							</li>
							<li class="nav-item register">
							  <a class="nav-link" href="{{ url('lang/ar')}}">عربى</a>
							</li>
						 
						  </ul>
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
        <script src="{{ asset('assets/js/jquery-3.5.1.slim.min.js') }} "></script>
        <!-- Popper JS -->
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Meanmenu JS -->
		<script src="{{ asset('assets/js/jquery.meanmenu.js')}}"></script>
        <!-- Wow JS -->
        <script src="{{ asset('assets/js/wow.min.js')}}"></script>
        <!-- Owl Carousel JS -->
		<script src="{{ asset('assets/js/owl.carousel.js')}}"></script>
        <!-- Owl Magnific JS -->
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Nice Select JS -->
		<script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
		<!-- Parallax JS --> 
		<script src="{{ asset('assets/js/parallax.min.js')}}"></script>
		<!-- Appear JS --> 
        <script src="{{ asset('assets/js/jquery.appear.js')}}"></script>
		<!-- Odometer JS --> 
		<script src="{{ asset('assets/js/odometer.min.js')}}"></script>
		<!-- Form Validator JS -->
		<script src="{{ asset('assets/js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
		<script src="{{ asset('assets/js/contact-form-script.js')}}"></script>
		<!-- Ajaxchimp JS -->
		<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <!-- Custom JS -->
		<script src="{{ asset('assets/js/custom.js')}}"></script>
		

		<script>
$(document).ready(function() {
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div class="col-12"><div class="form-group"><textarea name="branch[]" class="form-control" id="branch" cols="30" rows="10" required data-error="Write your message"></textarea><div class="help-block with-errors"></div></div> <a href="#" class="remove_field">Remove</a></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});
			</script>
    </body>

<!-- Mirrored from templates.hibootstrap.com/eduon/default/log-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Aug 2020 05:28:56 GMT -->
</html>