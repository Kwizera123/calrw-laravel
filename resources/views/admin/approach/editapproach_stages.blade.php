@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">


    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Edit Approach Stages Data</h4>
                 
                  <form method="post" action="{{ route('update.stage') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{$editapproacstagehdata->id}}">
                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Stage One</label>
                      <div class="col-sm-10">
                          <input name="stageone" class="form-control" type="text" value="{{$editapproacstagehdata->stageone}}" id="example-text-input">
                      </div>
                  </div>
                  <!-- end row -->

                  <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Article One</label>
                    <div class="col-sm-10">
                        <input name="article" class="form-control" type="text" value="{{$editapproacstagehdata->article}}" id="example-text-input">
                    </div>
                </div>
                <!-- end row -->

                <div class="row mb-3">
                  <label for="example-text-input" class="col-sm-2 col-form-label">Article Two</label>
                  <div class="col-sm-10">
                      <input name="article_one" class="form-control" type="text" value="{{$editapproacstagehdata->article_one}}" id="example-text-input">
                  </div>
              </div>
              <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Article Three</label>
                <div class="col-sm-10">
                    <textarea name="article_two" class="form-control" type="text" rows="5">{{$editapproacstagehdata->article_two}}</textarea>
                </div>
            </div>
          <!-- end row -->

          <!-- Stage two -->

          <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Stage Two</label>
            <div class="col-sm-10">
                <input name="stagetwo" class="form-control" type="text" value="{{$editapproacstagehdata->stagetwo}}" id="example-text-input">
            </div>
        </div>
        <!-- end row -->

        <div class="row mb-3">
          <label for="example-text-input" class="col-sm-2 col-form-label">Article One</label>
          <div class="col-sm-10">
              <input name="article1" class="form-control" type="text" value="{{$editapproacstagehdata->article1}}" id="example-text-input">
          </div>
      </div>
      <!-- end row -->

      <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Article Two</label>
        <div class="col-sm-10">
            <input name="article2" class="form-control" type="text" value="{{$editapproacstagehdata->article2}}" id="example-text-input">
        </div>
    </div>
    <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Article Three</label>
      <div class="col-sm-10">
          <textarea name="article3" class="form-control" type="text" rows="5">{{$editapproacstagehdata->article3}}</textarea>
      </div>
  </div>
<!-- end row -->


<!-- Stage Three -->
<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Stage Three</label>
  <div class="col-sm-10">
      <input name="stagethree" class="form-control" type="text" value="{{$editapproacstagehdata->stagethree}}" id="example-text-input">
  </div>
</div>
<!-- end row -->

<div class="row mb-3">
<label for="example-text-input" class="col-sm-2 col-form-label">Article One</label>
<div class="col-sm-10">
    <input name="article_1" class="form-control" type="text" value="{{$editapproacstagehdata->article_1}}" id="example-text-input">
</div>
</div>
<!-- end row -->

<div class="row mb-3">
<label for="example-text-input" class="col-sm-2 col-form-label">Article Two</label>
<div class="col-sm-10">
  <input name="article_2" class="form-control" type="text" value="{{$editapproacstagehdata->article_2}}" id="example-text-input">
</div>
</div>
<!-- end row -->

<div class="row mb-3">
<label for="example-text-input" class="col-sm-2 col-form-label">Article Three</label>
<div class="col-sm-10">
<textarea name="article_3" class="form-control" type="text" rows="5">{{$editapproacstagehdata->article_3}}</textarea>
</div>
</div>
<!-- end row -->


          <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Stage Data">

            
                  </form>
           
              </div>
          </div>
      </div> <!-- end col -->
  </div>
    


</div>
  </div>


@endsection