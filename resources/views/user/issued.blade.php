@include('user.layouts.header')
<div class="page-content bg-grey">
		<section class="content-inner-1">
			<div class="container">
				<div class="row book-grid-row style-4 m-b60">
					<div class="col">
						<div class="dz-box">
							<div class="dz-media">
								<img src="https://divine.alp-ts.in/public/artical/images/{{$issueds->image}}" alt="book" style="height: 475px;" width="400px;">
							</div>
							<div class="dz-content">
								<div class="dz-header">
									<h3 class="title">{{$issueds->name}}</h3>
									<div class="shop-item-rating">
										<div class="d-lg-flex d-sm-inline-flex d-flex align-items-center">
											<ul class="dz-rating">
												<li><i class="flaticon-star text-yellow"></i></li>	
												<li><i class="flaticon-star text-yellow"></i></li>	
												<li><i class="flaticon-star text-yellow"></i></li>	
												<li><i class="flaticon-star text-yellow"></i></li>		
												<li><i class="flaticon-star text-muted"></i></li>		
											</ul>
											<h6 class="m-b0">4.0</h6>
										</div>
										<!-- <div class="social-area">
											<ul class="dz-social-icon style-3">
												<li><a href="https://www.facebook.com/dexignzone" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
												<li><a href="https://twitter.com/dexignzones" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
												<li><a href="https://www.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
												<li><a href="https://www.google.com/intl/en-GB/gmail/about/" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
											</ul>
										</div> -->
									</div>
								</div>
								<div class="dz-body">
									<div class="book-detail">
										<ul class="book-info">
											<li>
												<div class="writer-info">
													<img src="https://divine.alp-ts.in/public/user/images/profile2.jpg" alt="book">
													<div>
														<span>Writen by</span>{{"GOD's Love"}}
													</div>
												</div>
											</li>
											<li><span>Publisher</span>Divine</li>
											<li><span>Year</span>{{$issueds->year}}</li>
										</ul>
									</div>
									<p class="text-1">{{$issueds->des}}.</p>
									
									<div class="book-footer">
										
										<!-- <div class="product-num">
											<div class="quantity btn-quantity style-1 me-3">
												<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
											</div>
											<a href="shop-cart.html" class="btn btn-primary btnhover btnhover2"><i class="flaticon-shopping-cart-1"></i> <span>Add to cart</span></a>
											<div class="bookmark-btn style-1 d-none d-sm-block">
												<input class="form-check-input" type="checkbox" id="flexCheckDefault1">
												<label class="form-check-label" for="flexCheckDefault1">
													<i class="flaticon-heart"></i>
												</label>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xl-8">
						<div class="product-description tabs-site-button">
                            <ul class="nav nav-tabs">
                                <li><a data-bs-toggle="tab" href="#graphic-design-1" class="active">Articles</a></li>
                                <!-- <li><a data-bs-toggle="tab" href="#developement-1">Customer Reviews</a></li> -->
                            </ul>
							<div class="tab-content">
								
								<div id="developement-1" class="tab-pane show active"ṣ>
                                    <div class="clear" id="comment-list">
										<div class="post-comments comments-area style-1 clearfix">
											
											<div id="comment">
												<ol class="comment-list">													
												<li class="comment even thread-odd thread-alt depth-1 comment" id="comment-4">
												@foreach($latestarticel as $issue)
												   <div class="comment-body" id="div-comment-4">
													  <div class="comment-author vcard">
														 <img src="https://divine.alp-ts.in/public/artical/images/{{$issue->image}}" alt="" class="avatar" style="height: 85;" weight="85;"/>
														 <cite class="fn">{{$issue->title}}</cite> <span class="says">says:</span>
														 <div class="comment-meta">
															<a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
														 </div>
													  </div>
													  <div class="comment-content dlab-page-text">
														 <p>{{$issue->description}}</p>														 
													  </div>
													  <div class="reply">
													 		<button type="button" class="btn btn-secondary btn-sm btnhover btnhover2 view-article-btn" data-toggle="modal" data-target="#myModal" data-id="{{ $issue->id }}" onclick="viewfunction();">
																View Article
															</button>																
															<!-- Modal -->																										
													  </div>
												   </div>
												   @endforeach
												</li>
											 </ol>
										  </div>										 
									   </div>
									</div>									
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 mt-5 mt-xl-0">
						<div class="widget">
							<h4 class="widget-title">Latest Issues</h4>
							<div class="row">
							@foreach($latestissue as $articel)
								<div class="col-xl-12 col-lg-6">
									<div class="dz-shop-card style-5">
										<div class="dz-media">
											<img src="https://divine.alp-ts.in/public/artical/images/{{$articel->image }}"   style="height: 110px;" width="105px;">
										</div>
										<div class="dz-content">
											<p class="subtitle" >{{$articel->name }}</p>
											<ul class="dz-tags">
												<li>{{$articel->month}},</li>
												<li>{{$articel->year}},</li>												
											</ul>											
											<a href="{{ route('magazineissue', ['id' => $articel->id]) }}" class="btn brn-sm btn-secondary btnhover btnhover2">View Issue</a>
										</div>
									</div>
								</div>
							@endforeach						
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Your article is Ready..</p>
      </div>

      <!--Body-->
	  <div class="modal-body">
    <input type="hidden" name="article_id" id="article_id">
    <i class="fas fa-bell fa-4x animated rotateIn mb-4 text-primary"></i>
    @if (Auth::check())
        <p>Welcome, {{ Auth::user()->name }}</p>
        @php
        $plan = \App\Models\Userplan::where('active', 1)->first();
        @endphp
        @if ($plan)
            @php
            $createdAt = \Carbon\Carbon::parse($plan->select_date);
            $daysSinceCreation = $createdAt->diffInDays($plan->deactive_date);
            $deletedAt = \Carbon\Carbon::parse($plan->deactive_date);
            @endphp
            @if ($daysSinceCreation > 1)
                <p>Active plan for {{ $daysSinceCreation }} days.</p>
                <button type="button" class="btn btn-primary" onclick="readMore()">Read More</button>
            @else
                <p><a href="{{ route('userpricing') }}"> You Have No Active plans...<br>Purchase a plan</a></p>
            @endif
        @else
            <p><a href="{{ route('userpricing') }}">You don't have an active plan. Purchase a plan</a></p>
        @endif
    @else
        <p>You need to log in to access this page. Please <a href="{{ route('user.login') }}">login/register</a>.</p>
    @endif
