@extends('spa.app')
@section('contents')

    <script type="text/javascript">
     var i = 1;

function addkid() {
  if (i <= 4) {
    i++;
    var div = document.createElement('div');
    div.innerHTML ="<label>Competitor "+i+' prize</label>:<input type="number" name="compete[]" id="compete[]">'
      + ' <input type="button" id="add_kid()" onclick="addkid()" value="+" />'
      + ' <input type="button" value="-" onclick="removekid(this)">';
    document.getElementById('kids').appendChild(div);
  }
}

function removekid(div) {
  document.getElementById('kids').removeChild(div.parentNode);
  i--;
}
</script>


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
<form method="post" id="post_form" role="form" class="registration-form" action="{{ route('awards.store') }}" enctype="multipart/form-data">
        @csrf

        <h3><i class="fa fa-calendar-check-o"></i>AWARDS REGISTRATION FORM</h3>
        <fieldset class="active">
            <div class="form-group row">        
           <div class="col-md-12 col-sm-12">
        <label>Award name</label>
        <input type="text" name="award_name" placeholder="award name" id="award_name" class="form-control" maxlength="64" required>

  </div>   
  </div>


  <div class="form-group row">
             
              <div class="col-md-6 col-sm-12">
            <div id="kids">

        <label>Competitor 1 prize:</label>
               <input type="number" name="compete[]" id="compete[]">
                <input type="button" id="add_kid()" onclick="addkid()" value="+" />(limit 5) 

         
  </div>

            </div>
          
  </div>

 

  <div class="form-group row">   
      <div class="col-md-6 col-sm-12">
        <label>Status</label>
         <select class="form-control" aria-label="Default select example" name="status" id="status">
  <option value="0"></option>
<option value="Active">Active</option>
<option value="Inactive">Inactive</option>
</select>    
  </div>
  </div>


    <div class="form-group row">
                 <div class="col-lg-6 col-md-12 col-sm-12">
                                    <label for="password_confirmation" :value="('Image')" />
                                    <div class="form-group">
                                    <input type="file" name="photo[]" onChange="displayImage(this)" id="photo" accept="image/*" class="" style="display:block;" required>

                                </div>
                                </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
              </div>
              <img src="images/no.png" onClick="triggerClick()" id="profileDisplay">
            </span>
            </div>
           </div>


 <hr>
          <div class="d-flex justify-content-between mt-3">
             <a href="/awards" role="button" class="btn-previous">Exit</a>
            <button type="submit" class="btn-gradient">Save</button>
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