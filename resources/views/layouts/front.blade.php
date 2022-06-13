<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <!-- fontawesome -->
 <link href="{{ asset('app/vendors/fontawesome/css/all.css') }}" rel="stylesheet" />
 <!--load all styles -->
 <!-- Normalize.css -->
 <link rel="stylesheet" href="{{ asset('app/vendors/css/normalize.css') }}" />
 <!-- date picker -->
 <link rel="stylesheet" href="{{ asset('app/vendors/css/jquery.datetimepicker.min.css') }}">
 <!-- Basic stylesheet -->
 <link rel="stylesheet"
  href="{{ asset('app/vendors/jQuery-Carousel-Slider-OWL-Carousel/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/owl-carousel/owl.carousel.css') }}">

 <!-- Default Theme -->
 <link rel="stylesheet"
  href="{{ asset('app/vendors/jQuery-Carousel-Slider-OWL-Carousel/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/owl-carousel/owl.theme.css') }}">
 <!-- Bootstrap  -->
 <link rel="stylesheet" href="{{ asset('app/vendors/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}" />
 <!-- Basic stylesheet -->
 <link rel="stylesheet" href="{{ asset('app/css/styles.css') }}" />
 <title>Photography</title>
</head>

<body>
 <!-- Begin Header-Nav -->
 <header>
  <nav id="navbar_bgColour" class="navbar navbar-expand-lg navbar-light">
   <div class="container">
    <a href="{{ route('homepage.index') }}" class="navbar-brand">
     <img src="{{ asset('app/css/images/photograpy_logo-100x100.png') }}" alt="logo" class="img-fluid" />
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNavbar">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item pr-5">
       <a href="{{ route('homepage.index') }}" class="nav-link">home</a>
      </li>
      <li class="nav-item pr-5">
       <a href="{{ route('photogallery.index') }}" class="nav-link">photo gallery</a>
      </li>
      <li class="nav-item pr-5">
       <a href="{{ route('about.index') }}" class="nav-link">about me</a>
      </li>
      <li class="nav-item pr-5">
       <a href="{{ route('blog') }}" class="nav-link">blog</a>
      </li>
      <li class="nav-item pr-5">
       <a href="{{ route('contact.index') }}" class="nav-link">Contact</a>
      </li>
     </ul>
    </div>
   </div>
  </nav>
 </header>
 <!-- End Header-Nav -->
 @yield('content')

 <!-- Begin Footer -->
 <footer id="footer_first" class="bg-dark pt-5 ml-auto mr-auto">
  <h2 hidden>footer section</h2>
  <!-- This for screen readers -->
  <div class="container ml-auto mr-auto">
   <div class="row ml-auto mr-auto">
    <div class="col-md-4 d-none d-md-block">
     <div>
      <a href=""><img src="/css/images/photograpy_logo-100x100.png" alt="logo" class="img-fluid-footer" /></a>
     </div>
     <br />
    </div>
    <div class="col-12 col-sm-6 col-md-4 mt-3">
     <h6 class="footer_title"><i class="fas fa-map-marker-alt"></i> Address In America</h6>
     <small class="footer_address">New York Restaurant</small><br />
     <small class="footer_address">3926 Anmoore Road</small><br />
     <small class="footer_address">New York, NY 10014</small><br />
     <a class="footer_contact" href=""><i class="fas fa-phone mr-2"></i><small>718-749-1714</small></a><br />
     <a class="footer_contact" href=""><i
       class="fas fa-envelope mr-2"></i><small>photography-us@photography.com</small></a>
    </div>
    <div class="col-12 col-sm-6 col-md-4 mt-3">
     <h6 class="footer_title"><i class="fas fa-map-marker-alt"></i> Address In France</h6>
     <small class="footer_address">France Restaurant</small><br />
     <small class="footer_address">68, rue da le Couronne</small><br />
     <small class="footer_address">75002 PARIS</small><br />
     <a class="footer_contact" href=""><i class="fas fa-phone mr-2"></i><small>02.94.23.69.56</small></a><br />
     <a class="footer_contact" href=""><i
       class="fas fa-envelope mr-2"></i><small>photography-fr@photography.com</small></a>
    </div>
   </div>
  </div>
  <div class="container">
   <div class="row pt-5">
    <div class="col-6 offset-3 col-md-4 offset-md-8 col-lg-6 offset-lg-3 ml-auto mr-auto">
     <div class="container">
      <div class="row">
       <div class="col-lg-6 offset-lg-3">
        <div class="container">
         <div class="row">
          <div class="col-3 text-center">
           <a class="footer-social" href="#"><i class="fab fa-twitter-square"></i></a>
          </div>
          <div class="col-3 text-center">
           <a class="footer-social" href="#"><i class="fab fa-facebook-square"></i></a>
          </div>
          <div class="col-3 text-center">
           <a class="footer-social" href="#"><i class="fab fa-linkedin"></i></a>
          </div>
          <div class="col-3 text-center">
           <a class="footer-social" href="#"><i class="fab fa-instagram-square"></i></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="container ml-auto mr-auto">
   <div class="row pt-5">
    <div class="col-12 py-3 text-center">
     <small id="Footer-copy">Copyright &copy; <?php echo date("Y");?> Photography. All rights reserved. Theme by
      Rayaa Ghirri</small>
    </div>
   </div>
  </div>
 </footer>
 <!-- End Footer -->

 <!-- jQuery 1.8 or later, 33 KB -->
 <script src="{{ asset('app/vendors/js/jquery-3.6.0.min.js') }}"></script>
 <script src="{{ asset('app/vendors/js/jquery.datetimepicker.full.min.js') }}"></script>
 <script src="{{ asset('app/vendors/js/jquery-validation-1.19.3/dist/jquery.validate.min.js') }}"></script>
 <!-- owel slider js plugin -->
 <script
  src="{{ asset('app/vendors/jQuery-Carousel-Slider-OWL-Carousel/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/owl-carousel/owl.carousel.js') }}">
 </script>
 <!-- Bootstrap -->
 <script src="{{ asset('app/vendors/bootstrap-4.0.0/dist/js/bootstrap.min.js') }}"></script>
 <!-- fontawesome -->
 <script defer src="{{ asset('app/vendors/fontawesome/js/all.js') }}"></script>
 <!--load all styles -->
 <script src="{{ asset('app/js/script.js') }}"></script>
</body>

</html>