</div>

      <div class="modal-footer flex-center">
        <button type="button" class="btn btn-outline-info waves-effect cla-close" data-dismiss="modal" onclick="closeModal()">Close</button>
      </div>
    </div>
  </div>
</div>
		
		<!-- Client Start-->
		<div class="bg-white py-5">
			<div class="container">
			<!--Client Swiper -->
				<div class="swiper client-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img src="https://divine.alp-ts.in/public/user/images/client/client1.svg" alt="client"></div>
						<div class="swiper-slide"><img src="https://divine.alp-ts.in/public/user/images/client/client2.svg" alt="client"></div>
						<div class="swiper-slide"><img src="https://divine.alp-ts.in/public/user/images/client/client3.svg" alt="client"></div>
						<div class="swiper-slide"><img src="https://divine.alp-ts.in/public/user/images/client/client4.svg" alt="client"></div>
						<div class="swiper-slide"><img src="https://divine.alp-ts.in/public/user/images/client/client5.svg" alt="client"></div>	
					</div>
				</div>
			</div>
		</div>
		<!-- Client End-->
		
		<!-- Feature Box -->
		<section class="content-inner">
			<div class="container">
				<div class="row sp15">
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
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
					<div class=" col-lg-3 col-md-6 col-sm-6 col-6">
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
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
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
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
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
        @extends('user.layouts.footer');
		
<!-- Include the necessary libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
  function closeModal() {
    $('#myModal').modal('hide');
  }
</script>


<script>
  $(document).ready(function() {
    $('.view-article-btn').click(function() {
      var dataId = $(this).data('id');
      $('#article_id').val(dataId); // Update the ID of the input field to "article_id"
      $('#myModal').modal('show');
      $('#cla-close').modal('hide');
    });

	@auth
    var userId = {{ auth()->user()->id }};
	 // Update date status using AJAX
    $.ajax({
      url: "{{ route('update.date.status') }}",
      type: 'POST',
      data: {
        userId: userId
      },
      success: function(response) {        
        console.log(response);
      },
      error: function(xhr, status, error) {
        // Handle error response
        console.log(error);
      }
    });
  @endauth
  });
  

  // Wait for the DOM to be fully loaded
  document.addEventListener('DOMContentLoaded', function() {
    // Find all the button elements and add the event listener to each one
    var buttons = document.querySelectorAll('.view-article-btn');
    buttons.forEach(function(button) {
      button.addEventListener('click', function() {
        var dataId = button.getAttribute('data-id');
        document.getElementById('article_id').value = dataId; // Update the ID of the input field to "article_id"
        var loginModal = document.getElementById('myModal');
        var modal = new bootstrap.Modal(loginModal);
        modal.show();
      });
    });
  });
</script>
<script>
  function readMore() {
    var dataId = $('#article_id').val(); // Get the value of the input field with ID "article_id"
    var url = 'multiple/artice/' + dataId; // Replace "your-url" with the actual URL you want to navigate to

    // Navigate to the constructed URL
    window.location.href = url;
  }
</script>
<script>
function viewfunction() {
	@auth
    var userId = {{ auth()->user()->id }};
    var dataId = $(event.target).data('id');

	@endauth
}

</script>









