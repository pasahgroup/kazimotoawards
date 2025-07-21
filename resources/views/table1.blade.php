@extends('spa.mainlayout')
@section('contents')

  <style type="text/css">
    .red{
      color: red;
    }
  </style>

<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></script>

 <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../../../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="../../../../assets/corporate/scripts/jquery351.min.js" type="text/javascript"></script>
  <!-- Theme style -->
  <!-- summernote -->

  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
  <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                           <a href="/new-user" class="btn btn-primary"> <i class="fa fas fa-plus"></i> Add user</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
       
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Full name</th>
                    <th>Email</th>
                     <th>Photo</th>
                    <th>Role</th>
                    <th>Status</th>
                     <th>Updated at</th>  
                     <th>Action</th>                   
                   
                  </tr>
                  </thead>
                  <tbody>
                      
                  <tr>
                    <td>qq</td>
                    <td>qq</td>
                   <td>qq</td>
                   {{--
                      <td><div class="logo mr-auto"><img src="{{ URL::asset('/storage/user/'.$data->photo) }}" width="60" height="40"></div></td>
                                      --}}
                      <td>qq</td>
                        <td>qq</td>
                     <td>qq</td>
                     <td>qq</td>
                    <td><a href="#"><i class="fa fa-edit"></i></a> 
                    <a href="#" onclick="return confirm('Are you sure? You want to delete User:','Destroy')"><i class="fa fa-trash red"></i></a></td>
                  </tr>
                
                  </tbody>
                  <tfoot>
                   <tr>
                   <th>#</th>
                    <th>Full name</th>
                    <th>Email</th>
                     <th>Photo</th>
                    <th>Role</th>
                    <th>Status</th>
                     <th>Updated at</th>  
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


       <!-- <script src="../assetf/js/jquery/jquery-2.2.4.min.js"></script> -->
<!-- jQuery -->
<script src="../../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../../dist/js/demo.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../../plugins/jszip/jszip.min.js"></script>
<script src="../../../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
  <script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
    })
    $(function () {
      // Summernote
      $('#summernote1').summernote()
    })
    $(function () {
      // Summernote
      $('#summernote2').summernote()
    })
    $(function () {
      // Summernote
      $('#summernote3').summernote()
    })
  </script>
  @endsection