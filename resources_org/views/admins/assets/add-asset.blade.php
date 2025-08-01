@extends('spa.app')
@section('contents')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>
  body {
    font-family: "Calibri Light", Calibri, sans-serif;
    background-color: #f8f9fa;
  }

  .form-container {
    max-width: 1000px;
    margin: 3rem auto;
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
    padding: 0.85rem 2rem;
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
    padding: 0.85rem 1.5rem;
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

<div class="container">
  <div class="row">
    <div class="col-md-12 form-container">
      <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('asset.store') }}" enctype="multipart/form-data">
        @csrf

        <h3><i class="fa fa-calendar-check-o"></i> ASSET REGISTRATION FORM</h3>

        <fieldset class="active">
          <div class="form-group row">
            <div class="col-md-4 col-sm-6">
 <label>Asset Name</label>
              <input type="text" class="form-control @error('asset_name') is-invalid @enderror" name="asset_name" required>
@error('asset_name')
  <div class="col-md-4 col-sm-6">{{ $message }}</div>
@enderror
</div>
            <div class="col-md-4 col-sm-6">
              <label>Category</label>
              <select class="form-control" name="category" id="category" required>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
              </select>
            </div>
           <div class="col-md-4 col-sm-6">
                                    <label>Subcategory</label>
                                <select class="form-control" name="subcategory" id="subcategory" required="required">
                                     <option value='0'>-- Select subcategory --</option>
                              </select>
                            </div>

            </div>
          

          <div class="form-group row">
            <div class="col-md-4 col-sm-6">
              <label>Model</label>
              <input type="text" class="form-control" name="model">
            </div>
            <div class="col-md-4 col-sm-6">
              <label>Serial No</label>
              <input type="text" class="form-control" name="serial_no">
            </div>
            <div class="col-md-4 col-sm-6">
              <label>Mac Address</label>
              <input type="text" class="form-control" name="mac_address">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4 col-sm-6">
              <label>Tag No</label>
              <input type="text" class="form-control" name="tag_no">
            </div>
            <div class="col-md-4 col-sm-6">
              <label>Barcode</label>
              <input type="text" class="form-control" name="barcode">
            </div>
            <div class="col-md-4 col-sm-6">
              <label>Location</label>
              <select class="form-control" name="location" id="location">
                <option></option>
                <option>R & M Tanzania Specialist</option>
                <option>Manyara Best View Lodge</option>
                <option>Ahadi Lodge</option>
                <option>Wildlife Residence Lodge</option>
              </select>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-3">
            <a href="/asset" role="button" class="btn-previous">Cancel</a>
            <button type="button" class="btn-gradient btn-next">Next</button>
          </div>
        </fieldset>

        <fieldset>
          <div class="form-group row">
            <div class="col-md-8 col-sm-8">
              <label>Supplier</label>
              <select class="form-control" name="supply" id="supply">
                <option>Benson & Company</option>
                <option>Sound & vision</option>
                <option>Teacher technology</option>
                <option>Conny Electronics</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-6">
              <label>Bought price</label>
              <input type="number" class="form-control" name="bprice" value="0.00">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4 col-sm-6">
              <label>Warranty</label>
              <input type="number" class="form-control" name="warranty" min="0" max="10" maxlength="2" onKeyPress="if(this.value.length==2) return false;">
            </div>
            <div class="col-md-4 col-sm-4">
              <label>Bought By</label>
              <select class="form-control" name="owned_by" id="owned_by">
                <option></option>
                <option>R & M Tanzania Specialist</option>
                <option>Manyara Best View Lodge</option>
                <option>Ahadi Lodge</option>
                <option>Wildlife Residence Lodge</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-4">
              <label>Status</label>
              <select class="form-control" name="status" id="status">
                <option></option>
                <option>In use</option>
                <option>Not in use</option>
                <option>Need repair</option>
                <option>Brand New</option>
                <option>Lost</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5 col-sm-5">
              <label>Assigned to</label>
              <input type="text" class="form-control" name="assignee">
            </div>
            <div class="col-md-3 col-sm-3">
              <label>Assigned Date</label>
              <input type="date" name="assign_date" placeholder="date" class="form-control">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-lg-6 col-md-12 col-sm-12">
              <label>Photo</label>
              <input type="file" name="attachment[]" onChange="displayImage(this)" id="attachment" accept="image/*" class="form-control">
              <img src="" onClick="triggerClick()" id="profileDisplay" style="display:none; margin-top:10px; max-width:150px; border-radius:10px;">
            </div>
          </div>

          <div class="d-flex justify-content-between mt-3">
            <button type="button" class="btn-previous">Previous</button>
            <button type="submit" class="btn-gradient">Submit</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>




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