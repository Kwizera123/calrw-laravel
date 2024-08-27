@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">


    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Edit Header Approach Data</h4>
                 
                  <form method="post" action="{{ route('update.approach') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{$editapproach->id}}">
                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-10">
                          <input name="title" class="form-control" type="text" value="{{$editapproach->title}}" id="example-text-input">
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Subtitle</label>
                    <div class="col-sm-10">
                        <input name="subtitle" class="form-control" type="text" value="{{$editapproach->subtitle}}" id="example-text-input">
                    </div>
                </div>
                <!-- end row -->

              {{-- <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Article</label>
                <div class="col-sm-10">
                    <textarea name="article" class="form-control" type="text" rows="5">{{$editapproach->article}}</textarea>
                </div>
            </div> --}}
          <!-- end row -->


          <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Approach Data">

            
                  </form>
           
              </div>
              
          </div>
          
      </div> <!-- end col -->
      
  </div>
  <a href="{{  route('all.approach') }}" type="button" class="fc-dayGridMonth-button btn btn-danger active">Cancel</a>
    


</div>
  </div>


@endsection