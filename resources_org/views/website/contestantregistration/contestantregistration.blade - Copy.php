@extends('spa.mainlayout')
@section('contents')

<section>
    <div class="row">
      <div class="col-md-3 mb-1">
      </div>
  <div class="col-md-8 mb-1">
    <div class="card mb-1">
      <div class="card-header py-3">
        <h5 class="mb-0">Contestant Registration Form-(CRF)</h5>
      </div>
      <div class="card-body">
      
   <form method="POST" id="post_form" role="form" class="registration-form" action="{{ route('contestant.store') }}" enctype="multipart/form-data">
        @csrf

  <div class="form-outline mb-1">
        <label class="form-label" for="form7Example1">Full name:</label>
                <input type="text" id="form7Example1" class="form-control" name="full_name"/> 
          
          </div>

          <div class="row mb-1">
            <div class="col">
              <div class="form-outline">
                 <label class="form-label" for="form7Example2">Phone number:</label>
                <input type="text" id="" class="form-control" name="phone"/>            
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                 <label class="form-label" for="form7Example2">Email:</label>
                <input type="email" id="form7Example2" class="form-control" name="email" />               
              </div>
            </div>
          </div>



           <div class="row mb-1">
            <div class="col">
              <div class="form-outline">
                 <label class="form-label" for="form7Example2">Country:</label>
                 <select id="form7Example2" class="form-control" name="country" >
                   
                 </select>
                      
              </div>
            </div>
            <div class="col">
               <div class="form-outline">
                 <label class="form-label" for="form7Example2">District:</label>
                 <select id="form7Example2" class="form-control" name="district">                   
                 </select>           
              </div>
            </div>
          </div>

       
          <!-- Text input -->
          <div class="form-outline mb-1">
            <input type="text" id="form7Example4" class="form-control" />
            <label class="form-label" for="form7Example4">Address</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-1">
            <input type="email" id="form7Example5" class="form-control" />
            <label class="form-label" for="form7Example5">Email</label>
          </div>

          <!-- Number input -->
          <div class="form-outline mb-1">
            <input type="number" id="form7Example6" class="form-control" />
            <label class="form-label" for="form7Example6">Phone</label>
          </div>

          <!-- Message input -->
          <div class="form-outline mb-1">
            <textarea class="form-control" id="form7Example7" rows="4"></textarea>
            <label class="form-label" for="form7Example7">Additional information</label>
          </div>


<button type="submit" class="form-control">Submit</button>


          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-center mb-2">
            <input class="form-check-input me-2" type="checkbox" value="" id="form7Example8"
              checked />
            <label class="form-check-label" for="form7Example8">
              Create an account?
            </label>
          </div>
        </form>
      </div>
    </div>
  </div>

   <div class="col-md-1 mb-1">
      </div>
</div>
</section>
 @endsection