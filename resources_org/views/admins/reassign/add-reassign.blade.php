

  @extends('admins.layouts.Apps.app')
  @section('contents')

   <script type="text/javascript" src="../js/jquery360.min.js"></script>
 <link rel="stylesheet" href="../../css/mformf.css">

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
    font-size: 15px;
    padding: 0.75rem;
    font-family: "Calibri Light", Calibri, sans-serif;
    transition: border-color 0.2s, box-shadow 0.2s;
  }

  .form-control:focus {
    border-color: #4f46e5;
    box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.25);
  }

  .form-group {
    margin-bottom: 20px;
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
    padding: 0.75rem 1.5rem;
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
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>ASSET REASIGNMENT FORM</h3>
                                
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">

                                     <div class="form-group col-md-4 col-sm-6" >
                                    <label>Asset name</label>
                                <select class="form-control" name="asset_name" id="asset_name" required>   
                                               <option value="0">--select asset--</option>                   
                                     @foreach ($assets as $asset) 
  <option value="{{$asset->id}}">{{$asset->asset_name}}</option>
 @endforeach 
                                             

                                </select>
                            </div>


      <div class="form-group col-md-4 col-sm-6" >
                                    <label>Category</label>
                                <select class="form-control" name="category" id="category" required>  
                                         

                                </select>
                            </div>

                             
                                <div class="form-group col-md-4 col-sm-6" >
                                    <label>Employee</label>
                                <select class="form-control" name="employee" id="employee" required>   
                                               <option value="0">--select employee--</option>                   
                                     @foreach ($employees as $employee) 
  <option value="{{$employee->id}}">{{$employee->full_name}}</option>
 @endforeach 
                                             

                                </select>
                            </div>
                              
                            </div>



                               <div class="row">

                                <div class="form-group col-md-4 col-sm-6">
                                    <label>Model</label>
                                    <input type="text" class="form-control" name="model" id="model" readonly> 
                                </div>
                             
                                <div class="form-group col-md-4 col-sm-6">
                                    <label>Serial no</label>
                                    <input type="text" class="form-control" name="serial_no"  id="serial_no" readonly>
                                </div>
<!--
                                  <div class="form-group col-md-4 col-sm-6">
                                    <label>Barcode</label>
                                    <input type="text" class="form-control" name="barcode" id="barcode" readonly>
                                </div>
                            </div>



                           <div class="row">                             
                               <div class="form-group col-md-4 col-sm-4">
                                    <label>Mac Address</label>
                                    <input type="text" class="form-control" name="mac_address" id="mac_address" readonly>
                                </div>

                              
<div class="form-group col-md-4 col-sm-4">
                                    <label>Tagged no</label>
                                    <input type="text" class="form-control" name="tag_no" id="tag_no" readonly>
                                </div>
-->
<div class="form-group col-md-4 col-sm-4">
                                    <label>Location</label>
                                    <input type="text" class="form-control" name="location"  id="location" readonly>
                                </div>

                             </div>


                              <div class="row">                             
                               
<div class="form-group col-md-4 col-sm-4">
                                    <label>current assignee</label>
                                    <input type="text" class="form-control" name="assignee" id="assignee" readonly>
                                </div>


                                 <div class="form-group col-md-4 col-sm-4">
                                          <label>Supplier</label>
                                        <select class="form-control" name="supply" id="supply">
                                            <option>Benson & Company</option>
                                              <option>Sound & vision</option>
                                                <option>Teacher technology</option>
                                                 <option>Conny Electronics</option>                                     

                                        </select>
                                    </div>


                                      <div class="form-group col-md-4 col-sm-6">
                                    <label>Bought price</label>
                                    <input type="number" class="form-control" name="bprice" id="bprice" readonly>
                                </div>

                             </div>



    <div class="row">                             
                               <div class="form-group col-md-4 col-sm-6">
                                    <label>Warranty Year</label>
                                    <input type="number" class="form-control" name="warranty" id="warranty" min="0" max="10" maxlength="2" onKeyPress="if(this.value.length==2) return false;" readonly>
                                </div>

                                 <div class="form-group col-md-4 col-sm-4">
                                        <label>Bought_By</label>
                                        <select class="form-control" name="owned_by" id="owned_by">
                                             <option></option>
                                            <option>R & M Tanzania Specialist</option>
                                              <option>Manyara Best View Lodge</option>
                                                 <option>Ahadi Lodge</option>
                                                 <option>Wildlife Residence Lodge</option>
                                        </select>
                                    </div>


                                     <div class="form-group col-md-4 col-sm-4">
                                         <label>Status</label>
                                        <select class="form-control" name="status" id="status">
                                              
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
             <img src="" onClick="triggerClick()" id="imgResource">
            </span>
            </div>          
            </div>



                           <a  href="/indexf" role="button" class="previous btn-previous"><i class="fas fa-angle-double-left"></i></a>
                          <button type="submit" class="submit float-right">Save</button>
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
        $('#asset_name').change(function(){

             // Department id
             var id = $(this).val();





            
 $('#model').val("");
  $('#serial_no').val("");
   $('#barcode').val("");

     $('#location').val("");
       $('#tag_no').val("");
         $('#mac_address').val("");
           $('#assignee').val("");

         
           $('#bprice').val("");
           $('#status').val("");
            $('#warranty').val("");
           

  //var imgUrl=window.location.origin+"/storage/photos/lion_1719649560.jpeg";
            // var id="awa";
 //alert(id);
             // Empty the dropdown
               var supplyClear = document.getElementById('supply');
              supplyClear.innerHTML = '';

                 var statusClear = document.getElementById('status');
              statusClear.innerHTML = '';
                  var categoryClear = document.getElementById('category');
              categoryClear.innerHTML = '';

              
              // var urf=window.location.host+"/storage/photos/";
                 //var urf=window.location.href;
              //var urf=window.location.host;
                  var urf=window.location.origin;
                 //var urf = window.location.pathname.split('8000')[1]

           //alert(urf);

             // $('#supply').find('option').not(':first').remove();
               // $('#supply').find('option').not(':second').remove();
              // $('#supply').find('[value="id"]').remove(); 

  // $('#serial_no').val(67d);

          

             // AJAX request 
             $.ajax({
                   type: 'get',
                 url: 'getAll/'+id,
              
                 dataType: 'json',
                 success: function(response){

                     var len = 0;
                     if(response['data'] != null){
                          len = response['data'].length;
                     }
 // alert(id);

 // $('#'+section_name+'').val(ssn);


                     if(len > 0){

                          // Read data and create <option >
                          for(var i=0; i<len; i++){

                               var id = response['data'][i].id;
                                var name = response['data'][i].asset_name;
                                 var model = response['data'][i].model;
                                
                                  var serial_no = response['data'][i].serial_no;
                                   var barcode = response['data'][i].barcode;

                                    var location = response['data'][i].location;
                                     var tag_no = response['data'][i].tag_no;
                                      var mac_address = response['data'][i].mac_address;
                                       var assignee = response['data'][i].assigned_to;

                                          var supply = response['data'][i].supply;
                                          var bprice = response['data'][i].bprice;
                                          var warranty = response['data'][i].warranty;
                                          var status = response['data'][i].status;
                                         var category = response['data'][i].category;

                                            var photos = response['data'][i].photo;

//alert(photos);

                               // var option = "<option value='"+name+"'>"+name+"</option>";
                               // var option = "<option value='"+name+"'>"+name+"</option>";
                                   
                                   
                               
                               
                               //var serial_no = "<input value='"+serial_no+"'>"+serial_no+">";
                                     // alert(tag_no);
                                  
                                        var supplyOption = "<option value='"+supply+"'>"+supply+"</option>";
                                         var statusOption = "<option value='"+status+"'>"+status+"</option>";
                                          var categoryOption = "<option value='"+category+"'>"+category+"</option>";
                                        

 $('#model').val(model);
  $('#serial_no').val(serial_no);
   $('#barcode').val(barcode);

     $('#location').val(location);
       $('#tag_no').val(tag_no);
         $('#mac_address').val(mac_address);
           $('#assignee').val(assignee);
  
$('#bprice').val(bprice);
         $('#warranty').val(warranty);
           $('#status').val(status);

                            
                             $("#supply").append(supplyOption);
                              $("#status").append(statusOption); 
                               $("#category").append(categoryOption); 


  

var imgUrl=window.location.origin+"/storage/photos/"+photos;

//alert(imgUrl);

 //var imgUrl = "https://www.gravatar.com/avatar/0fdacb141bca7fa57c392b5f03872176?s=48&d=identicon&r=PG&f=1"
 //alert(imgUrl);
//document.getElementById("imgResource").src = imgUrl;
     $('#imgResource').attr("src",imgUrl);                      
                       
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../../img_library/scripts.js" type="text/javascript"></script>
      @endsection