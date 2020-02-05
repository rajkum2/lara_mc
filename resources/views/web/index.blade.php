<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Muskcharge Powerbank Sharing | Get | Charge | Return</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="Get a Powerbank on Rental Basis">
<meta name="keywords" content="one page, html, template, car, car rental, taxi, cab, booking, responsive, business">
<meta name="author" content="sharjeel anjum">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Bootstrap css -->
<link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('web/css/bootstrap-datetimepicker.min.css') }}" />

<!-- Fontawesome css -->
<link rel="stylesheet" href="{{ asset('web/css/font-awesome.min.css') }}">

<!-- Magnific-popup css -->
<link rel="stylesheet" href="{{ asset('web/css/magnific-popup.css') }}">

<!-- Rev Slider css -->
<link rel="stylesheet" href="{{ asset('web/js/revolution-slider/css/settings.css') }}">

<!-- Owl Carousel css -->
<link rel="stylesheet" href="{{ asset('web/js/revolution-slider/css/owl.theme.css') }}">
<link rel="stylesheet" href="{{asset('web/css/owl.carousel.css')}}">

<!-- Main css -->
<link rel="stylesheet" href="{{asset('web/css/style-green.css')}}">
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<div class="preloader">
  <div class="cssload-dots">
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
  </div>
</div>

<!-- Navigation Section -->
<!-- <div class="navbar custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header"> -->
<div class="navbar custom-navbar sticky-wrapper is-sticky" role="navigation" id="header">
  <div class="container"> 
    
    <!-- NAVBAR HEADER -->
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
        <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> 
        <span class="icon icon-bar"></span> 
      </button>
      <!-- lOGO TEXT HERE --> 
      <!-- <a href="index.html" class="navbar-brand">MUSK <span>Charge</span></a> -->
      <a href="{{url('/')}}">
        <img src="{{asset('web/images/logo7.png')}}" alt="HTML tutorial" style="width:144px;height:50px;border:0;margin-top: 12px;margin-left: 12px;">
      </a>
    </div>
    
    <!-- NAVIGATION LINKS -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/" class="smoothScroll">Home</a></li>
        <li><a href="#team" class="smoothScroll">How it Works</a></li>
        <li><a href="#service" class="smoothScroll">Our Products</a></li>
        <!-- <li><a href="#service" class="smoothScroll">Service</a></li> -->
        <!-- <li><a href="#team" class="smoothScroll">Support</a></li>         -->
        <!-- <li><a href="#testimonials" class="smoothScroll">Partners</a></li> -->
        <li><a href="#about" class="smoothScroll">About</a></li>
         <li><a href="#partners" class="smoothScroll">Partners</a></li>
        <li><a href="{{url('/contact')}}" class="smoothScroll">Contact</a></li>
        <li><span class="calltxt"></i> Download App</span></li>
      </ul>
    </div>
  </div>
</div>

<!-- Slider Section -->
<div class="tp-banner-container" id="slider">
  <div class="tp-banner" >
    <ul>      
      <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="{{asset('web/images/dummy.png')}}" data-lazyload="{{asset('web/images/bg3.png')}}">
        <!-- <div class="caption lfb large-title tp-resizeme slidertext2" data-x="center" data-y="280" data-speed="600" data-start="1000">One Page Parallax Landing Template</div>
        <div class="caption lfb large-title tp-resizeme slidertext1" data-x="center" data-y="310" data-speed="600" data-start="1600">Welcome to <span>Car Rental</span> Template</div>
        <div class="caption lfb large-title tp-resizeme sliderbtn" data-x="center" data-y="400" data-speed="600" data-start="2200"><a href="#." class="section-btn">Get Started</a></div> -->
      </li>
      <!-- <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/dummy.png" data-lazyload="images/banner2.jpg">
        <div class="caption lfb large-title tp-resizeme slidertext2" data-x="center" data-y="280" data-speed="600" data-start="1000">One Page Parallax Landing Template</div>
        <div class="caption lfb large-title tp-resizeme slidertext1" data-x="center" data-y="310" data-speed="600" data-start="1600">Book Your <span>Trip Car</span> Today</div>
        <div class="caption lfb large-title tp-resizeme sliderbtn" data-x="center" data-y="400" data-speed="600" data-start="2200"><a href="#." class="section-btn">Get Started</a></div>
      </li> -->
    </ul>
  </div>
