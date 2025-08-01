@extends('admins.layouts.Apps.app')
@section('contents')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
  body {
    font-family: 'Calibri Light', Calibri, sans-serif;
    background-color: #f8f9fa;
  }

  .form-container {
    max-width: 1000px; /* Increased width */
    margin: 3rem auto;
    background-color: #fff;
    padding: 2rem 3rem;
    border-radius: 1rem;
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
  }

  h3 {
    font-weight: 600;
    margin-bottom: 30px;
    color: #4f46e5;
    text-shadow: 0 0 5px rgba(79, 70, 229, 0.3);
    text-align: left;
  }

  label {
    font-weight: 600;
    color: #333;
    font-size: 1rem;
    display: block;
    margin-bottom: 0.5rem;
  }

  .form-group {
    margin-bottom: 1.5rem;
  }

  .form-control {
    border-radius: 0.75rem;
    border: 1px solid #ced4da;
    font-size: 1rem;
    padding: 0.75rem 1rem;
    font-family: 'Calibri Light', Calibri, sans-serif;
    transition: border-color 0.2s, box-shadow 0.2s;
    width: 100%;
  }

  .form-control:focus {
    border-color: #4f46e5;
    box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.25);
    outline: none;
  }

  .btn-gradient {
    background: linear-gradient(90deg, #4f46e5 0%, #06b6d4 100%);
    border: none;
    padding: 0.85rem 2rem;
    border-radius: 2rem;
    color: white;
    font-weight: 700;
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s, background-color 0.3s;
    font-family: 'Calibri Light', Calibri, sans-serif;
    box-shadow: 0 4px 12px rgba(6, 182, 212, 0.25);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    display: inline-block;
    min-width: 120px;
  }

  .btn-gradient:hover {
    background: linear-gradient(90deg, #3730a3 0%, #0891b2 100%);
    transform: translateY(-3px);
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
    font-family: 'Calibri Light', Calibri, sans-serif;
    min-width: 120px;
  }

  .btn-previous:hover {
    background-color: #5a6268;
  }

  .img-placeholder {
    background-color: #f1f1f1;
    min-height: 100px;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px dashed #ccc;
    margin-top: 10px;
    color: #aaa;
  }

  .img-placeholder img {
    max-width: 100px;
    max-height: 100px;
    border-radius: 10px;
  }

  /* Responsive adjustments */
  @media (max-width: 991px) {
    .form-container {
      padding: 1.5rem 2rem;
      margin: 2rem 1rem;
      max-width: 100%;
    }
  }
</style>

<div class="content-wrapper">
  <section class="form-container">
    <div class="form-container">
      <form method="post" action="{{ route('asset.update', $asset->id) }}" enctype="multipart/form-data" class="registration-form">
        @csrf
        <input type="hidden" name="_method" value="PUT">

        <h3><i class="fa fa-calendar-check-o"></i> ASSET UPDATING FORM</h3>

        <div class="row">
          <div class="form-group col-md-4">
            <label for="asset_name">Asset Name</label>
            <input type="text" id="asset_name" class="form-control" name="asset_name" value="{{ $asset->asset_name }}">
          </div>
          <div class="form-group col-md-4">
            <label for="category">Category</label>
            <select id="category" class="form-control" name="category">
              <option value="{{ $asset->id }}">{{ $asset->category }}</option>
              @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="subcategory">Subcategory</label>
            <select id="subcategory" class="form-control" name="subcategory">
              <option>{{ $asset->subcategory }}</option>
              <option value="0">-- Select subcategory --</option>
            </select>
          </div>
        </div>
<!--
        <div class="row">
          <div class="form-group col-md-4">
            <label for="model">Model</label>
            <input type="text" id="model" class="form-control" name="model" value="{{ $asset->model }}">
          </div> -->
          <div class="form-group col-md-4">
            <label for="serial_no">Serial No</label>
            <input type="text" id="serial_no" class="form-control" name="serial_no" value="{{ $asset->serial_no }}">
          </div>
        </div>

       <!-- <div class="row">
          <div class="form-group col-md-8">
            <label for="supply">Supplier</label>
            <select id="supply" class="form-control" name="supply">
              <option>{{ $asset->supply }}</option>
              <option>Benson & Company</option>
              <option>Sound & vision</option>
              <option>Conny Electronics</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="bprice">Bought Price</label>
            <input type="number" id="bprice" class="form-control" name="bprice" value="{{ $asset->bprice }}">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-4">
            <label for="warranty">Warranty (Years)</label>
            <input type="number" id="warranty" class="form-control" name="warranty" min="0" max="10" maxlength="2" value="{{ $asset->warranty }}">
          </div>
          <div class="form-group col-md-4">
            <label for="owned_by">Bought By</label>
            <select id="owned_by" class="form-control" name="owned_by">
              <option>{{ $asset->owned_by }}</option>
              <option>R & M Tanzania Specialist</option>
              <option>Manayara Best View Lodge</option>
              <option>Wildlife Residence Lodge</option>
              <option>Ahadi Lodge</option>
            </select>
          </div>-->
          <div class="form-group col-md-4">
            <label for="status">Status</label>
            <select id="status" class="form-control" name="status">
              <option>{{ $asset->status }}</option>
              <option>In use</option>
              <option>In active</option>
              <option>Brand New</option>
              <option>Need repair</option>
              <option>Lost</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-4">
            <label for="location">Location</label>
            <select id="location" class="form-control" name="location">
              <option>{{ $asset->location }}</option>
              <option>Best view</option>
              <option>Ahadi lodge</option>
              <option>Store-MBVL</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <label for="assign_date">Assigned Date</label>
            <input type="date" id="assign_date" class="form-control" name="assign_date" value="{{ $asset->assign_date }}">
          </div>
          <div class="form-group col-md-5">
            <label for="assignee_name">Assigned To</label>
            <input type="text" id="assignee_name" class="form-control" name="assignee_name" value="{{ $asset->assignee_name }}">
          </div>
        </div>


        <div class="form-group">
          <label for="attachment">Photo</label>
     <input type="file" name="attachment[]" onChange="displayImage(this)" id="attachment" accept="image/*" class="form-control">
          @if($asset->photo)
          <div class="img-placeholder mt-2">
            <img src="{{ URL::asset('/storage/photos/'.$asset->photo) }}" alt="Current Photo">
          </div>
          @endif
        </div>

        <div class="d-flex justify-content-between mt-4">
          <a href="/asset" class="btn-previous"><i class="fas fa-times"></i> Cancel</a>
          <button type="submit" class="btn-gradient">Update</button>
        </div>
      </form>
    </div>
  </section>
</div>
<script type="text/javascript">
  function triggerClick() {
    document.querySelector('#attachment').click();
  }

  function displayImage(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        document.querySelector('#profileDisplay').style.display = 'block';
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<script src="../../img_library/scripts.js" type="text/javascript"></script>
@endsection