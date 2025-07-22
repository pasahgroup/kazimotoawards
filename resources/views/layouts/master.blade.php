<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--

    <title>{{ $general->sitename($pageTitle ?? '') }}</title>
    --}}
    <title>TMYA</title>
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="#">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="{{ asset('assets_rentlab/admin/css/vendor/bootstrap.min.css') }}">
    <!-- bootstrap toggle css -->
    <link rel="stylesheet" href="{{asset('assets_rentlab/admin/css/vendor/bootstrap-toggle.min.css')}}">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="{{asset('assets_rentlab/admin/css/all.min.css')}}">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="{{asset('assets_rentlab/admin/css/line-awesome.min.css')}}">

    @stack('style-lib')
    <!-- custom select box css -->
    <link rel="stylesheet" href="{{asset('assets_rentlab/admin/css/vendor/nice-select.css')}}">
    <!-- code preview css -->
    <link rel="stylesheet" href="{{asset('assets_rentlab/admin/css/vendor/prism.css')}}">
    <!-- select 2 css -->
    <link rel="stylesheet" href="{{asset('assets_rentlab/admin/css/vendor/select2.min.css')}}">
    <!-- jvectormap css -->
    <link rel="stylesheet" href="{{asset('assets_rentlab/admin/css/vendor/jquery-jvectormap-2.0.5.css')}}">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{asset('assets_rentlab/admin/css/vendor/datepicker.min.css')}}">
    <!-- timepicky for time picker css -->
    <link rel="stylesheet" href="{{asset('assets_rentlab/admin/css/vendor/jquery-timepicky.css')}}">
    <!-- bootstrap-clockpicker css -->
    <link rel="stylesheet" href="{{asset('assets_rentlab/admin/css/vendor/bootstrap-clockpicker.min.css')}}">
    <!-- bootstrap-pincode css -->
    <link rel="stylesheet" href="{{asset('assets_rentlab/admin/css/vendor/bootstrap-pincode-input.css')}}">
    <!-- dashdoard main css -->
    <link rel="stylesheet" href="{{asset('assets_rentlab/admin/css/app.css')}}">
  

 <link rel="stylesheet" href="../../css/custom2.css">

  

  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></script>


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
  <!-- <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style> -->

   <link rel="stylesheet" href="../../../../css/jquery.dataTables.min.css">
   <script src="../../../../js/jquery.dataTables.min.jss"></script>
   
  <!-- <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script> -->
  <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- End of Custom -->


  <!-- Custom styles -->

  <link rel="stylesheet" href="../../admins/css/style.css">
 <link rel="stylesheet" href="../../css/custom2.css">
    <link rel="stylesheet" href="{{ asset('assets_rentlab/admin/css/vendor/bootstrap.min.css') }}">
    <!-- bootstrap toggle css -->
  
  
     @stack('style')
</head>

<body>

      <!-- page-wrapper start -->
    <div class="">
        @include('admin_rentlab.partials.sidenav')
        @include('admin_rentlab.partials.topnav')


                @include('admin_rentlab.partials.breadcrumb')
              
@yield('contents')
    </div>

<!-- jQuery library -->
<script src="{{asset('assets_rentlab/admin/js/vendor/jquery-3.6.0.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('assets_rentlab/admin/js/vendor/bootstrap.bundle.min.js')}}"></script>
<!-- bootstrap-toggle js -->
<script src="{{asset('assets_rentlab/admin/js/vendor/bootstrap-toggle.min.js')}}"></script>

<!-- slimscroll js for custom scrollbar -->
<script src="{{asset('assets_rentlab/admin/js/vendor/jquery.slimscroll.min.js')}}"></script>
<!-- custom select box js -->
<script src="{{asset('assets_rentlab/admin/js/vendor/jquery.nice-select.min.js')}}"></script>

{{--
@include('admin_rentlab.partials.notify')
--}}
@stack('script-lib')

<script src="{{ asset('assets_rentlab/admin/js/nicEdit.js') }}"></script>

<!-- code preview js -->
<script src="{{asset('assets_rentlab/admin/js/vendor/prism.js')}}"></script>
<!-- seldct 2 js -->
<script src="{{asset('assets_rentlab/admin/js/vendor/select2.min.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets_rentlab/admin/js/app.js')}}"></script>

{{-- LOAD NIC EDIT --}}
<script>
    "use strict";
    bkLib.onDomLoaded(function() {
        $( ".nicEdit" ).each(function( index ) {
            $(this).attr("id","nicEditor"+index);
            new nicEditor({fullPanel : true}).panelInstance('nicEditor'+index,{hasPanel : true});
        });
    });
    (function($){
        $( document ).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain',function(){
            $('.nicEdit-main').focus();
        });
    })(jQuery);
</script>

@stack('script')








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
</body>
</html>
