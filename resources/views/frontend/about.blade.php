@extends('./frontend/app')
@section('contenu')
<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    About Us				
                </h1>	
                <p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/about')}}"> About Us</a></p>
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start feature Area -->
<section class="feature-area pb-120">
    <div class="container">
        <div class="row">
            @foreach ($facilities as $facility)
            <div class="col-lg-4">
                <div class="single-feature">
                    <div class="title">
                        <h4>{{$facility->title}}</h4>
                    </div>
                    <div class="desc-wrap">
                        <p>
                           {{$facility->description}}
                        </p>
                    </div>
                </div>
            </div>
                
            @endforeach
        												
        </div>
    </div>	
</section>
<!-- End feature Area -->		

<!-- Start info Area -->
<section class="info-area pb-120">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 no-padding info-area-left">
                <img class="img-fluid" src="{{asset('frontend/img/hkll.jpg')}}" alt="">
            </div>
            <div class="col-lg-6 info-area-right">
                <h1>Who we are
                to Serave the nation</h1>
                <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.</p>
                <br>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
                </p>
            </div>
        </div>
    </div>	
</section>
<!-- End info Area -->	

<!-- Start course-mission Area -->
{{-- <section class="course-mission-area pb-120">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Goals to Achieve for the leadership</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>							
        <div class="row">
            <div class="col-md-6 accordion-left">

                <!-- accordion 2 start-->
                <dl class="accordion">
                    <dt>
                        <a href="">Success</a>
                    </dt>
                    <dd>
                        Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.
                    </dd>
                    <dt>
                        <a href="">Info</a>
                    </dt>
                    <dd>
                        Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. leo quam aliquet diam, congue laoreet elit metus eget diam.
                    </dd>
                    <dt>
                        <a href="">Danger</a>
                    </dt>
                    <dd>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. Proin ac metus diam.
                    </dd>
                    <dt>
                        <a href="">Warning</a>
                    </dt>
                    <dd>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. Proin ac metus diam.
                    </dd>                                    
                </dl>
                <!-- accordion 2 end-->
            </div>
            <div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
                <div class="overlay overlay-bg"></div>
                <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="{{asset('frontend/img/play.png')}}" alt=""></a>
            </div>
        </div>
    </div>	
</section> --}}
<!-- End course-mission Area -->
        


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
                                        


<!-- End search-course Area -->			

<!-- Start review Area -->

<!-- End review Area -->					


    
@endsection