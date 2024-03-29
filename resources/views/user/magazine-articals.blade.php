@include('user.layouts.header')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<style>
    .image-container {
        width: 225px;
        height: 225px;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<script>
	$('#exampleModal').on('shown.bs.modal', function () {
  $('#exampleModal').trigger('focus')
})
</script>
	<div class="page-content bg-white">

		<!--Swiper Banner Start -->
		<div class="main-slider style-1 slider-white">
			<div class="main-swiper">
				<div class="swiper-wrapper">



				
					<div class="swiper-slide bg-light" style="background-image: url(images/background/waveElement2.png);">
						<div class="container">
							<div class="banner-content">
								<div class="row">
									<div class="col-md-6">
										<div class="swiper-content">
											<div class="content-info">
												<h6 class="sub-title" data-swiper-parallax="-10">BEST MANAGEMENT </h6>
												<h1 class="title mb-0" data-swiper-parallax="-20">Think and Grow Rich</h1>
												<ul class="dz-tags" data-swiper-parallax="-30">
													<li><a href="javascript:void(0);">Napoleon Hill</a></li>
													<li><a href="javascript:void(0);">Business & Strategy</a></li>
												</ul>
												<p class="text mb-0" data-swiper-parallax="-40">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
												<div class="price" data-swiper-parallax="-50">
													<span class="price-num">$17.2</span>
													<del>$15.25</del>
													<span class="badge badge-danger">15% OFF</span>
												</div>
												<div class="content-btn" data-swiper-parallax="-60">
													<a class="btn btn-primary btnhover" href="books-grid-view.html">Buy Now</a>
													<a class="btn btn-outline-secondary btnhover ms-4" href="books-detail.html">See Details</a>
												</div>
											</div>
											<div class="partner">
												<p>Our partner</p>
												<div class="brand-logo">
													<img src="images/partner/partner-1.png" alt="client">
													<img  class="mid-logo" src="https://divine.alp-ts.in/public/user/images/partner/partner-2.png" alt="client">
													<img src="https://divine.alp-ts.in/images/partner/partner-3.png" alt="client">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="banner-media" data-swiper-parallax="-100">
											<img src="images/banner/banner-media3.png" alt="media">
											<!-- <img src="{{ config('app.category_url') . '/front/' . $magazine->frontimage }}" alt="media"> -->
										</div>
										<img class="pattern" src="images/Group.png" data-swiper-parallax="-100" alt="dots">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide bg-light" style="background-image: url(images/background/waveelement2.png);">
						<div class="container">
							<div class="banner-content">
								<div class="row">
									<div class="col-md-6">
										<div class="swiper-content">
											<div class="content-info">
												<h6 class="sub-title" data-swiper-parallax="-10">BEST SELLER</h6>
												<h1 class="title mb-0" data-swiper-parallax="-20">Pushing Clouds</h1>
												<ul class="dz-tags" data-swiper-parallax="-30">
													<li><a href="javascript:void(0);">Napoleon Hill</a></li>
													<li><a href="javascript:void(0);">Business & Strategy</a></li>
												</ul>
												<p class="text mb-0" data-swiper-parallax="-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
												<div class="price" data-swiper-parallax="-50">
													<span class="price-num">$9.5</span>
													<del>$12.0</del>
													<span class="badge badge-danger">20% OFF</span>
												</div>
												<div class="content-btn" data-swiper-parallax="-60">
													<a class="btn btn-primary btnhover" href="books-grid-view.html">Buy Now</a>
													<a class="btn btn-outline-secondary btnhover ms-4" href="books-detail.html">See Details</a>
												</div>
											</div>
											<div class="partner">
												<p>Our partner</p>
												<div class="brand-logo">
													<img src="https://divine.alp-ts.in/public/images/partner/partner-1.png" alt="client">
													<img  class="mid-logo" src="https://divine.alp-ts.in/images/partner/partner-2.png" alt="client">
													<img src="images/partner/partner-3.png" alt="client">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="banner-media" data-swiper-parallax="-100">
											<img src="images/banner/banner-media4.png" alt="media">
										</div>
										<img class="pattern" src="images/Group.png" data-swiper-parallax="-100" alt="dots">
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="container swiper-pagination-wrapper">
					<div class="swiper-pagination-five"></div>
				</div>
			</div>
			<div class="swiper main-swiper-thumb">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="books-card">
							<div class="dz-media">
								<img src="images/books/book16.png" alt="book">
							</div>
							<div class="dz-content">
								<h5 class="title mb-0">Think and Grow Rich</h5>
								<div class="dz-meta">
									<ul>
										<li>by Napoleon Hill</li>
									</ul>
								</div>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">$9.5</span>
									</div>
									<div class="rate">
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="books-card">
							<div class="dz-media">
								<img src="images/books/grid/book9.jpg" alt="book">
							</div>
							<div class="dz-content">
								<h5 class="title mb-0">Pushing Clouds</h5>
								<div class="dz-meta">
									<ul>
										<li>by Jamet Sigh</li>
									</ul>
								</div>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">$5.7</span>
									</div>
									<div class="rate">
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-muted"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="books-card">
							<div class="dz-media">
								<img src="images/books/book16.png" alt="book">
							</div>
							<div class="dz-content">
								<h5 class="title mb-0">Think and Grow Rich</h5>
								<div class="dz-meta">
									<ul>
										<li>by Napoleon Hill</li>
									</ul>
								</div>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">$9.5</span>
									</div>
									<div class="rate">
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="books-card">
							<div class="dz-media">
								<img src="images/books/grid/book9.jpg" alt="book">
							</div>
							<div class="dz-content">
								<h5 class="title mb-0">Pushing Clouds</h5>
								<div class="dz-meta">
									<ul>
										<li>by Jamet Sigh</li>
									</ul>
								</div>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">$5.7</span>
									</div>
									<div class="rate">
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-yellow"></i>
										<i class="flaticon-star text-muted"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Swiper Banner End-->


		<section class="content-inner-1 overlay-white-middle">
			<div class="container">
				<div class="row about-style1 align-items-center">
					<div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.1s">
						<div class="row sp10 about-thumb">
							<div class="col-sm-6 aos-item ">
								<div class="split-box">
									<div>
										<img class="m-b30" src="images/about/about1.jpg" alt="/">
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="split-box ">
									<div>
										<img class="m-b20 aos-item" src="images/about/about2.jpg" alt="/">
									</div>
								</div>
								<div class="exp-bx aos-item">
									<div class="exp-head">
										<div class="counter-num">
											<h2><span class="counter">50</span><small>+</small></h2>
										</div>
										<h6 class="title">Years of Experience</h6>
									</div>
									<div class="exp-info">
										<ul class="list-check primary">
											<li>Comics & Graphics</li>
											<li>Biography</li>
											<li>Literary Collections</li>
											<li>Children Fiction</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
						<div class="about-content px-lg-4">
							<div class="section-head style-1">
								<h2 class="title">Bookland Is Best Choice For Learners</h2>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration which don’t look even slightly believable. It Is A Long Established Fact That A Reader Will Be Distracted</p>
							</div>
							<a href="contact-us.html" class="btn btn-primary shadow-primary btnhover">Contact Us</a>
						</div>
					</div>
				</div>
				<!--Client Swiper -->
				<div class="swiper client-swiper mt-5">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img src="images/client/client1.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client2.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client3.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client4.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client5.svg" alt="client"></div>
					</div>
				</div>
			</div>
		</section>	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
		
		<section class="content-inner-1 bg-grey reccomend ">
	
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Articels For You</h2>
					<p>Enjoy every single issue and never miss out on the exciting articles and life changing testimonies of how God is blessing His people. </p>
				</div>
				<!-- Swiper -->
				<div class="swiper-container swiper-two">
					<div class="swiper-wrapper">
					@foreach($articles as $article)
						<div class="swiper-slide">
							<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media image-container">
									@if ($article->image)
									<img src="https://divine.alp-ts.in/public/artical/images/{{ $article->image }}" alt="article-image">
										<!-- Provide a placeholder image if no image is available -->
										
									@endif								

								</div>
								<div class="dz-content">
									<h4 class="title">{{ $article->title }}</h4>
									<audio controls>
							<source src="audio/{{ $article->audio }}" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
									<!-- <span class="price">{{ $article->description }}</span> -->
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  View Articel
</button>
								</div>
							</div>
						</div>
					@endforeach	
						
					
					</div>
				</div>
			</div>
		</section>
		
		<!-- icon-box1 -->
		<section class="content-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="icon-bx-wraper style-1 m-b30 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="flaticon-power icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Quick Delivery</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="icon-bx-wraper style-1 m-b30 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="flaticon-shield icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Secure Payment</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="icon-bx-wraper style-1 m-b30 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="flaticon-like icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Best Quality</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="icon-bx-wraper style-1 m-b30 text-center">
							<div class="icon-bx-sm m-b10">
								<i class="flaticon-star icon-cell"></i>
							</div>
							<div class="icon-content">
								<h5 class="dz-title m-b10">Return Guarantee</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- icon-box1 End-->

		<!--icon-box3 section-->
		<section class="content-inner-1 bg-light">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Our Mission</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="icon-bx-wraper style-3 m-b30">
							<div class="icon-lg m-b20">
								<i class="flaticon-open-book-1 icon-cell"></i>
							</div>
							<div class="icon-content">
								<h4 class="title">Best Bookstore</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<a href="about-us.html">Learn More <i class="fa-solid fa-angles-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="icon-bx-wraper style-3 m-b30">
							<div class="icon-lg m-b20">
								<i class="flaticon-exclusive icon-cell"></i>
							</div>
							<div class="icon-content">
								<h4 class="title">Trusted Seller</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<a href="about-us.html">Learn More <i class="fa-solid fa-angles-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
						<div class="icon-bx-wraper style-3 m-b30">
							<div class="icon-lg m-b20">
								<i class="flaticon-store icon-cell"></i>
							</div>
							<div class="icon-content">
								<h4 class="title">Expand Store</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<a href="about-us.html">Learn More <i class="fa-solid fa-angles-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Book Sale -->
		<section class="content-inner-1">
			<div class="container">
				<div class="section-head book-align">
					<h2 class="title mb-0">Books on Sale</h2>
					<div class="pagination-align style-1">
						<div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
						<div class="swiper-pagination-two"></div>
						<div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
					</div>
				</div>
				<div class="swiper-container books-wrapper-3 swiper-four">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media">
									<img src="images/books/grid/book5.jpg" alt="book">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="books-grid-view.html">Take Out Tango</a></h5>
									<ul class="dz-tags">
										<li><a href="books-grid-view.html">SPORTS,</a></li>
										<li><a href="books-grid-view.html">DRAMA</a></li>
									</ul>
									<div class="book-footer">
										<div class="rate">
											<i class="flaticon-star"></i> 6.8
										</div>
										<div class="price">
											<span class="price-num">$9.5</span>
											<del>$12.0</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="books-card style-3 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<img src="images/books/grid/book11.jpg" alt="book">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="books-grid-view.html">The Missadventure</a></h5>
									<ul class="dz-tags">
										<li><a href="books-grid-view.html">SPORTS,</a></li>
										<li><a href="books-grid-view.html">DRAMA</a></li>
									</ul>
									<div class="book-footer">
										<div class="rate">
											<i class="flaticon-star"></i> 6.8
										</div>
										<div class="price">
											<span class="price-num">$9.5</span>
											<del>$12.0</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="books-card style-3 wow fadeInUp" data-wow-delay="0.3s">
								<div class="dz-media">
									<img src="images/books/grid/book7.jpg" alt="book">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="books-grid-view.html">Seconds [PART 1]</a></h5>
									<ul class="dz-tags">
										<li><a href="books-grid-view.html">SPORTS,</a></li>
										<li><a href="books-grid-view.html">DRAMA</a></li>
									</ul>
									<div class="book-footer">
										<div class="rate">
											<i class="flaticon-star"></i> 6.8
										</div>
										<div class="price">
											<span class="price-num">$9.5</span>
											<del>$12.0</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="books-card style-3 wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<img src="images/books/grid/book12.jpg" alt="book">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="books-grid-view.html">The Missadventure</a></h5>
									<ul class="dz-tags">
										<li><a href="books-grid-view.html">SPORTS,</a></li>
										<li><a href="books-grid-view.html">DRAMA</a></li>
									</ul>
									<div class="book-footer">
										<div class="rate">
											<i class="flaticon-star"></i> 6.8
										</div>
										<div class="price">
											<span class="price-num">$9.5</span>
											<del>$12.0</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="books-card style-3 wow fadeInUp" data-wow-delay="0.5s">
								<div class="dz-media">
									<img src="images/books/grid/book15.jpg" alt="book">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="books-grid-view.html">Terrible Madness</a></h5>
									<ul class="dz-tags">
										<li><a href="books-grid-view.html">SPORTS,</a></li>
										<li><a href="books-grid-view.html">DRAMA</a></li>
									</ul>
									<div class="book-footer">
										<div class="rate">
											<i class="flaticon-star"></i> 6.8
										</div>
										<div class="price">
											<span class="price-num">$9.5</span>
											<del>$12.0</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="books-card style-3 wow fadeInUp" data-wow-delay="0.6s">
								<div class="dz-media">
									<img src="images/books/grid/book3.jpg" alt="book">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="books-grid-view.html">Battle Drive</a></h5>
									<ul class="dz-tags">
										<li><a href="books-grid-view.html">SPORTS,</a></li>
										<li><a href="books-grid-view.html">DRAMA</a></li>
									</ul>
									<div class="book-footer">
										<div class="rate">
											<i class="flaticon-star"></i> 6.8
										</div>
										<div class="price">
											<span class="price-num">$9.5</span>
											<del>$12.0</del>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Book Sale End -->

		<!-- Testimonial2 -->
		<section class="content-inner bg-grey testimonial-wrapper-2">
			<div class="container">
				<div class="testimonial">
					<div class="section-head text-center">
						<h2 class="title">What Customer’s Said</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="swiper-container testimonial-swiper-2">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="testimonial-2">
								<i class="fa-solid fa-quote-right test-quotes"></i>
								<img src="images/testimonial/wave.png" class="pattern" alt="/">
								<div class="testimonial-pic">
									<img src="images/testimonial/testimonial5.jpg" alt="/">
								</div>
								<div class="testimonial-info">
									<p class="testimonial-text">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur
									</p>
									<div class="testimonial-detail">
										<div class="clearfix">
											<h5 class="testimonial-name m-t10 m-b5">Johnson Simanungkalit</h5>
											<span class="testimonial-position">faculty of Economics 2022</span>
										</div>
										<div class="dz-rating-bar">
											<ul class="dz-rating">
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-muted"></i></li>
											</ul>
											<span class="rate">4.8</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-2">
								<i class="fa-solid fa-quote-right test-quotes"></i>
								<img src="images/testimonial/wave.png" class="pattern" alt="/">
								<div class="testimonial-pic">
									<img src="images/testimonial/testimonial6.jpg" alt="/">
								</div>
								<div class="testimonial-info">
									<p class="testimonial-text">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur
									</p>
									<div class="testimonial-detail">
										<div class="clearfix">
											<h5 class="testimonial-name m-t10 m-b5">Johnson Simanungkalit</h5>
											<span class="testimonial-position">faculty of Economics 2022</span>
										</div>
										<div class="dz-rating-bar">
											<ul class="dz-rating">
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-muted"></i></li>
											</ul>
											<span class="rate">4.8</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-2">
								<i class="fa-solid fa-quote-right test-quotes"></i>
								<img src="images/testimonial/wave.png" class="pattern" alt="/">
								<div class="testimonial-pic">
									<img src="images/testimonial/testimonial5.jpg" alt="/">
								</div>
								<div class="testimonial-info">
									<p class="testimonial-text">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur
									</p>
									<div class="testimonial-detail">
										<div class="clearfix">
											<h5 class="testimonial-name m-t10 m-b5">Johnson Simanungkalit</h5>
											<span class="testimonial-position">faculty of Economics 2022</span>
										</div>
										<div class="dz-rating-bar">
											<ul class="dz-rating">
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-muted"></i></li>
											</ul>
											<span class="rate">4.8</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-2">
								<i class="fa-solid fa-quote-right test-quotes"></i>
								<img src="images/testimonial/wave.png" class="pattern" alt="/">
								<div class="testimonial-pic">
									<img src="images/testimonial/testimonial6.jpg" alt="/">
								</div>
								<div class="testimonial-info">
									<p class="testimonial-text">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur
									</p>
									<div class="testimonial-detail">
										<div class="clearfix">
											<h5 class="testimonial-name m-t10 m-b5">Johnson Simanungkalit</h5>
											<span class="testimonial-position">faculty of Economics 2022</span>
										</div>
										<div class="dz-rating-bar">
											<ul class="dz-rating">
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-yellow"></i></li>
												<li><i class="flaticon-star text-muted"></i></li>
											</ul>
											<span class="rate">4.8</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-pagination-four"></div>
				</div>
			</div>

		</section>
		<!-- Testimonial2 End -->

		<!-- Special Offer-->
		<section class="content-inner-1">
			<div class="container">
				<div class="section-head book-align">
					<h2 class="title mb-0">Special Offers</h2>
					<div class="pagination-align style-1">
						<div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
						<div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
					</div>
				</div>
				<div class="swiper-container book-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media">
									<a href="books-detail.html"><img src="images/blog/blog5.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<h4 class="dz-title"><a href="books-detail.html">SECONDS [Part I]</a></h4>
									<div class="dz-meta">
										<ul class="dz-tags">
											<li><a href="books-detail.html">BIOGRAPHY</a></li>
											<li><a href="books-detail.html">THRILLER</a></li>
											<li><a href="books-detail.html">HORROR</a></li>
										</ul>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<div class="bookcard-footer">
										<a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
										<div class="price-details">
											$18,78 <del>$25</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<a href="books-detail.html"><img src="images/blog/blog6.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<h4 class="dz-title"><a href="books-detail.html">Terrible Madness</a></h4>
									<div class="dz-tags">
										<ul>
											<li><a href="books-detail.html">BIOGRAPHY</a></li>
											<li><a href="books-detail.html">THRILLER</a></li>
											<li><a href="books-detail.html">HORROR</a></li>
										</ul>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<div class="bookcard-footer">
										<a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
										<div class="price-details">
											$18,78 <del>$25</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.3s">
								<div class="dz-media">
									<a href="books-detail.html"><img src="images/blog/blog7.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<h4 class="dz-title"><a href="books-detail.html">REWORK</a></h4>
									<div class="dz-tags">
										<ul>
											<li><a href="books-detail.html">BIOGRAPHY</a></li>
											<li><a href="books-detail.html">THRILLER</a></li>
											<li><a href="books-detail.html">HORROR</a></li>
										</ul>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<div class="bookcard-footer">
										<a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
										<div class="price-details">
											$18,78 <del>$25</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<a href="books-detail.html"><img src="images/blog/blog5.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<h4 class="dz-title"><a href="books-detail.html">SECONDS [Part I]</a></h4>
									<div class="dz-tags">
										<ul>
											<li><a href="books-detail.html">BIOGRAPHY</a></li>
											<li><a href="books-detail.html">THRILLER</a></li>
											<li><a href="books-detail.html">HORROR</a></li>
										</ul>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<div class="bookcard-footer">
										<a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
										<div class="price-details">
											$18,78 <del>$25</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.5s">
								<div class="dz-media">
									<a href="books-detail.html"><img src="images/blog/blog6.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<h4 class="dz-title"><a href="books-detail.html">Terrible Madness</a></h4>
									<div class="dz-tags">
										<ul>
											<li><a href="books-detail.html">BIOGRAPHY</a></li>
											<li><a href="books-detail.html">THRILLER</a></li>
											<li><a href="books-detail.html">HORROR</a></li>
										</ul>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<div class="bookcard-footer">
										<a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
										<div class="price-details">
											$18,78 <del>$25</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.6s">
								<div class="dz-media">
									<a href="books-detail.html"><img src="images/blog/blog7.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<h4 class="dz-title"><a href="books-detail.html">REWORK</a></h4>
									<div class="dz-tags">
										<ul>
											<li><a href="books-detail.html">BIOGRAPHY</a></li>
											<li><a href="books-detail.html">THRILLER</a></li>
											<li><a href="books-detail.html">HORROR</a></li>
										</ul>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<div class="bookcard-footer">
										<a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
										<div class="price-details">
											$18,78 <del>$25</del>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Special Offer End -->

		<!-- Pricing Table -->
		<section class="content-inner bg-light">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Our Pricing</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
				<div class="row pricingtable-wraper">
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="pricingtable-wrapper mt-0 style-1 m-b30">
							<div class="pricingtable-inner">
								<div class="pricingtable-title">
									<h3 class="title">Basic Plan</h3>
								</div>
								<div class="pricingtable-price">
									<h2 class="pricingtable-bx">$99<small class="pricingtable-type">/Month</small></h2>
								</div>
								<p class="text">Aliquam dui lacus, lobortis quis sapien non.</p>
								<ul class="pricingtable-features">
									<li>Graphic Design </li>
									<li>Web Design</li>
									<li>UI/UX</li>
									<li>HTML/CSS</li>
									<li>SEO Marketing</li>
									<li>Business Analysis</li>
								</ul>
								<div class="pricingtable-footer">
									<a href="pricing.html" class="btn btn-primary btnhover3">Start Now <i class="fa fa-angle-right m-l10"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="pricingtable-wrapper  mt-0 style-1 m-b30">
							<div class="pricingtable-inner">
								<div class="pricingtable-title">
									<h3 class="title">Standart Plan</h3>
								</div>
								<div class="pricingtable-price">
									<h2 class="pricingtable-bx">$199<small class="pricingtable-type">/Month</small></h2>
								</div>
								<p class="text">Aliquam dui lacus, lobortis quis sapien non.</p>
								<ul class="pricingtable-features">
									<li>Graphic Design </li>
									<li>Web Design</li>
									<li>UI/UX</li>
									<li>HTML/CSS</li>
									<li>SEO Marketing</li>
									<li>Business Analysis</li>
								</ul>
								<div class="pricingtable-footer">
									<a href="pricing.html" class="btn btn-primary btnhover3">Start Now <i class="fa fa-angle-right m-l10"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="pricingtable-wrapper  mt-0 style-1 m-b30 ">
							<div class="pricingtable-inner">
								<div class="pricingtable-title">
									<h3 class="title">Premium Plan</h3>
								</div>
								<div class="pricingtable-price">
									<h2 class="pricingtable-bx">$149<small class="pricingtable-type">/Month</small></h2>
								</div>
								<p class="text">Aliquam dui lacus, lobortis quis sapien non.</p>
								<ul class="pricingtable-features">
									<li>Graphic Design </li>
									<li>Web Design</li>
									<li>UI/UX</li>
									<li>HTML/CSS</li>
									<li>SEO Marketing</li>
									<li>Business Analysis</li>
								</ul>
								<div class="pricingtable-footer">
									<a href="pricing.html" class="btn btn-primary btnhover3">Start Now <i class="fa fa-angle-right m-l10"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Feature Box -->
		<section class="content-inner">
			<div class="container">
				<div class="row sp15">
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg">
								<i class="fa-solid fa-users icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">125,663</h2>
								<p class="font-20">Happy Customers</p>
							</div>
						</div>
					</div>
					<div class=" col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg">
								<i class="fa-solid fa-book icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">50,672</h2>
								<p class="font-20">Book Collections</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg">
								<i class="fa-solid fa-store icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">1,562</h2>
								<p class="font-20">Our Stores</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg">
								<i class="fa-solid fa-leaf icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">457</h2>
								<p class="font-20">Famous Writers</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature Box End -->

		<!-- Newsletter -->
		<section class="py-5 newsletter-wrapper style-2" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
			<div class="container">
				<div class="subscride-inner">
					<div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
						<div class="col-xl-7 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
							<div class="section-head mb-0">
								<h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
							<form class="dzSubscribe style-1" action="script/mailchamp.php" method="post">
								<div class="dzSubscribeMsg"></div>
								<div class="form-group">
									<div class="input-group mb-0">
										<input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Your Email Address">
										<div class="input-group-addon">
											<button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
												<span>SUBSCRIBE</span>
												<i class="fa-solid fa-paper-plane"></i>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Newsletter End -->

	</div>
	<script>
	$(document).ready(function() {
		$('#exampleModal').on('shown.bs.modal', function () {
			$('#exampleModal').trigger('focus');
		});
	});
</script>


	<!-- Footer -->
    @extends('user.layouts.footer');
