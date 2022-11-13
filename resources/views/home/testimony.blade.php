<div class="site-section">

    <div class="container">

      <div class="row justify-content-center text-center">
        <div class="col-md-10">
          <div class="heading-39101 mb-5">
            <span class="backdrop text-center">Testimonials</span>
            <span class="subtitle-39191">Testimony</span>
            <h3>Happy Customers</h3>
          </div>
        </div>
      </div>

      @foreach ($testimonial as $testimonial )
      <div class="owl-carousel slide-one-item">
        <div class="row">
            
          
          <div class="col-md-6">

            <div class="testimonial-39191 d-flex">
              <div class="mr-4">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              </div>
              <div>
              <blockquote>&ldquo;{{$testimonial->testimonial}}&rdquo;</blockquote>
              <p>&mdash; John Doe</p>
              </div>
            </div>    
            
          </div>

        </div>
        @endforeach

        

            
            
          </div>
        </div>

      </div>

    </div>
  </div>
