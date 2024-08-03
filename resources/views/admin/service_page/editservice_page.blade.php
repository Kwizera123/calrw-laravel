@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">


    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Edit Our Service</h4>
                 
                  <form method="post" action="{{ route('update.ourservice')}}">
                    @csrf

                  <input type="hidden" name="id" value="{{ $ourservice->id }}">

          <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Service Title</label>
            <div class="col-sm-10">
                <input name="service_title" class="form-control" type="text" value="{{$ourservice->service_title}}" id="example-text-input">
            </div>
        </div>
        <!-- end row -->

                  <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Service Description</label>
                    <div class="col-sm-10">
                        <textarea id="elm1" name="service_description">{{$ourservice->service_description}}</textarea>
                    </div>
                </div>
              <!-- end row -->

          <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Our Service">

            
                  </form>
           
              </div>
          </div>
      </div> <!-- end col -->
  </div>
    


</div>
  </div>




@endsection