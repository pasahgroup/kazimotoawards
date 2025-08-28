{{--
@extends('layout.app_customer')
--}}

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
                    <div class="side__titles">
                        <div class="title__name">
                            <h3>Personal Details</h3>
                            <p>Enter & press next</p>
                        </div>
                        <div class="title__name">
                            <h3>Experiences</h3>
                            <p>select & press next</p>
                        </div>
                        <div class="title__name">
                            <h3>Services</h3>
                            <p>First expirience field is mandatory</p>
                        </div>
                        <div class="title__name">
                            <h3>Budget</h3>
                            <p>Select & press next</p>
                        </div>
                        <div class="title__name">
                            <h3>Complete</h3>
                            <p>Finaly press submit</p>
                        </div>
                    </div>
                    <div class="progress__bar__container">
                        <ul>
                            <li class="active" id="icon1"><ion-icon name="person-outline"></ion-icon></li>
                            <li id="icon2"><ion-icon name="book-outline"></ion-icon></li>
                            <li id="icon3"><ion-icon name="layers-outline"></ion-icon></li>
                            <li id="icon4"><ion-icon name="pricetag-outline"></ion-icon></li>
                            <li id="icon5"><ion-icon name="mail-outline"></ion-icon></li>
                        </ul>
                    </div>
                </div>
                <div class="right__container">
                    <fieldset id="form1">
   <div class="form-card">
                            <div class="">
                                 <div class="col-12" style="background-color:#e9ece9">
                                    <h4 class="fs-title">Personal Details:| Step 1 - 4</h4>
                                </div>                                
                            </div> 

                        <div class="sub__title__container ">
                            <h4>Let's start with your name</h4>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                        <div class="input__container">
                            <label for="name">Full name</label>
                              <input type="text" name="full_name" required/> 
                        </div>
                    </div>
 <div class="col-md-6 col-lg-6 col-sm-6">
                         <div class="input__container">
                            <label for="name">Birth Date</label>
                            <input type="date" name="birth_date" id="birth_date1" required/>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                        <div class="input__container">
                            <label for="name">Phone number</label>
                              <input type="text" name="phone" required/> 
                        </div>
                    </div>
 <div class="col-md-6 col-lg-6 col-sm-6">
                         <div class="input__container">
                            <label for="name">Email</label>
                            <input type="email" name="email" required/>
                        </div>
                    </div>
                    </div>



                    <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                        <div class="input__container">
                            <label for="name">Country</label>
                               <select class="form-control" name="country">
                                              <option value="0">--Select the Country--</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Other">Other</option>
                                        </select>
                        </div>
                    </div>
 <div class="col-md-6 col-lg-6 col-sm-6">
                         <div class="input__container">
                            <label for="name">District</label>
                            <input type="text" name="district" required/>
                        </div>
                    </div>
                    </div>



 <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                        <div class="input__container">
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
                    </div>
 <div class="col-md-6 col-lg-6 col-sm-6">
                         <div class="input__container">
                            <label>Degree of</label>
                                        <input type="text" name="education_of"/>
                        </div>
                    </div>
                    </div>

                         <div class="input__container">
                            <a class="nxt__btn" onclick="nextForm();"> Next</a>
                        </div>

                    </fieldset>
                    <fieldset class="active__form" id="form2">
                      
                        <div class="input__container">                            
              <div class="form-card">
                            <div class="">
                                 <div class="col-12" style="background-color:#e9ece9">
                                    <h4 class="fs-title">Experience Details:| Step 2 - 4</h4>
                                </div>                                
                            </div> 
                           
 <div class="form-group">
     <div class="col-md-12">
       
            <label for="">Apply for Awards,Maximum 3 selections:</label>
       <div class="form-group">
@foreach($awards as $award)

           <label for="facebook">{{$award->award_name}}
          <input id="facebook" type="checkbox" class="zt-control"  name="awards[]" value="{{$award->id}}">
        </label>
