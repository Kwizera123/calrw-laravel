@extends('frontend.main_master')
@section('main')

@php
   $servicepage = App\Models\HeaderService::find(1);
   $ourservice = App\Models\OurService::find(1);
   $ourservice = App\Models\OurService::all();
   //$servicepage = App\Models\HeaderService::all();
   //use App\Models\HeaderService as Header;
   //$ourteam = App\Models\OurTeam::find(1);
   $allheader  = App\Models\Header::find(1);
@endphp

		<!-- Start Hero Section -->
    <div class="hero">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <img src="{{ asset($allheader->photo)}}" alt="Cal Rwanda" class="log">
            <div class="intro-excerpt">
      <br>
            </div>
            <h1 class="mb-3">{{$servicepage->service_header}}</h1>
          </div>
          <div class="col-lg-8">
            <p {!!$servicepage->service_description!!}</p>
          </div>
        </div>
      </div>
    </div>
  <!-- End Hero Section -->

  

  <!-- Start Why Choose Us Section -->
  <div class="why-choose-section">
    <div class="container">
      
     
      <div class="row my-5">
        @foreach ($ourservice as $service)
        <div class="col-6 col-md-6 col-lg-3 mb-4">
          <div class="feature">
            <div class="icon">
              <img src="{{asset('frontend/assets/images/truck.svg')}}" alt="Image"><i class="ri-wechat-pay-line"></i>
            </div>
            <h3>{{$service->service_title}}</h3>
            <p>{!!$service->service_description!!}</p>
          </div>
        </div>
        @endforeach
      </div>
      
    </div>
  </div>
  <!-- End Why Choose Us Section -->

  <!-- Start Product Section -->

  <!-- End Product Section -->

  

  <!-- Start Testimonial Slider -->

  <!-- End Testimonial Slider -->



@endsection