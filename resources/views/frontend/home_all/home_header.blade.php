
@php
  
  $allheader  = App\Models\Header::find(1);

@endphp
		
		<!-- Start Hero Section -->
	  <div class="hero">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-10">
            <div class="intro-excerpt">

							<div class="author-info">
								<div class="author-pic">
									<img src="{{$allheader->photo}}" alt="Maria Jones" class="img-fluid">
								</div>
								
							</div>
              <h2><span clsas="d-block">{{$allheader->title}}</span></h2>
              <p class="mb-3">{{$allheader->description}}
              </p>
              
            </div>
          </div>

        </div>
      </div>
    </div>
	<!-- End Hero Section -->