</div>
<!-- Slider End -->

<!-- Cars Section -->
<div class="parallax-section">
  <div class="container">
    <div class="section-title">
      <h3>Download <span>Now</span></h3>
      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam. Maecenas odio nisi, efficitur eget</p> -->
    </div>
    <div class="vehiclesList">
        <div class="row">
            <div class="col-md-3">
              <!-- <h3>BMW 3-SERIES</h3>
              <div class="subtitle">ModernLine</div>
              <div class="carPrice"> <strong>$99</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a>-->
             </div>
            <div class="col-md-6"><a href="{{asset('images/cars/01.jpg')}}" class="image-popup"><img src="{{asset('images/cars/01.jpg')}}" alt="" /></a></div>
            <div class="col-md-3">
              <!-- <div class="carinfo">
                <ul>
                  <li>Doors: <strong>4</strong></li>
                  <li>Passengers: <strong>5</strong></li>
                  <li>Luggage: <strong>2 Bags</strong></li>
                  <li>Transmission: <strong>Automatic</strong></li>
                  <li>Air conditioning: <strong>Dual Zone</strong></li>
                  <li>Minimum age: <strong>35 years</strong></li>
                </ul>
              </div> -->
            </div>
          </div>
      <!-- <ul class="carsmodals">
        <li class="item">
          <div class="row">
            <div class="col-md-3">
              <h3>BMW 3-SERIES</h3>
              <div class="subtitle">ModernLine</div>
              <div class="carPrice"> <strong>$99</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
            <div class="col-md-6"><a href="images/cars/01.jpg" class="image-popup"><img src="images/cars/01.jpg" alt="" /></a></div>
            <div class="col-md-3">
              <div class="carinfo">
                <ul>
                  <li>Doors: <strong>4</strong></li>
                  <li>Passengers: <strong>5</strong></li>
                  <li>Luggage: <strong>2 Bags</strong></li>
                  <li>Transmission: <strong>Automatic</strong></li>
                  <li>Air conditioning: <strong>Dual Zone</strong></li>
                  <li>Minimum age: <strong>35 years</strong></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="row">
            <div class="col-md-3">
              <h3>Subaru Impreza</h3>
              <div class="subtitle">Premium</div>
              <div class="carPrice"> <strong>$125</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
            <div class="col-md-6"><a href="images/cars/02.jpg" class="image-popup"><img src="images/cars/02.jpg" alt="" /></a></div>
            <div class="col-md-3">
              <div class="carinfo">
                <ul>
                  <li>Doors: <strong>4</strong></li>
                  <li>Passengers: <strong>5</strong></li>
                  <li>Luggage: <strong>2 Bags</strong></li>
                  <li>Transmission: <strong>Automatic</strong></li>
                  <li>Air conditioning: <strong>Dual Zone</strong></li>
                  <li>Minimum age: <strong>35 years</strong></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="row">
            <div class="col-md-3">
              <h3>Hyundai Santa Fe XL</h3>
              <div class="subtitle">Streetsville H</div>
              <div class="carPrice"> <strong>$199</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
            <div class="col-md-6"><a href="images/cars/03.jpg" class="image-popup"><img src="images/cars/03.jpg" alt="" /></a></div>
            <div class="col-md-3">
              <div class="carinfo">
                <ul>
                  <li>Doors: <strong>4</strong></li>
                  <li>Passengers: <strong>5</strong></li>
                  <li>Luggage: <strong>2 Bags</strong></li>
                  <li>Transmission: <strong>Automatic</strong></li>
                  <li>Air conditioning: <strong>Dual Zone</strong></li>
                  <li>Minimum age: <strong>35 years</strong></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="row">
            <div class="col-md-3">
              <h3>Honda Vizel</h3>
              <div class="subtitle">Streetsville H</div>
              <div class="carPrice"> <strong>$215</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
            <div class="col-md-6"><a href="images/cars/04.jpg" class="image-popup"><img src="images/cars/04.jpg" alt="" /></a></div>
            <div class="col-md-3">
              <div class="carinfo">
                <ul>
                  <li>Doors: <strong>4</strong></li>
                  <li>Passengers: <strong>5</strong></li>
                  <li>Luggage: <strong>2 Bags</strong></li>
                  <li>Transmission: <strong>Automatic</strong></li>
                  <li>Air conditioning: <strong>Dual Zone</strong></li>
                  <li>Minimum age: <strong>35 years</strong></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
      </ul> -->
    </div>
  </div>
