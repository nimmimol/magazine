@include('user.layouts.header')
  
  <div class="page-content bg-white">
    <!--banner-->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(public/user/images/background/bg3.jpg);">
      <div class="container">
        <div class="dz-bnr-inr-entry">
          <h1>About us</h1>
          <nav aria-label="breadcrumb" class="breadcrumb-row">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"> Home</a></li>
              <li class="breadcrumb-item">About us</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    
    <!--Our Mission Section-->
    <section class="content-inner overlay-white-middle">
      <div class="container">
        <div class="row about-style1 align-items-center">
          <div class="col-lg-6 m-b30">
            <div class="row sp10 about-thumb">
              <div class="col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="split-box">
                  <div>
                    <img class="m-b30" src="{{ config('app.user_url') }}images/about/about1.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="split-box ">
                  <div>
                    <img class="m-b20 aos-item" src="{{ config('app.user_url') }}images/about/about2.jpg" alt="" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                  </div>
                </div>
                <div class="exp-bx aos-item"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                  <div class="exp-head">
                    <div class="counter-num">
                      <h2><span class="counter">46</span><small>+</small></h2>
                    </div>
                    <h6 class="title">Years of Founding</h6>
                  </div>
                  <div class="exp-info">
                    <ul class="list-check primary">
                      <li>Divine Mercy Home</li>
                      <li>Home for destitute women </li>
                      <li>Samaritan Home</li>
                      <li>De-addiction centre</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
            <div class="about-content px-lg-4">
              <div class="section-head style-1">
                <h2 class="title">About Us</h2>
                <p style="text-align: justify;">The Potta Ashram was founded in 1977 as the centre to direct and to co-ordinate popular mission retreats. It functioned as the headquarters and residences of the directors of the center, Frs. George Panackal V.C. and Romulus Nedumchalil, etc., who used to conduct mission retreats and visitations from here.[1] A few years later, Fr. Mathew Naickomparambil was transferred to Potta. Fr. Naickomparambil was involved with propagating the Charismatic Renewal. The Renewal movement that began in 1966 at the Duquesne University in Pittsburgh, U.S.A.[2] was brought to India in February 1972.



                Fr. George Panackal became impressed by Fr. Naickomparambil's sermons which were the result of his involvement in the Charismatic Renewal. Fr. Naickomparambil's propagation of the Charismatic Renewal drew in thousands of people. After a few years, a three-storey building was put up to conduct the retreats, primarily intended for the people coming to the Ashram for further consultations from places where the Vincentians' Popular Mission Retreats were being conducted. But as Fr. Naickomparambil's Charismatic Renewal retreats grew in popularity, the Potta Ashram itself became a center for numerous retreats.</p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <!--icon-box3 section-->
   <!--  <section class="content-inner-1 bg-light">
      <div class="container">
        <div class="section-head text-center">
          <h2 class="title">Our Mission</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
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
          <div class="col-lg-4 col-md-6">
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
          <div class="col-lg-4 col-md-12">
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
    </section> -->
  <!-- 1rd Block Wrapper End -->
@extends('user.layouts.footer')
