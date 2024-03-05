@include('user.layouts.header')
<div class="page-title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Single Post</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.flash-message')
  <section class="utf_block_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 mrb-40">
            <h3>Login</h3>
		    <p>Your email address will not be published. Required fields are marked <span style="color:red">*</span></p>
        <form method="POST" action="{{ url('dologin') }}">
          @csrf
			  <div class="row">
				<div class="col-md-12">
				  <div class="form-group">
					<input class="form-control" placeholder="Email*" type="email"  name="email" required>
				  </div>
          <br>
				</div>
				<div class="col-md-12">
				  <div class="form-group">
					<input class="form-control" placeholder="Password*" type="password" name="password"  required>
				  </div>
				</div>
			  </div>
        <br>
			  <div class="clearfix">
                <button class="btn btn-primary" type="submit">Login</button>
              </div>
			</form>
        </div>

        <div class="col-lg-6 col-md-12">
            <h3>Register</h3>
		    <p>Your email address will not be published. Required fields are marked <span style="color:red">*</span></p>
            <form method="POST" action="{{ route('user.registration') }}">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" placeholder="Name*" type="text" required>
                  </div>
                  <div class="clearfix">
                </div><br>
                <div class="clearfix">
                <div class="col-md-12">
                  <div class="form-group">
                    <input class="form-control" placeholder="Email*" type="email" required name="email">
                  </div>
                </div>
                <br>
                <div class="clearfix">
				<div class="col-md-12">
                  <div class="form-group">
                    <input class="form-control" placeholder="Password*" type="password" required name="password">
                  </div>
                </div></br>
                <div class="clearfix">
                <div class="col-md-12">
                  <div class="form-group">
                    <input class="form-control" placeholder="Phone Number*" type="text" required name="phone">
                  </div>
                </div>
              </div>
              <br>
              <div class="clearfix">
                <button class="btn btn-primary" type="submit">Register</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </section>
@extends('user.layouts.footer')

@section('contentjs')
<script type="text/javascript">
		$(document).ready(function(){
		    $('#logInform').on('submit', function(e){
		    	var button_text = $(".signin_b").html();
		    	$(".signin_b").html('<i class="fa fa-circle-o-notch fa-spin"></i> loading...');
		    	$(".signin_b").prop( "disabled", true );
		        var username = $("#username").val();
				var password = $("#password").val();

				$.post("{{route('dologin')}}",{ 'email':username,'password':password,'_token':'{{csrf_token()}}'})
                .done(function(data){
                    if (data.msg == 'invalid') {
                    	$(".signin_b").html(button_text);
		    			$(".signin_b").prop( "disabled",false);
                        $(".res_alert").html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error</strong> Username or password wrong<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    }
                    if(data.msg == 'success'){
                        $(".res_alert").html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success</strong>Login Success<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    	location.reload();
                    }
                })
		    });
		});
	</script>
@endsection
