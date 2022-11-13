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

    

{{-- //header end --}}

    @include('home.header')

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-5" data-aos="fade-up">
              <h1 class="mb-3 text-white">About Us</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    @include('home.story')


    <div class="site-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5 order-2 ml-auto">
            <div class="heading-39101 mb-5">
              <span class="backdrop">Mission</span>
              <span class="subtitle-39191">Our Mission</span>
              <h3>Our Mission</h3>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quae expedita fugiat quo incidunt, possimus temporibus aperiam eum, quaerat sapiente.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis enim a pariatur molestiae.</p>
          </div>
          <div class="col-md-6 order-1" data-aos="fade-left">
            <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">

        @include('home.team')
    </div>


    

    

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg')">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-bold text-white">Join and Trip With Us</h2>
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ut, doloremque quo molestiae nesciunt officiis veniam, beatae dignissimos!</p>
            <p class="mb-0"><a href="#" class="btn btn-primary text-white py-3 px-4">Get In Touch</a></p>
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