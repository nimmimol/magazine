@include('user.layouts.header')
    @include('layouts.flash-message')
    
    @guest
    <!-- Show pricing table for guests -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Pricing Table</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                            <li class="breadcrumb-item">Pricing Plans</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- inner page banner End-->
        
        <!-- Pricing Table -->
        <section class="content-inner-1 bg-light">
            <div class="container">
                <div class="row pricingtable-wraper">
                    @foreach($plandats as $price)
                        <div class="col-lg-4 col-md-6">
                            <div class="pricingtable-wrapper style-1 m-b30">
                                <div class="pricingtable-inner">
                                    <div class="pricingtable-title">
                                        <h3 class="title">{{$price->name}}</h3>
                                    </div>
                                    <div class="pricingtable-price"> 
                                        <h2 class="pricingtable-bx">FREE<small class="pricingtable-type"></small></h2>
                                    </div>
                                    <ul class="pricingtable-features">
                                        <li>Free Access</li>
                                        <li>{{$price->day}} days</li>
                                    </ul>
                                    <div class="pricingtable-footer">
                                        @if (Auth::check())
                                            <a href="{{ route('purchase.plan', ['id' => $price->id]) }}" class="btn btn-primary btnhover3">Start Now <i class="fa fa-angle-right m-l10"></i></a>
                                        @else
                                            <a href="{{ route('user.login') }}" class="btn btn-primary btnhover3">Start Now <i class="fa fa-angle-right m-l10"></i></a>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach           
                </div>
            </div>
        </section>
    </div>
@else
    <!-- Include header and flash message for logged-in users -->
    

    <!-- Page content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Pricing Table</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                            <li class="breadcrumb-item">Pricing Plans</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- inner page banner End-->
        
        <!-- Pricing Table -->
        <section class="content-inner-1 bg-light">
            <div class="container">
                <div class="row pricingtable-wraper">
                    <!-- Pricing plans loop -->
                    @foreach($plandats as $price)
                        <div class="col-lg-4 col-md-6">
                            <div class="pricingtable-wrapper style-1 m-b30">
                                <div class="pricingtable-inner">
                                    <div class="pricingtable-title">
                                        <h3 class="title">{{$price->name}}</h3>
                                    </div>
                                    <div class="pricingtable-price"> 
                                        <h2 class="pricingtable-bx">FREE<small class="pricingtable-type"></small></h2>
                                    </div>
                                    <ul class="pricingtable-features">
                                        <li>Free Access</li>
                                        <li>{{$price->day}} days</li>
                                    </ul>
                                    <div class="pricingtable-footer"> 
                                        @php
                                            $userPlan = \App\Models\Userplan::where('user_id', Auth::user()->id)->first();
                                            $plan = $userPlan ? \App\Models\Plan::where('id', $userPlan->plan_id)->first() : null;
                                        @endphp

                                        @if(!$userPlan)
                                            <a href="{{route('purchase.plan',['id'=>$price->id])}}" class="btn btn-primary btnhover3">Start Now <i class="fa fa-angle-right m-l10"></i></a>
                                        @elseif($price->type != 0)
                                            <a href="{{route('purchase.plan',['id'=>$price->id])}}" class="btn btn-primary btnhover3">Start Now <i class="fa fa-angle-right m-l10"></i></a>
                                        @elseif($price->type == 0)
                                            <p>Active <a class="text-primary" href="{{url('/')}}"><p style="text-primary "> </p></a> Free Plan Activated {{$userPlan->deactive_date}}         
                                            </p>
                                            <br>
                                            <a href="{{ url()->previous() }}" class="class="btn btn-primary btnhover3">Go Back</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach           
                </div>
            </div>
        </section>
    </div>
    <!-- Include footer -->
    @extends('user.layouts.footer')
@endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        @if(session('mess'))
            $('#successModal').modal('show');
        @endif
    });
</script>
<style>
.go-back-button:hover {
    color: white;
}
</style>
