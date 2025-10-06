@extends('spa.mainlayout_web')
@section('panel')

<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Nunito', sans-serif;
    
}

:root{
    --primary-color:#02044A;
    --secondery-color:#25CC88;
    --shadow-color:#9d9fb3; 
}



.form__container{
    background-color: var(--primary-color);
    border-radius: 2rem;
    padding: 1rem;
}

.title__container{
    width: 100%;
    /*height: 4.5rem;*/
    /*padding: 0.6rem 1.5rem;*/
    /*padding-bottom: 2rem;*/
    border-bottom: 1px solid #42434e;
}

.title__container h1{
    letter-spacing: 2px;
    color: white;
    font-size: 1.25rem;
    margin-bottom: 0.4rem;
}

.title__container p{
    color: var(--shadow-color);
    font-size: 0.75rem;
}
.body__container{
    display: flex;

}

.left__container{
    /*width: 35%;*/
    display: flex;
    /* flex-direction: column; */
    /* align-items: center; */
    justify-content: center;
    border-right: 1px solid #42434e;
    padding: 1.25rem 0 ;
    margin-right: 2rem;
    padding-right: 1.8rem;
}

.side__titles{
    /* display: flex; */
    flex-direction: column;
    align-items: center;
    justify-content: center;
    /* margin-right: 0.6rem; */
}

.title__name{
    padding: 0.6rem 0.1rem;
    margin-bottom: 0.25rem;
}

.title__name h3{
    margin-bottom: 0.20rem;
    text-align: right;
    color: #ffffff;
    font-size: 0.8rem;
    letter-spacing: 1px;
}
.title__name p{
    text-align: right;
    color: var(--shadow-color);
    font-size: 0.75rem;
}

.progress__bar__container{
    padding-top:0.6rem ;
    /* height: 100%; */
}
.progress__bar__container ul .active{
    background-color: var(--secondery-color);

}

.progress__bar__container ul li{
    display: flex;
    align-items:center ;
    justify-content: center;
    list-style: none;
    background: var(--shadow-color);
    padding: 0.5rem 0.6rem;
    margin-bottom: 1.2rem;
    border-radius: 50%;
    font-size: 1.4rem;
    color: #ffffff;
    margin-left:2rem ;
}

.progress__bar__container ul li::before{
    content: '';
    width: 1px;
    height: 11vh;
    position: absolute;
    background-color: var(--shadow-color);

}

.progress__bar__container ul .active::before{
    content: '';
    width: 1px;
    height: 11vh;
    position: absolute;
    background-color: var(--secondery-color);
    /* z-index: -1; */
}

.right__container{
    width: 65%;
    /*display: flex;*/
    /*padding: 1.5rem 1.5rem;*/
}
.right__container fieldset{
    border: none;
}
/*.sub__title__container{
    padding: 1rem 0 1.2rem 0;
    border-bottom: 1px solid #42434e;
}*/

.sub__title__container h2{
    letter-spacing: 2px;

    color: #ffffff;
    margin: 0.4rem 0;
}

.sub__title__container p{
    font-size: 0.75rem;
    color: var(--shadow-color);
}

.active__form{
    display: none;
}

.input__container{
    width: 100%;
    display: flex;
    flex-direction: column;
    /*margin-top: 1.25rem;*/
}

.input__container label{
    color: #ffffff;
    font-size: 0.75rem;
    /*margin-bottom: 0.4rem;*/
}
.input__container input{
    
    /*padding: 0.5rem;*/
    font-size: 1.4rem;
    /*border-radius: 0.75rem;*/
    background: none;
    border: 1px solid var(--secondery-color);    
    margin-bottom: 1.2rem;
    outline: none;
    color: #ffffff;
}

.nxt__btn{
    width: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    /* float: right; */
    /* width: 30%; */
    padding: 0.1rem 0;
    font-size: 1.1rem;
    font-weight: bold;
    border-radius: 2rem;
    background: var(--secondery-color);
    color: #ffffff;
    /* border: none; */
    /* outline: none; */
    /* margin-left: 20em; */
    /* margin-top: 0.55em;     */
}

.nxt__btn:hover{
    transform: scale(1.03);
    background:#1cd68c ;
    cursor: pointer;
}
.buttons{
    display: flex;
    align-items: center;
    justify-content: space-between;
    /* float: right; */
    margin:0;
    padding: 0;
    /* justify-content:space-evenly; */
}

.prev__btn{
    margin: 0;
    /* padding: 0.5rem 1.5rem 0.7rem 1.5rem  ; */
    /* background-color: #857373; */
    display: flex;
    align-items: center;
    justify-content: center;
    background: none;
    border: none;
    color: #ffffff;
    font-size: 18px;
    /* margin-right: 20px; */
    /* margin-left: 15rem; */
    cursor: pointer;
}

