@extends('admin.admin_master')
@section('admin')

<div class="page-content">
  <div class="container-fluid">


          <!-- start page title -->
          <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Stages Approach Data | CAL</h4>
                    
                    
  
                </div>
            </div>
        </div>
        <!-- end page title -->

      <!-- start Stage two -->
      
      <div class="row">
          <div class="col-12">
              <div class="card">
                
                  <div class="card-body">
                      <h4 class="card-title">All Approach Stage One Data Display</h4>
                     
                      
                      <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                          <thead>
                          <tr>
                              <th height="5%" width="5%">Sl</th>
                              <th height="5%" width="20%">Stage</th>
                              <th height="5%" width="20%">Article</th>
                              <th height="5%" width="20%">Article One</th>
                              <th height="5%" width="20%">Article Two</th>
                              
                              <th>Action</th>
                          </tr>
                          </thead>


                          <tbody>
                            @php($i = 1)
                            @foreach ($stages as $item )
                            
                          <tr>
                              <td>{{ $i++}}</td>
                              <td>{{ $item->stageone}}</td>
                              <td>{{ $item->article}}</td>
                              <td>{{ $item->article_one}}</td>
                              <td>{{ $item->article_two}}</td>
                              <td>
        <a href="{{ route('edit.approach_stages.data',$item->id)}}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i></a>
        <a href="{{ route('delete.approach_stages.data',$item->id)}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i></a>

                              </td>
                          </tr>
                          @endforeach
                          </tbody>
                      </table>

                  </div>
              </div>
          </div> <!-- end col -->
      </div> <!-- end row -->

                  <!-- start Stage Three -->


                {{-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                          
                            <div class="card-body">
                                <h4 class="card-title">All Approach Stage Two Data Display</h4>
                               
                                
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th height="5%" width="5%">Sl</th>
                                        <th height="5%" width="20%">Stage Two</th>
                                        <th height="5%" width="20%">Article</th>
                                        <th height="5%" width="20%">Article One</th>
                                        <th height="5%" width="20%">Article Two</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
          
          
                                    <tbody>
                                      @php($i = 1)
                                      @foreach ($stages as $itemtwo )
                                      
                                    <tr>
                                        <td>{{ $i++}}</td>
                                        <td>{{ $itemtwo->stagetwo}}</td>
                                        <td>{{ $itemtwo->article1}}</td>
                                        <td>{{ $itemtwo->article2}}</td>
                                        <td>{{ $itemtwo->article3}}</td>
                                        <td>
                  <a href="{{ route('edit.approach_stages.data',$itemtwo->id)}}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i></a>
                  <a href="{{ route('delete.approach_stages.two',$itemtwo->id)}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i></a>
          
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
          
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row --> --}}


                {{-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                          
                            <div class="card-body">
                                <h4 class="card-title">All Approach Stage Three Data Display</h4>
                               
                                
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th height="5%" width="5%">Sl</th>
                                        <th height="5%" width="20%">Stage Three</th>
                                        <th height="5%" width="20%">Article</th>
                                        <th height="5%" width="20%">Article One</th>
                                        <th height="5%" width="20%">Article Two</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
          
          
                                    <tbody>
                                      @php($i = 1)
                                      @foreach ($stages as $itemthree )
                                      
                                    <tr>
                                        <td>{{ $i++}}</td>
                                        <td>{{ $itemthree->stagethree}}</td>
                                        <td>{{ $itemthree->article_1}}</td>
                                        <td>{{ $itemthree->article_2}}</td>
                                        <td>{{ $itemthree->article_3}}</td>
                                        <td>
                  <a href="{{ route('edit.approach_stages.data',$itemthree->id)}}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i></a>
                  <a href="{{ route('delete.approach_stages.three',$itemthree->id)}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i></a>
          
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
          
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row --> --}}


  </div> <!-- container-fluid -->
</div>

@endsection