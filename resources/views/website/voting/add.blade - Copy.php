{{--
@extends('layout.app_customer')
--}}

@extends('spa.mainlayout_web')
@section('panel')
<!--   <script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery311.min.js"></script>
<script type="text/javascript" src="../js/jquery321.min.js"></script>
 -->
    




<div class="hero-section3 hs3-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-12" style="align-self:center;">                    
                      
         <div class="modal-content" style="background-color:#e6e4e4;">     
          <div class="preview-wrap">
           
            <div class="form-wrap">
                <strong id="heading">Contestant:<span style="color:green"> Registration Form</span></strong>
          <div>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          </div>


                <form id="msform" method="post" action="{{ route('contestant.store') }}" class="registration-form"  enctype="multipart/form-data">
                    @csrf
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>1: Personal details</strong></li>
                        <li id="personal"><strong>2: Experience</strong></li>
                          <li id="personal"><strong>3: Photos</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                   
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12" style="background-color:">
                                    <h4 class="fs-title">Personal Details:| Step 1 - 4</h4>
                                </div>                                
                            </div> 
                           

 <div class="form-group">
    <input type="hidden" class="form-control" name="company_name" value="#">
          {{--   @if($discounts !=null)
           <input type="hidden" class="form-control" name="unit_price" value="{{$discounts->new_price}}">
             @else
              <input type="hidden" class="form-control" name="unit_price" value="{{$programs->price}}">
             @endif       
               --}}

             <input type="hidden" class="form-control" name="tour_name" value="666">
            <input type="hidden" class="form-control" name="currency" value="555">
        </div>


                    
      <div class="row" style="padding:2px;">
      <div class="col-lg-6 col-md-12 col-sm-12">
                                      <label>Full name</label>
                                         <input type="text" name="full_name" required/> 
                                </div>
  <div class="col-lg-6 col-md-12 col-sm-12">
                                      <label>Birth Date</label>
                                        <input type="date" name="birth_date" id="birth_date1" required/>
                                </div>




      <div class="col-lg-6 col-md-12 col-sm-12">
                                      <label>Phone number</label>
                                        <input type="text" name="phone" /> 
                                </div>
  <div class="col-lg-6 col-md-12 col-sm-12">
                                      <label>Email</label>
                                        <input type="email" name="email" /> 
                                </div>




                                      <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Country:</label>
                                        <select class="form-control" name="country">
                                              <option value="0">--Select the Country--</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Other">Other</option>
                                        </select>
                                  
                                </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                      <label>District</label>
                                        <input type="text" name="district"/> 
                                </div>



                                      <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Education:</label>
                                         <select class="search-fields form-control" name="education">
                                              <option value="0">--Select the Education--</option>
                                            <option value="PHD">PHD</option>
                                             <option value="Master">Master</option>
                                              <option value="Degree">Degree</option>
                                               <option value="Diploma">Diploma</option>
                                                <option value="Certificate">Certificate</option>
                                            <option value="Other">Other</option>
                                        </select>
                                  
                                </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12">
                                      <label>Degree of</label>
                                        <input type="text" name="education_of"/> 
                                </div>





