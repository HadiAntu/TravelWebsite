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


    <div class="site-section-cover overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-5 aos-init" data-aos="fade-up">
              <h1 class="mb-3 text-white">Get In Touch</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
              
            </div>
          </div>
        </div>
      </div>
      @if(session()->has('message'))
      <div class="alert alert-success">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{session()->get('message')}}
      </div>
      @endif

    <div class="site-section">
        <div class="container">
  
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-10">
              <div class="heading-39101 mb-5">
                <span class="backdrop text-center">Contact</span>
                <span class="subtitle-39191">Contact Us</span>
                <h3>Contact Us</h3>
              </div>
            </div>
          </div>
         
          <div class="row">
            <div class="col-lg-8 mb-5" >
              <form action="{{route('message')}}" method="post">
                @csrf
                <div class="form-group row">
                  <div class="col-md-6 mb-4 mb-lg-0">
                    <input type="text" name="first" class="form-control" placeholder="First name">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="last" class="form-control" placeholder="Last name">
                  </div>
                </div>
  
                <div class="form-group row">
                  <div class="col-md-12">
                    <input type="email" name="email" class="form-control" placeholder="Email address">
                  </div>
                </div>
  
                <div class="form-group row">
                  <div class="col-md-12">
                    <textarea name="message" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6 mr-auto">
                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-4 ml-auto">
              <div class="bg-white p-3 p-md-5">
                <h3 class="text-black mb-4">Contact Info</h3>
                <ul class="list-unstyled footer-link">
                  <li class="d-block mb-3">
                    <span class="d-block text-black">Address:</span>
                    <span>34 Street Name, City Name Here, United States</span></li>
                  <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
                  <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
                </ul>
              </div>
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