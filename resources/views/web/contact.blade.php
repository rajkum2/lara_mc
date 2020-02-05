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
      <a href="{{url('/index')}}">
        <img src="{{asset('web/images/logo7.png')}}" alt="HTML tutorial" style="width:144px;height:50px;border:0;margin-top: 12px;margin-left: 12px;">
      </a>
    </div>
    
    <!-- NAVIGATION LINKS -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#slider" class="smoothScroll">Home</a></li>
        <li><a href="{{url('/')}}" class="smoothScroll">How it Works</a></li>
        <li><a href="{{url('/')}}" class="smoothScroll">Our Products</a></li>
        <!-- <li><a href="#service" class="smoothScroll">Service</a></li> -->
        <!-- <li><a href="#team" class="smoothScroll">Support</a></li>         -->
        <!-- <li><a href="#testimonials" class="smoothScroll">Partners</a></li> -->
        <li><a href="{{url('/')}}" class="smoothScroll">About</a></li>
         <li><a href="{{url('/')}}" class="smoothScroll">Partners</a></li>
        <li><a href="{{url('/')}}" class="smoothScroll">Contact</a></li>
        <li><span class="calltxt"></i> Download App</span></li>
      </ul>
    </div>
  </div>
</div>

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