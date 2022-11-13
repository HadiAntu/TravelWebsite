<div class="site-section">

    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <div class="heading-39101 mb-5">
            <span class="backdrop text-center">Journey</span>
            <span class="subtitle-39191">Journey</span>
            <h3>Your Journey Starts Here</h3>
          </div>
        </div>
      </div>
      <div class="row">

        @foreach ($trip as $trip)
          
      
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item">
            <div class="listing-image">
              <img src="/tripimage/{{$trip->image}}" alt="Image" class="img-fluid">
            </div>
            <div class="listing-item-content">
              <a class="px-3 mb-3 category bg-primary" href="{{route('singlepageTrp',$trip->id)}}">{{$trip->price}}tk</a>
              <h2 class="mb-1"><a href="{{route('singlepageTrp',$trip->id)}}">{{$trip->title}}</a></h2>
            </div>
          </div>
        </div>

       
        @endforeach
      </div>

    </div>
  </div>
