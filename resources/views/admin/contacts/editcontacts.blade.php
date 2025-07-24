@extends('layouts.master')
@section('contents')

<div class="d-flex justify-content-center mt-2">
  <div style="width: 50%;">

    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" class="fw-bold">&times;</span>
        </button>
      </div>
    @endif

    @if (session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" class="fw-bold">&times;</span>
        </button>
      </div>
    @endif

    @if (session('duplicate'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('duplicate') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" class="fw-bold">&times;</span>
        </button>
      </div>
    @endif

  </div>
</div>

<div class="form-container">
    <div class="col-md-12">
    <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('contacts.update',$contact_first->id) }}" enctype="multipart/form-data">
        @csrf
        <h3><i class="fa fa-calendar-check-o"></i>Contact Editing Form</h3>
        <fieldset class="active">
    <input type="hidden" name="_method" value="PUT">
 <div class="form-group row">
              <div class="col-md-6 col-sm-12">   
              <label>Phone1</label>
               <input type="text" name="phone1" id="phone1" class="form-control" value="{{$contact_first->phone1}}">
          </div>

           <div class="col-md-6 col-sm-12">   
              <label>Phone2</label>
               <input type="text" name="phone2" id="phone2" class="form-control" value="{{$contact_first->phone2}}">
          </div>
            </div>



 <div class="form-group row">
              <div class="col-md-6 col-sm-12">   
              <label>Email1</label>
               <input type="email" name="email1" id="email1" class="form-control" value="{{$contact_first->email1}}">
          </div>

          <div class="col-md-6 col-sm-12">   
              <label>Email2</label>
               <input type="email" name="email2" id="email2" class="form-control" value="{{$contact_first->email2}}">
          </div>
            </div>



          
 <div class="form-group row">
      <div class="col-md-12 col-sm-12">
        <label>Address</label>
            <textarea cols="30" rows="3" name="address" class="form-control" id="address" placeholder="address" maxlength="1200" value="{{$contact_first->address}}">{{$contact_first->address}}</textarea>
  </div>
  </div>



      <div class="form-group row">
            <div class="col-md-12 col-sm-12">
              <label>Logo</label>
            </div>
                 <div class="col-lg-4 col-md-12 col-sm-12">
                                    <label for="password_confirmation" :value="('Image')" />
                                    <div class="form-group">
                                    <input type="file" name="logo_photo[]" onChange="displayImage(this)" id="logo_photo" accept="image/*" class="" style="display:block;">

                                </div>
                                </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
              </div>
              <img src="{{ URL::asset('/storage/logos/'.$contact_first->logo) }}" onClick="triggerClick()" id="profileDisplay">
            </span>
            </div>               
  </div>




 <div class="form-group row">
                    <div class="col-md-6 col-sm-12">   
              <label>Status</label>
              <select class="form-control" name="status" id="status">
                 <option>{{$contact_first->status}}</option>
                <option></option>
                <option>Active</option>
                <option>Inactive</option>
              </select>
          </div>
            </div>

          <div class="d-flex justify-content-between mt-3">
             <a href="/contacts" role="button" class="btn-previous">Cancel</a>
            <button type="submit" class="btn-gradient">Update</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>

 <script src="../../admins/js/jquery360.js"></script>
   
    <script type='text/javascript'>
    $(document).ready(function(){

        // Department Change
        $('#project_id').change(function(){

             // Department id
             var id = $(this).val();

             // Empty the dropdown
             $('#subproject_id').find('option').not(':first').remove();

             // AJAX request
             $.ajax({
                 url: 'getSlides/'+id,
                 type: 'get',
                 dataType: 'json',
                 success: function(response){

                     var len = 0;
                     if(response['data'] != null){
                          len = response['data'].length;
                     }

                     if(len > 0){
                          // Read data and create <option >
                          for(var i=0; i<len; i++){

                               var id = response['data'][i].id;
                               var name = response['data'][i].sub_project_name;

                               var option = "<option value='"+id+"'>"+name+"</option>";

                               $("#subproject_id").append(option);
                          }
                     }

                 }
             });
        });
    });
    </script>

<script>
  function triggerClick() {
    document.querySelector('#attachment').click();
  }

  function triggerClickvision() {
    document.querySelector('#attachment').click();
  }

  function displayImage(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        var img = document.querySelector('#profileDisplay');
        img.setAttribute('src', e.target.result);
        img.style.display = 'block';
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

  function displayImageVision(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        var img = document.querySelector('#profileDisplayVision');
        img.setAttribute('src', e.target.result);
        img.style.display = 'block';
      };
      reader.readAsDataURL(input.files[0]);
    }
  }


  $(document).ready(function() {
    // Show first fieldset only
    $('fieldset').hide();
    $('fieldset').first().show().addClass('active');

    $('.btn-next').click(function() {
      var current_fs = $(this).closest('fieldset');
      var next_fs = current_fs.next('fieldset');

      // Simple validation: check required fields in current fieldset
      var valid = true;
      current_fs.find('input[required], select[required]').each(function() {
        if (!$(this).val()) {
          $(this).addClass('input-error');
          valid = false;
        } else {
          $(this).removeClass('input-error');
        }
      });

      if (valid && next_fs.length) {
        current_fs.hide().removeClass('active');
        next_fs.show().addClass('active');
        $('html, body').animate({ scrollTop: 0 }, 'fast');
      }
    });

    $('.btn-previous').click(function() {
      var current_fs = $(this).closest('fieldset');
      var prev_fs = current_fs.prev('fieldset');

      if (prev_fs.length) {
        current_fs.hide().removeClass('active');
        prev_fs.show().addClass('active');
        $('html, body').animate({ scrollTop: 0 }, 'fast');
      }
    });

    // Remove error on focus
    $('input, select').on('focus', function() {
      $(this).removeClass('input-error');
    });
  });
</script>



  <script type='text/javascript'>
    $(document).ready(function(){

        // Department Change
        $('#project_name_po').change(function(){

             // Department id
             var id = $(this).val();

             // Empty the dropdown
             $('#sel_emp').find('option').not(':first').remove();
//alert(id);
             // AJAX request
             $.ajax({
                 url: 'getEmployees/'+id,
                 type: 'get',
                 dataType: 'json',
                 success: function(response){

                     var len = 0;
                     if(response['data'] != null){
                          len = response['data'].length;
                     }

                     alert(len);

                     if(len > 0){
                          // Read data and create <option >
                          for(var i=0; i<len; i++){

                               var id = response['data'][i].id;
                               var name = response['data'][i].name;

                               var option = "<option value='"+id+"'>"+name+"</option>";

                               $("#sel_emp").append(option);
                          }
                     }

                 }
             });
        });
    });


     $(document).ready(function(){

        // Department Change
        $('#sel_emp').change(function(){

             // Department id
             var id = $(this).val();


             // Empty the dropdown
             $('#sel_emp2').find('option').not(':first').remove();

             // AJAX request
             $.ajax({
                 url: 'getEmp/'+id,
                 type: 'get',
                 dataType: 'json',
                 success: function(response){

                     var len = 0;
                     if(response['data'] != null){
                          len = response['data'].length;
                     }



                     if(len > 0){
                          // Read data and create <option >
                          for(var i=0; i<len; i++){

                               var id = response['data'][i].id;
                               var name = response['data'][i].name;

                               var option = "<option value='"+id+"'>"+name+"</option>";

                               $("#sel_emp2").append(option);
                          }
                     }

                 }
             });
        });
    });
    </script>

@endsection