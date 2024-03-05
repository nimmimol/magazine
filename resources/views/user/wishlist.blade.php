@include('user.layouts.header')

<div class="page-content bg-grey">
  <section class="content-inner-1 border-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<h4 class="title">ISSUES </h4>
				</div>
				<div class="filter-area m-b30">
					<div class="grid-area">
						<div class="shop-tab">
							<ul class="nav text-center product-filter justify-content-end" role="tablist">
								<li class="nav-item">
									<a class="nav-link" href="books-list.html" >
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M3 5H21C21.2652 5 21.5196 4.89464 21.7071 4.7071C21.8946 4.51957 22 4.26521 22 4C22 3.73478 21.8946 3.48043 21.7071 3.29289C21.5196 3.10536 21.2652 3 21 3H3C2.73478 3 2.48043 3.10536 2.29289 3.29289C2.10536 3.48043 2 3.73478 2 4C2 4.26521 2.10536 4.51957 2.29289 4.7071C2.48043 4.89464 2.73478 5 3 5Z" fill="#AAAAAA"></path>
										<path d="M3 13H21C21.2652 13 21.5196 12.8947 21.7071 12.7071C21.8946 12.5196 22 12.2652 22 12C22 11.7348 21.8946 11.4804 21.7071 11.2929C21.5196 11.1054 21.2652 11 21 11H3C2.73478 11 2.48043 11.1054 2.29289 11.2929C2.10536 11.4804 2 11.7348 2 12C2 12.2652 2.10536 12.5196 2.29289 12.7071C2.48043 12.8947 2.73478 13 3 13Z" fill="#AAAAAA"></path>
										<path d="M3 21H21C21.2652 21 21.5196 20.8947 21.7071 20.7071C21.8946 20.5196 22 20.2652 22 20C22 19.7348 21.8946 19.4804 21.7071 19.2929C21.5196 19.1054 21.2652 19 21 19H3C2.73478 19 2.48043 19.1054 2.29289 19.2929C2.10536 19.4804 2 19.7348 2 20C2 20.2652 2.10536 20.5196 2.29289 20.7071C2.48043 20.8947 2.73478 21 3 21Z" fill="#AAAAAA"></path>
										</svg>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="books-grid-view.html">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M3 11H10C10.2652 11 10.5196 10.8946 10.7071 10.7071C10.8946 10.5196 11 10.2652 11 10V3C11 2.73478 10.8946 2.48043 10.7071 2.29289C10.5196 2.10536 10.2652 2 10 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V10C2 10.2652 2.10536 10.5196 2.29289 10.7071C2.48043 10.8946 2.73478 11 3 11ZM4 4H9V9H4V4Z" fill="#AAAAAA"></path>
										<path d="M14 11H21C21.2652 11 21.5196 10.8946 21.7071 10.7071C21.8946 10.5196 22 10.2652 22 10V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2H14C13.7348 2 13.4804 2.10536 13.2929 2.29289C13.1054 2.48043 13 2.73478 13 3V10C13 10.2652 13.1054 10.5196 13.2929 10.7071C13.4804 10.8946 13.7348 11 14 11ZM15 4H20V9H15V4Z" fill="#AAAAAA"></path>
										<path d="M3 22H10C10.2652 22 10.5196 21.8946 10.7071 21.7071C10.8946 21.5196 11 21.2652 11 21V14C11 13.7348 10.8946 13.4804 10.7071 13.2929C10.5196 13.1054 10.2652 13 10 13H3C2.73478 13 2.48043 13.1054 2.29289 13.2929C2.10536 13.4804 2 13.7348 2 14V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22ZM4 15H9V20H4V15Z" fill="#AAAAAA"></path>
										<path d="M14 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V14C22 13.7348 21.8946 13.4804 21.7071 13.2929C21.5196 13.1054 21.2652 13 21 13H14C13.7348 13 13.4804 13.1054 13.2929 13.2929C13.1054 13.4804 13 13.7348 13 14V21C13 21.2652 13.1054 21.5196 13.2929 21.7071C13.4804 21.8946 13.7348 22 14 22ZM15 15H20V20H15V15Z" fill="#AAAAAA"></path>
										</svg>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="books-grid-view-sidebar.html">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M3 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22ZM13 4H20V11H13V4ZM13 13H20V20H13V13ZM4 4H11V20H4V4Z" fill="#AAAAAA"></path>
										</svg>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="category">
						<div class="filter-category">
							<a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								<i class="fas fa-list me-2"></i>
								Categories
							</a>
						</div>
						<div class="form-group">
							<i class="fas fa-sort-amount-down me-2 text-secondary"></i>
							<select class="default-select">
								<option>Newest</option>
								<option>1 Day</option>
								<option>1 Week</option>
								<option>3 Weeks</option>
								<option>1 Month</option>
								<option>3 Months</option>
							</select>
						</div>
					</div>
				</div>	
				<div class="acod-content collapse " id="collapseExample">
					<div class="widget widget_services">
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox1">
							<label class="form-check-label" for="productCheckBox1">
								Architecture
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox2">
							<label class="form-check-label" for="productCheckBox2">
								Art
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox3">
							<label class="form-check-label" for="productCheckBox3">
								Action
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox4">
							<label class="form-check-label" for="productCheckBox4">
								Biography & Autobiography
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox5">
							<label class="form-check-label" for="productCheckBox5">
								Body, Mind & Spirit
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox6">
							<label class="form-check-label" for="productCheckBox6">
								Business & Economics
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox7">
							<label class="form-check-label" for="productCheckBox7">
								Children Fiction
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox8">
							<label class="form-check-label" for="productCheckBox8">
								Children Non-Fiction
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox9">
							<label class="form-check-label" for="productCheckBox9">
								Comics & Graphic Novels
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox10">
							<label class="form-check-label" for="productCheckBox10">
								Cooking
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox11">
							<label class="form-check-label" for="productCheckBox11">
								Crafts & Hobbies
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox12">
							<label class="form-check-label" for="productCheckBox12">
								Design
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox13">
							<label class="form-check-label" for="productCheckBox13">
								Drama
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox14">
							<label class="form-check-label" for="productCheckBox14">
								Education
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox15">
							<label class="form-check-label" for="productCheckBox15">
								Family & Relationships
							</label>
						</div>						
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox16">
							<label class="form-check-label" for="productCheckBox16">
								Fiction
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox17">
							<label class="form-check-label" for="productCheckBox17">
								Foreign Language Study
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox18">
							<label class="form-check-label" for="productCheckBox18">
								Games
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox19">
							<label class="form-check-label" for="productCheckBox19">
								Gardening
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox20">
							<label class="form-check-label" for="productCheckBox20">
								Health & Fitness
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox21">
							<label class="form-check-label" for="productCheckBox21">
								History
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox22">
							<label class="form-check-label" for="productCheckBox22">
								House & Home
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox23">
							<label class="form-check-label" for="productCheckBox23">
								Humor
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox24">
							<label class="form-check-label" for="productCheckBox24">
								Literary Collections
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox25">
							<label class="form-check-label" for="productCheckBox25">
								Mathematics
							</label>
						</div>
					</div>
				</div>
				@php
				$wishlist = App\Models\wishlist::get();
