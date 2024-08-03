@php
  $route = Route::current()->getName();
  @endphp


<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

  <div class="container">
    <a class="navbar-brand" href="#"><span>Collection Africa Limited.</span></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarsFurni">
      <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
        <li class="{{ ($route == 'home')? 'active' : '' }} ">
          <a class="nav-link" href="{{ route('home')}}">Home</a>
        </li>
        
        <li class="{{ ($route == 'home.about')? 'active' : '' }} "><a class="nav-link" href="{{ route('home.about')}}">About us</a></li>
        <li class="{{ ($route == 'home.service')? 'active' : '' }} "><a class="nav-link" href="{{ route('home.service')}}">Services</a></li>
        <li class="{{ ($route == 'home.contact')? 'active' : '' }} "><a class="nav-link" href="{{ route('home.contact')}}">Contact us</a></li>
      </ul>

    </div>
  </div>
    
</nav>
<!-- End Header/Navigation -->