</div>

<!-- How it Works Section -->
<div id="team" class="parallax-section">
    <div class="container"> 
      
      <!-- Dection Title -->
      <div class="section-title" >
        <h3>How <span>It</span> Works ?</h3>
        <p>The easiest way to rent a power bank.</p>
      </div>
      <div class="row"> 
        <!-- team 1 -->
        <div class="col-md-4 col-sm-6" >
          <div class="team-thumb">
            <div class="thumb-image"><img src="{{asset('web/images/howitworks/scan.png')}}" alt=""></div>
            <h4>1.Scan QR Code</h4>
            <p>Use Musk App to Scan QR code.</p> 
            <!-- <div class="contct"><i class="fa fa-phone" aria-hidden="true"></i> +1-123-456-7890</div>
            <div class="contct"><i class="fa fa-envelope-o" aria-hidden="true"></i> joseph@example.com</div>
            <ul class="list-inline social">
              <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
              <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
              <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
            </ul> -->
          </div>
        </div>
        
        <!-- team 2 -->
        <div class="col-md-4 col-sm-6" >
          <div class="team-thumb">
            <div class="thumb-image"><img src="{{asset('web/images/howitworks/pay.png')}}" alt=""></div>
            <h4>2.Pay Deposit</h4>
            <p>Make sure your account have enough amount of deposit (At least Rs.200)</p> 
            <!-- <div class="contct"><i class="fa fa-phone" aria-hidden="true"></i> +1-123-456-7890</div>
            <div class="contct"><i class="fa fa-envelope-o" aria-hidden="true"></i> joseph@example.com</div>
            <ul class="list-inline social">
              <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
              <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
              <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
            </ul> -->
          </div>
        </div>
        
        <!-- team 3 -->
        <div class="col-md-4 col-sm-6" >
          <div class="team-thumb">
            <div class="thumb-image"><img src="{{asset('web/images/howitworks/takepowerbank.png')}}" alt=""></div>
            <h4>3.Take and Power Up</h4>
            <p>Take the Powerbank and Charge your Phone/Tablet.</p> 
            <!-- <div class="contct"><i class="fa fa-phone" aria-hidden="true"></i> +1-123-456-7890</div>
            <div class="contct"><i class="fa fa-envelope-o" aria-hidden="true"></i> joseph@example.com</div>
            <ul class="list-inline social">
              <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
              <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
              <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
            </ul> -->
          </div>
        </div>
        

      </div>
    </div>
  </div>

  <!-- Our Products Section -->
