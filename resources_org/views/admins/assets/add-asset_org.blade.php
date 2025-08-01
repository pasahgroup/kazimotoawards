
@extends('spa.app')
  @section('contents')

   <script type="text/javascript" src="../js/jquery360.min.js"></script>
 <link rel="stylesheet" href="../../css/mformf.css">

<!-- Include the above in your HEAD tag ---------->


    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-11 form-box">
                <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('asset.store') }}" enctype="multipart/form-data">

                    <fieldset>
                           @csrf
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Asset registration form</h3>

                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">

                                <div class="form-group col-md-4 col-sm-6">
                                    <label>Asset name</label>
                                    <input type="text" class="form-control" name="asset_name" required>
                                </div>

                                <div class="form-group col-md-4 col-sm-6" >
                                    <label>Category</label>
                                <select class="form-control" name="category" id="category" required>
                                     @foreach ($categories as $category)
  <option value="{{$category->id}}">{{$category->category}}</option>
 @endforeach
                                </select>

                            </div>
                                 <div class="form-group col-md-4 col-sm-6">
                                    <label>Subcategory</label>
                                <select class="form-control" name="subcategory" id="subcategory" required="required">
                                     <option value='0'>-- Select subcategory --</option>
                              </select>
                            </div>
                            </div>



                               <div class="row">

                                <div class="form-group col-md-4 col-sm-6">
                                    <label>Model</label>
                                    <input type="text" class="form-control" name="model">
                                </div>

                                <div class="form-group col-md-4 col-sm-6">
                                    <label>Serial no</label>
                                    <input type="text" class="form-control" name="serial_no">
                                </div>

                                  <div class="form-group col-md-4 col-sm-6">
                                    <label>Barcode</label>
                                    <input type="text" class="form-control" name="barcode">
                                </div>
                            </div>



                           <div class="row">
                               <div class="form-group col-md-8 col-sm-8">
                                    <label>Mac Address</label>
                                    <input type="text" class="form-control" name="mac_address">
                                </div>


                                 <div class="form-group col-md-4 col-sm-4">
                                    <label>Tagged no</label>
                                    <input type="text" class="form-control" name="tag_no">
                                </div>

                             </div>


                              <div class="row">
                              <div class="form-group col-md-8 col-sm-8">
                                         <label>Supply</label>
                                        <select class="form-control" name="supply" id="supply">
                                            <option>Benson</option>
                                              <option>Sound vision</option>
                                                <option>Teacher technology</option>
                                                 <option>None</option>
                                        </select>
                                    </div>


                                      <div class="form-group col-md-4 col-sm-6">
                                    <label>Bought price</label>
                                    <input type="number" class="form-control" name="bprice" value="0.00">
                                </div>

                             </div>



                            <div class="row">
                               <div class="form-group col-md-4 col-sm-6">
                                    <label>Warranty Year</label>
                                    <input type="number" class="form-control" name="warranty" min="0" max="10" maxlength="2" onKeyPress="if(this.value.length==2) return false;">
                                </div>

                                 <div class="form-group col-md-4 col-sm-4">
                                         <label>Bought_By</label>
                                        <select class="form-control" name="owned_by" id="owned_by">
                                            <option>Sound vision</option>
                                              <option>Supply1</option>
                                                 <option>Supply2</option>
                                                 <option>Supply3</option>
                                                 <option>None</option>
                                        </select>
                                    </div>


                                     <div class="form-group col-md-4 col-sm-4">
                                         <label>Status</label>
                                        <select class="form-control" name="status" id="status">
                                             <option></option>
                                                <option>Inuse</option>
                                                 <option>Inactive</option>
                                                 <option>Store</option>
                                                 <option>Disposed</option>
                                                  <option>Lost</option>
                                                  <option>Stolen</option>
                                                  <option>Maintenance</option>

                                        </select>
                                    </div>

                             </div>



                           <a  href="/asset" role="button" class="previous btn-previous"><i class="fas fa-angle-double-left"></i></a>
                          <button type="button" class="btn btn-next float-right">Next</button>
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


                                 <div class="form-group col-md-4 col-sm-4">
                                         <label>Location</label>
                                        <select class="form-control" name="location" id="location">

               <option></option>
                                            <option>Best view</option>
                                              <option>Ahadi lodge</option>
                                                <option>Store-MBVL</option>
                                        </select>
                                    </div>

<div class="form-group col-md-3 col-sm-3">
                                         <label>Assigned Date</label>
                                       <input type="date" name="assign_date" placeholder="date" class="form-email form-control">
                                    </div>

                                    <div class="form-group col-md-5 col-sm-5">
                                         <label>Assigned to</label>
                                        <select class="form-control" name="assigned_to" id="assigned_to">
                                           <option></option>
                                            <option>Wawa</option>
                                              <option>Diana</option>

                                        </select>
                                    </div>

                            </div>



                            <div class="row">
  <div class="col-lg-6 col-md-12 col-sm-12">
                                    <x-label for="password_confirmation" :value="__('Photo')" />
                                    <div class="form-group">
                                    <input type="file" name="attachment[]" onChange="displayImage(this)" id="attachment" accept="image/*" class="" style="display:block;">

                                </div>

            <span class="img-div float-right">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
              </div>
              <img src="" onClick="triggerClick()" id="profileDisplay">
            </span>
            </div>

             <!--
               <div class="form-group col-md-4 col-sm-4">
                                         <label>Lodge</label>
                                        <select class="form-control" name="lodge_name">

                                        </select>
             </div> -->
            </div>



                            <button type="button" class="previous btn-previous">Previous</button>
                            <button type="submit" class="submit float-right">Store</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <br>
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

        parent_fieldset.find('input[required],select[required],input[type="emailx"]').each(function () {
            if ($(this).val() == "" || $(this).val() == "0") {
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

        $(this).find('input[required],input[type="emailx"]').each(function () {
                if ($(this).val() == "" || $(this).val() == "0") {
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
