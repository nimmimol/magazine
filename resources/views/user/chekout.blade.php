@include('user.layouts.header')
		<!-- Header End -->
		
		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Checkout</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
								<li class="breadcrumb-item">Checkout</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->
			
			<!-- contact area -->
			<section class="content-inner-1">
				<!-- Product -->
                
				<div class="container">
					<form class="shop-form">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="widget">
									<h4 class="widget-title">Billing & Shipping Address</h4>
									<div class="form-group">
										<select class="default-select">
											<option value="1">Åland Islands</option>
											<option value="2">Afghanistan</option>
											<option value="3">Albania</option>
											<option value="4">Algeria</option>
											<option value="5">Andorra</option>
											<option value="6">Angola</option>
											<option value="7">Anguilla</option>
											<option value="8">Antarctica</option>
											<option value="9">Antigua and Barbuda</option>
											<option value="10">Argentina</option>
											<option value="11">Armenia</option>
											<option value="12">Aruba</option>
											<option value="13">Australia</option>
										</select>	
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="First Name">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Last Name">
										</div>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Company Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Address">
									</div>									
									
									<div class="row">
										<div class="form-group col-md-6">
											<input type="email" class="form-control" placeholder="Email">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Phone">
										</div>
									</div>
									<button class="btn btn-primary btnhover mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#create-an-account">Create an account <i class="fa fa-arrow-circle-o-down"></i></button>
									<div id="create-an-account" class="collapse">
										<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Password">
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<button class="btn btn-primary btnhover mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#different-address">Ship to a different address <i class="fa fa-arrow-circle-o-down"></i></button>
								<div id="different-address" class="collapse">
									
									<div class="form-group">
										<select class="default-select">
											<option value="">Åland Islands</option>
											<option value="">Afghanistan</option>
											<option value="">Albania</option>
											<option value="">Algeria</option>
											<option value="">Andorra</option>
											<option value="">Angola</option>
											<option value="">Anguilla</option>
											<option value="">Antarctica</option>
											<option value="">Antigua and Barbuda</option>
											<option value="">Argentina</option>
											<option value="">Armenia</option>
											<option value="">Aruba</option>
											<option value="">Australia</option>
										</select>	
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="First Name">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Last Name">
										</div>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Company Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Address">
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Apartment, suite, unit etc.">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Town / City">
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="State / County">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Postcode / Zip">
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="email" class="form-control" placeholder="Email">
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" placeholder="Phone">
										</div>
									</div>
									<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
								</div>
							
							</div>
						</div>
					</form>
					<div class="dz-divider bg-gray-dark text-gray-dark icon-center  my-5"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
					<div class="row">

						<div class="col-lg-6">
							<div class="widget">
								<h4 class="widget-title">Your Order</h4>
								<table class="table-bordered check-tbl">
									<thead class="text-center">
										<tr>
											
											<th>PLAN NAME</th>
                                            <th>DAYS</th>
											<th>TOTAL</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="product-item-img">{{$singleplandata->name}}</td>
											<td class="product-item-name">{{$singleplandata->day}}</td>
											<td class="product-price">{{$singleplandata->rate}}</td>
										</tr>					
										
									</tbody>
								</table>
                                
                                <br>
                                @include('layouts.flash-message')
                                 <form method="post" action="{{route('apply.coupon')}}">
                                    @csrf
                                    <div class="row">                                   
										<div class="form-group col-md-9">
											<input type="text" class="form-control"  name="coupon_code" placeholder="Enter Coupon Code">
                                            <input type="hidden" name="planid" value="{{$singleplandata->id}}">
										</div>
										<div class="form-group col-md-3">
											<input type="submit" class="btn btn-primary"  value="Apply Coupon">
										</div>
									</div>

							</div>
                            </form>
                           
						</div>
						<div class="col-lg-6">
							<form class="shop-form widget">
								<h4 class="widget-title">Order Total</h4>
                                <table class="table-bordered check-tbl mb-4">
    <tbody>
    @php
    $coupon = session('coupon');
    $isValidCoupon = !empty($coupon);
    $subtotal = $singleplandata->rate;
    $discount = 0; // Set the initial discount to 0

    if ($isValidCoupon) {
        $discount = $coupon['discount'];
    } else {
        session()->forget('coupon'); // Remove the coupon session if it is invalid
    }

    $total = $subtotal - $discount;
@endphp

<table class="table-bordered check-tbl mb-4">
    <tbody>
        @if ($isValidCoupon)
            <tr>
                <td>Order Subtotal</td>
                <td class="product-price">{{ $subtotal }}</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free Shipping</td>
            </tr>
            <tr>
                <td>Coupon ({{ $coupon['name'] }})</td>
                <td class="product-price">{{ $discount }}</td>
            </tr>
        @endif

        <tr>
            <td>Total</td>
            <td class="product-price-total">{{ $total }}</td>
        </tr>
    </tbody>
</table>




								<h4 class="widget-title">Payment Method</h4>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Name on Card">
								</div>
								<div class="form-group">
									<select class="default-select">
										<option value="">Credit Card Type</option>
										<option value="">Another option</option>
										<option value="">A option</option>
										<option value="">Potato</option>
									</select>	
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Credit Card Number">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Card Verification Number">
								</div>
								<div class="form-group">
									<button class="btn btn-primary btnhover" type="button">Place Order Now </button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Product END -->
			</section>
			<!-- contact area End--> 
            @extends('user.layouts.footer')