<div id="service" class="parallax-section">
    <div class="container"> 
      <!-- Section Title -->
      <div class="section-title" >
        <h3>Our <span>Products</span></h3>
        <p>Based on your specific venue or event, we offer customized shared power bank systems that include the power bank, power bank station, app, backend administration system and server.</p>
      </div>
      <div class="row"> 
        <!-- Service 1 -->
        <div class="col-md-6 col-sm-6">
         <div class="service-thumb">
          <div class="row">
              <div class="col-md-4">
                  <img src="{{asset('web/images/products/6power.png')}}" alt="">
              </div>
              <div class="col-md-8">
                  <h4>6 Chargers Sharing Power Bank</h4>
                  <p>The power bank station with 6 portable chargers is great for restaurants, coffee shops, bars and other small venues.</p>
                </div>
             </div>
          </div>
          <!-- <div class="service-thumb">
            <div class="thumb-image"><img src="images/products/6power.png" alt=""></div>
            <div class="thumb-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
            <h4>6 Chargers Sharing Power Bank</h4>
            <p>The power bank station with 5 portable chargers is great for restaurants, coffee shops, bars and .</p>
          </div> -->
        </div>
        
        <!-- Service 2 -->
        <div class="col-md-6 col-sm-6">
            <div class="service-thumb">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('web/images/products/10power.png')}}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4>10 Chargers Sharing Power Bank</h4>
                        <p>With 10 portable chargers, the power bank station provides power bank rental service for an easy battery charge on the go.</p>
                      </div>
                   </div>
                </div>
          <!-- <div class="service-thumb">
            <div class="thumb-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
            <h4>Special Rates</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
          </div> -->
        </div>
        
        <!-- Service 3 -->
        <div class="col-md-6 col-sm-6">
            <div class="service-thumb">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('web/images/products/20power.png')}}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4>20 Chargers Sharing Power Bank</h4>
                        <p>The 20-charger power bank kiosk supports remote management, making it easy to manage the portable charger dispenser and digital advertisements on the app and station surfaces.</p>
                      </div>
                   </div>
                </div>
          <!-- <div class="service-thumb">
            <div class="thumb-icon"><i class="fa fa-road" aria-hidden="true"></i></div>
            <h4>One Way Rental</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
          </div> -->
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 col-sm-6">
            <div class="service-thumb">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('web/images/products/40power.png')}}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4>40 Chargers Sharing Power Bank Kiosk</h4>
                        <p>With up to 40 portable chargers, this shared power kiosk allows users to easily charge their phones, tablets, and other smart devices while at the airport, shopping malls.</p>
                      </div>
                   </div>
                </div>
          <!-- <div class="service-thumb">
            <div class="thumb-icon"><i class="fa fa-road" aria-hidden="true"></i></div>
            <h4>One Way Rental</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
          </div> -->
        </div>
        
       
       
        
      </div>
    </div>
  </div>
  
<!-- Offer 1 -->
<!-- <div class="servicesbox bg1">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
          <img src="images/client-logo4.png" alt="">
      </div>
      <div class="col-md-6">
        <h3>Download App</h3>
        <div class="ctoggle">
          <p>Coming Soon...</p>
          <a href="#" class="readmore">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
      </div>
    </div>
  </div>
</div> -->

<!-- Counter Section -->
<div class="taglinewrap">
    <div class="container">
        <h2>Pricing</h2>
        <p>Our MuskCharge Rent services is FREE of Charge (FOC) and only 2 days (48 hours) duration to all users.  Before enjoy our FOC rent services, a Rs.200 deposit is required to ensure users responsibility while using our service and refundable (T&C Apply).

            For more detail, please go to our term and condition on bottom of website.
            
            ​</p>
    </div>
  </div>

