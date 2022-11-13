<!doctype html>
<html lang="en">

  <head>
    <link rel="shortcut icon" href="images/traveler.jpg" type="">
    <title>Sky&mdash;Travel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('home/fonts/icomoon/style.css')}}"/>

    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('home/css/bootstrap-datepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('home/css/jquery.fancybox.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('home/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('home/css/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('home/fonts/flaticon/font/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{asset('home/css/aos.css')}}"/>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}"/>

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      @include('home.header')

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('/tripimage/{{$trip->image}}')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-5" data-aos="fade-up">
              <span class="text-white d-block mb-4">Price: <strong>{{$price}}</strong></span>
              <h1 class="mb-3 text-white">{{$trip->title}}</h1>
              <p></p>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">

      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-12">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Journey Begin</span>
              <span class="subtitle-39191">Journey</span>
              <h3>Your Journey Starts Here</h3>
            </div>
          </div>
        </div>


        <div class="row mt-5 pt-5">
          <div class="col-md-6">
            <p>{{$trip->description}}</p>

            <p><a href="{{route('bookNowForm', [$price,$trip->id])}}" class="btn btn-primary py-3 px-4 my-4">Book Now</a></p>
          </div>
          <div class="col-md-6">
            <img src="images/img_4.jpg" alt="Image" class="img-fluid">
          </div>
        </div>

      </div>
    </div>


    <div class="site-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="heading-39101 mb-5">
              <span class="backdrop">Story</span>
              <span class="subtitle-39191">Discover Story</span>
              <h3>Our Story</h3>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quae expedita fugiat quo incidunt, possimus temporibus aperiam eum, quaerat sapiente.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis enim a pariatur molestiae.</p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="images/traveler.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>


    

    @include('home.footer')

    </div>

    <script src="{{asset('home/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('home/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('home/js/popper.min.js')}}"></script>
    <script src="{{asset('home/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('home/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('home/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('home/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('home/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('home/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('home/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('home/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('home/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('home/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('home/js/aos.js')}}"></script>

    <script src="{{asset('home/js/main.js')}}"></script>

  </body>

</html>

