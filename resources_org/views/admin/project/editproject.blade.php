@extends('spa.app')
@section('contents')

<style>
  body {
    font-family: "Calibri Light", Calibri, sans-serif;
    background-color: #f8f9fa;
  }

 .form-container {
    max-width: 950px;
    margin: 1rem auto;
    background-color: #fff;
    padding: 2rem 3rem;
    border-radius: 1rem;
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
  }

  h3 {
    font-weight: 600;
    margin-bottom: 25px;
    color: #4f46e5;
    text-shadow: 0 0 5px rgba(79, 70, 229, 0.3);
  }

  label {
    font-weight: 500;
    color: #333;
    font-size: 13px;
  }

  .form-control {
    border: 1px solid #ced4da;
    border-radius: 0.75rem;
    /*font-size: 15px;
    padding: 0.75rem;*/
    font-family: "Calibri Light", Calibri, sans-serif;
    transition: border-color 0.2s, box-shadow 0.2s;
  }

  .form-control:focus {
    border-color: #4f46e5;
    box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.25);
  }

  .form-group {
    margin-bottom: 5px;
  }

  .btn-gradient {
    background: linear-gradient(90deg, #4f46e5 0%, #06b6d4 100%);
    border: none;
    padding: 0.1rem 1.2rem;
    border-radius: 2rem;
    color: white;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s, background-color 0.3s;
    font-family: "Calibri Light", Calibri, sans-serif;
    box-shadow: 0 2px 8px rgba(6, 182, 212, 0.15);
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }

  .btn-gradient:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(6, 182, 212, 0.25);
    background-color: #5b69ff;
  }

  .btn-previous {
    background-color: #6c757d;
    border: none;
    padding: 0.4rem 1.5rem;
    border-radius: 2rem;
    color: white;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-family: "Calibri Light", Calibri, sans-serif;
  }

  .btn-previous:hover {
    background-color: #5a6268;
  }

  .input-error {
    border-color: #dc3545 !important;
    background-color: #fff4f4;
  }

  /* Hide all fieldsets except the first */
  fieldset {
    display: none;
  }

  fieldset.active {
    display: block;
  }
</style>

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
<form method="POST" id="post_form" role="form" class="registration-form" action="{{ route('project.update',$project->id) }}" enctype="multipart/form-data">
        @csrf
 <input type="hidden" name="_method" value="PUT">
 
        <h3><i class="fa fa-calendar-check-o"></i>EDIT PROJECT REGISTRATION FORM</h3>

        <fieldset class="active">
            <div class="form-group row">        
           <div class="col-md-6 col-sm-12">
        <label>Project Name</label>

        <input type="text" name="project_name" id="project_name" class="form-control" maxlength="14" value="{{$project->project_name}}" required>

  </div>

      <div class="col-md-6 col-sm-12">
        <label>Project code</label>
        <input type="text" name="project_code" id="project_code" class="form-control" maxlength="14" value="{{$project->project_code}}" required>    
  </div>
  </div>

  <div class="form-group row">
      <div class="col-md-6 col-sm-12">
        <label>region</label>
        <input type="text" name="region" id="region" class="form-control" maxlength="14" value="{{$project->region}}" required>    
  </div>

      <div class="col-md-6 col-sm-12">
        <label>district</label>
        <input type="text" name="district" id="district" class="form-control" maxlength="14" value="{{$project->district}}" required>    
  </div>
  </div>
  <div class="form-group row">
      <div class="col-md-6 col-sm-12">
        <label>start_date</label>
        <input type="date" name="start_date" id="start_date" class="form-control" maxlength="14" value="{{$project->start_date}}" required>    
  </div>

      <div class="col-md-6 col-sm-12">
        <label>Status</label>

         <select class="form-control" aria-label="Default select example" name="status" id="status">
    <option value="{{$project->status}}">{{$project->status}}</option>      
  <option value="0"></option>
<option value="Active">Active</option>
<option value="Inactive">Inactive</option>
</select>    
  </div>
  </div>

 <hr>
          <div class="d-flex justify-content-between mt-3">
             <a href="/project" role="button" class="btn-previous">Back</a>
            <button type="submit" class="btn-gradient">Update</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>


    <script type='text/javascript'>
    $(document).ready(function(){

        // Department Change
        $('#category').change(function(){

             // Department id
             var id = $(this).val();

             // Empty the dropdown
             $('#subcategory').find('option').not(':first').remove();
//alert(id);
             // AJAX request
             $.ajax({
                 url: 'getSubcategory/'+id,
                 type: 'get',
                 dataType: 'json',
                 success: function(response){

                     var len = 0;
                     if(response['data'] != null){
                          len = response['data'].length;
                     }

//alert(len);
                     if(len > 0){
                          // Read data and create <option >
                          for(var i=0; i<len; i++){

                               var id = response['data'][i].category_id;
                               var name = response['data'][i].subcategory;

                               var option = "<option value='"+name+"'>"+name+"</option>";

                               $("#subcategory").append(option);
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

@endsection