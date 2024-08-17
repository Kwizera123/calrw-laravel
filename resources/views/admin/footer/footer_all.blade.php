@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">


    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Footer Page</h4>
                 
                  <form method="post" action="{{ route('update.footer')}}">
                    @csrf

                    <input type="hidden" name="id" value="{{$allfooter->id}}">

                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Contact Title</label>
                      <div class="col-sm-10">
                          <input name="contact_title" class="form-control" type="text" value="{{$allfooter->contact_title}}" id="example-text-input">
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-10">
                        <input name="contact" class="form-control" type="text" value="{{$allfooter->contact}}" id="example-text-input">
                    </div>
                </div>
                <!-- end row -->

                <div class="row mb-3">
                  <label for="example-text-input" class="col-sm-2 col-form-label">email</label>
                  <div class="col-sm-10">
                      <input name="email" class="form-control" type="email" value="{{$allfooter->email}}" id="example-text-input">
                  </div>
              </div>
              <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Address Title</label>
                <div class="col-sm-10">
                    <input name="address_title" class="form-control" type="text" value="{{$allfooter->address_title}}" id="example-text-input">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
              <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-10">
                  <input name="address" class="form-control" type="text" value="{{$allfooter->address}}" id="example-text-input">
              </div>
          </div>
          <!-- end row -->

          <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Follow Title</label>
            <div class="col-sm-10">
                <input name="follow_title" class="form-control" type="text" value="{{$allfooter->follow_title}}" id="example-text-input">
            </div>
        </div>
        <!-- end row -->

        <div class="row mb-3">
          <label for="example-text-input" class="col-sm-2 col-form-label">Facebbok</label>
          <div class="col-sm-10">
              <input name="facebbok" class="form-control" type="text" value="{{$allfooter->facebbok}}" id="example-text-input">
          </div>
      </div>
      <!-- end row -->

      <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Follow Title</label>
        <div class="col-sm-10">
            <input name="follow_title" class="form-control" type="text" value="{{$allfooter->follow_title}}" id="example-text-input">
        </div>
    </div>
    <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Tweeter</label>
      <div class="col-sm-10">
          <input name="tweeter" class="form-control" type="text" value="{{$allfooter->tweeter}}" id="example-text-input">
      </div>
  </div>
  <!-- end row -->

  <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Instagram</label>
    <div class="col-sm-10">
        <input name="instagram" class="form-control" type="text" value="{{$allfooter->instagram}}" id="example-text-input">
    </div>
</div>
<!-- end row -->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Linkedin</label>
  <div class="col-sm-10">
      <input name="linkedin" class="form-control" type="link" value="{{$allfooter->linkedin}}" id="example-text-input">
  </div>
</div>
<!-- end row -->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Terms Conditions</label>
  <div class="col-sm-10">
      <input name="terms_conditions" class="form-control" type="text" value="{{$allfooter->terms_conditions}}" id="example-text-input">
  </div>
</div>
<!-- end row -->

                  <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Copyright</label>
                    <div class="col-sm-10">
                        {{-- <textarea name="descreption" class="form-control" type="text" rows="5">{{$aboutpage->short_descreption}}</textarea> --}}
                        <textarea id="elm1" name="copyright">{{$allfooter->copyright}}</textarea>
                    </div>
                </div>
              <!-- end row -->
          <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Footer Page">

            
                  </form>
           
              </div>
          </div>
      </div> <!-- end col -->
  </div>
    


</div>
  </div>


@endsection