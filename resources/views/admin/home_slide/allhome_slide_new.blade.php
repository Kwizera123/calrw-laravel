@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">


    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">New Home Slide Data</h4>
                 
                  <form method="post" action="{{ route('store.homeslider')}}" enctype="multipart/form-data">
                    @csrf

                   
                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-10">
                          <input name="title" class="form-control" type="text"  id="example-text-input">
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Home Slider</label>
                    <div class="col-sm-10">
                        <input name="home_slider[]" class="form-control" type="file"  id="image" multiple="">
                    </div>
                </div>
                <!-- end row -->
    
                <div class="row mb-3">
                  <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($home_slider->home_slider))? url($home_slider->home_slider):url('upload/no_image.jpg') }}" alt="Photo">   
                  </div>
              </div>
              <!-- end row -->

          <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input name="name" class="form-control" type="text" id="example-text-input">
            </div>
        </div>
        <!-- end row -->

          <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
            <div class="col-sm-10">
                <input name="short_title" class="form-control" type="text" id="example-text-input">
            </div>
        </div>
        <!-- end row -->


                  <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        {{-- <textarea name="descreption" class="form-control" type="text" rows="5">{{$aboutpage->short_descreption}}</textarea> --}}
                        <textarea id="elm1" name="descreption"></textarea>
                    </div>
                </div>
              <!-- end row -->

          <input type="submit" class="btn btn-info waves-effect waves-light" value="Submit Slide">

            
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