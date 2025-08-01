@extends('spa.app')
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
      <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('assign-activity.store') }}" enctype="multipart/form-data">
        @csrf
        <h3><i class="fa fa-calendar-check-o"></i>SUBPROJECT ACTIVITIES ASSIGNING FORM</h3>
        <fieldset class="active">


 <div class="form-group row">                                          
              <div class="col-md-6 col-sm-6">   
              <label>Project name</label>
              <select class="form-control" name="project_id" id="project_id" required>
                <option></option>
  @foreach($projects['data'] as $project)
                <option value="{{$project->id}}">{{$project->project_name}}</option>
            @endforeach    
              </select>
          </div>
                                                
    
              <div class="col-md-6 col-sm-6">   
              <label>Sub project name</label>

              <select id='subproject_id' name='subproject_id' class="form-control" required>
        <option value='0'>-- Select subproject name --</option>
    </select>
          </div>
            </div>

 <div class="form-group row">
  <strong>ACTIVE ACTIVITIES LIST</strong>
 </div>

 <div class="form-group row"> 

    @foreach($activities as $activity)
    <div class="col-md-6 col-sm-6">   
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="{{$activity->id}}" id="checkIndeterminateDisabled" name="activities[]">
  <label class="form-check-label" for="checkIndeterminateDisabled">
   {{$activity->activity_name}}
  </label>
</div>
</div>
 @endforeach
</div>

<hr>
          <div class="d-flex justify-content-between mt-3">
             <a href="/assign-activity" role="button" class="btn-previous">Cancel</a>
            <button type="submit" class="btn-gradient">Save</button>
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
                 url: 'getAssignActivity/'+id,
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
@endsection