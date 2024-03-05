@include('user.layouts.header')
  <!-- Main Nav Start -->
  <!-- Menu wrapper end -->
  <!-- Page Title Start -->
  <div class="page-title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>{{$magazine->name}}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Page title end -->
  <!-- 1rd Block Wrapper Start -->
  <section class="utf_block_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">

          <div class="single-post">
        <div class="utf_post_title-area">
              <h2 class="utf_post_title">{{$magazine->title}}
            </h2> <br>
            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="{{ asset('user/images/news/lifestyle/travel5.jpg')}}"  width="300px;" alt="" /> </a>  </div>
             <br> <div class="utf_post_meta">  <span class="utf_post_date"><i class="fa fa-clock-o"></i>{{ $magazine->created_at->format('d M, Y') }}</span> <span class="post-hits"><i class="fa fa-eye"></i> 21</span> <span class="post-comment"><i class="fa fa-comments-o"></i> <a href="#" class="comments-link"><span>01</span></a></span> <span class="utf_post_date"><i class="fa fa-file-audio-o"></i> Audio</span></div>
            </div>
            <div class="utf_post_content-area">
              <div class="post-media post-featured-image"> <a href="images/news/lifestyle/health5.jpg" class="gallery-popup"><img src="images/news/lifestyle/health5.jpg" class="img-fluid" alt=""></a> <a ></a></div>
              <div class="entry-content">
                <p>{{$magazine->description	}} </p>                  
              </div>
              <div class="tags-area clearfix">
                <div class="post-tags">
					<span>Tags:</span>
					<a href="#"># Business</a>
					<a href="#"># Corporate</a>
					<a href="#"># Services</a>
					<a href="#"># Customer</a>
				</div>
              </div>

              <div class="share-items clearfix">
                <ul class="post-social-icons unstyled">
                  <li class="facebook"> <a href="#"> <i class="fa fa-facebook"></i> <span class="ts-social-title">Facebook</span></a> </li>
                  <li class="twitter"> <a href="#"> <i class="fa fa-twitter"></i> <span class="ts-social-title">Twitter</span></a> </li>
                  <li class="gplus"> <a href="#"> <i class="fa fa-google-plus"></i> <span class="ts-social-title">Google +</span></a> </li>
                  <li class="pinterest"> <a href="#"> <i class="fa fa-pinterest"></i> <span class="ts-social-title">Pinterest</span></a> </li>
                </ul>
              </div>
            </div>
          </div>

          <nav class="post-navigation clearfix">
            <div class="post-previous">
			  <a href="#"> <span><i class="fa fa-angle-left"></i>Previous Post</span>
				<h3> He makes you more like Christ.</h3>
              </a>
			</div>
            <div class="post-next">
			  <a href="#"> <span>Next Post <i class="fa fa-angle-right"></i></span>
				<h3> He makes you more like Christ.</h3>
              </a>
			</div>
          </nav>

          <div class="author-box">
            <div class="author-img pull-left"> <img src="http://127.0.0.1:8000/images/news/author.png" alt=" image"> </div>
            <div class="author-info">
              <h3>Miss Lisa Doe</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged.</p>
            </div>
          </div>

          <div class="related-posts block">
            <h3 class="utf_block_title"><span>Related Posts</span></h3>
            <div id="utf_latest_news_slide" class="owl-carousel owl-theme utf_latest_news_slide">
              <div class="item">
                <div class="utf_post_block_style clearfix">
                  <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="http://127.0.0.1:8000/images/news/lifestyle/travel5.jpg" alt=" image" /></a> </div>
                  <a class="utf_post_cat" href="#">Health</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_date"><i class="fa fa-clock-o"></i>ലക്കം 2</span> </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="utf_post_block_style clearfix">
                  <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="http://127.0.0.1:8000/images/news/lifestyle/health5.jpg" alt=" image" /></a> </div>
                  <a class="utf_post_cat" href="#">Health</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_date"><i class="fa fa-clock-o"></i>ലക്കം 2</span> </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="utf_post_block_style clearfix">
                  <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="http://127.0.0.1:8000/images/news/lifestyle/travel3.jpg" alt=" image" /></a> </div>
                  <a class="utf_post_cat" href="#">Travel</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_date"><i class="fa fa-clock-o"></i>ലക്കം 2</span> </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="utf_post_block_style clearfix">
                  <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="http://127.0.0.1:8000/images/news/lifestyle/travel4.jpg" alt=" image" /></a> </div>
                  <a class="utf_post_cat" href="#">Travel</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_date"><i class="fa fa-clock-o"></i>ലക്കം 2</span> </div>
                  </div>
                </div>
              </div>

			  <div class="item">
                <div class="utf_post_block_style clearfix">
                  <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="http://127.0.0.1:8000/images/news/lifestyle/travel5.jp')}}g" alt="" /></a> </div>
                  <a class="utf_post_cat" href="#">Health</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_date"><i class="fa fa-clock-o"></i>ലക്കം 2</span> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Post comment start -->
          <div id="comments" class="comments-area block">
            <h3 class="utf_block_title"><span>03 Comments</span></h3>
            <ul class="comments-list">
              <li>
                <div class="comment"> <img class="comment-avatar pull-left" alt="" src="http://127.0.0.1:8000/images/news/user1.png">
                  <div class="comment-body">
                    <div class="meta-data"> <span class="comment-author">Miss Lisa Doe</span> <span class="comment-date pull-right">15 Jan, 2022</span> </div>
                    <div class="comment-content">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged.</p>
                    </div>
                    <div class="text-left"> <a class="comment-reply" href="#"><i class="fa fa-share"></i> Reply</a> </div>
                  </div>
                </div>

                <ul class="comments-reply">
                  <li>
                    <div class="comment"> <img class="comment-avatar pull-left" alt="" src="http://127.0.0.1:8000/images/news/user2.png">
                      <div class="comment-body">
                        <div class="meta-data"> <span class="comment-author">Holly Spirit</span> <span class="comment-date pull-right">15 Jan, 2022</span> </div>
						<div class="comment-content">
						  <p>The Holy Spirit is an enigmatic figure. Some said it is a fragment of God's power in the form of a dove. Some said it is the Christian interpretation of divine femininity. The worst things that no angels or saints would give a concrete answer since they seemed to enjoy watching us tear our hair out.</p>
						</div>
						<div class="text-left"> <a class="comment-reply" href="#"><i class="fa fa-share"></i> Reply</a> </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="comment last"> <img class="comment-avatar pull-left" alt="" src="http://127.0.0.1:8000/images/news/user2.png">
                  <div class="comment-body">
                    <div class="meta-data"> <span class="comment-author">Miss Lisa Doe</span> <span class="comment-date pull-right">15 Jan, 2022</span> </div>
                    <div class="comment-content">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged.</p>
                    </div>
                    <div class="text-left"> <a class="comment-reply" href="#"><i class="fa fa-share"></i> Reply</a> </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- Post comment end -->

		  <!-- Comments Form Start -->
          <div class="comments-form">
            <h3 class="title-normal">Leave a comment</h3>
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" placeholder="Name" type="text" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" placeholder="Email" type="email" required>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" placeholder="Phone" type="text" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" placeholder="Subject" type="text" required>
                  </div>
                </div>
				<div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control required-field" id="message" placeholder="Comment" rows="10" required></textarea>
                  </div>
                </div>
              </div>
              <div class="clearfix">
                <button class="comments-btn btn btn-primary" type="submit">Post Comment</button>
              </div>
            </form>
          </div>
          <!-- Comments form end -->
        </div>

        <div class="col-lg-4 col-md-12">
          <div class="sidebar utf_sidebar_right">
            <div class="widget">
              <h3 class="utf_block_title"><span>Follow Us</span></h3>
              <ul class="social-icon">

                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>

                              <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>

            <div class="widget color-default">
              <h3 class="utf_block_title"><span>Popular News</span></h3>
              <div class="utf_list_post_block">
                <ul class="utf_list_post">
                  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/gadget3.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Gadgets</a> </div>
                      <div class="utf_post_content">
                        <h2 class="utf_post_title title-small"> <a href="#">ഒരു ക്രിസ്തു വിശ്വാസിയുടെ ജീവിതം?</a> </h2>
                        <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">പുസ്തകം 1</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i>ലക്കം 2</span> </div>
                      </div>
                    </div>
                  </li>

                  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/travel5.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Travel</a> </div>
                      <div class="utf_post_content">
                        <h2 class="utf_post_title title-small"> <a href="#">ഒരു ക്രിസ്തു വിശ്വാസിയുടെ ജീവിതം</a> </h2>
                        <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">പുസ്തകം 1</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i>ലക്കം 2</span> </div>
                      </div>
                    </div>
                  </li>

                  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/robot5.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Traveling</a> </div>
                      <div class="utf_post_content">
                        <h2 class="utf_post_title title-small"> <a href="#">ഒരു ക്രിസ്തു വിശ്വാസിയുടെ ജീവിതം</a> </h2>
                        <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">പുസ്തകം 1</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i>ലക്കം 2</span> </div>
                      </div>
                    </div>
                  </li>

                  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/food1.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Food</a> </div>
                      <div class="utf_post_content">
                        <h2 class="utf_post_title title-small"> <a href="#">The Holy Spirit sanctifies you...</a> </h2>
                        <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">പുസ്തകം 1</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i>ലക്കം 2</span> </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

            <div class="widget text-center"> <img class="banner img-fluid" src="images/banner-ads/ad-sidebar.png" alt="" /> </div>

            <div class="widget widget-tags">
              <h3 class="utf_block_title"><span>Popular Tags</span></h3>
              <ul class="unstyled clearfix">
                <li><a href="#">Business</a></li>
                <li><a href="#">Corporate</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Customer</a></li>
                <li><a href="#">Money</a></li>
                <li><a href="#">Health</a></li>
                <li><a href="#">Lifestyles</a></li>
                <li><a href="#">Traveling</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">Wordpress</a></li>
                <li><a href="#">Customer</a></li>
              </ul>
            </div>

            <div class="widget m-bottom-0">
              <h3 class="utf_block_title"><span>Newsletter</span></h3>
              <div class="utf_newsletter_block">
                <div class="utf_newsletter_introtext">
				  <h4>Subscribe Newsletter!</h4>
                  <p>Lorem ipsum dolor sit consectetur adipiscing elit Maecenas in pulvinar neque Nulla finibus lobortis pulvinar.</p>
                </div>
                <div class="utf_newsletter_form">
                  <form action="#" method="post">
                    <div class="form-group">
                      <input type="email" name="email" id="utf_newsletter_form-email" class="form-control form-control-lg" placeholder="E-Mail Address" autocomplete="off">
                      <button class="btn btn-primary">Subscribe</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- 1rd Block Wrapper End -->

<!-- Footer Start -->
@extends('user.layouts.footer')

</body>

<!-- Mirrored from utouchdesign.com/themes/envato/altroznews/single-post1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2023 06:22:48 GMT -->
</html>
