@include('user.layouts.header')
@php
    use Illuminate\Support\Str;
@endphp

<style>
    .ellipsis-text {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

  <div class="page-content bg-white">   
    <!--Swiper Banner Start -->
    <div class="main-slider style-1"> 
  <div class="main-swiper">
    <div class="swiper-wrapper">
      @foreach($sliderContent as $content)
      <div class="swiper-slide bg-blue" style="background-image: url(public/user/images/background/waveelement.png);" style="height:100;" width="100;">
        <div class="container">
          <div class="banner-content">
            <div class="row">
              <div class="col-md-6">
                <div class="swiper-content">
                  <div class="content-info">
                    <h6 class="sub-title" data-swiper-parallax="-10">BEST MANAGEMENT</h6>
                    <h2 class="title mb-0" data-swiper-parallax="-20">{{$content->name}}</h2>
                    <!-- <ul class="dz-tags" data-swiper-parallax="-30">
                      <li><a href="javascript:void(0);">Napoleon Hill</a></li>
                      <li><a href="javascript:void(0);">Business & Strategy</a></li>
                    </ul> -->
                    <!-- <p class="text mb-0" data-swiper-parallax="-40">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p> -->
                    
                    <div class="content-btn" data-swiper-parallax="-60">
                      
                    <a class="btn border btnhover ms-4 text-white" href="{{ route('magazineissue', ['id' => $content->id ?? 0]) }}">Purchase</a>
                    <a class="btn border btn-danger btnhover ms-4 text-white" href="{{ route('magazineissue', ['id' => $content->id ?? 0]) }}">See Details</a>


                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="banner-media" data-swiper-parallax="-100">
                  <img src="https://divine.alp-ts.in/public/artical/images/{{$content->image}}" style="width: 300px;" height="300px;" alt="banner-media">
                </div>
                <img class="pattern" src="{{ config('app.user_url') }}images/Group.png" data-swiper-parallax="-100" alt="dots">
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="container swiper-pagination-wrapper">
      <div class="swiper-pagination-five"></div>
    </div>
  </div>

  <div class="swiper main-swiper-thumb">
    <div class="swiper-wrapper">
      <div class="swiper-slide"></div>
      <div class="swiper-slide"></div>
      <div class="swiper-slide"></div>
      <div class="swiper-slide"></div>
    </div>
  </div>
</div>

    
    <!-- Client Start-->
<!--     <div class="bg-white py-5">
      <div class="container">

        <div class="swiper client-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/client/client1.svg" alt="client"></div>
            <div class="swiper-slide"><img src="images/client/client2.svg" alt="client"></div>
            <div class="swiper-slide"><img src="images/client/client3.svg" alt="client"></div>
            <div class="swiper-slide"><img src="images/client/client4.svg" alt="client"></div>
            <div class="swiper-slide"><img src="images/client/client5.svg" alt="client"></div>  
          </div>
        </div>
      </div>
    </div> -->
    <!-- Client End-->

    <!--Recommend Section Start-->
    <section class="content-inner-1 bg-grey reccomend">
      <div class="container">
        <div class="section-head text-center">
          <h2 class="title">Recomended For You</h2>
          <p>Divine Voice Issues is a captivating collection of spiritual insights and divine wisdom. Delve into its pages and discover a treasure trove of profound teachings that illuminate the path to inner peace and enlightenment.</p>
        </div>      


    <!-- Swiper -->
    <div class="swiper-container swiper-two">
   <div class="swiper-wrapper">
  @foreach($recommendedIssues as $issue)
  <div class="swiper-slide">
    <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
      <div class="dz-media">
        <img src="https://divine.alp-ts.in/public/artical/images/{{ $issue->image }}"  alt="book" style="height: 252px;" width="200px;">
      </div>
      <div class="dz-content">
     
        <h6 class="title text-ellipsis ellipsis-text" >
          {{$issue->name}}
        </h6>
        <span class="price">{{ $issue->month }},{{$issue->year}}</span>
        <a href="{{ route('magazineissue', ['id' => $issue->id]) }}" class="btn btn-secondary btnhover btnhover2">View More</a>
      </div>
    </div>
  </div>
  @endforeach
</div>

  </div>
</section>

    
    <!-- icon-box1 -->
    <section class="content-inner-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="icon-bx-wraper style-1 m-b20 text-center">
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
            <div class="icon-bx-wraper style-1 m-b20 text-center">
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
            <div class="icon-bx-wraper style-1 m-b20 text-center">
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
            <div class="icon-bx-wraper style-1 m-b20 text-center">
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
    
    <!-- Book Sale -->
    <s<section class="content-inner-1">
  <div class="container">
    <div class="section-head book-align">
      <h2 class="title mb-0">ISSUES</h2>
      <div class="pagination-align style-1">
        <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
        <div class="swiper-pagination-two"></div>
        <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
      </div>
    </div>
    <div class="swiper-container books-wrapper-3 swiper-four">
      <div class="swiper-wrapper">
        @if (!$allissues->isEmpty())
          @foreach ($allissues as $category)
            <div class="swiper-slide">
              <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="dz-media">
                  <a href="{{ route('magazineissue', ['id' => $category->id]) }}">
                    <img src="https://divine.alp-ts.in/public/artical/images/{{ $category->image }}"  alt="book" width="100" height="100">
                  </a>
                </div>
                <div class="dz-content">                 
                  <h6 class="title"><a href="{{ route('magazineissue', ['id' => $category->id]) }}">{{ $category->name }}</a></h6>               
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </div>
</section><br>
<br>

    <!-- Book Sale End -->
    
    <!-- Feature Product -->
    <section class="content-inner-1 bg-grey reccomend">
      <div class="container">
        <div class="section-head text-center">
          <div class="circle style-1"></div>
          <h2 class="title">Featured Product</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
        </div>
      </div>
      <div class="container">
        <div class="swiper-container books-wrapper-2 swiper-three">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="books-card style-2">
                <div class="dz-media">
                  <img src="{{ config('app.user_url') }}artical_image/1q.png" alt="book">                  
                </div>
                <div class="dz-content">
                  <h6 class="sub-title">BEST SELLER</h6>
                  <h6 class="title"style="font-size: 38px";>സ്ഥാപനം മുതൽ നിങ്ങൾക്കായ് സജ്ജമാക്കി യിരിക്കുന്ന രാജ്യം</h6>
                  <ul class="dz-tags">
                    <li>Napoleon Hill</li>
                    <li>Business & Strategy</li>
                  </ul>
                  <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                  <div class="price">
                    <span class="price-num">$9.5</span>
                    <del>$12.0</del>
                    <span class="badge">20% OFF</span>
                  </div>
                  <div class="bookcard-footer">
                    <a href="#" class="btn btn-primary btnhover m-t15 m-r10">Buy Now</a>
                    <a href="#" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="books-card style-2">
                <div class="dz-media">
                  <img src="{{ config('app.user_url') }}artical_image/2q.png" alt="book">                  
                </div>
                <div class="dz-content">
                  <h6 class="sub-title">BEST SELLER</h6>
                  <h6 class="title"style="font-size: 38px";>സ്ഥാപനം മുതൽ നിങ്ങൾക്കായ് സജ്ജമാക്കി യിരിക്കുന്ന രാജ്യം</h6>
                  <ul class="dz-tags">
                    <li>Napoleon Hill</li>
                    <li>Business & Strategy</li>
                  </ul>
                  <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                  <div class="price">
                    <span class="price-num">$9.5</span>
                    <del>$12.0</del>
                    <span class="badge">20% OFF</span>
                  </div>
                  <div class="bookcard-footer">
                    <a href="#" class="btn btn-primary btnhover m-t15 m-r10">Buy Now</a>
                    <a href="#" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="books-card style-2">
                <div class="dz-media">
                  <img src="{{ config('app.user_url') }}artical_image/3.png" alt="book">                  
                </div>
                <div class="dz-content">
                  <h6 class="sub-title">BEST SELLER</h6>
                  <h6 class="title"style="font-size: 38px";>സ്ഥാപനം മുതൽ നിങ്ങൾക്കായ് സജ്ജമാക്കി യിരിക്കുന്ന രാജ്യം</h6>
                  <ul class="dz-tags">
                    <li>Napoleon Hill</li>
                    <li>Business & Strategy</li>
                  </ul>
                  <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                  <div class="price">
                    <span class="price-num">$9.5</span>
                    <del>$12.0</del>
                    <span class="badge">20% OFF</span>
                  </div>
                  <div class="bookcard-footer">
                    <a href="#" class="btn btn-primary btnhover m-t15 m-r10">Buy Now</a>
                    <a href="#" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="books-card style-2">
                <div class="dz-media">
                  <img src="{{ config('app.user_url') }}artical_image/1q.png" alt="book">                  
                </div>
                <div class="dz-content">
                  <h6 class="sub-title">BEST SELLER</h6>
                  <h4 class="title"style="font-size: 38px";>സ്ഥാപനം മുതൽ നിങ്ങൾക്കായ് സജ്ജമാക്കി യിരിക്കുന്ന രാജ്യം</h4>
                  <ul class="dz-tags">
                    <li>Napoleon Hill</li>
                    <li>Business & Strategy</li>
                  </ul>
                  <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                  <div class="price">
                    <span class="price-num">$9.5</span>
                    <del>$12.0</del>
                    <span class="badge">20% OFF</span>
                  </div>
                  <div class="bookcard-footer">
                    <a href="#" class="btn btn-primary btnhover m-t15 m-r10">Buy Now</a>
                    <a href="#" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="books-card style-2">
                <div class="dz-media">
                  <img src="{{ config('app.user_url') }}artical_image/2q.png" alt="book">                  
                </div>
                <div class="dz-content">
                  <h6 class="sub-title">BEST SELLER</h6>
                  <h4 class="title"style="font-size: 38px";>സ്ഥാപനം മുതൽ നിങ്ങൾക്കായ് സജ്ജമാക്കി യിരിക്കുന്ന രാജ്യം</h4>
                  <ul class="dz-tags">
                    <li>Napoleon Hill</li>
                    <li>Business & Strategy</li>
                  </ul>
                  <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                  <div class="price">
                    <span class="price-num">$9.5</span>
                    <del>$12.0</del>
                    <span class="badge">20% OFF</span>
                  </div>
                  <div class="bookcard-footer">
                    <a href="#" class="btn btn-primary btnhover m-t15 m-r10">Buy Now</a>
                    <a href="#" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="books-card style-2">
                <div class="dz-media">
                  <img src="{{ config('app.user_url') }}artical_image/3.png" alt="book">                  
                </div>
                <div class="dz-content">
                  <h6 class="sub-title">BEST SELLER</h6>
                  <h4 class="title"style="font-size: 38px";>സ്ഥാപനം മുതൽ നിങ്ങൾക്കായ് സജ്ജമാക്കി യിരിക്കുന്ന രാജ്യം</h4>
                  <ul class="dz-tags">
                    <li>Napoleon Hill</li>
                    <li>Business & Strategy</li>
                  </ul>
                  <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                  <div class="price">
                    <span class="price-num">$9.5</span>
                    <del>$12.0</del>
                    <span class="badge">20% OFF</span>
                  </div>
                  <div class="bookcard-footer">
                    <a href="#" class="btn btn-primary btnhover m-t15 m-r10">Buy Now</a>
                    <a href="#" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pagination-align style-2">
            <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
            <div class="swiper-pagination-three"></div>
            <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Feature Product End -->
    
    <!-- Special Offer-->
   <!--  <section class="content-inner-2">
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
                  <a href="#"><img src="{{ config('app.user_url') }}images/blog/blog5.jpg" alt="/"></a>
                </div>
                <div class="dz-info">
                  <h4 class="dz-title"><a href="#">SECONDS [Part I]</a></h4>
                  <div class="dz-meta">
                    <ul class="dz-tags">
                      <li><a href="#">BIOGRAPHY</a></li>
                      <li><a href="#">THRILLER</a></li>
                      <li><a href="#">HORROR</a></li>
                    </ul>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  <div class="bookcard-footer">
                    <a href="#" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
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
                  <a href="#"><img src="{{ config('app.user_url') }}images/blog/blog6.jpg" alt="/"></a>
                </div>
                <div class="dz-info">
                  <h4 class="dz-title"><a href="#">Terrible Madness</a></h4>
                  <div class="dz-tags">
                    <ul>
                      <li><a href="#">BIOGRAPHY</a></li>
                      <li><a href="#">THRILLER</a></li>
                      <li><a href="#">HORROR</a></li>
                    </ul>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  <div class="bookcard-footer">
                    <a href="#" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
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
                  <a href="#"><img src="{{ config('app.user_url') }}images/blog/blog7.jpg" alt="/"></a>
                </div>
                <div class="dz-info">
                  <h4 class="dz-title"><a href="#">REWORK</a></h4>
                  <div class="dz-tags">
                    <ul>
                      <li><a href="#">BIOGRAPHY</a></li>
                      <li><a href="#">THRILLER</a></li>
                      <li><a href="#">HORROR</a></li>
                    </ul>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  <div class="bookcard-footer">
                    <a href="#" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
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
                  <a href="#"><img src="{{ config('app.user_url') }}images/blog/blog5.jpg" alt="/"></a>
                </div>
                <div class="dz-info">
                  <h4 class="dz-title"><a href="#">SECONDS [Part I]</a></h4>
                  <div class="dz-tags">
                    <ul>
                      <li><a href="#">BIOGRAPHY</a></li>
                      <li><a href="#">THRILLER</a></li>
                      <li><a href="#">HORROR</a></li>
                    </ul>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  <div class="bookcard-footer">
                    <a href="#" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
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
                  <a href="#"><img src="{{ config('app.user_url') }}images/blog/blog6.jpg" alt="/"></a>
                </div>
                <div class="dz-info">
                  <h4 class="dz-title"><a href="#">Terrible Madness</a></h4>
                  <div class="dz-tags">
                    <ul>
                      <li><a href="#">BIOGRAPHY</a></li>
                      <li><a href="#">THRILLER</a></li>
                      <li><a href="#">HORROR</a></li>
                    </ul>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  <div class="bookcard-footer">
                    <a href="#" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
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
                  <a href="#"><img src="{{ config('app.user_url') }}images/blog/blog7.jpg" alt="/"></a>
                </div>
                <div class="dz-info">
                  <h4 class="dz-title"><a href="#">REWORK</a></h4>
                  <div class="dz-tags">
                    <ul>
                      <li><a href="#">BIOGRAPHY</a></li>
                      <li><a href="#">THRILLER</a></li>
                      <li><a href="#">HORROR</a></li>
                    </ul>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  <div class="bookcard-footer">
                    <a href="#" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
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
    </section> -->
    <!-- Special Offer End -->
    
    <!-- Testimonial -->
    <!-- <section class="content-inner-2 testimonial-wrapper">
      <div class="container">
        <div class="testimonial">
          <div class="section-head book-align">
            <div>
              <h2 class="title mb-0">Testimonials</h2>
              <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="pagination-align style-1">
              <div class="testimonial-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
              <div class="testimonial-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-container testimonial-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.1s">
              <div class="testimonial-info">
                <ul class="dz-rating">
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                </ul>
                <div class="testimonial-text">
                  <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                </div>
                <div class="testimonial-detail">
                  <div class="testimonial-pic">
                    <img src="{{ config('app.user_url') }}images/testimonial/testimonial1.jpg" alt="">
                  </div>
                  <div class="info-right">
                    <h6 class="testimonial-name">Jason Huang</h6> 
                    <span class="testimonial-position">Book Lovers</span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.2s">
              <div class="testimonial-info">
                <ul class="dz-rating">
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-muted"></i></li> 
                </ul>
                <div class="testimonial-text">
                  <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                </div>
                <div class="testimonial-detail">
                  <div class="testimonial-pic radius">
                    <img src="{{ config('app.user_url') }}images/testimonial/testimonial2.jpg" alt="">
                  </div>
                  <div>
                    <h6 class="testimonial-name">Miranda Lee</h6> 
                    <span class="testimonial-position">Book Lovers</span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.3s">
              <div class="testimonial-info">
                <ul class="dz-rating">
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-muted"></i></li> 
                  <li><i class="flaticon-star text-muted"></i></li> 
                </ul>
                <div class="testimonial-text">
                  <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                </div>
                <div class="testimonial-detail">
                  <div class="testimonial-pic radius">
                    <img src="{{ config('app.user_url') }}images/testimonial/testimonial3.jpg" alt="">
                  </div>
                  <div>
                    <h6 class="testimonial-name">Steve Henry</h6> 
                    <span class="testimonial-position">Book Lovers</span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.4s">
              <div class="testimonial-info">
                <ul class="dz-rating">
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>
                  <li><i class="flaticon-star text-yellow"></i></li>
                  <li><i class="flaticon-star text-muted"></i></li>
                </ul>
                <div class="testimonial-text">
                  <p>Thank you for filling a niche at an affordable price. Your book was just what I was looking for. Thanks again</p>
                </div>
                <div class="testimonial-detail">
                  <div class="testimonial-pic radius">
                    <img src="{{ config('app.user_url') }}images/testimonial/testimonial4.jpg" alt="">
                  </div>
                  <div>
                    <h6 class="testimonial-name">Angela Moss</h6> 
                    <span class="testimonial-position">Book Lovers</span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.5s">
              <div class="testimonial-info">
                <ul class="dz-rating">
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-muted"></i></li> 
                </ul>
                <div class="testimonial-text">
                  <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                </div>
                <div class="testimonial-detail">
                  <div class="testimonial-pic radius">
                    <img src="{{ config('app.user_url') }}images/testimonial/testimonial2.jpg" alt="">
                  </div>
                  <div>
                    <h6 class="testimonial-name">Miranda Lee</h6> 
                    <span class="testimonial-position">Book Lovers</span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.6s">
              <div class="testimonial-info">
                <ul class="dz-rating">
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-yellow"></i></li>  
                  <li><i class="flaticon-star text-muted"></i></li> 
                  <li><i class="flaticon-star text-muted"></i></li> 
                </ul>
                <div class="testimonial-text">
                  <p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
                </div>
                <div class="testimonial-detail">
                  <div class="testimonial-pic">
                    <img src="{{ config('app.user_url') }}images/testimonial/testimonial1.jpg" alt="">
                  </div>
                  <div class="info-right">
                    <h6 class="testimonial-name">Jason Huang</h6> 
                    <span class="testimonial-position">Book Lovers</span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Testimonial End -->
    
    <!-- Latest News -->
   <!--  <section class="content-inner-2">
      <div class="container">
        <div class="section-head text-center">
          <h2 class="title">Latest News</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div class="swiper-container blog-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="dz-media">
                  <a href="blog-detail.html"><img src="{{ config('app.user_url') }}images/blog/grid/blog4.jpg" alt="/"></a>
                </div>
                <div class="dz-info p-3">
                  <h6 class="dz-title">
                    <a href="blog-detail.html">Benefits of reading: Smart, Diligent, Happy, Intelligent</a>
                  </h6>
                  <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
                  <div class="dz-meta meta-bottom mt-3 pt-3">
                    <ul class="">
                      <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>24 March, 2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.2s">
                <div class="dz-media">
                  <a href="blog-detail.html"><img src="{{ config('app.user_url') }}images/blog/grid/blog3.jpg" alt="/"></a>
                </div>
                <div class="dz-info p-3">
                  <h6 class="dz-title">
                    <a href="blog-detail.html">10 Things you must know to improve your reading skills</a>
                  </h6>
                  <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
                  <div class="dz-meta meta-bottom mt-3 pt-3">
                    <ul class="">
                      <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>18 July, 2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.3s">
                <div class="dz-media">
                  <a href="blog-detail.html"><img src="{{ config('app.user_url') }}images/blog/grid/blog2.jpg" alt="/"></a>
                </div>
                <div class="dz-info p-3">
                  <h6 class="dz-title">
                    <a href="blog-detail.html">Benefits of reading: Smart, Diligent, Happy, Intelligent</a>
                  </h6>
                  <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
                  <div class="dz-meta meta-bottom mt-3 pt-3">
                    <ul class="">
                      <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 June, 2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.4s">
                <div class="dz-media">
                  <a href="blog-detail.html"><img src="{{ config('app.user_url') }}images/blog/grid/blog1.jpg" alt="/"></a>
                </div>
                <div class="dz-info p-3">
                  <h6 class="dz-title">
                    <a href="blog-detail.html">We Must know why reading is important for children?</a>
                  </h6>
                  <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor</p>
                  <div class="dz-meta meta-bottom mt-3 pt-3">
                    <ul class="">
                      <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>30 May, 2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Latest News End -->
    
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
          <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">
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
    <section class="py-5 newsletter-wrapper" style="background-image: url(public/user/images/background/bg1.jpg); background-size: cover;">
      <div class="container">
        <div class="subscride-inner">
          <div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
            <div class="col-xl-7 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
              <div class="section-head mb-0">
                <h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
              </div>
            </div>
            <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
              <form class="dzSubscribe style-1" action="" method="post">
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
@extends('user.layouts.footer');
<script>
    // Function to add ellipsis after a single line of dynamic text
    function addEllipsis() {
    
        var ellipsisElements = document.getElementsByClassName('ellipsis-text');
        for (var i = 0; i < ellipsisElements.length; i++) {
            var element = ellipsisElements[i];
            var lineHeight = parseFloat(getComputedStyle(element).lineHeight);
            var maxHeight = lineHeight; // Show only one line of text
            var textHeight = element.clientHeight;
            if (textHeight > maxHeight) {
                element.textContent = element.textContent.replace(/\W*\s(\S)*$/, '...');
            }
        }
    }

    // Call the function after the page has loaded
    window.addEventListener('load', addEllipsis);
</script>
