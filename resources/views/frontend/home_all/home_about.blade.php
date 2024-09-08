		
		@php
		$aboutpage =  App\Models\About::find(1);
		$allheader  = App\Models\Header::find(1);
 @endphp
		
		<!-- Start Hero Section -->
		<div class="hero">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<img src="{{$allheader->photo}}" alt="Cal Rwanda" class="log">
						<div class="intro-excerpt">
							
							<br>
							<h1 class="mb-3">{{$aboutpage->title}}</h1>
						</div>
					</div>
					<p>{!! $aboutpage->short_descreption !!}</p>
					<div>	
					</div>
				</div>
			</div>
		</div>
	<!-- End Hero Section -->