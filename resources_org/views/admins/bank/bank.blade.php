
  @extends('admins.layouts.Apps.app')
  @section('contents')
  <style type="text/css">    
    .red {
    color: red;
    }
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bank List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bank List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lists of Bank</h3>

          <div class="card-tools">
            <a href="/add-bank" class="btn btn-primary" >
              <i class="fas fa-plus"></i>New Bank
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Bank Name</th>  
                    <th>Swift code</th>     
                     <th>Country</th>  
                    <th>Account Name</th>  
                    <th>Account No</th> 
                      <th>Status</th>         
                    <th>Action</th> 
                                 
                  </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($banks as $bank)
                            <tr>
                    <td>{{ $bank->id }}</td>
                     <td>{{ $bank->bank_name }}</td> 
                     <td>{{ $bank->swift_code }}</td>    
                     <td>{{ $bank->country }}</td> 
                     <td>{{ $bank->account_name }}</td> 
                       <td>{{ $bank->account_no }}</td>   
                        <td>{{ $bank->status }}</td>           
                    <td><a href="/edit-bank/{{$bank->id}}"><i class="fa fa-edit"></i></a>
                     <a href="/destroy-bank/{{$bank->id}}" onclick="return confirm('Are you sure? You want to delete {{ $bank->percent_name}}','bank')"><i class="fa fa-trash red"></i></a></td>
                                </tr>
                     @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Bank Name</th>  
                    <th>Swift code</th>     
                     <th>Country</th>  
                    <th>Account Name</th>  
                        <th>Account No</th>   
                         <th>Status</th>     
                    <th>Action</th>    
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