@endphp
<div class="row book-grid-row">
    @if(empty($whislists))
        <p>The Articles Found is empty.</p>
    @else
        @foreach($whislists as $issue)
            <div class="col-book style-1">
                <div class="dz-shop-card style-1">
                    <div class="dz-media">
                        <img src="https://divine.alp-ts.in/public/artical/images/{{$issue->image}}" alt="book" style="height: 225px;" width="225px;">
                    </div>
                    <div class="bookmark-btn style-2">
                        @php
                        // Check if the issue_id and user_id exist in the wishlist
                        $isInWishlist = $wishlist->where('issue_id', $issue->id)
                            ->where('user_id', auth()->user()->id)
                            ->isNotEmpty();
                        @endphp
                        <input class="form-check-input heart-checkbox" type="checkbox" id="flexCheckDefault{{$issue->id}}" onclick="makewishlist({{$issue->id}})" @if($isInWishlist) checked @endif>
                        <label class="form-check-label" for="flexCheckDefault{{$issue->id}}">
                            <i class="flaticon-heart"></i>
                        </label>
                    </div>

                    <div class="dz-content">
                        <h5 class="title"><a href="">{{ $issue->title }}</a></h5>
                        <ul class="dz-tags">
                            <li><a href="books-grid-view.html">{{ $issue->year }},</a></li>
                            <li><a href="books-grid-view.html">{{ $issue->month }}</a></li>
                        </ul>
                        <ul class="dz-rating">
                            <li><i class="flaticon-star text-yellow"></i></li>
                            <li><i class="flaticon-star text-yellow"></i></li>
                            <li><i class="flaticon-star text-yellow"></i></li>
                            <li><i class="flaticon-star text-yellow"></i></li>
                            <li><i class="flaticon-star text-yellow"></i></li>
                        </ul>
                        <div class="book-footer">
                            <div class="price">
                                <span class="price-num">{{ $issue->name }}</span>
                            </div>
                            <a href="{{ route('magazineissue', ['id' => $issue->id]) }}" class="btn btn-secondary btnhover btnhover2">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

  
</section>								
</div>


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
	var csrfToken = '{{ csrf_token() }}';
	 // Update date status using AJAX
    $.ajax({
      url: "{{ route('update.date.status') }}",
      type: 'POST',
	  headers: {
                'X-CSRF-TOKEN': csrfToken
            },
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
    var url = 'magazine/issued/multiple/artice/' + dataId; // Replace "your-url" with the actual URL you want to navigate to

    // Navigate to the constructed URL
    window.location.href = url;
  }


$(document).ready(function() {
  $('.heart-checkbox').click(function() {
    $(this).next('label').toggleClass('active');
    // Perform your function here
  });
});


function makewishlist(id)
{
	var csrfToken = '{{ csrf_token() }}';
	@auth
    var userId = {{ auth()->user()->id }};
	var issueid=id;
	$.ajax({
      url: "{{ route('isuue.add.wishlist') }}",
      type: 'POST',
	  headers: {
                'X-CSRF-TOKEN': csrfToken
            },
      data: {
        userId: userId,
		issueid: issueid
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
	
}

</script>







