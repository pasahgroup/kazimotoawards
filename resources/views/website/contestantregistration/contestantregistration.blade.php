@extends('spa.mainlayout')
@section('contents')
    <main class="main">
<div class="hero-section3 hs3-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-9 offset-xl-3">                    
                      
         <div class="modal-content" style="background-color:#e6e4e4;">     
        <div class="modal-body">
          <div class="preview-wrap">
           
            <div class="form-wrap">
                <h4 id="heading">Contestant:<span style="color:green"> Registration Form</span></h4>
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


                <form id="msform" method="post" action="{{ route('contestant.store') }}" class="registration-form">
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
                   
                    <fieldset style="background-color:#;">
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


                    
      <div class="row" style="padding:20px;">
      <div class="col-lg-6 col-md-12 col-sm-12">
                                      <label>Full name</label>
                                         <input type="text" name="full_name" required/> 
                                </div>
  <div class="col-lg-6 col-md-12 col-sm-12">
                                      <label>Birth Date</label>
                                        <input type="date" name="birth_date" id="birth_date" required/>
                                </div>






      <div class="col-lg-6 col-md-12 col-sm-12">
                                      <label>Phone number</label>
                                        <input type="number" name="phone" /> 
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

@foreach($awards as $award)

           <label for="facebook">{{$award->award_name}}
          <input id="facebook" type="checkbox" class="zt-control"  name="hear[]" value="Facebook">
        </label>
@endforeach     
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
        <label for="">File1:</label>
           <input type="file" class="form-control" name="file_one[]" placeholder="file1" required> 
        </div>
        </div> 


          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label for="">File2:</label>
           <input type="file" class="form-control" name="file_two[]" placeholder="file2"> 
        </div>
        </div> 

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label for="">File3:</label>
           <input type="file" class="form-control" name="file_three[]" placeholder="file3"> 
        </div>
        </div> 
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label for="">File4:</label>
           <input type="file" class="form-control" name="file_four[]" placeholder="file4"> 
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
        </div>

</main>













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