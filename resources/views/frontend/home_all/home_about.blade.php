		
		@php
		$aboutpage =  App\Models\About::find(1);
 @endphp
		
		<!-- Start Hero Section -->
		<div class="hero">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<div class="intro-excerpt">
							<h1><span clsas="d-block">{{$aboutpage->title}}</span></h1>
							<p class="mb-4">{!! $aboutpage->short_descreption !!}.</p>
							
						</div>
					</div>
					<div class="col-lg-7">
						<div class="hero-img-wrap">
							<img src="{{$aboutpage->about_image}}" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- End Hero Section -->