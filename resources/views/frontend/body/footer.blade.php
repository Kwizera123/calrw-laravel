@php
  
  $allfooter = App\Models\Footer::find(1);

@endphp

<footer class="footer-section">
  <div class="container relative">

    {{-- <div class="sofa-img">
      <img src="{{ asset('frontend/assets/images/sofa.png') }}" alt="Image" class="img-fluid">
    </div> --}}

    {{-- <div class="row">
      <div class="col-lg-8">
        <div class="subscription-form">
          <h3 class="d-flex align-items-center"><span class="me-1"><img src="{{ asset('frontend/assets/images/envelope-outline.svg') }}" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

          <form action="#" class="row g-3">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Enter your name">
            </div>
            <div class="col-auto">
              <input type="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="col-auto">
              <button class="btn btn-primary">
                <span class="fa fa-paper-plane"></span>
              </button>
            </div>
          </form>

        </div>
      </div>
    </div> --}}

    <div class="row g-5 mb-5 text-center">
      <div class="col-lg-4">
        <div class="mb-4 footer-logo-wrap"><div class="footer-logo"><span><h3>{{ $allfooter->contact_title }}</h3></span></div></div>
        
          <h4>{{ $allfooter->contact }}</h4>
          <h4>{{ $allfooter->email }}</h4>
      </div>
      <div class="col-lg-4">
        <div class="mb-4 footer-logo-wrap"><div class="footer-logo"><span><h3>{{ $allfooter->address_title }}</h3></span></div></div>
        
          <h4>{{ $allfooter->address }}</h4>
        
       </div>

       <div class="col-lg-4">
        <div class="mb-4 footer-logo-wrap"><div class="footer-logo"><span><h3>{{ $allfooter->follow_title }}</h3></span></div></div>
        
        <ul class="list-unstyled custom-social">
          <li><a href="{{ $allfooter->facebbok }}"><span class="fa fa-brands fa-facebook-f"></span></a></li>
          <li><a href="{{ $allfooter->tweeter }}"><span class="fa fa-brands fa-twitter"></span></a></li>
          <li><a href="{{ $allfooter->instagram }}"><span class="fa fa-brands fa-instagram"></span></a></li>
          <li><a href="{{ $allfooter->linkedin }}"><span class="fa fa-brands fa-linkedin"></span></a></li>
        </ul>
       </div>
    </div>

    <div class="col-lg-6 text-center text-lg-end">

       </div>

    <div class="border-top copyright">
      <div class="row pt-4">
        <div class="col-lg-6">
          <p class="mb-2 text-center text-lg-start">{!! $allfooter->copyright !!}  <a href="#"></a> <!-- <script>document.write(new Date().getFullYear());</script> -->
        </p>
        </div>

        <div class="col-lg-6 text-center text-lg-end">
          <ul class="list-unstyled d-inline-flex ms-auto">
            <li class="me-4"><a href="#">{{ $allfooter->terms_conditions }}</a></li>
            

            <div class="row">
              <div class="col-lg-2">
                <div class="subscription-form">
                 
      
                  <form action="#" class="row g-3">
                  
                    <div class="col-auto">
                      <br>
                      <button class="btn btn-primary">
                        <span class="fa fa-paper-plane"></span>
                      </button>
                    </div>
                  </form>
      
                </div>
              </div>
            </div>
          </ul>  
        </div>
      </div>
    </div>

  </div>
</footer>