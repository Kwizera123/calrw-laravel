@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">


    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Edit Approach Stages Two Data</h4>
                 
                  <form method="post" action="{{ route('update.stagetwo') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{$editstagetwo->id}}">

          <!-- Stage two -->

          <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Stage Two</label>
            <div class="col-sm-10">
                <input name="stagetwo" class="form-control" type="text" value="{{$editstagetwo->stagetwo}}" id="example-text-input">
            </div>
        </div>
        <!-- end row -->

        <div class="row mb-3">
          <label for="example-text-input" class="col-sm-2 col-form-label">Article One</label>
          <div class="col-sm-10">
              <input name="article1" class="form-control" type="text" value="{{$editstagetwo->article1}}" id="example-text-input">
          </div>
      </div>
      <!-- end row -->

      <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Article Two</label>
        <div class="col-sm-10">
            <input name="article2" class="form-control" type="text" value="{{$editstagetwo->article2}}" id="example-text-input">
        </div>
    </div>
    <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Article Three</label>
      <div class="col-sm-10">
          <textarea name="article3" class="form-control" type="text" rows="5">{{$editstagetwo->article3}}</textarea>
      </div>
  </div>
<!-- end row -->

          <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Stage Data">

            
                  </form>
           
              </div>
          </div>
          <a href="{{  route('stages.two') }}" type="button" class="fc-dayGridMonth-button btn btn-danger active">Cancel</a>
      </div> <!-- end col -->
  </div>
    


</div>
  </div>


@endsection