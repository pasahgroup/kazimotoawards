@extends('layouts.master')
@section('contents')
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        @auth
        @include('admin_rentlab.partials.sidenav')
        @include('admin_rentlab.partials.topnav')
        @endauth

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                @include('admin_rentlab.partials.breadcrumb')
                @yield('contents')

            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>
@endsection
