
  @extends('admins.layouts.Apps.app')
  @section('contents')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Location</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Location</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Update Location
                </h3>
              </div>
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="{{ route('location-update',$id) }}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
             
                      <div class="row">
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="form-group row">
                      <label class="col-sm-2 col-md-2 col-form-label">Location Name</label>
                      <div class="col-sm-10 col-md-10">
                        <input type="text" class="form-control" name="location_name"  value="{{$datas->location_name}}">
                      </div>
                        </div>
                    </div>

                    </div>


                <div class="form-group row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                <button type="submit" class="btn btn-primary float-right">Update</button>
              </div>
                  </div>
                </div>
            </form>
          <!-- /.col-->
        </div>
    </section>
  </div>
@endsection
