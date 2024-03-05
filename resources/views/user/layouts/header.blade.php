<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 11:26:47 GMT -->

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="theme-color" content="#ec0000">
    <meta name="description" content=" Magazine">
    <meta name="keywords" content="Article, Blog, Business, Fashion, Magazine, Music, News, News Magazine, Newspaper, Politics, Travel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Magazine- {{$page}}</title>    <!--Favicon-->
  	<link rel="icon" href="{{ config('app.user_url') }}images/logo.png" type="image/x-icon">
	<!-- FAVICONS ICON -->

	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ config('app.user_url') }}vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="{{ config('app.user_url') }}icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{ config('app.user_url') }}vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="{{ config('app.user_url') }}vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="{{ config('app.user_url') }}css/style.css">
	
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

</head>	
<body>

<div class="page-wraper">
	<div id="loading-area" class="preloader-wrapper-1">
		<div class="preloader-inner">
			<div class="preloader-shade"></div>
			<div class="preloader-wrap"></div>
			<div class="preloader-wrap wrap2"></div>
			<div class="preloader-wrap wrap3"></div>
			<div class="preloader-wrap wrap4"></div>
			<div class="preloader-wrap wrap5"></div>
		</div> 
	</div>
	
	<!-- Header -->
	<header class="site-header mo-left header style-1">
		<!-- Main Header -->
		<div class="header-info-bar">
			<div class="container clearfix">
				<!-- Website Logo -->
				<div class="logo-header logo-dark">
					<a href="{{route('user.index')}}"><img src="{{ config('app.user_url') }}images/logo1.png" alt="logo"></a>
				</div>
				
				<!-- EXTRA NAV -->
				<div class="extra-nav">
					<div class="extra-cell">
						<ul class="navbar-nav header-right">							
							<li class="nav-item dropdown profile-dropdown ms-4">
    @auth
    <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ config('app.user_url') }}images/logo.png" alt="/">
        <div class="profile-info">
            <h6 class="title">{{ Auth::user()->name }}</h6>
            <span>{{ Auth::user()->email }}</span>
        </div>
    </a>
    <div class="dropdown-menu py-0 dropdown-menu-end">
        <div class="dropdown-header">
            <h6 class="m-0">{{ Auth::user()->name }}</h6>
        </div>
        <div class="dropdown-footer">
            <a class="btn btn-primary w-100 btnhover btn-sm" href="{{ route('logout') }}">Log Out</a>
        </div>
    </div>
    @else
    <a class="nav-link" href="{{ route('user.login') }}">
        <img src="{{ config('app.user_url') }}images/logo.png" alt="/">
        <div class="profile-info">
            <h6 class="title">Login</h6>
            <span>Click here to log in</span>
        </div>
    </a>
    @endauth
</li>


						</ul>
					</div>
				</div>
				
				<!-- header search nav -->
				
			</div>
		</div>
		<!-- Main Header End -->
		
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header logo-dark">
						<a href="index.html"><img src="{{ config('app.user_url') }}images/logo.png" alt="logo"></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- EXTRA NAV -->
				 	<div class="extra-nav">
						<div class="extra-cell">
							<a href="{{route('contact')}}" class="btn btn-primary btnhover">Get In Touch</a>	
						</div>
					</div> 
					
					<!-- Main Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header logo-dark">
							<a href="#"><img src="{{ config('app.user_url') }}images/logo.png" alt=""></a>
						</div>
						<form class="search-input">
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
								<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
							</div>
						</form>
						<ul class="nav navbar-nav">
							<li class=""><a href="/"><span>Home</span></a>
								<!-- <ul class="sub-menu">
									<li><a href="index.html">Home 1</a></li>
									<li><a href="index-2.html">Home 2</a></li>
								</ul> -->
							</li>
							<li><a href="{{route('aboutus')}}"><span>About Us</span></a></li>
							<li><a href="{{route('userpricing')}}"><span>Subscriptions</span></a></li>
							@auth

									@guest
									<li><a href="{{route('user.login')}}"><span>My Account</span></a></li>
									@else
									<li><a href="{{route('profile')}}"><span>My Account</span></a></li>
									@endguest
           
		
						
							<li><a href="{{route('issueslisting')}}"><span>My Issues</span></a></li>
							<li><a href="{{route('wishlists')}}"><span>Wishlist</span></a></li>
							@endauth

							<li><a href="{{route('contact')}}"><span>Contact Us</span></a></li>
							
						</ul>
						<div class="dz-social-icon">
							<ul>
								<li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/dexignzone"></a></li>
								<li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/dexignzones"></a></li>
								<li><a class="fab fa-linkedin-in" target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
								<li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/website_templates__/"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
	</header>
	<!-- Header End -->

	@php

	$data=App\Models\Addvertismnet::first();
	@endphp

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

@if(!empty($data))

    <!--Modal: modalDiscount-->
    <div class="modal fade right" id="modalDiscount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true" data-backdrop="true">
      <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <p class="heading">Discount offer:
              <strong>{{$data->name}}</strong>
            </p>

            <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>

          <!--Body-->
          <div class="modal-body">

            <div class="row">
              <div class="col-3">
                <p></p>
                <p class="text-center">
					<!-- <img src="https://divine.alp-ts.in/public/admin/magazine/front/{{$data->image_url}}" style="height: 70px;"> -->
                  <i class="fas fa-gift fa-4x"></i>
                </p>
              </div>
<br>
              <div class="col-9">
                <p>{{$data->description}}</p>

              </div>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer flex-center">
            <a href="{{$data->site_url}}" class="btn btn-danger">Get it
              now
             
            </a>
            <a type="button" class="btn btn-outline-danger  close waves-effect" data-dismiss="modal">No, thanks</a>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!--Modal: modalDiscount-->

	@endif
	<script>

		
    $('.close').click(function() {
      // Hide the modal
      $('#modalDiscount').modal('hide');
    });


    function displayModal() {
      $('#modalDiscount').modal('show');
    }

    // Delay the display of the modal after 10 seconds
    // setTimeout(displayModal, 10000);
  </script>