
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
            <h1>Session List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Session List</li>
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
          <h3 class="card-title">List of Session</h3>

          <div class="card-tools">
            <a href="/addsession" class="btn btn-primary" >
              <i class="fas fa-plus"></i>New Session
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                      <th>Class Name</th>  
                    <th>Session Name</th>              
                    <th>Action</th> 
                                 
                  </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($sessions as $session)
                            <tr>
                    <td>{{ $session->id }}</td>
                     <td>{{ $session->class_name }}</td>
                     <td><a href="/editSession/{{$session->id}}">{{ $session->session }}</a></td>                   
                    <td><a href="/editSession/{{$session->id}}"><i class="fa fa-edit"></i></a>
                     <a href="/destroySession/{{$session->id}}" onclick="return confirm('Are you sure? You want to delete {{ $session->session}}','Session')"><i class="fa fa-trash red"></i></a></td>
                                </tr>
                     @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Class Name</th>
                    <th>Session Name</th>              
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
