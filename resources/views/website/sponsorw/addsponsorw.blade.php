@extends('spa.mainlayout')
@section('contents')

<style>
  .form-horizontal .control-label {
  text-align: left !important;
}  

</style>
    <main class="main">
<div class="hero-section3 hs3-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-12" style="align-self:center;">                    
                      
         <div class="modal-content" style="background-color:#e6e4e4;">     
                <div class="preview-wrap">
           
            <div class="form-wrap">
                <h4 id="heading">Sponsor:<span style="color:green"> Registration Form</span></h4>
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

                <form id="msform" method="post" action="{{ route('register_sponsorp') }}" class="registration-form"  enctype="multipart/form-data">
                    @csrf
                    
                    <fieldset style="background-color:#;">
                        <div class="form-card">
                                                      

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





    <div class="col-md-12">           
 <div class="form-group">
              <div class="col-md-12 col-sm-12">   
              <label>Sponsor name</label>
               <input type="text" name="sponsor" id="sponsor" class="form-control" required>
          </div>
            </div>



 <div class="row">
              <div class="col-md-6 col-sm-6">   
              <label>Mobile</label>
               <input type="text" name="mobile" id="mobile" class="form-control" required>
          </div>

          <div class="col-md-6 col-sm-6">   
              <label>Email</label>
               <input type="email" name="email" id="email" class="form-control" >
          </div>
            </div>

 <div class="row">
              <div class="col-md-6 col-sm-12">   
              <label>Pledge</label>
               <input type="number" name="pledge" id="pledge" class="form-control" >
          </div>

          <div class="col-md-6 col-sm-12">   
              <label>Contact person</label>
               <input type="text" name="contact_person" id="contact_person" class="form-control" required>
          </div>
            </div>


         
 <div class="row">
      <div class="col-md-12 col-sm-12">
        <label>Address</label>
            <textarea cols="30" rows="2" name="address" class="form-control" id="address" placeholder="address" maxlength="1200" required></textarea>
  </div>
  </div>



      <div class="row">
            <div class="col-md-12 col-sm-12">
              <label>Logo</label>
            </div>
                 <div class="col-lg-4 col-md-12 col-sm-12">
                                    <label for="password_confirmation" :value="('Image')" />
                                    <div class="form-group">
                                    <input type="file" name="logo_photo[]" onChange="displayImage(this)" id="logo_photo" accept="image/*" class="" style="display:block;" required>

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




 <div class="row">
              <div class="col-md-6 col-sm-12">   
              <label>Website</label>
               <input type="text" name="website" id="website" class="form-control" >
          </div>

               <div class="col-md-6 col-sm-12">   
              <label>Status</label>
              <select class="form-control" name="status" id="status" required>
                <option></option>
                <option>Active</option>
                <option>Inactive</option>
              </select>
          </div>
            </div>
     
    </div>









                   

                        </div> 





                         <a href="/" type="button" class="action-button-previous float-left" data-dismiss="modal" style="background-color:#d0794e">Close</a>
                           <button type="submit" class="btn action-button float-right" onClick="return empty()">Submit</button>

                                                     </fieldset>                   
                        
                </form>
            </div>
        </div>   
      </div>
   








                    </div>
                </div>
            </div>
        </div>

</main>












 <script src="../../admins/js/jquery360.js"></script>
<script type="text/javascript">    
$(document).ready(function(){
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);
$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();




    $('.registration-form .next').on('click', function () {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;
        parent_fieldset.find('input[required],input[type="email"]').each(function () {
                 if ($(this).val() == "" || $(this).val() == "0") {
                $(this).addClass('input-error');
                //alert('g1');
                next_step = false;
            } else {
                $(this).removeClass('input-error');
                //alert('g2');
            }
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
             // alert('g3');
                $(this).next().fadeIn();
            });
        }

    });






//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
</script>
@endsection