<!-- About section -->
<div id="about">
  <div class="container">
    <div class="section-title">
      <h3>About <span>Us</span> </h3>
      <p>MuskCharge provides power bank solutions and related equipment. Our custom solutions are comprehensive, including power banks, power bank stations, an app, as well as server and backend administration systems to satisfy the needs of both merchants and end customers.</p>
    </div>
    <div class="about-desc">
      <div class="row">
        <div class="col-md-7">
          <ul class="circleList row">
            <li class="col-md-4 col-sm-4">
              <div class="cricle"><i class="fa fa-shield" aria-hidden="true"></i></div>
              <div class="title">Safe Power System</div>
            </li>
            <li class="col-md-4 col-sm-4">
              <div class="cricle"><i class="fa fa-rocket" aria-hidden="true"></i></div>
              <div class="title">High Density Fast Charging</div>
            </li>
            <li class="col-md-4 col-sm-4">
              <div class="cricle"><i class="fa fa-random" aria-hidden="true"></i></div>
              <div class="title">Tri-Cable Charge any type of Phone</div>
            </li>
          </ul>
          <p>The sharing power bank business is a great way to make money through rental, advertising, and vending revenue streams. We can provide you with custom turnkey solutions for sharing power bank systems based on your individual needs. <br>
            <br>
            Even once station is installed, we provide the after-sales services and technical support to ensure in getting the most out of your purchase.</p>
          <ul class="orderlist">
            <li>Power Bank: 6, 10, 12, 16, 24, 30, 32, 40.</li>
            <li>LCD Screen Size: 10.1, 18.5, 21.5, 23.8, 32, 43, 55 inch.</li>
            <li>Connectivity: 2G/4G, Wi-Fi, Bluetooth, LAN connection</li>
            <li>App based Powerbank Rental can be used everywhere.</li>
            <li>The backend administration system helps you to remotely control the sharing power bank stations.</li>
          </ul>
        </div>
        <div class="col-md-5">
          <div class="postimg"><img src="{{asset('web/images/about-bg1.png')}}"></div>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Tagline Section -->
<div class="taglinewrap">
  <div class="container">
    <h2>Stay Charged</h2>
    <p>You fret and feelings anxiety when your phone battery getting low?
        MuskCharge is best solution to extend your phone battery level. Sign up today to enjoy our portable Spot Power Bank services with free of charge (FOC – Term & Condition Apply).</p>
    <a href="#">Download Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
</div>

<!-- Clients Logo-->
<!-- <div class="our-clients"> -->
    <div id="partners">
        <div class="container"> 
          
          <!-- Section Title -->
          <div class="section-title">
            <h3>Our <span>Partners</span></h3>
            <p>Partner with us if you want to increase your revenue and brand awareness.
              </p>
              <p>We Offer our Machines for <i>No Subscription Fees</i>, <i>No Upfront Fees</i>,<i>No Setup Fees</i> , <i>Free Maintenance.</i>
              </p>
          </div>
          <div class="owl-clients">
            <div class="item"> <img src="{{asset('web/images/client-logo4.png')}}" alt=""> </div>
            <div class="item"> <img src="{{asset('web/images/client-logo2.png')}}" alt=""> </div>
            <div class="item"> <img src="{{asset('web/images/client-logo3.png')}}" alt=""> </div>
            <div class="item"> <img src="{{asset('web/images/client-logo.png')}}" alt=""> </div>
            <div class="item"> <img src="{{asset('web/images/client-logo3.png')}}" alt=""> </div>
            <div class="item"> <img src="{{asset('web/images/client-logo2.png')}}" alt=""> </div>
            <div class="item"> <img src="{{asset('web/images/client-logo3.png')}}" alt=""> </div>
            <div class="item"> <img src="{{asset('web/images/client-logo.png')}}" alt=""> </div>
            <div class="item"> <img src="{{asset('web/images/client-logo3.png')}}" alt=""> </div>
            <div class="item"> <img src="{{asset('web/images/client-logo2.png')}}" alt=""> </div>
          </div>
        </div>
      </div>
      <!-- Clients Logo end--> 
    

<!-- Newsletter-->
<div class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>Newsletter</h3>
        <p>Subscribe for our weekly newsletter.</p>
      </div>
      <div class="col-md-8">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Address">
          <span class="input-group-btn">
          <button class="btn btn-secondary" type="button">Sign Up <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
          </span> </div>
      </div>
    </div>
  </div>
</div>

<!-- Google Map Section -->
<!-- <div id="map"></div> -->