/*------------------------------- form-2 design --------------------*/

.selection{
    display: flex;
    align-items: center;
    border: 1px solid var(--shadow-color);
    padding: 0.5rem 0.5rem;
    margin-bottom: 1rem;
    border-radius: 0.5rem;
    width: 100%;
}

.selection:hover{
    border: 1px solid var(--secondery-color);
    background-color: var(--primary-color);
    cursor: pointer;
}

.imoji{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0.4rem 0.4rem;
    margin:0  0.2rem ;
    margin-right: 0.4rem;
    font-size: 2rem;
    font-weight: 900;
    color: yellow;
    border-radius: 50%;
    background: var(--shadow-color);
}


.descriptionTitle h3{
    color: #ffffff;
    margin-bottom: 4px;
}
.descriptionTitle p{
    font-size: 0.75rem;
    color: var(--shadow-color);
}


/*-------------------------------------- form-4 design----------------------------------------- */
.slider{
    display: flex;
    align-items: center;
    /* justify-content: center; */
    -webkit-appearance: none;
  appearance: none;
  width: 100%; 
  height: 0.75rem;
  background: #d3d3d3; 
  outline: none; 
  opacity: 0.7; 
  -webkit-transition: .2s;
  transition: opacity .2s;
  position: relative;
  margin-top: 3rem;
  /* margin-right:5rem ; */
}



.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px; 
    height: 25px; 
    border-radius: 50%;
    background: var(--secondery-color);
    cursor: pointer; 
    position: relative;
}

.slider::-webkit-range-thumb {
    width: 50px; 
    height: 50px;
    background: var(--secondery-color);
    cursor: pointer;
    position: relative;
}

.output__value{
    
    display: flex;
    align-items: center;
    justify-content: center;
    color:#ffffff;
    border-radius: 2em;
    padding: 0.8rem 0.8rem;
    position: absolute;
    background-color:var(--secondery-color);    
}

.output__value::after{
    content: '';
    width: 1.5rem;
    height: 1.5rem;
    background-color: black;
    transform: rotate(45deg);
    position: absolute;
    margin-top:40px;
    background-color: var(--secondery-color);
}
 

@media only screen and (max-width: 600px) {
    body{
        background-color: var(--primary-color);
    }
    .form__container{
        margin: 0;
        padding: 0;
    }

    .body__container{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 0;
        padding: 0;
    }

    .right__container{
        width: 90%;
        margin: 0;
    }
    .title__container{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 0.5rem;
       
    }

    .left__container{
        /*display: flex;*/
        flex-direction: column;
        margin: 0;
        padding: 0;
        border: none;
    }

    .buttons{
        justify-content: space-between;
    }
    
    .descriptionTitle h3{
        font-size: 1rem;
    }
    .descriptionTitle p{
        font-size: 0.6rem;

    }
    
    
    .side__titles{
        display: none;
        flex-direction: row;
        /* align-items: center;  */
        justify-content: space-evenly;
    }
    .title__name h3{
        font-size: 0.75rem;

    }
    .title__name p{
        font-size: 0.5rem;

    }

    .progress__bar__container{
        margin-bottom: 0;

    }
    .progress__bar__container ul{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        margin-bottom: 0;
        /* width: 50%; */
        padding: 0 2rem;
        
    }

    .progress__bar__container ul::before{
        height: 5vh;
    }
    .progress__bar__container ul li{
        margin: 10px;
        padding: 10px ;
        /* transform: rotate(90deg); */
    }
    .progress__bar__container ul .active::before{
        transform: rotate(90deg);
    }
    
}
</style>



<div class="form__container">
            <div class="title__container">
                <Strong>Contestant: Registration Form</Strong>
            </div>
            <div class="body__container">
           
                <div class="left__container">
                       <form id="form1" method="post" action="{{ route('vote.store') }}" enctype="multipart/form-data">
                    @csrf
   <div class="form-card">
                            <div class="">
                                 <div class="col-12" style="background-color:#e9ece9">
                                    <h4 class="fs-title">Vote for: {{$contestant_first->full_name}}</h4>
                                </div>                                
                            </div> 


                                <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                        <div class="input__container">
                            <label for="name">Name:</label>
                             <label for="name">{{$contestant_first->full_name}}</label>
                             <input type="hidden" name="contestant_id" value="{{$contestant_first->id}}">
                        </div>
                    </div>
 <div class="col-md-6 col-lg-6 col-sm-6">
                         <div class="input__container">
                           <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                               <img src="../../cv_photos/{{$contestant_first->photo}}" alt="" class="card-img"  style="width:200px">
                     
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                      



 <div class="row">
      
                       <div class="col-md-12">       
            <label for="">{{$contestant_first->full_name}}: contestants applied awards:</label>
            <p> Once you vote for a specific awards won't allowed to vote for the same awards again to a different contestant.</p>
             
       <div class="form-group">
         @auth 
