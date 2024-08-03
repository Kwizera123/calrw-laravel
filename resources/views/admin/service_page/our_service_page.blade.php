@extends('admin.admin_master')
@section('admin')

<div class="page-content">
  <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
          <div class="col-12">
              <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Our Service | cal</h4>
                  <a href="{{  route('our.service.new') }}" type="button" class="fc-dayGridMonth-button btn btn-primary active">New Service</a>
                  

              </div>
          </div>
      </div>
      <!-- end page title -->
      
      <div class="row">
          <div class="col-12">
              <div class="card">
                
                  <div class="card-body">
                      <h4 class="card-title">Our Service</h4>
                     
                      
                      <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                          <thead>
                          <tr>
                              <th>Sl</th>
                              <th>Subtitle Service</th>
                              <th>Description Service</th>
                              <th>Action</th>
                          </tr>
                          </thead>


                          <tbody>
                            @php($i = 1)
                            @foreach ($ourservice as $item )
                            
                          <tr>
                              <td>{{ $i++}}</td>
                              <td>{{ $item->service_title}}</td>
                              <td>{!! $item->service_description!!}</td>
                              <td>
<a href="{{ route('edit.our.service',$item->id)}}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i></a>
<a href="{{ route('delete.our.service',$item->id)}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i></a>

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