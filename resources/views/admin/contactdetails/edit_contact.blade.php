@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">


    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Edit Contact Address</h4>
                 
                  <form method="post" action="{{ route('update.contactaddrees') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{$editaddress->id}}">

          <!-- Stage two -->

          <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input name="title" class="form-control" type="text" value="{{$editaddress->title}}" id="example-text-input">
            </div>
        </div>
        <!-- end row -->

        <div class="row mb-3">
          <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
              <input name="email" class="form-control" type="text" value="{{$editaddress->email}}" id="example-text-input">
          </div>
      </div>
      <!-- end row -->

      <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Location</label>
        <div class="col-sm-10">
            <input name="location" class="form-control" type="text" value="{{$editaddress->location}}" id="example-text-input">
        </div>
    </div>
    <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Telephone</label>
      <div class="col-sm-10">
          <input name="phone" class="form-control" type="text" value="{{$editaddress->phone}}" id="example-text-input">
      </div>
  </div>
  <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Subtitle Three</label>
      <div class="col-sm-10">
          <textarea name="subtitle" class="form-control" type="text" rows="5">{{$editaddress->subtitle}}</textarea>
      </div>
  </div>
<!-- end row -->

          <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Contact Address">

            
                  </form>
           
              </div>
          </div>
          <a href="{{  route('contact.detail') }}" type="button" class="fc-dayGridMonth-button btn btn-danger active">Cancel</a>
      </div> <!-- end col -->
  </div>
    


</div>
  </div>


@endsection