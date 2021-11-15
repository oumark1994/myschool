@extends('./frontend/app')
@section('contenu')
<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Events				
                </h1>	
                <p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/events')}}"> Events</a></p>
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->	
    
<!-- Start events-list Area -->
<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row align-items-center">
            @foreach ($events as $event )
            <div class="col-lg-6 pb-30">
                <div class="single-carusel row align-items-center">
                    <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="{{asset('/storage/event_images/'.$event->image)}}" alt="">
                    </div>
                    <div class="detials col-12 col-md-6">
                        <p>{{$event->date}}</p>
                        <a href="event-details.html"><h4>{{$event->title}}</h4></a>
                        <p>
                            {{$event->description}}
                        </p>
                    </div>
                </div>
            </div>
                
            @endforeach
      
         																		
        </div>
    </div>	
</section>
<!-- End events-list Area -->
    


@endsection