<!-- Offer 1 -->
<!-- <div class="servicesbox bg1">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
          <img src="images/client-logo4.png" alt="">
      </div>
      <div class="col-md-6">
        <h3>Download App</h3>
        <div class="ctoggle">
          <p>Coming Soon...</p>
          <a href="#" class="readmore">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
      </div>
    </div>
  </div>
</div> -->




<!-- Contact Section -->
<div id="contact">
    <div class="container"> 
      
      <!-- Dection Title -->
      <div class="section-title" >
        <h3>Contact <span>Us</span></h3>
        <p>For any Issues, suggestions, Business Enquiry, and Investment Purpose.Contact us Below</p>
      </div>
      
      <!-- CONTACT FORM HERE -->
      <div class="row">
        <div class="col-md-8">
          <div class="contact-form">
            <form id="contact-form" class="row" action="feedback.php" method="POST">
              <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" name="name" placeholder="Name" required  >
              </div>
              <div class="col-md-6 col-sm-6">
                <input type="email" class="form-control" name="email" placeholder="Email" required >
              </div>
              <div class="col-md-6 col-sm-12">
                <input type="tel" class="form-control" name="phone" placeholder="Phone">
              </div>
              <div class="col-md-6 col-sm-12">
                <input type="text" class="form-control" name="address" placeholder="Address">
              </div>
              <div class="col-md-12 col-sm-12">
                <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
              </div>
              <div class="col-md-12">
                <button id="submit" type="submit" class="form-control" name="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-now">
            <div class="contact"> <span><i class="fa fa-home"></i></span>
              <div class="information"> <strong>Address:</strong>
                <p>Mytri Square, 2-41/11, 6/2, Gachibowli - Miyapur Rd, Prashanth Nagar Colony, Hyderabad, Telangana 500084</p>
              </div>
            </div>
            <!-- Contact Info -->
            <div class="contact"> <span><i class="fa fa-envelope"></i></span>
              <div class="information"> <strong>Email Address:</strong>
                <p>contactus@muskcharge.com</p>
                <p>jobs@muskcharge.com</p>
              </div>
            </div>
            <!-- Contact Info -->
            <div class="contact"> <span><i class="fa fa-phone"></i></span>
              <div class="information"> <strong>Phone No:</strong>
                <p>+91-9515-870-549</p>
                <!-- <p>+12 345 67 09</p> -->
              </div>
            </div>
            <!-- Contact Info --> 
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Footer Section -->
<footer>
  <div class="container"> 
    <!-- social Section -->
    <!-- <div class="socialLinks" > <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a> </div> -->
    <div class="socialLinks" > <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </div>
  
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="footer-copyright">
          <p>&copy;MuskCharge | 2019 Power Bank Sharing | All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap --> 
<script src="{{ asset('web/js/jquery-2.1.4.min.js') }}"></script> 
<script src="{{ asset('web/js/bootstrap.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('web/js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script> 

<!-- Popup --> 
<script src="{{ asset('web/js/jquery.magnific-popup.min.js') }}"></script> 
<script src="{{ asset('web/js/magnific-popup-options.js') }}"></script> 

<!-- Carousel --> 
<script src="{{ asset('web/js/owl.carousel.js') }}"></script> 

<!-- Sticky Header --> 
<script src="{{ asset('web/js/jquery.sticky.js') }}"></script> 

<!-- Parallax --> 
<script src="{{ asset('web/js/jquery.parallax.js') }}"></script> 

<!-- Counter --> 
<script src="{{ asset('web/js/counter.js') }}"></script> 
<script src="{{ asset('web/js/smoothscroll.js') }}"></script> 

<!-- Revolution Slider --> 
<script type="text/javascript" src="{{ asset('web/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('web/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script> 

<!-- Google Map --> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMqMG_n4C0aAi3F8a82Q6s3hxDLrTXxe8&callback=initMap" async defer></script> 
<script src="js/gmap.js"></script> 

<!-- Custom --> 
<script src="{{ asset('web/js/custom.js') }}"></script>
</body>
</html>