
  @extends('admins.layouts.Apps.app')
  @section('contents')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editing Slider Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Editing Slider Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Editing Slider Page
                </h3>
              </div>
              <div class="container-fluid x_content">
                <br />
            

                  <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('themes.update',$sliders->id) }}" enctype="multipart/form-data">

               @csrf
                <input type="hidden" name="_method" value="PUT">   
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label for="inputEmail3">Title</label>
                                 <div class="form-group row">                        
                                <div class="col-sm-12 col-md-12">
                                  <div class="form-group row">
                                    <input type="text" name="title" class="form-control" value="{{$sliders->title}}">
                                        </div>
                                </div>
                                  </div>
                          </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <label for="inputEmail3">Descriptionx </label>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-12">
                             <textarea class="form-control" name="description" cols="30" rows="2">{{ $sliders->description}}</textarea>
                          </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

                            <label for="inputEmail3">Section</label>
                            <div class="form-group row">
                                <div class="col-sm-12 col-md-12">

                              <select name="section" id="section" class="form-control">
                              <option>{{$sliders->section}}</option>
                                
                            <option>Main slider</option>
                             <option>Slider1</option>   
                            <option>Slider2</option>
                           <option>Footer1</option>
                             <option>Footer2</option>  
                               <option>Footer3</option>                     
                            </select>

                                </div>
                              </div>
                        </div>

                          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                            <label for="inputEmail3">Status</label>
                            <div class="form-group row">
                                <div class="col-sm-12 col-md-12">

                            <select name="status" id="status" class="form-control">
                              <option value="{{$sliders->status}}">{{$sliders->status}}</option>
                         
                                <option value="0">0</option>
                                <option value="1">1</option>                  
                            </select>

                                </div>
                              </div>
                        </div>
                     
                        
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                           <div class="row">
 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <x-label for="password_confirmation" :value="__('Photo')" />
                                    <div class="form-group">
                                    <input type="file" name="attachment[]" onChange="displayImage(this)" id="attachment" accept="image/*" class="" style="display:block;">
                                   
                                </div>
                              </div>
          
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <span class="img-div float-right">
              <div class="text-center img-placeholder"  onClick="triggerClick()">               
              </div>
              <img src="{{ URL::asset('/storage/uploads/'.$sliders->attachment) }}" onClick="triggerClick()" id="profileDisplay">
            </span>
</div>



</div>
  </div>


                  <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12 col-md-offset-3">
                      <div class="form-group row">
                     <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </div>
            </div>

            </form>
          <!-- /.col-->
        </div>
    </section>  
  </div>
  <!-- /.content-wrapper -->
@endsection
