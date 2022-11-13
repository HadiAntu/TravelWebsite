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

  



      @include('home.header')

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url(/Blogimage/{{$blog->image}})">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <span class="d-block mb-3 text-white" data-aos="fade-up">Sep 20, 2019 <span class="mx-2 text-primary">&bullet;</span> by James Miller</span>
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">{{$blog->title}}</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
            <p class="lead">{{$blog->title}}</p>
            <p>{{$blog->description}}</p>
            


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