</div>
                          

                        </div> 
                             <a href="/contestant" class="previous action-button-previous float-left" style="background-color:#d0794e">Close</a>
                              <!-- <a href="/home" role="button" class="btn btn-primary">Close</a> -->
                        <input type="button" name="next" class="next action-button" value="Next" />
                    
                    </fieldset>




     <fieldset>
                        <div class="form-card">
                            <div class="row">
                                 <div class="col-12" style="background-color:#e9ece9">
                                    <h4 class="fs-title">Personal Details:| Step 2 - 4</h4>
                                </div>                                
                            </div> 
                           


  <div class="row" style="padding-left:10px;padding-right:10px;">
                                      <div class="col-lg-12 col-md-12 col-sm-12">
                                   <label for="">Experience 1:</label>
                                    <div class="form-group">
                                    <textarea name="experience_one"></textarea>
                                    </div>
                                </div>



    </div>



  <div class="row" style="padding-left:10px;padding-right:10px;">
                                      <div class="col-lg-12 col-md-12 col-sm-12">
                                   <label for="">Experience 2:</label>
                                    <div class="form-group">
                                      <textarea name="experience_two"></textarea>
                                    </div>
                                </div>



    </div>



    <div class="row" style="padding-left:10px;padding-right:10px;">
                                      <div class="col-lg-12 col-md-12 col-sm-12">
                                   <label for="">Experience 3:</label>
                                    <div class="form-group">
                                      <textarea name="experience_three"></textarea>
                                    </div>
                                </div>



    </div>


 <div class="form-group">
     <div class="col-md-12">
       
            <label for="">Apply for Awards,Maximum 3 selections:</label>
       <div class="form-group">
{{--
@foreach($awards as $award)

           <label for="facebook">{{$award->award_name}}
          <input id="facebook" type="checkbox" class="zt-control"  name="awards[]" value="{{$award->id}}">
        </label>
@endforeach  
--}}   
        </div>
        </div>
  </div>

                          

                        </div> 
                             <a href="/contestant" class="previous action-button-previous float-left" style="background-color:#d0794e">Close</a>
                              <!-- <a href="/home" role="button" class="btn btn-primary">Close</a> -->

                         <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>




                    <fieldset>

                            <div class="form-card">
                            <div class="row">
                                 <div class="col-12" style="background-color:#e9ece9">
                                    <h4 class="fs-title">Photos:|Step 3 - 4</h4>
                                </div>
                             </div>


 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label for="">Photo:</label>
           <input type="file" class="form-control" name="photo[]" placeholder="photo" required> 
        </div>
        </div> 

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group">
        <label for="">File1:</label>
           <input type="file" class="form-control" name="file_one[]" placeholder="file1" required> 
        </div>
        </div> 

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group">
        <label for="">File2:</label>
           <input type="file" class="form-control" name="file_two[]" placeholder="file2"> 
        </div>
        </div> 
    </div>

<div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group">
        <label for="">File3:</label>
           <input type="file" class="form-control" name="file_three[]" placeholder="file3"> 
        </div>
        </div> 
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group">
        <label for="">File4:</label>
           <input type="file" class="form-control" name="file_four[]" placeholder="file4"> 
        </div>
        </div> 
    </div>
    
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label for="">File5:</label>
           <input type="file" class="form-control" name="file_five[]" placeholder="file5"> 
        </div>
        </div> 
              
                        </div> 

                      
                     
                        <button type="button" class="previous action-button-previous float-left" data-dismiss="modal" style="background-color:#d0794e">Close</button>
                         <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                           <button type="submit" class="btn action-button float-right" onClick="return empty()">Submit</button>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                 <div class="col-12" style="background-color:#e9ece9">
                                    <h4 class="fs-title">Finish:| Step 4 - 4</h4>
                                </div>
                            </div> <br>
                            <h2 class="purple-text text-center"><strong>Success!</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully submitted</h5>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                        
                </form>
            </div>
        </div>   
      </div>
   

                    </div>
                </div>
            </div>
        </div>


















    <div class="row">
        <div class="col-lg-12">
            <div class="card">                            