@foreach($awards as $award)

           <label for="facebook">{{$award->award_name}}
          <input id="facebook" type="checkbox" class="zt-control"  name="awards[]" value="{{$award->id}}">
        </label>
@endforeach  
 @endauth 

        </div>             
        </div>
                </div>                      

                            <div class="buttons">
                                 @auth                            
                                  <button class="btn mb-2 mb-md-0 btn-outline-primary" type="submit">Vote</button>  
                                 @else
        

                 <label class="form-check-label" for="remember">No account: <a href="/voter_register">Sign Up</a> </label>
                                    <button class="btn mb-2 mb-md-0 btn-outline-primary" type="submit" value="login" name="login">Login</button> 
                                                   @endauth
                            </div>             

                </form>   


<!-- 

     <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('Agents.store') }}" enctype="multipart/form-data">
        @csrf
                          



  <div class="buttons">
                                 @auth                            
                                  <button class="btn mb-2 mb-md-0 btn-outline-primary" type="submit">Vote2</button>  
                                 @else
                                   <button class="btn mb-2 mb-md-0 btn-outline-primary" type="submit">Login2</button> 
                                   @endauth
                            </div> 
  </form>
 -->

                </div>
            </div>
        </div>
   
<script type="text/javascript">
    function updatePreview(input, target) {
        let file = input.files[0];
        let reader = new FileReader();
        
        reader.readAsDataURL(file);
        reader.onload = function () {
            let img = document.getElementById(target);
            // can also use "this.result"
            img.src = reader.result;
        }
    }
</script>


<script>   
   const nxtBtn = document.querySelector('#submitBtn');
const form1 = document.querySelector('#form1');
const form2 = document.querySelector('#form2');
const form3 = document.querySelector('#form3');
const form4 = document.querySelector('#form4');


const icon1 = document.querySelector('#icon1');
const icon2 = document.querySelector('#icon2');
const icon3 = document.querySelector('#icon3');
const icon4 = document.querySelector('#icon4');


var viewId = 1;
function nextForm(){
    console.log("hellonext");
    viewId=viewId+1;
    progressBar();
    displayForms();
    
    console.log(viewId);

}

function prevForm(){
    console.log("helloprev");
    viewId=viewId-1;
    console.log(viewId);
    progressBar1();
    displayForms();
}
function progressBar1(){
    if(viewId===1){
        icon2.classList.add('active');
        icon2.classList.remove('active');
        icon3.classList.remove('active');
        icon4.classList.remove('active');
    }
    if(viewId===2){
        icon2.classList.add('active');
        icon3.classList.remove('active');
        icon4.classList.remove('active');
    }
    if(viewId===3){
        icon3.classList.add('active');
        icon4.classList.remove('active');
    }
    if(viewId===4){
        icon4.classList.add('active');
        nxtBtn.innerHTML = "Submit"
    }
    if(viewId>4){
        icon2.classList.remove('active');
        icon3.classList.remove('active');
        icon4.classList.remove('active');
        
    }
}

function progressBar(){
    if(viewId===2){
        icon2.classList.add('active');
    }
    if(viewId===3){
        icon3.classList.add('active');
    }
    if(viewId===4){
        icon4.classList.add('active');
        nxtBtn.innerHTML = "Submit"
    }
    if(viewId>4){
        icon2.classList.remove('active');
        icon3.classList.remove('active');
        // icon4.classList.remove('active');
        
    }
}

function displayForms(){
    
    if(viewId>4){
        viewId=1;
    }

    if(viewId ===1){
        form1.style.display = 'block';
        form2.style.display = 'none';
        form3.style.display = 'none';
        form4.style.display = 'none';
     
    }else if(viewId === 2){
        form1.style.display = 'none';
        form2.style.display = 'block';
        form3.style.display = 'none';
        form4.style.display = 'none';

    }else if(viewId === 3){
        form1.style.display = 'none';
        form2.style.display = 'none';
        form3.style.display = 'block';
        form4.style.display = 'none';

    }else if(viewId === 4){
        form1.style.display = 'none';
        form2.style.display = 'none';
        form3.style.display = 'none';
        form4.style.display = 'none';

    }
}

// for slider

var slider = document.querySelector(".slider");
var output = document.querySelector(".output__value");
output.innerHTML = slider.value ;

slider.oninput = function() {
    output.innerHTML = this.value ;
    
    
} 
</script>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



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