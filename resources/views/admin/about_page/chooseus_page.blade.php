@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">


    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Why Choose Us Page</h4>
                 
                  <form method="post" action="{{ route('update.chooseus')}}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{$choosepage->id}}">
                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-10">
                          <input name="title" class="form-control" type="text" value="{{$choosepage->title}}" id="example-text-input">
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        {{-- <textarea name="descreption" class="form-control" type="text" rows="5">{{$aboutpage->short_descreption}}</textarea> --}}
                        <textarea id="elm1" name="short_descreption">{{$choosepage->short_descreption}}</textarea>
                    </div>
                </div>
              <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Image One</label>
                <div class="col-sm-10">
                    <input name="image_one" class="form-control" type="file"  id="image">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
              <label for="example-text-input" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($choosepage->image_one))? url($choosepage->image_one):url('upload/no_image.jpg') }}" alt="CAL Image">   
              </div>
          </div>
          <!-- end row -->

          <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Short Title One</label>
            <div class="col-sm-10">
                <input name="short_descreption_one" class="form-control" type="text" value="{{$choosepage->short_descreption_one}}" id="example-text-input">
            </div>
        </div>
        <!-- end row -->

        <div class="row mb-3">
          <label for="example-text-input" class="col-sm-2 col-form-label">Short Description One</label>
          <div class="col-sm-10">
              <input name="descreption_one" class="form-control" type="text" value="{{$choosepage->descreption_one}}" id="example-text-input">
          </div>
      </div>
    <!-- end row -->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Short Title Two</label>
  <div class="col-sm-10">
      <input name="short_descreption_two" class="form-control" type="text" value="{{$choosepage->short_descreption_two}}" id="example-text-input">
  </div>
</div>
<!-- end row -->

<div class="row mb-3">
<label for="example-text-input" class="col-sm-2 col-form-label">Short Description Two</label>
<div class="col-sm-10">
    <input name="descreption_two" class="form-control" type="text" value="{{$choosepage->descreption_two}}" id="example-text-input">
</div>
</div>
<!-- end row -->


<div class="row mb-3">
<label for="example-text-input" class="col-sm-2 col-form-label">Short Title Three</label>
<div class="col-sm-10">
  <input name="short_descreption_three" class="form-control" type="text" value="{{$choosepage->short_descreption_three}}" id="example-text-input">
</div>
</div>
<!-- end row -->

<div class="row mb-3">
<label for="example-text-input" class="col-sm-2 col-form-label">Short Description Three</label>
<div class="col-sm-10">
<input name="descreption_three" class="form-control" type="text" value="{{$choosepage->descreption_three}}" id="example-text-input">
</div>
</div>
<!-- end row -->

<div class="row mb-3">
<label for="example-text-input" class="col-sm-2 col-form-label">Short Title Four</label>
<div class="col-sm-10">
  <input name="short_descreption_four" class="form-control" type="text" value="{{$choosepage->short_descreption_four}}" id="example-text-input">
</div>
</div>
<!-- end row -->

<div class="row mb-3">
<label for="example-text-input" class="col-sm-2 col-form-label">Short Description Four</label>
<div class="col-sm-10">
<input name="descreption_four" class="form-control" type="text" value="{{$choosepage->descreption_four}}" id="example-text-input">
</div>
</div>
<!-- end row -->

<div class="row mb-3">
<label for="example-text-input" class="col-sm-2 col-form-label">Short Title Five</label>
<div class="col-sm-10">
  <input name="short_descreption_five" class="form-control" type="text" value="{{$choosepage->short_descreption_five}}" id="example-text-input">
</div>
</div>
<!-- end row -->

<div class="row mb-3">
<label for="example-text-input" class="col-sm-2 col-form-label">Short Description Five</label>
<div class="col-sm-10">
<input name="descreption_five" class="form-control" type="text" value="{{$choosepage->descreption_five}}" id="example-text-input">
</div>
</div>
<!-- end row -->




          <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Choose Us Page">

            
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