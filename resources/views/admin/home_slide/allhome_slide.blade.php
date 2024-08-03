@extends('admin.admin_master')
@section('admin')

<div class="page-content">
  <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
          <div class="col-12">
              <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">All Home Slides | cal</h4>
                  <a href="{{  route('allhome.slide.new') }}" type="button" class="fc-dayGridMonth-button btn btn-primary active">New Service</a>
                  

              </div>
          </div>
      </div>
      <!-- end page title -->
      
      <div class="row">
          <div class="col-12">
              <div class="card">
                
                  <div class="card-body">
                      <h4 class="card-title">All Home Slides Display</h4>
                     
                      
                      <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                          <thead>
                          <tr>
                              <th height="5%" width="5%">Sl</th>
                              <th height="5%" width="5%">Title</th>
                              <th height="10%" width="2%">Description</th>
                              <th height="2%" width="2%">Slide</th>
                              <th height="5%" width="5%">Name</th>
                              <th height="5%" width="5%">Short Title</th>
                              <th>Action</th>
                          </tr>
                          </thead>


                          <tbody>
                            @php($i = 1)
                            @foreach ($homeslide as $item )
                            
                          <tr>
                              <td>{{ $i++}}</td>
                              <td>{{ $item->title}}</td>
                              <td>{!! $item->descreption!!}</td>
                              {{-- <td>{{ $item->home_slider}}</td> --}}
                              <td><img src="{{ asset($item->home_slider) }}" style="width:40px; height:30px;"></td>
                              <td>{{ $item->name}}</td>
                              <td>{{ $item->short_title}}</td>
                              <td>
<a href="{{ route('edit.home.slide',$item->id)}}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i></a>
<a href="{{ route('delete.home.slide',$item->id)}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i></a>

                              </td>
                          </tr>
                          @endforeach
                          </tbody>
                      </table>

                  </div>
              </div>
          </div> <!-- end col -->
      </div> <!-- end row -->


  </div> <!-- container-fluid -->
</div>

@endsection