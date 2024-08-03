@extends('frontend.main_master')
@section('main')

@include('frontend.home_all.home_about')

@php
   $choosepage = App\Models\ChooseUs::find(1);
   $ourteam = App\Models\OurTeam::all();
   //$ourteam = App\Models\OurTeam::find(1);
@endphp

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6">
        <h2 class="section-title">{{$choosepage->title}}</h2>
        <p>{!!$choosepage->short_descreption!!}</p>

        <div class="row my-5">
          <div class="col-6 col-md-6">
            <div class="feature">
              <div class="icon">
                {{-- <img src="{{$choosepage->image_one}}" alt="Image" class="imf-fluid"> --}}
                <img src="{{asset('frontend/assets/images/truck.svg')}}" class="imf-fluid">
              </div>
              <h3>{{$choosepage->short_descreption_one}}</h3>
              <p>{{$choosepage->descreption_one}}</p>
            </div>
          </div>

          <div class="col-6 col-md-6">
            <div class="feature">
              <div class="icon">
                <img src="{{asset('frontend/assets/images/bag.svg')}}" class="imf-fluid">
              </div>
              <h3>{{$choosepage->short_descreption_two}}</h3>
              <p>{{$choosepage->descreption_two}}</p>
            </div>
          </div>

          <div class="col-6 col-md-6">
            <div class="feature">
              <div class="icon">
                <img src="{{asset('frontend/assets/images/support.svg')}}" class="imf-fluid">
              </div>
              <h3>{{$choosepage->short_descreption_three}}</h3>
              <p>{{$choosepage->descreption_three}}</p>
            </div>
          </div>

          <div class="col-6 col-md-6">
            <div class="feature">
              <div class="icon">
                <img src="{{asset('frontend/assets/images/return.svg')}}" class="imf-fluid">
              </div>
              <h3>{{$choosepage->short_descreption_four}}</h3>
              <p>{{$choosepage->descreption_four}}</p>
            </div>
          </div>

          {{-- <div class="col-6 col-md-6">
            <div class="feature">
              <div class="icon">
                <img src="{{asset('frontend/assets/images/truck.svg')}}" class="imf-fluid">
              </div>
              <h3>{{$choosepage->short_descreption_five}}</h3>
              <p>{{$choosepage->descreption_five}}</p>
            </div>
          </div> --}}

        </div>
      </div>

      <div class="col-lg-5">
        <div class="img-wrap">
          <img src="{{ asset('frontend/assets/images/centenary.jpeg') }}" alt="Image" class="img-fluid">
        </div>
      </div>

    </div>
  </div>
</div>
<!-- End Why Choose Us Section -->

		<!-- Start Team Section -->
		<div class="untree_co-section">
    
			<div class="container">

         
				<div class="row mb-5">
         
					<div class="col-lg-5 mx-auto text-center">
						<h2 class="section-title">OurTeam</h2>
					</div>
				  </div>

				  <div class="row">

					<!-- Start Column 1 -->
          @foreach ($ourteam as $ourtea)
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						{{-- <img src="{{$ourtea->photo}}" class="img-fluid mb-5"> --}}
            <img src="{{ asset($ourtea->photo) }}" class="img-fluid mb-5">
						<h3 clas><a href="#"><span class="">{{$ourtea->name}}</span></a></h3>
            <span class="d-block position mb-4">{{$ourtea->role}}</span>
            <p>{!! $ourtea->description !!}</p>
            
					</div> 
          @endforeach
					<!-- End Column 1 -->
				</div>
        

			</div>
      
		</div>
    
		<!-- End Team Section -->

@endsection