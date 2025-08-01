
 @extends('admins.layouts.Apps.app')
  @section('contents')


<section class="user-profile section">
    <div class="container">
      @if($student !=null)
        <div class="row widget">
            <div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
                <div class="sidebar">
                    <!-- User Widget -->
                    <div class="widget user">
                        <!-- User Image -->
                        <div class="image d-flex justify-content-center">
                            <img src="{{ URL::asset('/storage/photos/'.$student->photo) }}" alt="" class="">
                        </div>
                        <!-- User Name -->
                        <h5 class="text-center">{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</h5>
                        <p class="text-center">{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</p>
                    </div>
                    <!-- Dashboard Links -->
                    <div class="widget dashboard-links">

                        <input type="hidden" class="form-control" name="classg" value="{{$student->last_name}}">
                          <input type="hidden" class="form-control" name="session" value="{{$student->last_name}}">

                       <div><a class="my-1 d-inline-block" href="">Addmission: <b>{{$student->addmission_no}}</b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Session: <b>{{$student->session}}</b></a></div>
                       
                        <div><a class="my-1 d-inline-block" href="">Mobile: <b>{{$student->mobile_no}}</b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Email: <b>{{$student->email}}</b></a></div>
                          <div><a class="my-1 d-inline-block" href="">Marital status: <b>{{$student->marital_status}}</b></a></div>
                        <div><a class="my-1 d-inline-block" href="">No of Children: <b>{{$student->no_children}}</b></a></div>
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
                             <div><a class="my-1 d-inline-block" href="">Birth Date: <b>{{$student->birth_date}}</b></a></div>
                             <div><a class="my-1 d-inline-block" href="">Gender: <b>{{$student->gender}}</b></a></div>
                             <div><a class="my-1 d-inline-block" href="">Religion: <b>{{$student->religion}}</b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Tribe: <b>{{$student->tribe}}</b></a></div>
                         <div><a class="my-1 d-inline-block" href="">Parental status: <b>{{$student->parental_status}}</b></a></div>

                        <hr>  
                            <div><a class="my-1 d-inline-block" href="">Education Level: <b>{{$student->education_level}}</b></a></div> 
                             <div><a class="my-1 d-inline-block" href="">Year of Complete: <b>{{$student->graduate}}</b></a></div>                         
                        <hr>
                              <div><a class="my-1 d-inline-block" href="">Current residence: <b>{{$student->current_residence}}</b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Place of Origin: <b>{{$student->place_origin}}</b></a></div> 
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- Change Password -->
                    <div class="widget change-password">
                        <h3 class="widget-header user">Guardian detail</h3> 
                <div>Guardian relationship: <b>{{$student->relationship}}</b></div>                       
                   <div>Guardian name: <b>{{$student->gurdian_name}}</b></div> 
                   <div>Guardian mobile: <b>{{$student->guardian_mobile}}</b></div>
                    </div> 


                                       <div class="widget change-password">
                        <h3 class="widget-header user">Designation</h3>                        
                   <div>Current designation: <b>{{$student->designation}}</b></div>
                    <div>Current location: <b>{{$student->located}}</b></div>
                    </div>  
                    </div>
                    <div class="row">
                       @if($search =='sflag')
                 <a href="/students" class="btn btn-primary">
              <i class="fa fa-angle-double-left"></i>
            </a>
            @endif

                     @if($search =='assignee')
                 <a href="/assignee" class="btn btn-primary">
              <i class="fa fa-angle-double-left"></i>
            </a>
            @endif

                    @if($search =='iflag')


          <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('search',$student->class,$student->session) }}" enctype="multipart/form-data">

      @csrf
             <input type="hidden" name="user_id" value="POST">

 
<button type="submit" role="button" class="btn btn-primary"> <i class="fa fa-angle-double-left"></i></button>
           </form> 
            @endif


<div class="float-right">
                  @if(Auth::user()->role =='Admin')
                <a href="/editStudent/{{$student->id}}" class="btn btn-success float-right">
              <i class="fas fa-pencil-alt"></i> Edit
            </a>
@endif
            </div> 
        </div>
                </div>
            </div>
        </div>


 <div class="row widget">
            <div class="col-md-12">
              <b>Student Assignee record table</b>


                <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                     <th>ID</th>
                    <th>Name</th>
                      <th>Lodge</th>
                    <th>designation</th>
  <th>Photo</th>
                    
                     <th>Date</th>
<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
              
                 @foreach ($datas as $data)
                  <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->pin }}</td>
                    <td>{{ $data->first_name }} {{ $data->middle_name }} {{ $data->last_name }}</td>
                                      <td><span class="badge"> {{ $data->lodge}}</span></td>
                    <td><span class="badge"> {{ $data->designation }}</span></td>
                  
                   
                  <!--    <td>{{ $data->main }}</td>
                     <td>{{ $data->tour_code }}</td> -->
                      <td><div class="logo mr-auto"><img src="{{ URL::asset('/storage/photos/'.$data->photo) }}"  style="width:100px; height:90px;"></div></td>
                       <td>{{ $data->date }}</td>
                   <td>{{ $data->status }}</td>

                    <td>

    
  @if(Auth::user()->role =='Admin')
                      <a role="button" href="{{ route('assignee.edit',$data->id) }}" style="color:green"><i class="fa fa-edit" ></i></a> 
                      @endif
                     
                     <!--  <a role="button" href="/destroyf/{{$data->id}} " onclick="return confirm('Are you sure? You want to delete {{ $data->tour_name}}','Inclusive')"><i class="fa fa-trash red"></i></a> -->

                    </td>
                  </tr>
                  @endforeach

            

                  </tbody>
                  <tfoot>
                   <tr>
                     <th>#</th>
                     <th>ID</th>
                    <th>Name</th>
                      <th>Lodge</th>
                    <th>designation</th>
                   <th>Photo</th>

                     <th>Date</th>
                     <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>
            </div>
          </div>
    </div> 
    @else
<div>Nothing to Display</div>
<div>
  <a type="button" class="btn btn-primary" href="/assignee"><i class="fa fa-angle-double-left"></i></a>

</div>
  @endif      
</section>
@endsection