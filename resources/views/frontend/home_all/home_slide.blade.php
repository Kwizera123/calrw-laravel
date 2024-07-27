@php
   $homeslide = App\Models\HomeSlide::find(2);
   $homeslide = App\Models\HomeSlide::all();
@endphp


<div class="testimonial-section">
  <div class="container">
   
    <div class="row">
      
      <div class="col-lg-7 mx-auto text-center">
       
        
      </div>
    </div>
    
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="testimonial-slider-wrap text-center">

          <div id="testimonial-nav">
            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
          </div>

          <div class="testimonial-slider">
            
              
            @foreach ($homeslide as $slide) 
            <div class="item">
              <div class="row justify-content-center">
                <div class="col-lg-8 mx-auto">
                  <h2 class="section-title">{{$slide->title}}</h2>
                  <div class="testimonial-block text-center">
                    <blockquote class="mb-5">
                      <p>{{$slide->descreption}}</p>
                    </blockquote>

                    <div class="author-info">
                      <div class="author-pic">
                        <img src="{{$slide->home_slider}}" alt="Maria Jones" class="img-fluid">
                      </div>
                      <h3 class="font-weight-bold">{{$slide->name}}</h3>
                      <span class="position d-block mb-3">{{$slide->short_title}}.</span>
                    </div>
                  </div>

                </div>
              </div>
            </div> 
            @endforeach
            <!-- END item -->


          </div>

        </div>
      </div>
      
    </div>
   
  </div>
</div>
