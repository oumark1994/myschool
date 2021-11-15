@extends('./frontend/app')
@section('contenu')
<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Gallery				
                </h1>	
                <p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/gallery')}}"> Gallery</a></p>
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->	
    
<!-- Start gallery Area -->
<section class="gallery-area section-gap">
    <div class="container">
        <div class="row">
            @foreach ($galleries as $gallery)
            <div class="col-lg-6">
                <a href="{{asset('/storage/gallery_images/'.$gallery->image_gallery)}}" class="img-gal">
                    <div class="single-imgs relative">		
                        <div class="overlay overlay-bg"></div>
                        <div class="relative">				
                            <img class="img-responsive" width="350" height="250px" src="{{asset('/storage/gallery_images/'.$gallery->image_gallery)}}" alt="">				
                        </div>
                    </div>
                </a>
            </div>
                
            @endforeach
        </div>
    </div>	
</section>
<!-- End gallery Area -->
<!-- Start search-course Area -->
<section class="search-course-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-12 p-5 col-md-12 search-course-left">
                <h1 class="text-white text-center">
                    Get reduced fee <br>
                    during this Summer!
                </h1>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
                </p>
                <div class="row details-content">
                    <div class="col single-detials">
                        <span class="lnr lnr-graduation-hat"></span>
                        <a href="#"><h4>Expert Instructors</h4></a>		
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>						
                    </div>
                    <div class="col single-detials">
                        <span class="lnr lnr-license"></span>
                        <a href="#"><h4>Certification</h4></a>		
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>						
                    </div>								
                </div>
            </div>
            
        

     
        </div>
    </div>	
</section>
                                        



@endsection