<form action="{{ route('contestant.store') }}" method="post" enctype="multipart/form-data">
             @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">@lang('Name')</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                           value="{{ old('name') }}">
                                </div>
                            </div>
                              {{--                        
                               <div class="col-md-3">
                                <div class="form-group">
                                    <label for="category">@lang('Model')</label>
                                    <select class="form-control" id="model" name="model" required="">
                                      <option value="">-- @lang('Select car model') --</option>
                                       {{--
                                        @forelse($modelbs as $modelb)
                                            <option value="{{ $modelb->car_model }}">{{ __(@$modelb->car_model) }}</option>
                                        @empty
                                        @endforelse
                                        --}}
                                    </select>
                                </div>
                            </div>

  <div class="col-md-2">
                                <div class="form-group">
                                    <label for="category">@lang('Available cars')</label>
                                    <input type="number" name="car_model_no" id="car_model_no" class="form-control">                                    
                                </div>
                            </div>

                              
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="price">@lang('Price Per Day')</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="price" name="price"
                                               value="{{ old('price') }}" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">#</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="nicEditor0">@lang('Details')</label>
                                    <textarea rows="10" name="details" class="form-control nicEdit"
                                              id="nicEditor0">{{ old('details') }}</textarea>
                                </div>
                            </div>

                     
                            <div class="col-md-12">
                                <div class="card border--dark mb-4">
                                    <div class="card-header bg--dark d-flex justify-content-between">
                                        <h5 class="text-white">@lang('Images')</h5>
                                        <button type="button" class="btn btn-sm btn-outline-light addBtn"><i
                                                class="fa fa-fw fa-plus"></i>@lang('Add New')
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <p><small class="text-facebook">@lang('Images will be resize into')
                                           
                                           {{--     {{ imagePath()['vehicles']['size'] }}px</small> --}}

                                       </p>
                                        <div class="row element">

                                            <div class="col-md-2 imageItem">
                                                <div class="payment-method-item">
                                                    <div class="payment-method-header d-flex flex-wrap">
                                                        <div class="thumb" style="position: relative;">
                                                            <div class="avatar-preview">
                                                                <div class="profilePicPreview"
                                                                     style="background-image: url('{{asset('assets/images/default.png')}}')">

                                                                </div>
                                                            </div>
                                                            <div class="avatar-edit">
                                                                <input type="file" name="images[]"
                                                                       class="profilePicUpload" id="0"
                                                                       accept=".png, .jpg, .jpeg" required>
                                                                <label for="0" class="bg-primary">
                                                                    <i class="la la-pencil"></i>
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="doors">@lang('No of Doors')</label>
                                    <input type="text" id="doors" class="form-control" value="{{ old('doors') }}"
                                           autocomplete="off" name="doors" required>
                                </div>
                            </div>
                           
                           <div class="col-md-4">
                                <div class="form-group">
                                    <label for="category">@lang('Transmission')</label>
                                    <select class="form-control" id="transmission" name="transmission" required="">
                                        <option value="">-- @lang('Select Transmission') --</option>
                              
                                            <option value="AT">@lang('AT')</option>
                                            <option value="SAT">@lang('SAT')</option>
                                             <option value="Manual">@lang('Manual')</option>
                                                                        </select>
                                </div>
                            </div>

                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="category">@lang('Fuel Type')</label>
                                    <select class="form-control" id="fuel" name="fuel_type" required="">
                                        <option value="">-- @lang('Select Fuel Type') --</option>
                              
                                              <option value="Electric">@lang('Electric')</option>
                                            <option value="Diesel">@lang('Diesel')</option>
                                             <option value="Petrol">@lang('Petrol')</option>
                                                                        </select>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="card border--dark">
                                    <h5 class="card-header bg--dark">@lang('More Specifications')
                                        <button type="button"
                                                class="btn btn-sm btn-outline-light float-right" data-toggle="modal" data-target="#exampleModal">
                                            <i class="la la-fw la-plus"></i>@lang('Add New')
                                        </button>
                                    </h5>

                                    <div class="card-body">
                                        <div class="row addedField">


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn--primary w-100">@lang('Create')</button>
                    </div>
                </form>
            </div><!-- card end -->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('Add New Specification')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body specification">
                    <div class="form-group">
                        <label for="icon" class="font-weight-bold">@lang('Select Icon')</label>
                        <div class="input-group has_append">
                            <input type="text" class="form-control icon" id="icon" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary iconPicker" data-icon="las la-home" role="iconpicker"></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="label" class="font-weight-bold">@lang('Label')</label>
                        <input class="form-control" id="label" type="text" required placeholder="@lang('Label')">
                    </div>
                    <div class="form-group">
                        <label for="label" class="font-weight-bold">@lang('Value')</label>
                        <input class="form-control" id="value" type="text" required placeholder="@lang('Value')">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--secondary" data-dismiss="modal">@lang('Close')</button>
                    <button type="button" class="btn btn--primary addNewInformation">@lang('Add')</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('breadcrumb-plugins')
    <a href="#" class="btn btn-sm btn--primary box--shadow1 text-white text--small"><i
            class="fa fa-fw fa-backward"></i>@lang('Go Back')</a>
@endpush

@push('style')
    <style>
        .avatar-remove {
            position: absolute;
            bottom: 180px;
            right: 0;
        }

        .avatar-remove label {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            font-size: 15px;
            cursor: pointer;
        }
    </style>
@endpush

@push('style-lib')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-iconpicker.min.css') }}">
@endpush
@push('script-lib')
    <script src="{{ asset('assets/admin/js/bootstrap-iconpicker.bundle.min.js') }}"></script>
@endpush

@push('script')
    <script>
        (function ($) {
            "use strict";

            var counter = 0;
            $('.addBtn').click(function () {
                counter++;
                $('.element').append(`<div class="col-md-2 imageItem"><div class="payment-method-item"><div class="payment-method-header d-flex flex-wrap"><div class="thumb" style="position: relative;"><div class="avatar-preview"><div class="profilePicPreview" style="background-image: url('{{asset('assets/images/default.png')}}')"></div></div><div class="avatar-edit"><input type="file" name="images[]" class="profilePicUpload" required id="image${counter}" accept=".png, .jpg, .jpeg" /><label for="image${counter}" class="bg-primary"><i class="la la-pencil"></i></label></div>
                <div class="avatar-remove">
                    <label class="bg-danger removeBtn">
                        <i class="la la-close"></i>
                    </label>
                </div>
                </div></div></div></div>`);
                remove()
                upload()
            });

            function scrol() {
                var bottom = $(document).height() - $(window).height();
                $('html, body').animate({
                    scrollTop: bottom
                }, 200);
            }

            function remove() {
                $('.removeBtn').on('click', function () {
                    $(this).parents('.imageItem').remove();
                });
            }

            function upload() {
                function proPicURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var preview = $(input).parents('.thumb').find('.profilePicPreview');
                            $(preview).css('background-image', 'url(' + e.target.result + ')');
                            $(preview).addClass('has-image');
                            $(preview).hide();
                            $(preview).fadeIn(65);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $(".profilePicUpload").on('change', function () {
                    proPicURL(this);
                });

                $(".remove-image").on('click', function () {
                    $(this).parents(".profilePicPreview").css('background-image', 'none');
                    $(this).parents(".profilePicPreview").removeClass('has-image');
                    $(this).parents(".thumb").find('input[type=file]').val('');
                });
            }

            //----- Add Information fields-------//
            $('.addNewInformation').on('click', function () {
                var icon = $('#icon').val();
                var label = $('#label').val();
                var value = $('#value').val();

                var html = `
                <div class="col-md-12 other-info-data">
                    <div class="form-group">
                        <div class="input-group mb-md-0 mb-4">
                            <div class="col-md-4">
                                <div class="input-group has_append">
                                    <input type="text" name="icon[]" class="form-control icon" value='${icon}' required readonly>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-secondary iconPicker" data-icon="las la-home" role="iconpicker">${icon}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input name="label[]" class="form-control" type="text" value="${label}" required placeholder="@lang('Label')" readonly>
                            </div>
                            <div class="col-md-3 mt-md-0 mt-2">
                                <input name="value[]" class="form-control" value="${value}" type="text" required placeholder="@lang('Value')" readonly>
                            </div>
                            <div class="col-md-1 mt-md-0 mt-2 text-right">
                                <span class="input-group-btn">
                                    <button class="btn btn--danger btn-lg removeInfoBtn w-100" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>`;

                if (icon && label && value){
                    $('.addedField').append(html);

                    $('#icon').val('');
                    $('#label').val('');
                    $('#value').val('');
                }
            });

            $(document).on('click', '.removeInfoBtn', function () {
                $(this).closest('.other-info-data').remove();
            });


            $('select[name=brand]').val('{{old('brand')}}');
            $('select[name=seater]').val('{{old('seater')}}');

            // Icon picker
            $('.iconPicker').iconpicker({
                align: 'center', // Only in div tag
                arrowClass: 'btn-danger',
                arrowPrevIconClass: 'fas fa-angle-left',
                arrowNextIconClass: 'fas fa-angle-right',
                cols: 10,
                footer: true,
                header: true,
                icon: 'fas fa-bomb',
                iconset: 'fontawesome5',
                labelHeader: '{0} of {1} pages',
                labelFooter: '{0} - {1} of {2} icons',
                placement: 'bottom', // Only in button tag
                rows: 5,
                search: false,
                searchText: 'Search icon',
                selectedClass: 'btn-success',
                unselectedClass: ''
            }).on('change', function (e) {
                $(this).parent().siblings('.icon').val(`<i class="${e.icon}"></i>`);
            });
        })(jQuery);
    </script>


      <script type="text/javascript">
       $(document).ready(function(){
      // Department Change
      $('#brand').change(function(){
         // ward

  //alert('changed');

         var v = $(this).val();
             // alert(v);
           // Empty the dropdown
         // $('#model').find('option').not(':first').remove();
            // document.getElementById("classgf").value =v;
         // $('#village').find('option').not(':first').remove();
         // $('#project_name').find('option').not(':first').remove();
         // $('#project_activities').find('option').not(':first').remove();


         // AJAX request

         $.ajax({
          url: 'getA/'+v,            
           type: 'get',
           dataType: 'json',
           success: function(response){
      //alet('fffff');

             var len = 0;
            
             if(response['dataA'] != null){
               len = response['dataA'].length;
             }
         //alet(len);

                       if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['dataA'][i].id;
                 var name = response['dataA'][i].car_model;
                 var option = "<option value='"+id+"'>"+name+"</option>";
                 $("#model").append(option);
               }
             }
             //DAta are here

           }
        });
      });
    });
     </script>

@endpush
