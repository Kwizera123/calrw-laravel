@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">


    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">New Stage Two Data</h4>
                 
                  <form method="post" action="{{ route('store.newstage')}}">
                    @csrf

                   
                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Stage Two</label>
                      <div class="col-sm-10">
                          <input name="stagetwo" class="form-control" type="text"  id="example-text-input">
                      </div>
                  </div>
                  <!-- end row -->

          <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Article One</label>
            <div class="col-sm-10">
                <input name="article1" class="form-control" type="text" id="example-text-input">
            </div>
        </div>
        <!-- end row -->

          <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Article Two</label>
            <div class="col-sm-10">
                <input name="article2" class="form-control" type="text" id="example-text-input">
            </div>
        </div>
        <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Article Three</label>
      <div class="col-sm-10">
          <input name="article3" class="form-control" type="text" id="example-text-input">
      </div>
  </div>
  <!-- end row -->


                  {{-- <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Article Three</label>
                    <div class="col-sm-10">
                        <textarea id="elm1" name="article"></textarea>
                    </div>
                </div>
              <!-- end row --> --}}


          <input type="submit" class="btn btn-info waves-effect waves-light" value="Submit Stage Two">

            
                  </form>
           
              </div>
          </div>
          <a href="{{  route('stages.two') }}" type="button" class="fc-dayGridMonth-button btn btn-primary active">Back</a>
      </div> <!-- end col -->
  </div>
    


</div>
  </div>

@endsection