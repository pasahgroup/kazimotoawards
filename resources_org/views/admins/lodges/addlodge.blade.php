@extends('admins.layouts.Apps.app')
@section('contents')

<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12 form-container">
      <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('lodge.store') }}">
        @csrf

        <h3><i class="fa fa-hotel"></i><br>LODGE REGISTRATION</h3>

        <!-- Step 1 -->
        <fieldset class="active">
          <div class="form-group row">
            <div class="col-md-6 col-sm-12">
              <label>Lodge Name</label>
              <input type="text" class="form-control" name="lodge_name" required>
            </div>
            <div class="col-md-6 col-sm-12">
              <label>Owner</label>
              <input type="text" class="form-control" name="owner_name">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 col-sm-12">
              <label>Contact</label>
              <input type="text" class="form-control" name="contact">
            </div>
            <div class="col-md-6 col-sm-12">
              <label>Email</label>
              <input type="email" class="form-control" name="email">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 col-sm-12">
              <label>Location</label>
              <input type="text" class="form-control" name="location">
            </div>
            <div class="col-md-6 col-sm-12">
              <label>Lodge Status</label>
              <select class="form-control" name="status">
                <option value="">Select status</option>
                <option>Active</option>
                <option>Inactive</option>
              </select>
            </div>
          </div>
          <div class="d-flex justify-content-between mt-3">
             <a href="/lodge" role="button" class="btn-previous">Cancel</a>
            <button type="submit" class="btn-gradient">Save</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>

<script>
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
</body>
</html>
@endsection
