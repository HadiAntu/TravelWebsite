<div class="site-section">

    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-10">
          <div class="heading-39101 mb-5">
            <span class="backdrop text-center">Our Team</span>
            <span class="subtitle-39191">Amazing Staff</span>
            <h3>Meet Our Team</h3>
          </div>
        </div>
      </div>


      <div class="row">

        @foreach ($team as $team)

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="person-29191 text-center">
            <img src="/Teamimage/{{$team->image}}" alt="Image" class="img-fluid mb-4">
            <div class="px-4">
              <h2 class="mb-2">{{$team->name}}</h2>
              <p class="caption mb-4">{{$team->position}}</p>
              <p>{{Str::limit($team->description, 50), ' (...)'}}</p>
              <div class="social_29128 mt-5">
              <a href="{{$team->instagram}}"><span class="icon-facebook"></span></a>  
              <a href="{{$team->instagram}}"><span class="icon-instagram"></span></a>  
              <a href="{{$team->instagram}}"><span class="icon-twitter"></span></a>  
             </div>
            </div>
          </div>
        </div>

       
@endforeach
      </div>

    </div>
  </div>
