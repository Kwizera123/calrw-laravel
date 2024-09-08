
@php
  
  $allheader  = App\Models\Header::find(1);

@endphp
		
		<!-- Start Hero Section -->
	  <div class="hero">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4">
            <div class="intro-excerpt">
              <img src="{{$allheader->photo}}" alt="Cal Rwanda" class="log">
							<div class="author-info">
								<div class="author-pic">
									<br>
								</div>
								
							</div>
              
              <h1 class="mb-3">{{$allheader->title}}</h1>
            </div>
            
            </p>
          </div>
          <p class="col-lg-12">{{$allheader->description}}
        </div>
      </div>
    </div>
	<!-- End Hero Section -->