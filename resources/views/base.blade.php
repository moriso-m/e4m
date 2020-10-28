<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <title>E4M</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="webthemez.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/slick-carousel/slick.css') }}">
	<link href="{{ asset('vendors/ace-responsive-menu/ace-responsive-menu.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('vendors/aos/aos.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
	@yield('css')	
  </head>
  <body>
  <div class="hidden-xs hidden-sm nav-top bg-primary py-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="nav-top-contact">
                <!-- Social links -->
                <ul class="list-inline text-center text-md-left mb-0">
                  <li class="list-inline-item mx-2" ><i class="fa fa-phone"></i> +2547-92-938-363</li>
                  <li class="list-inline-item mx-2" ><i class="fa fa-envelope" aria-hidden="true"></i> info@e4missions.com</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 text-right">
                 <ul class="list-inline text-center text-md-right mb-0">
				  <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
					<a target="_blank" href="https://www.facebook.com/webthemez">
					  <i class="fab fa-facebook"></i>
					</a>
				  </li>
				  <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
					<a target="_blank" href="https://www.instagram.com">
					  <i class="fab fa-instagram"></i>
					</a>
				  </li>
				  <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
					<a target="_blank" href="https://twitter.com/webthemez">
					  <i class="fab fa-twitter"></i>
					</a>
				  </li>
				  <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Dribbble">
					<a target="_blank" href="https://dribbble.com">
					  <i class="fab fa-dribbble"></i>
					</a>
				  </li>
				</ul>
            </div>
          </div>
        </div>
      </div>
    <!-- Header -->
    <header class="main-header">
	<div class="container">
			<div class="logo">
					<a href="/">
						 <h2>
							 <span>E4Mission</span>
							classic suppliers</h2>
					  </a>
				</div>
			 <!-- Navbar -->
				<nav class="mainNav">
				<!-- Menu Toggle btn-->
				<div class="menu-toggle">
					<h3>Menu</h3>
					<button type="button" id="menu-btn">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Responsive Menu Structure-->
				<!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
				<ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
					 <li>
						<a href="/" class="active">
							<span class="title">Home</span>
						</a>
					</li>
					 <li>
						<a href="/about">
							<span class="title">About Us</span>
						</a>
					</li>
					 <li>
						<a href="/services">
							<span class="title">Services</span>
						</a>
					</li>
					 <li>
						<a href="/products">
							<span class="title">Products</span>
						</a>
					</li>
					<li class="last ">
						<a href="/contact">
							<span class="title">Contact Us</span>
						</a>
					</li>
				</ul>
				</nav>
				</div>
    </header>
      <!-- End Navbar -->
      @yield('content')
    <!-- End Header -->

    <!-- Footer -->
<footer class="wt-section bg-dark main-footer">
<div class="container">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4 col-12 col mb-4">
<h5 class="mb-4">Reach us</h5>

<p><i class="fa fa-location-arrow mr-2"></i> #Tom Mboya street, Nairobi </p>
<p><i class="fa fa-phone mr-2"></i>  +254792-938-363  </p>
<p><i class="fa fa fa-envelope mr-2"></i> info@e4missions.com  </p>


</div>


<div class="col-sm-4 col-md  col-6 col mb-4">
<h5 class="mb-4">Site links</h5>

<ul class="list-inline">
<li class="list-block-item mx-2"><a href="#">Home</a></li>
<li class="list-block-item mx-2"><a href="#">About Us</a></li>
<li class="list-block-item mx-2"><a href="#">Services</a></li>
<li class="list-block-item mx-2"><a href="#">Portfolio</a></li>
<li class="list-block-item mx-2"><a href="#">Pricing</a></li>
</ul>

</div>


<div class="col-sm-4 col-md  col-6 col mb-4">
<h5 class="mb-4">Quick links</h5>

<ul class="list-inline">
<li class="list-block-item mx-2"><a href="#">Blog</a></li>
<li class="list-block-item mx-2"><a href="#">Contact Us</a></li>
<li class="list-block-item mx-2"><a href="#">Privacy Policy</a></li>
<li class="list-block-item mx-2"><a href="http://webthemez.com">Terms & Conditions</a></li>
</ul>

</div>


<div class="col-sm-4 col-md  col-12 col mb-4">
<h5 class="mb-4">Follow us</h5>
<ul class="social_footer_ul list-inline text-left mb-0">
<li class="list-inline-item mx-2"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li class="list-inline-item mx-2"><a href="#"><i class="fab fa-twitter"></i></a></li>
<li class="list-inline-item mx-2"><a href="#"><i class="fab fa-linkedin"></i></a></li>
<li class="list-inline-item mx-2"><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-md-12 pt-4">

<p class="text-center copyrights"><a class="text-white" href="https://wa.me/254723831989">Designed by</a> Mufasa labs <br>© All Rights Reserved</p>
</div>
</div>
</div>
</footer>
    <!-- End Footer -->

    <!-- JS Script Files -->
    <!-- Global Vendor -->
    <script src="{{ asset('vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery.migrate.min.js') }}"></script>
    <script src="{{ asset('vendors/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('vendors/aos/aos.js') }}"></script>

    <!-- Components Vendor  -->
    <script src="{{ asset('vendors/slick-carousel/slick.min.js') }}"></script>
	   <script src="{{ asset('vendors/ace-responsive-menu/ace-responsive-menu.js') }}"></script>

    <!--Plugin Initialize-->
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('vendors/carousel.js') }}"></script>

	<!-- END JAVASCRIPTS -->
	@stack('scripts')
  </body>
</html>
