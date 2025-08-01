
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
                <form method="POST" id="post_form" role="form" class="registration-form" action="{{ route('assignee.update',$datas->id) }}" enctype="multipart/form-data">

                    <fieldset>
                           @csrf
                              <input type="hidden" name="_method" value="PUT">

                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Personal Information</h3>
                                
                            </div>
                        </div>

                        <div class="form-bottom">                      

  
  <div class="row">
       
      <div class="form-group col-md-4 col-sm-4">
                                         <label>Student</label>
                                        <select class="form-control" name="student_id" id="student_id" required="">
                                          <option value="{{$datas->student_id}}">{{$datas->first_name}} {{$datas->middle_name}} {{$datas->last_name}}</option>
                                         <option value=""></option>
  @foreach ($studentss as $student) 
  <option value="{{$student->id}}">{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</option>
 @endforeach 
              
                                        </select>
                                    </div> 
                          
                       <div class="form-group col-md-4 col-sm-4">
                                         <label>Assignee lodge</label>
                                        <select class="form-control" name="lodge" id="lodge" required="">
                                             <option>{{$datas->lodge}}</option>
                                            <option>None</option>
  @foreach ($lodges as $lodge) 
  <option>{{$lodge->lodge_name}}</option>
 @endforeach 
              
                                        </select>
                                    </div> 

                              <div class="form-group col-md-4 col-sm-4">
                                         <label>Designation</label>
                                        <select class="form-control" name="designation" id="designation" required="">
                                            <option>{{$datas->designation}}</option>
                                            <option></option>
                                            <option>None</option>
  @foreach ($designations as $designation) 
  <option>{{$designation->designation}}</option>
 @endforeach 
              
                                        </select>
                                    </div>

                                 <div class="form-group col-md-4 col-sm-4">

                                      <div class="form-group">
                                          <label>Assignee date</label>
                                <input type="date" class="form-control" name="date" value="{{$datas->date}}" required="">
                            </div>
                        </div>

    <div class="form-group col-md-4 col-sm-4">

                                      <div class="form-group">
                                          <label>Status</label>
                                  <select class="form-control" name="status" id="status" required="">
                                            <option>{{$datas->status}}</option>
                                            <option></option>
                                            <option>Active</option>
                                                   <option>Inactive</option>
                                          </select>
                            </div>
                        </div>
                        
                            </div>

                          <!-- <button type="button" class="btn btn-next">Next</button> -->
                                <!-- <a type="button" class="previous btn-previous"><<</button> -->
                                  <a type="submit" role="button" class="btn btn-primary" href="/assignee"> <i class="fa fa-angle-double-left"></i></a>

                            <button type="submit" class="submit float-right">Update</button>
                          <br>
                        </div>
                    </fieldset>
                                  </form>
            </div>
        </div>
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