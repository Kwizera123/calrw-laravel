
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="{{ asset('frontend/frontend/assets/icon/favicon.png') }}">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4"/>

		<!-- Bootstrap CSS -->
		<link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{ asset('frontend/assets/css/tiny-slider.css') }}" rel="stylesheet">
		<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
	
		<title>CALRWANDA</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		@include('frontend.body.header')

		<!-- End Header/Navigation -->
		

		<!-- Start Hero Section -->
		
		<!-- End Hero Section -->
@yield('main')
		<!-- Start Product Section -->

		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->

		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->

		<!-- End We Help Section -->

		<!-- Start Popular Product -->

		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->

		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->

		<!-- End Blog Section -->	

		<!-- Start Footer Section -->
      @include('frontend.body.footer')
		<!-- End Footer Section -->	

		<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/tiny-slider.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>



		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

		<script>
		 @if(Session::has('message'))
		 var type = "{{ Session::get('alert-type','info') }}"
		 switch(type){
				case 'info':
				toastr.info(" {{ Session::get('message') }} ");
				break;
		
				case 'success':
				toastr.success(" {{ Session::get('message') }} ");
				break;
		
				case 'warning':
				toastr.warning(" {{ Session::get('message') }} ");
				break;
		
				case 'error':
				toastr.error(" {{ Session::get('message') }} ");
				break; 
		 }
		 @endif 
		</script>
	</body>

</html>