@endforeach     
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

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="nicEditor0">@lang('Details')</label>
                                    <textarea rows="10" cols="100" name="details" class="form-control nicEdit"
                                              id="nicEditor0">{{ old('details') }}</textarea>
                                </div>
                            </div>
  <textarea name="experience_two" class="form-control nicEdit" id="nicEditor0"></textarea>

  <div class="col-md-6 col-lg-6 col-sm-6">
                        <div class="input__container">
                            <label for="name">Full name</label>
                               <textarea name="experience_two" class="form-control nicEdit" id="nicEditor0"></textarea>
                        </div>
                    </div>


  <div class="row" style="padding-left:10px;padding-right:10px;">
                                      <div class="col-lg-12 col-md-12 col-sm-12">
                                   <label for="">Experience 2:</label>
                                      <textarea name="experience_two" class="form-control nicEdit" id="nicEditor0"></textarea>
                                    
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


                          

                        </div> 











                            <div class="buttons">
                                <a class="prev__btn" onclick="prevForm();" >Back</a>
                                <a class="nxt__btn"  onclick="nextForm();" >Next</a>    
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="active__form" id="form3">
                        <div class="sub__title__container">
                            <p>Step 3/5</p>
                            <h2>What service are looking for ?</h2>
                            <p>Please let us know what type of business best describes you as entreprenuer or businessman.</p>
                        </div>
                        
                        <div class="input__container">
                            <div class="selection newB">
                                <div class="imoji">
                                    <ion-icon name="desktop"></ion-icon>
                                    
                                </div>
                                <div class="descriptionTitle">
                                    <h3>Website Development</h3>
                                    <p>Development of online websites</p>
                                </div>
                            </div>
                            <div class="selection exitB">
                                <div class="imoji">
                                    <ion-icon name="phone-portrait"></ion-icon>
                                </div>
                                <div class="descriptionTitle">
                                    <h3>Development of Mobile App</h3>
                                    <p>Development of android and IOS mobile app</p>
                                </div>
                            </div>
                            <div class="buttons">
                                <a class="prev__btn" onclick="prevForm();" >Back</a>
                                <a class="nxt__btn"  onclick="nextForm();" >Next</a>    
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="active__form" id="form4">
                        <div class="sub__title__container">
                            <p>Step 4/5</p>
                            <h2>Please select your budget</h2>
                            <p>Please let us know budget for your project so yes are great that we can give the right quote thanks</p>
                        </div>
                        
                        <div class="input__container">
                            
                            
                            <input type="range" min="10000" max="500000" value="250000" class="slider">
                            <div class="output__value">
                                
                            </div>
                            
                            <div class="buttons">
                                <a class="prev__btn" onclick="prevForm();" >Back</a>
                                <a class="nxt__btn"  onclick="nextForm();" >Next</a>     
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="active__form" id="form5">
                        <div class="sub__title__container">
                            <p>Step 5/5</p>
                            <h2>Complete Submission</h2>
                            <p>Thanks for completing the form and for your time.Plss enter your email below and submit the form</p>
                        </div>
                        
                        <div class="input__container">
                            <label for="Email">Enter your email</label>
                            <input type="text">
                            <div class="buttons">
                                <a class="prev__btn"  onclick="prevForm();" >Back</a>
                                <a class="nxt__btn" id="submitBtn" onclick="nextForm();" >Next</a>    
                            </div>
                            
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
   
<script>
   
   const nxtBtn = document.querySelector('#submitBtn');
const form1 = document.querySelector('#form1');
const form2 = document.querySelector('#form2');
const form3 = document.querySelector('#form3');
const form4 = document.querySelector('#form4');
const form5 = document.querySelector('#form5');


const icon1 = document.querySelector('#icon1');
const icon2 = document.querySelector('#icon2');
const icon3 = document.querySelector('#icon3');
const icon4 = document.querySelector('#icon4');
const icon5 = document.querySelector('#icon5');


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
        icon5.classList.remove('active');
    }
    if(viewId===2){
        icon2.classList.add('active');
        icon3.classList.remove('active');
        icon4.classList.remove('active');
        icon5.classList.remove('active');
    }
    if(viewId===3){
        icon3.classList.add('active');
        icon4.classList.remove('active');
        icon5.classList.remove('active');
    }
    if(viewId===4){
        icon4.classList.add('active');
        icon5.classList.remove('active');
    }
    if(viewId===5){
        icon5.classList.add('active');
        nxtBtn.innerHTML = "Submit"
    }
    if(viewId>5){
        icon2.classList.remove('active');
        icon3.classList.remove('active');
        icon4.classList.remove('active');
        icon5.classList.remove('active');
        
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
    }
    if(viewId===5){
        icon5.classList.add('active');
        nxtBtn.innerHTML = "Submit"
    }
    if(viewId>5){
        icon2.classList.remove('active');
        icon3.classList.remove('active');
        icon4.classList.remove('active');
        icon5.classList.remove('active');
        
    }
}

function displayForms(){
    
    if(viewId>5){
        viewId=1;
    }

    if(viewId ===1){
        form1.style.display = 'block';
        form2.style.display = 'none';
        form3.style.display = 'none';
        form4.style.display = 'none';
        form5.style.display = 'none';


    }else if(viewId === 2){
        form1.style.display = 'none';
        form2.style.display = 'block';
        form3.style.display = 'none';
        form4.style.display = 'none';
        form5.style.display = 'none';

    }else if(viewId === 3){
        form1.style.display = 'none';
        form2.style.display = 'none';
        form3.style.display = 'block';
        form4.style.display = 'none';
        form5.style.display = 'none';
    }else if(viewId === 4){
        form1.style.display = 'none';
        form2.style.display = 'none';
        form3.style.display = 'none';
        form4.style.display = 'block';
        form5.style.display = 'none';

    }else if(viewId === 5){
        form1.style.display = 'none';
        form2.style.display = 'none';
        form3.style.display = 'none';
        form4.style.display = 'none';
        form5.style.display = 'block';

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
{{--
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="nicEditor0">@lang('Details')</label>
                                    <textarea rows="10" name="details" class="form-control nicEdit"
                                              id="nicEditor0">{{ old('details') }}</textarea>
                                </div>
                            </div>
--}}
                     
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
