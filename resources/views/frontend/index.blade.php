@extends('frontend.main_master')
@section('main')

		<!-- Start Hero Section -->
		@include('frontend.home_all.home_header')
	<!-- End Hero Section -->

		<!-- Start Why Choose Us Section -->
		@include('frontend.home_all.choose_us')
		<!-- End Why Choose Us Section -->

		@php
   $approach = App\Models\Approach::find(1);
  //  $approach = App\Models\Approach::all();
		$stages = App\Models\Stageone::find(1);
	
		$sttwo = App\Models\Stagetwo::find(1);

		$stagesthree = App\Models\Stagethree::find(1);
	
	
		@endphp
    <div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="{{ asset('frontend/assets/images/cal-share-office.png') }}" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="{{ asset('frontend/assets/images/cal-ambers.png') }}" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="{{ asset('frontend/assets/images/cal-explains.png') }}" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">{{$approach->title}}</h2>
						<p>{{$approach->subtitle}}</p>

						
						<ul class="list-unstyled custom-list my-4">
							
							<strong>•	{{$stages->stageone}}</strong><br>
							
							
							 <li>{{$stages->article}}</li>
							 <li>{{$stages->article_one}}</li>
							<li>{{$stages->article_two}}</li>
						</ul>
						

						 <ul class="list-unstyled custom-list my-4">
							{{--  --}}
							
							<strong>•	{{$sttwo->stagetwo}}</strong><br>
							<li>{{$sttwo->article1}}</li>
							<li>{{$sttwo->article2}}</li>
							<li>{{$sttwo->article3}}</li>
						</ul> 

						<ul class="list-unstyled custom-list my-4">
							<strong>• {{$stagesthree->stagethree}}</strong>
							<li>{{$stagesthree->article_1}}</li>
							<li>{{$stagesthree->article_2}}</li>
							<li>{{$stagesthree->article_3}}</li>
						</ul> 
						
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

    		<!-- Start Popular Product -->
		{{-- <div class="popular-product">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{ asset('frontend/assets/images/product-1.png') }}" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Nordic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{ asset('frontend/assets/images/product-2.png') }}" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Kruzo Aero Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{ asset('frontend/assets/images/product-3.png') }}" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Ergonomic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div> --}}
		<!-- End Popular Product -->

    		<!-- Start Testimonial Slider -->
		@include('frontend.home_all.home_slide')
		<!-- End Testimonial Slider -->


    @endsection