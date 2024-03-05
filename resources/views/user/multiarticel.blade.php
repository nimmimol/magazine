    <link type="text/css" href="{{ config('app.user_url') }}pdf_js_css/css/style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Play:400,700">
    <link type="text/css" href="{{ config('app.user_url') }}pdf_js_css/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- add js code -->
	<script src="{{ config('app.user_url') }}pdf_js_css/js/jquery.js"></script>
    <script src="{{ config('app.user_url') }}pdf_js_css/js/jquery_no_conflict.js"></script>
    <script src="{{ config('app.user_url') }}pdf_js_css/js/turn.js"></script>              
    <script src="{{ config('app.user_url') }}pdf_js_css/js/wait.js"></script>
    <script src="{{ config('app.user_url') }}pdf_js_css/js/jquery.mousewheel.js"></script>
	<script src="{{ config('app.user_url') }}pdf_js_css/js/jquery.fullscreen.js"></script>
    <script src="{{ config('app.user_url') }}pdf_js_css/js/jquery.address-1.6.min.js"></script>
	<script src="{{ config('app.user_url') }}pdf_js_css/js/pdf.js"></script>
	<script src="{{ config('app.user_url') }}pdf_js_css/js/onload.js"></script>

  
    <section class="content-inner overlay-white-middle">
        <div id="fb5-ajax" data-cat="MyArticel" data-template="true"> 	
            <div class="fb5-bcg-book"></div>
                <div class="fb5-preloader"></div>
     
    <div class="fb5" id="fb5">      
        
        <!-- CONFIGURATION BOOK -->
        <section id="config">
          <ul>
            <li key="page_width">918</li>               <!-- width for page -->
            <li key="page_height">1298</li>             <!-- height for page -->
            <li key="gotopage_width">25</li>            <!-- width for field input goto page -->
            <li key="zoom_double_click">1</li>          <!-- value zoom after double click -->
            <li key="zoom_step">0.1</li>				<!-- zoom step ( if click icon zoomIn or zoomOut -->
            <li key="toolbar_visible">true</li>			<!-- enabled/disabled toolbar -->
            <li key="tooltip_visible">true</li>			<!-- enabled/disabled tooltip for icon -->
            <li key="deeplinking_enabled">true</li>   	<!-- enabled/disabled deeplinking -->  
            <li key="lazy_loading_pages">false</li>		<!-- enabled/disabled lazy loading for pages in flipbook -->
            <li key="lazy_loading_thumbs">false</li>	<!-- enabled/disabled lazdy loading for thumbs -->
            <li key="double_click_enabled">true</li> 	<!-- enabled/disabled double click mouse for flipbook -->                 
            <li key="rtl">false</li>					<!-- enabled/disabled 'right to left' for eastern countries -->
            <li key="pdf_url"></li>		                <!-- pathway to a pdf file ( the file will be read live ) -->
            <li key="pdf_scale">1</li>					<!-- to live a pdf file (if you want to have a strong zoom - increase the value) -->
            <li key="page_mode">double</li>             <!-- value to 'single', 'double', or 'auto' -->
            <li key="sound_sheet">img/turning_page.mp3</li>           <!-- sound for sheet -->
         </ul> 
        </section>
        <a href="{{ url()->previous() }}" id="fb5-button-back">&lt; Back </a>      
        <div id="fb5-container-book">     
            <section id="fb5-deeplinking">
              <ul>
                  <li data-address="page1" data-page="1"></li>
                  <li data-address="page2" data-page="2"></li>
                  <li data-address="page3" data-page="3"></li>
                  <li data-address="page4" data-page="4"></li>
                  <li data-address="page5" data-page="5"></li>
                  <li data-address="page6" data-page="6"></li>
                  <li data-address="page7" data-page="7"></li>
                  <li data-address="page8" data-page="8"></li>
                  <!-- <li data-address="page9" data-page="9"></li>
                  <li data-address="page10" data-page="10"></li>
                  <li data-address="page11" data-page="11"></li>
                  <li data-address="page12" data-page="12"></li> -->
              </ul>
            </section>           
            <section id="fb5-about">
            </section>         
            <section id="links"></section>             
            <div id="fb5-book">        
                                  
            <div data-background-image=""> 
                <div class="fb5-cont-page-book">                                
                        <div class="fb5-gradient-page"></div>                             
                            <canvas id="canv1">{{$articeldata->title}}</canvas>                               
                                <div class="fb5-page-book" style="padding-top: 350px;">
                                <h1 class="text-center" style="font-size: large;"> {{$articeldata->title}}</h1>                                          
                            </div>      
                        </div>                                   
                    </div>  
                    <div data-background-image="">
    <div class="fb5-cont-page-book">
        <div class="fb5-gradient-page"></div>
        <canvas id="canv2"></canvas>
        <div class="fb5-page-book" style="padding-top:150px;">
            <h1 style="font-size: large;">{{$articeldata->description}} </h1>
            <br>
            
        <h1>    <audio controls>
                <source src="https://divine.alp-ts.in/public/artical/images/{{$articeldata->audio}}" type="audio/mp3">
                Your browser does not support the audio element.
            </audio></h1>
        </div>
    </div>
</div>
     
                        
                        @php
                        $articelimages=DB::table('articalimage')->where('artical_id',$articeldata->id)->get();

                        @endphp
                                       
                        @foreach($articelimages as $image)
                        <div data-background-image="https://divine.alp-ts.in/public/artical/images/{{$image->image}}">                          
                            <div class="fb5-cont-page-book">                            
                                <div class="fb5-gradient-page"></div>   
                                <canvas id="canv4">


                                <audio src=""></audio>
                                </canvas> 
                                    <div class="fb5-page-book">                                                 
                                    </div>
                            </div>                                
                        </div>   
                        @endforeach
                        
                        




                              
                      
                                     
                    
                                     
                         <!-- begin page 10 -->          
                        <div data-background-image="pages/10.jpg">
                          
                               
                             <!-- container page book --> 
                             <div class="fb5-cont-page-book">
                             
                                <!-- gradient for page -->
                                <div class="fb5-gradient-page"></div>
                                
                             
                                <!-- PDF.js --> 
                                <canvas id="canv10"></canvas> 
                                                                              
                               
                                 <!-- description for page --> 
                                <div class="fb5-page-book">
                                                 
                                </div> 
                                          
                                                
                              </div> <!-- end container page book --> 
                                
                        </div>
                        <!-- end page 10 -->
                          
                        
                      
                                     
                                     
                         <!-- begin page 11 -->          
                        <div data-background-image="pages/11.jpg">
                          
                               
                             <!-- container page book --> 
                             <div class="fb5-cont-page-book">
                             
                                <!-- gradient for page -->
                                <div class="fb5-gradient-page"></div>
                                
                             
                                <!-- PDF.js --> 
                                <canvas id="canv11"></canvas> 
                                                                              
                               
                                 <!-- description for page --> 
                                <div class="fb5-page-book">
                                                 
                                </div> 
                   
                              </div> <!-- end container page book --> 
                                
                        </div>
                        <!-- end page 11 -->
                          
                        
                      
                                     
                                     
                         <!-- begin page 12 -->          
                     
                        <!-- end page 12 -->
              
            
          
              
            </div>
            <!-- END PAGES -->
            
        </div>
        <!-- END CONTAINER BOOK -->
    
        <!-- BEGIN FOOTER -->
        <div id="fb5-footer">
        
            <div class="fb5-bcg-tools"></div>
            
            
             
            <a id="fb5-logo" target="_blank" href="http://codecanyon.net/user/flashmaniac?ref=flashmaniac">
                <img alt="" src="img/logo.png">
                 
            </a>
            
            <div class="fb5-menu" id="fb5-center">
                <ul>
                
                    <!-- icon_home -->
                    <li>
                        <a title="show home page" class="fb5-home"><i class="fa fa-home"></i></a>
                    </li>
                                    
                    
                    <!-- icon download -->
                    <li>
                        <a title="download pdf" class="fb5-download" href="img/file.zip"><i class="fa fa-download"></i></a>
                    </li>
                                
                            
                    <!-- icon arrow left -->
                    <li>
                        <a title="prev page" class="fb5-arrow-left"><i class="fa fa-chevron-left"></i>
    </a>
                    </li>
                                    
                    
                      <!-- icon arrow right -->
                    <li>
                        <a title="next page" class="fb5-arrow-right"><i class="fa fa-chevron-right"></i>
    </a>
                    </li>
                                    
                    
                    <!-- icon_zoom_in -->                     
                    <li>
                        <a title="zoom in" class="fb5-zoom-in"><i class="fa fa-search-plus"></i></a>
                    </li>
                                                
                               
                    
                    <!-- icon_zoom_out -->                 
                    <li>
                        <a title="zoom out" class="fb5-zoom-out"><i class="fa fa-search-minus"></i></a>
                    </li>
                                    
                    
                     <!-- icon_zoom_auto -->
                    <li>
                        <a title="zoom auto" class="fb5-zoom-auto"><i class="fa fa-search"></i></a>
                    </li>
                                    
                               
                    <!-- icon_allpages -->
                    <li>
                        <a title="show all pages" class="fb5-show-all"><i class="fa fa-list"></i></a>
                    </li>
                                                    
                    
                    <!-- icon fullscreen -->                 
                    <li>
                        <a title="full/normal screen" class="fb5-fullscreen"><i class="fa fa-expand"></i></a>
                    </li>
                                    
                  
                    
                </ul>
            </div>
            
            <div class="fb5-menu" id="fb5-right">
                <ul>              
                    <!-- icon page manager -->                 
                    <li class="fb5-goto">
                        <label for="fb5-page-number" id="fb5-label-page-number"></label>
                        <input type="text" id="fb5-page-number" style="width: 25px;"> 
                        <span id="fb5-page-number-two"></span>
                        
                    </li>                
                </ul>
            </div>
            
            
        
        </div>
        <!-- END FOOTER -->
     
        <!-- BEGIN ALL PAGES -->
        <div id="fb5-all-pages" class="fb5-overlay">
    
          <section class="fb5-container-pages">
    <div id="fb5-menu-holder">
        <ul id="fb5-slider">       	 
            <!-- thumb 1 -->
            <li class="1">
                <p>gjsvggd</p>
            </li>
            <!-- thumb 2 -->
            <li class="2">
                <img alt="" data-src="https://divine.alp-ts.in/public/user/artical_imagepng">										  
            </li>
            <!-- thumb 3 -->
            <li class="3">
                <img alt="" data-src="pages/3_.jpg">
                <p>Your paragraph goes here.</p>
            </li>
            <!-- thumb 4 -->
            <li class="4">
                <img alt="" data-src="pages/4_.jpg">
            </li>
            <!-- thumb 5 -->								 	
            <li class="5">
    <img alt="" data-src="{{  $articeldata->title }}">
    {{ $articeldata->title }}
</li>
            <!-- thumb 6 and 7 -->
            <li class="6">
                <img alt="" data-src="pages/6_7_.jpg">
            </li>
            <!-- thumb 8 and 9 -->
            <li class="8">
                <img alt="" data-src="pages/8_9_.jpg">
            </li>
            <!-- thumb 10 -->
            <li class="10">
                <img alt="" data-src="pages/10_.jpg">
            </li>
            <!-- thumb 11 -->
            <li class="11">
                <img alt="" data-src="pages/11_.jpg">
            </li>
            <!-- thumb 12 -->
            <li class="12">
                <img alt="" data-src="pages/12_.jpg">
            </li>
        </ul>
    </div>
</section>

    
       </div>
        <!-- END ALL PAGES -->           
      
      
        <!-- BEGIN SOUND FOR SHEET  -->
        <audio preload="auto" id="sound_sheet"></audio>  
        <!-- END SOUND FOR SHEET -->
        
      
        <!-- BEGIN CLOSE LIGHTBOX  -->
        <div id="fb5-close-lightbox">
         <i class="fa fa-times pull-right"></i>
        </div>  
        <!-- END CLOSE LIGHTBOX -->
    
    
    </div>
    <!-- END STRUCTURE HTML FLIPBOOK -->

     
</div>
</section>

