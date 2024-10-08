@extends('admin.admin_master')
@section('admin')

<div class="page-content">
  <div class="container-fluid">


          <!-- start page title -->
          <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Three Stages Approach Data | CAL</h4>
                    <a href="{{  route('create.stagesthree') }}" type="button" class="fc-dayGridMonth-button btn btn-primary active">Create Stage Three</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

      <!-- start Stage two -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                          
                            <div class="card-body">
                              
                                <h4 class="card-title">Approach Stage Three Data Display</h4>
                               
                                
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th height="5%" width="5%">Sl</th>
                                        <th height="5%" width="20%">Stage Three</th>
                                        <th height="5%" width="20%">Article One</th>
                                        <th height="5%" width="20%">Article Two</th>
                                        <th height="5%" width="20%">Article Three</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
          
          
                                    <tbody>
                                      @php($i = 1)
                                      @foreach ($stagesthree as $itemthree )
                                      
                                    <tr>
                                        <td>{{ $i++}}</td>
                                        <td>{{ $itemthree->stagethree}}</td>
                                        <td>{{ $itemthree->article_1}}</td>
                                        <td>{{ $itemthree->article_2}}</td>
                                        <td>{{ $itemthree->article_3}}</td>
                                        <td>
                  <a href="{{ route('edit.stages.three',$itemthree->id)}}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i></a>
                   <a href="{{ route('delete.stages.three',$itemthree->id)}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i></a>
          
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