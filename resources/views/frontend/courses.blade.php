@extends('./frontend/app')
@section('contenu')
<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Popular Courses		
                </h1>	
                <p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/cousses')}}"> Popular Courses</a></p>
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start popular-courses Area --> 
<section class="popular-courses-area section-gap courses-page">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Popular Courses we offer</h1>
                    <p>There is a moment in the life of any aspiring.</p>
                </div>
            </div>
        </div>						
        <div class="row">
            @foreach ($courses as $course )
            <div class="single-popular-carusel col-lg-3 col-md-6">
                <div class="thumb-wrap relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>	
                        <img class="img-fluid" src="{{asset('/storage/course_images/'.$course->image)}}" alt="">
                    </div>
                   									
                </div>
                <div class="details">
                    <a href="course-details.html">
                        <h4>
                         {{$course->name}}
                        </h4>
                    </a>
                    <p>
                        {{$course->description}}
                    </p>
                </div>
            </div>	
                
            @endforeach
       
    
    </div>	
</section>
<!-- End popular-courses Area -->			
		

<!-- Start upcoming-event Area -->
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


@endsection