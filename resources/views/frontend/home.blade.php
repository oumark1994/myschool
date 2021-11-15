@extends('./frontend/app')
        <!-- start banner Area -->
@section('contenu')
@foreach ($sliders as $slider )
    


        <section class="banner-area relative" id="home">
            <div class="overlay overlay-bg"></div>	
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-between">
                    <div class="banner-content col-lg-9 col-md-12">
                        <h1 class="text-uppercase">
                           {{$slider->description1}}		
                        </h1>
                        <p class="pt-10 pb-10">
                            {{$slider->description2}}
                        </p>
                        <a href="#" class="primary-btn text-uppercase">Get Started</a>
                    </div>										
                </div>
            </div>					
        </section>
        @endforeach
        <!-- End banner Area -->

        {{-- <!-- Start feature Area -->
        <section class="feature-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-feature">
                            <div class="title">
                                <h4>Learn Online Courses</h4>
                            </div>
                            <div class="desc-wrap">
                                <p>
                                    Usage of the Internet is becoming more common due to rapid advancement
                                    of technology.
                                </p>
                                <a href="#">Join Now</a>									
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-feature">
                            <div class="title">
                                <h4>No.1 of universities</h4>
                            </div>
                            <div class="desc-wrap">
                                <p>
                                    For many of us, our very first experience of learning about the celestial bodies begins when we saw our first.
                                </p>
                                <a href="#">Join Now</a>									
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-feature">
                            <div class="title">
                                <h4>Huge Library</h4>
                            </div>
                            <div class="desc-wrap">
                                <p>
                                    If you are a serious astronomy fanatic like a lot of us are, you can probably remember that one event.
                                </p>
                                <a href="#">Join Now</a>									
                            </div>
                        </div>
                    </div>												
                </div>
            </div>	
        </section>
        <!-- End feature Area --> --}}
                
        <!-- Start popular-course Area -->
            <div class="container mt-5">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Popular Courses we offer</h1>
                            <p>There is a moment in the life of any aspiring.</p>
                        </div>
                    </div>
                </div>
               
                    
           					
                <div class="row">
                    <div class="active-popular-carusel">
                        @foreach ($courses as $course )
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>	
                                    <img class="img-fluid" src="{{asset('/storage/course_images/'.$course->image)}}" alt="">
                                </div>
                           								
                            </div>
                            <div class="details">
                                <a href="#">
                                    <h4>
                                     {{$course->name}}
                                    </h4>
                                </a>
                              
                            </div>
                        </div>	
                        @endforeach	
              							
                    </div>
                </div>
               
            </div>	
      
        <section class="upcoming-event-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Upcoming Events of our Institute</h1>
                            <p>If you are a serious astronomy fanatic like a lot of us</p>
                        </div>
                    </div>
                </div>								
                <div class="row">
                    <div class="active-upcoming-event-carusel">
                        @foreach ($events as $event )
                        <div class="single-carusel row align-items-center">
                            <div class="col-12 col-md-6 thumb">
                                <img class="img-responsive" width="300px" height="200px" src="{{asset('/storage/event_images/'.$event->image)}}" alt="">
                            </div>
                            <div class="detials col-12 col-md-6">
                                <p>{{$event->date}}</p>
                                <a href="#"><h4>{{$event->title}}</h4></a>
                                <p>
                                   {{$event->description}}
                                </p>
                            </div>
                        </div>
                            
                        @endforeach
                       

                    </div>
                </div>
            </div>	
        </section>
        <!-- End upcoming-event Area -->
                    
        <!-- Start review Area -->
        <section class="review-area section-gap relative">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">What our students like about our institutions</h1>
                        <p>There is a moment in the life of any aspiring.</p>
                    </div>
                </div>
            </div>
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row">
                    <div class="active-review-carusel">
                        <div class="single-review item">
                            <div class="title justify-content-start d-flex">
                                <a href="#"><h4>Fannie Rowe</h4></a>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <p>
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                            </p>
                        </div>
                        <div class="single-review item">
                            <div class="title justify-content-start d-flex">
                                <a href="#"><h4>Hulda Sutton</h4></a>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <p>
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                            </p>
                        </div>
                        <div class="single-review item">
                            <div class="title justify-content-start d-flex">
                                <a href="#"><h4>Fannie Rowe</h4></a>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <p>
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                            </p>
                        </div>
                        <div class="single-review item">
                            <div class="title justify-content-start d-flex">
                                <a href="#"><h4>Hulda Sutton</h4></a>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <p>
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                            </p>
                        </div>	
                        <div class="single-review item">
                            <div class="title justify-content-start d-flex">
                                <a href="#"><h4>Fannie Rowe</h4></a>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <p>
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                            </p>
                        </div>
                        <div class="single-review item">
                            <div class="title justify-content-start d-flex">
                                <a href="#"><h4>Hulda Sutton</h4></a>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <p>
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                            </p>
                        </div>
                        <div class="single-review item">
                            <img src="{{asset('frontend/img/r1.png')}}" alt="">
                            <div class="title justify-content-start d-flex">
                                <a href="#"><h4>Fannie Rowe</h4></a>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <p>
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                            </p>
                        </div>
                        <div class="single-review item">
                            <div class="title justify-content-start d-flex">
                                <a href="#"><h4>Hulda Sutton</h4></a>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <p>
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                            </p>
                        </div>																												
                    </div>
                </div>
            </div>	
        </section>
        <!-- End review Area -->	
        
      
        <!-- End cta-one Area -->

        <!-- Start blog Area -->
        <section class="blog-area section-gap" id="blog">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Latest posts from our Blog</h1>
                            <p>In the history of modern astronomy there is.</p>
                        </div>
                    </div>
                </div>					
                <div class="row">
                    @foreach ($latestgalleries as $latestgallerie)
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('/storage/gallery_images/'.$latestgallerie->image_gallery)}}" alt="">								
                        </div>
                        <a href="blog-single.html">
                            <h5>{{$latestgallerie->title}}</h5>
                        </a>
                        
                    </div>
                        
                    @endforeach
                   
                   						
                </div>
            </div>	
        </section>
        <!-- End blog Area -->			
        

@endsection
        <!-- End cta-two Area -->
                    
     