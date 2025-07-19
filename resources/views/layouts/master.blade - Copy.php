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
  








  <style>
    /* Sidebar styles */
    .main-sidebar .nav-link {
      font-size: 16px;
      font-weight: 500;
      padding: 10px 15px;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.3s ease;
    }
    .main-sidebar .nav-link:hover {
      background-color: #1e282c;
      color: #ffffff;
    }
    .main-sidebar .nav-icon {
      font-size: 18px;
    }
    .main-sidebar .nav-treeview .nav-link {
      padding-left: 30px;
    }
    .main-sidebar .brand-link {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 18px;
      font-weight: bold;
    }
    .brand-link img {
      width: 40px;
      height: 40px;
    }
    .nav-item .nav-treeview i.nav-icon {
      color: #adb5bd;
    }

    /* Active state */
    .main-sidebar .nav-item > .nav-link.active {
      background-color: #007bff;
      color: #fff;
    }

    /* Navbar styles */
    .main-header.navbar {
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .main-header .nav-link {
      font-weight: 500;
      transition: color 0.3s;
    }
    .main-header .nav-link:hover {
      color: #007bff;
    }
    .navbar-nav .dropdown-menu {
      width: 300px;
    }

    /* Dark/Light mode styles */
    .dark-mode {
      background-color: #121212;
      color: #ffffff;
    }
    .light-mode {
      background-color: #f4f6f9;
      color: #000000;
    }

    /* Notification Icon size */
    .nav-link i.far.fa-comments {
      font-size:0px;
    }

    /* Admin profile image */
    .user-panel .image img {
      border-radius: 50%;
      width: 35px;
      height: 35px;
    }

  /* Legendary Sidebar Gradient & Style */
  .main-sidebar {
    background: linear-gradient(160deg, #4f46e5 0%, #06b6d4 100%) !important;
    color: #fff !important;
    min-height: 100vh;
    border-top-right-radius: 2rem;
    border-bottom-right-radius: 2rem;
    box-shadow: 0 6px 24px rgba(6, 182, 212, 0.18);
  }
  .brand-link {
    background: transparent !important;
    border-bottom: 0;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
  }
  .brand-link .brand-image {
    box-shadow: 0 2px 8px rgba(6, 182, 212, 0.10);
    border-radius: 50%;
    background: #fff;
    padding: 3px;
  }
  .brand-link .brand-text {
    color: #fff !important;
    font-weight: 700;
    font-size: 1.35rem;
    letter-spacing: 0.06em;
  }
  .sidebar .nav-link {
    color: #e0e7ff !important;
    font-weight: 500;
    border-radius: 2rem;
    margin: 0.25rem 0.5rem;
    transition: background 0.18s, color 0.18s, box-shadow 0.18s;
    padding: 0.7rem 1.1rem;
    display: flex;
    align-items: center;
    gap: 0.7rem;
  }
  .sidebar .nav-link .nav-icon {
    font-size: 1.2rem;
    color: #a5b4fc !important;
    transition: color 0.18s;
  }
  .sidebar .nav-link.active,
  .sidebar .nav-link:hover {
    background: rgba(255,255,255,0.12) !important;
    color: #fff !important;
    box-shadow: 0 2px 10px rgba(6,182,212,0.08);
  }
  .sidebar .nav-link.active .nav-icon,
  .sidebar .nav-link:hover .nav-icon {
    color: #fff !important;
  }
  .sidebar .nav-treeview {
    background: none !important;
  }
  .sidebar .nav-treeview .nav-link {
    color: #b3c1f7 !important;
    font-weight: 400;
    border-radius: 1.2rem;
    padding-left: 2.6rem;
  }
  .sidebar .nav-treeview .nav-link.active,
  .sidebar .nav-treeview .nav-link:hover {
    background: rgba(255,255,255,0.12) !important;
    color: #fff !important;
  }
  .sidebar hr {
    border-top: 1px solid #3b82f6;
    margin: 0.7rem 0;
  }
  ::-webkit-scrollbar-thumb {
    background: #4f46e5;
    border-radius: 10px;
  }

  </style>





  
     @stack('style')
</head>

<body>

      <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        @include('admin_rentlab.partials.sidenav')
        @include('admin_rentlab.partials.topnav')

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                @include('admin_rentlab.partials.breadcrumb')
              
@yield('contents')
            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
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
</body>
</html>
