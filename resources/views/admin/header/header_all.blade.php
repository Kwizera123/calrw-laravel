@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">


    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Edit Header</h4>
                 
                  <form method="post" action="{{ route('update.header')}}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{$allheader->id}}">

                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-10">
                          <input name="title" class="form-control" type="text" value="{{$allheader->title}}" id="example-text-input">
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Descreption</label>
                    <div class="col-sm-10">
                        <textarea name="description" class="form-control" type="text" rows="5">{{$allheader->description}}</textarea>
                    </div>
                </div>
              <!-- end row -->



              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Header Photo</label>
                <div class="col-sm-10">
                    <input name="photo" class="form-control" type="file"  id="image">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
              <label for="example-text-input" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($allheader->photo))? url($allheader->photo):url('upload/no_image.jpg') }}" alt="CAL Image">   
              </div>
          </div>
          <!-- end row -->
          <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Header">

            
                  </form>
           
              </div>
          </div>
      </div> <!-- end col -->
  </div>
    


</div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
      });
    });
  </script>

@endsection