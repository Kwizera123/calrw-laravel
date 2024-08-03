@extends('admin.admin_master')
@section('admin')

<div class="page-content">
  <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
          <div class="col-12">
              <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Header Service Details | cal</h4>
                  <a href="{{  route('header.service.new') }}" type="button" class="fc-dayGridMonth-button btn btn-primary active">New Header Service</a>


              </div>
          </div>
      </div>
      <!-- end page title -->
      
      <div class="row">
          <div class="col-12">
              <div class="card">
                
                  <div class="card-body">
                      <h4 class="card-title">Header Service</h4>
                     
                      
                      <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                          <thead>
                          <tr>
                              <th>Sl</th>
                              <th>Header Service</th>
                              <th>Description Service</th>
                              <th>Action</th>
                          </tr>
                          </thead>


                          <tbody>
                            @php($i = 1)
                            @foreach ($headerservice as $item )
                            
                          <tr>
                              <td>{{ $i++}}</td>
                              <td>{{ $item->service_header}}</td>
                              <td>{!! $item->service_description!!}</td>
                              <td>
<a href="{{ route('edit.service.header',$item->id)}}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i></a>
<a href="{{ route('Delete.service.header',$item->id)}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i></a>

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