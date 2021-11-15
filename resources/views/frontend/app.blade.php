
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    @foreach ($settings as $setting )
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Met
        a -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>{{$setting->name}}</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('frontend/css/linearicons.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">							
        <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">			
        <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">			
        <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
        @livewireStyles	
    </head>
    <body>
      
      <header id="header" id="home">
          <div class="header-top">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                          <ul>
                            <li><a href="{{$setting->facebook_link}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$setting->twitter_link}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$setting->instagram_link}}"><i class="fa fa-instagram"></i></a></li>
                          </ul>			
                      </div>
                      <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                          <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">{{$setting->mobile}}</span></a>
                          <a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">{{$setting->email}}</span></a>			
                      </div>
                  </div>			  					
              </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <a href="index.html"><img src="{{asset('/storage/logo_images/'.$setting->logo)}}" alt="" title="" width="45px" height="45px" /></a>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('/about')}}">About</a></li>
                  <li><a href="{{url('/courses')}}">Courses</a></li>
                  <li><a href="{{url('/events')}}">Events</a></li>
                  <li><a href="{{url('/gallery')}}">Gallery</a></li>
                				          					          		          
                  <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
              </nav><!-- #nav-menu-container -->		    		
            </div>
        </div>
      </header><!-- #header -->
      @yield('contenu')
  <!-- start footer Area -->	
   <footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
      
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Quick Menu</h4>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/about')}}">About</a></li>
                        <li><a href="{{url('/courses')}}">Courses</a></li>                   
                          

                    </ul>
                                							
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4></h4>
                    <ul>
                        <li><a href="{{url('/events')}}">Events</a></li>
                        <li><a href="{{url('/gallery')}}">Gallery</a></li>    

                        <li><a href="{{url('/contact')}}">Contact</a></li>
                    </ul>								
                </div>
            </div>
    																	
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Stay update with our latest</p>
                    <div class="" id="mc_embed_signup">
                         <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                          <div class="input-group">
                            <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                            <div class="input-group-btn">
                              <button class="btn btn-default" type="submit">
                                <span class="lnr lnr-arrow-right"></span>
                              </button>    
                            </div>
                                <div class="info"></div>  
                          </div>
                        </form> 
                    </div>
                </div>
            </div>											
        </div>
        <div class="footer-bottom row align-items-center justify-content-between">
            <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by kollatec
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-6 col-sm-12 footer-social">
                
                    <a href="{{$setting->facebook_link}}"><i class="fa fa-facebook"></i></a>
                    <a href="{{$setting->twitter_link}}"><i class="fa fa-twitter"></i></a>
                    <a href="{{$setting->instagram_link}}"><i class="fa fa-instagram"></i></a>
                  
            </div>
        </div>						
    </div>
</footer>	
<!-- End footer Area -->	


<script src="{{asset('frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>			
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="{{asset('frontend/js/easing.min.js')}}"></script>			
<script src="{{asset('frontend/js/hoverIntent.js')}}"></script>
<script src="{{asset('frontend/js/superfish.min.js')}}"></script>	
<script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>	
<script src="{{asset('frontend/js/jquery.tabs.min.js')}}"></script>						
<script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>	
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>									
<script src="{{asset('frontend/js/mail-script.js')}}"></script>	
<script src="{{asset('frontend/js/main.js')}}"></script>
@livewireScripts	
</body>
@endforeach
</html>
