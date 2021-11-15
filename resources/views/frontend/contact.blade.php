@extends('./frontend/app')
@section('contenu')
<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Contact Us				
                </h1>	
                <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Contact Us</a></p>
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->				  

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5>Tesano ,Accra Ghana</h5>
                        <p>
                            Achimota main road
                        </p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5>+233238842788</h5>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5>oumarfilston@gmail.com</h5>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>														
            </div>
            <div class="col-lg-8">
                @if (count($errors) >0)
                <div class="alert alert-danger">
                   <ul>
                     @foreach ($errors->all() as $error)
                     
                     <li>{{$error}}</li>
                     @endforeach
                   </ul>
                   </div>
                @endif 
                @if (Session::has('status'))
                <div class="alert alert-success">
                  {{Session::get('status')}}
            </div>
               @endif
               
                <form class="form-wrap" method="POST" action="{{url('/visitors')}}">
                    {{ csrf_field() }}
                    <input type="text" class="form-control p-2 " name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
                    <input type="email" class="form-control p-2 my-3" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >

                    <input type="text" class="form-control p-2 my-3" name="title" placeholder="Enter title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
                  
                    <textarea class="form-control p-2 my-3 mt-1" rows="6"  name="message"></textarea>								
                    <button class="primary-btn text-uppercase">Send Messsage</button>
                </form>
            </div>
        </div>
    </div>	
</section>
@endsection
<!-- End contact-page Area -->