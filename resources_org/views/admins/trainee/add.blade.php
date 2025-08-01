
  @extends('admins.layouts.Apps.app')
  @section('contents')


<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 -->
 <link rel="stylesheet" href="../../css/mformf.css">

<!------ Include the above in your HEAD tag ---------->

 
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-11 form-box">
                <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('trainee.store') }}" enctype="multipart/form-data">

                    <fieldset>
                           @csrf                         
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Personal Information</h3>
                                
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">
                             
                                <div class="form-group col-md-4 col-sm-6" >
                                    <label>Class</label>
                                <select class="form-control" name="class">
                                    <option></option>
                                    
                                     @foreach ($classes as $class) 
  <option>{{$class->class}}</option>
 @endforeach 
                                             

                                </select>
                            </div>
                                 <div class="form-group col-md-4 col-sm-6">
                                    <label>Session</label>
                                <select class="form-control" name="session">
                                     <option></option>
                                    <option>March 2023</option>
                                    <option>June 2023</option>


                                     @foreach ($sessions as $session) 
  <option>{{$session->session}}</option>
 @endforeach 
                                </select>
                            </div>
                          <!--   </div>


                              <div class="row"> -->
                                <div class="form-group col-md-2 col-sm-6">
                                    <label>No of Topics</label>
                                    <input type="number" class="form-control" name="no_of_topic" min="0" max="20" maxlength="2">
                                </div>
                                <div class="form-group col-md-2 col-sm-6">
                                    <label>Trained Topics</label>
                                    <input type="number" class="form-control" name="trained_topic" min="0" max="20" maxlength="2">
                                </div>
                            </div>

                               <div class="row">
                                <div class="form-group col-md-4 col-sm-6">
                                    <label>First name</label>
                                    <input type="text" class="form-control" placeholder="First name" name="fname">
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <label>Middle name</label>
                                    <input type="text" class="form-control" placeholder="middle name" name="mname">
                                </div>
                                 <div class="form-group col-md-4 col-sm-6">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" placeholder="Last name" name="lname">
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom:3px;">
                                <div class="row">

                                    <div class="form-group col-md-4 col-sm-4">
                                         <label>Gender</label>
                                        <select class="form-control" name="gender">
                                             <option></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>


                                      <div class="form-group col-md-4 col-sm-4">
                                         <label>Mobile number</label>
                                        <input type="text" class="form-control" name="mobile_no" required>
                                    </div>

                          
                               <div class="form-group col-md-4 col-sm-4">
                                      <div class="form-group">
                                       <label>Email</label>
                                <input type="email" name="email" placeholder="Email" class="form-email form-control">
                            </div>
                          </div>

                                </div>
                            </div>



<div class="row">
  <div class="col-lg-4 col-md-12 col-sm-12">
                                    <x-label for="password_confirmation" :value="__('Photo')" />
                                    <div class="form-group">
                                    <input type="file" name="attachment[]" onChange="displayImage(this)" id="attachment" accept="image/*" class="" style="display:block;"> 
                                   
                                </div>
          
            <span class="img-div float-right">
              <div class="text-center img-placeholder"  onClick="triggerClick()">               
              </div>
              <img src="images/no.png" onClick="triggerClick()" id="profileDisplay">
            </span>
            </div>

               <div class="form-group col-md-4 col-sm-4">
                                         <label>Lodge</label>
                                        <select class="form-control" name="lodge_name">
                                             <option></option>
                                            
                                     @foreach ($lodges as $lodge) 
  <option>{{$lodge->lodge_name}}</option>
 @endforeach 
                                        </select>
                                    </div>
            </div>

                            
                          <button type="button" class="btn btn-next">Next</button>
                        </div>
                    </fieldset>
                  


                    <fieldset>
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Other Information</h3>
                             
                            </div>
                        </div>

                        <div class="form-bottom">

 <div class="row">
                      

                                 <div class="form-group col-md-6 col-sm-6">
                                         <label>Designation</label>
                                        <select class="form-control" name="designation" id="designation">
                                            <option></option>
                                            <option>None</option>
  @foreach ($designations as $designation) 
  <option>{{$designation->designation}}</option>
 @endforeach 
              
                                        </select>
                                    </div>


   <div class="form-group col-md-6 col-sm-6">
                                         <label>Status</label>
                                        <select class="form-control" name="located" id="located">
                                            <option></option>
                                            <option>Active</option>
                                              <option>Inactive</option>
                                                <option>Died</option>
                                                 <option>None</option>
  
                                        </select>
                                    </div>
                                
                            </div>

                

                            <button type="button" class="previous btn-previous">Previous</button>
                            <button type="submit" class="submit float-right">Submit</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <br>
    </div>
    <script type="text/javascript">
        
        $(document).ready(function () {
    $('.registration-form fieldset:first-child').fadeIn('slow');

    $('.registration-form input[type="text"]').on('focus', function () {
        $(this).removeClass('input-error');
    });

    // next step
    $('.registration-form .btn-next').on('click', function () {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        parent_fieldset.find('input[type="text"],input[type="emailx"]').each(function () {
            if ($(this).val() == "") {
                $(this).addClass('input-error');
                next_step = false;
            } else {
                $(this).removeClass('input-error');
            }
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                $(this).next().fadeIn();
            });
        }

    });

    // previous step
    $('.registration-form .btn-previous').on('click', function () {
        $(this).parents('fieldset').fadeOut(400, function () {
            $(this).prev().fadeIn();
        });
    });

    // submit
    $('.registration-form').on('submit', function (e) {

        $(this).find('input[type="text"],input[type="emailx"]').each(function () {
            if ($(this).val() == "") {
                e.preventDefault();
                $(this).addClass('input-error');
            } else {
                $(this).removeClass('input-error');
            }
        });

    });
   
});
    </script>

    <script src="../../img_library/scripts.js" type="text/javascript"></script>
      @endsection