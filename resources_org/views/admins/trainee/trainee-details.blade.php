
 @extends('admins.layouts.Apps.app')
  @section('contents')


<section class="user-profile section">
    <div class="container">
        <div class="row widget">
            <div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
                <div class="sidebar">
                    <!-- User Widget -->
                    <div class="widget user">
                        <!-- User Image -->
                        <div class="image d-flex justify-content-center">
                            <img src="{{ URL::asset('/storage/trainee/'.$trainee->photo) }}" alt="" class="">
                        </div>
                        <!-- User Name -->
                        <h5 class="text-center">{{$trainee->first_name}} {{$trainee->middle_name}} {{$trainee->last_name}}</h5>
                        <p class="text-center">{{$trainee->first_name}} {{$trainee->middle_name}} {{$trainee->last_name}}</p>
                    </div>
                  
                </div>
            </div>
            <div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
                <!-- Edit Profile Welcome Text -->
                <div class="widget welcome-message">
                    <h3>Summary Report</h3>
                </div>
                <!-- Edit Personal Info -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="widget personal-info">
                            <h3 class="widget-header user">Extras Information</h3> 
                          
                             <div><a class="my-1 d-inline-block" href="">Gender: <b>{{$trainee->gender}}</b></a></div>
                             
      <div><a class="my-1 d-inline-block" href="">Addmission: <b>{{$trainee->addmission_no}}</b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Session: <b>{{$trainee->session}}</b></a></div>
                       
                        <div><a class="my-1 d-inline-block" href="">Mobile: <b>{{$trainee->mobile_no}}</b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Email: <b>{{$trainee->email}}</b></a></div>
                  
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6">         

                    <div class="widget change-password">
                        <h3 class="widget-header user">Designation</h3>                        
                   <div>Current designation: <b>{{$trainee->designation}}</b></div>
                    <div>Current location: <b>{{$trainee->located}}</b></div>
                    </div>  
                    </div>
                    <div class="row">
                       @if($search =='sflag')
                 <a href="/trainee" class="btn btn-primary">
              <i class="fa fa-angle-double-left"></i>
            </a>
            @endif

                    @if($search =='iflag')

          <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('searcht',$trainee->class,$trainee->session) }}" enctype="multipart/form-data">

      @csrf
             <input type="hidden" name="user_id" value="POST"> 
<button type="submit" role="button" class="btn btn-primary"> <i class="fa fa-angle-double-left"></i></button>
           </form> 
            @endif


<div class="float-right">
                  @if(Auth::user()->role =='Admin')
                <a href="/editTrainee/{{$trainee->id}}" class="btn btn-success float-right">
              <i class="fas fa-pencil-alt"></i> Edit
            </a>
@endif
            </div> 
        </div>
                </div>
            </div>
        </div>
    </div>
<!-- Table Assignee -->


</section>
@endsection