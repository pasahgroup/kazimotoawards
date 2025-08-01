
  @extends('admins.layouts.Apps.app')
  @section('contents')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Page</li>
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
                
              </div>
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="{{ route('category.update',$categories->id) }}">
                @csrf
             <input type="hidden" name="_method" value="PUT">
                <div class="card-body">                       
                    <label>Category Name</label>
                    <input class="form-control" type="text" name="category_name" value="{{$categories->category}}">
                    
             </div> 
              <br>                
      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                <a href="/category"  role="button" class="btn btn-success float-left"><i class="fas fa-angle-double-left"></i></a>
              <button type="submit" class="btn btn-primary float-right" name="category" value="category">Update</button>         
              </div>
             </div>
            </form>
               <br>
        </div>
    </section>
  </div> 

@endsection
