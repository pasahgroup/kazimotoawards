@extends('spa.layout')
@section('content')


  
  <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>Contact</h2>
    </div> 

    <div class="link">
      <a href="../../index.html">Home</a>
      <i class="fa-solid fa-angles-right"></i>
      <span class="page">Contact</span>
    </div>

  </div>
  <!-- ==================== Page-Title (End) ==================== -->
 
        
 
  <!-- ==================== Contact Area (Start) ==================== -->
  <section class="contact" id="contact">

    <!-- ========== Contact Info (Start) ========== -->
    <div class="contact-info">

      <!-- Address Info -->
      <div class="info-item">
        <i class="fa-solid fa-map-location-dot"></i>
        <div class="content">
          <h3>address</h3>
          <p>CBHCC</p>
        </div>
      </div>
    
      <!-- Phone Info -->
      <div class="info-item">
        <i class="fas fa-phone"></i>
        <div class="content">
          <h3>call us</h3>
          <p>+255-747-012-401</p>
         
        </div>
      </div>
    
      <!-- Email Info -->
      <div class="info-item">
        <i class="fas fa-envelope"></i>
        <div class="content">
          <h3>mail us</h3>
          <p class="gmail">cbhcc@habari.co.tz</p>
          <p class="gmail">cbhcc.biharamulo@gmail.com</p>
        </div>
      </div>

      <!-- Email Info -->
      <div class="info-item">
        <i class="fa-solid fa-clock"></i>
        <div class="content">
          <h3>Opening Hours</h3>
          <p>Mon - Fri: 8 AM - 5 PM</p>
          <p>Sat - Sun: 10 AM - 4 PM</p>
        </div>
      </div>

    </div>    
    <!-- ========== Contact Info (End) ========== -->

    <div class="box-container"> 

      <!-- ========== Google Map (Start) ========== -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924234.6303368191!2d66.59494515823903!3d25.193389461148573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1645287442276!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <!-- ========== Google Map (End) ========== -->

      <!-- ========== Contact Form (Start) ========== -->
  
              <form class="dark-form"  method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                             @csrf

        <!-- Form Heading -->
        <div class="heading">
          <div class="sub"><span>Connect with our team</span><i class="fa-solid fa-hammer"></i></div> <!-- Sub Heading -->
          <h2>Send Us a Message</h2>
        </div>
      
        <!-- Name Input Field -->
        <div class="input-box">
          <div class="input-field">
            <label for="name" class="fas fa-user"></label>
            <input type="text" name="name" class="box" id="name" placeholder="Name" required>
          </div>
        </div>
      
        <!-- Email Input Field -->
        <div class="input-box">
          <div class="input-field">
            <label for="email" class="fa-solid fa-envelope"></label>
            <input type="email" name="email" class="box" id="email" placeholder="Email" required>
          </div>
        </div>
      
        <!-- Phone Number Input Field -->
        <div class="input-box">
          <div class="input-field">
            <label for="number" class="fas fa-phone"></label>
            <input type="text" name="number" class="box" id="number" placeholder="Phone Number" required>
          </div>
        </div>
      
        <!-- Comment/Message Textarea -->
        <div class="input-box">
          <div class="input-field text-area">
            <label for="comment" class="fas fa-comment"></label>
            <textarea cols="30" rows="10" name="comment" class="box" id="comment" placeholder="Message" required></textarea>
          </div>
        </div>
      
        <!-- Submit Button -->
        <button type="submit" class="btn" name="submit" id="submit">Submit</button>
      
        <!-- Alert Message -->
        <span class="alert" id="msg"></span>
      
      </form>
      <!-- ========== Contact Form (End) ========== --> 

    </div>

  </section>
  <!-- ==================== Contact Area (End) ==================== -->



  <!-- Jquery -->
  <script src="../../assets/vendors/jquery/jquery.min.js"></script>

  <!-- Custom Script Files -->
  <script src="../../assets/js/script.js"></script> <!-- Custom JavaScript file with additional website functionality. -->
  <script src="../../assets/js/nav-link-toggler.js"></script> <!-- Manages navigation link toggling (e.g., hamburger menu) for mobile devices -->
  <script src="../../assets/js/newsletter.js"></script> <!-- Script to handle newsletter subscription functionality -->

  

  <!-- ==================== Custom Script ==================== -->

  <!-- Contact-Form Script -->
  <script>
    jQuery(document).ready(function($) {
      $('#contact-form').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        var form = $(this);
        var msgElement = form.find('#msg');
        var submitBtn = form.find('#submit');

        // Clear previous message and update button text
        msgElement.html('').show();
        submitBtn.html('Processing...').attr('disabled', true);

        // Submit form data using AJAX
        $.ajax({
          url: '../../assets/php/submit.php',
          type: 'post',
          data: form.serialize(),
          success: function (result) {
            msgElement.html(result).fadeIn(); // Display success message
            submitBtn.html('Submit').attr('disabled', false); // Reset button text and enable button
            form[0].reset(); // Reset form fields

            // Clear success message after 5 seconds
            setTimeout(function () {
              msgElement.fadeOut('slow'); // Fade out message
            }, 4000); // 4 seconds delay
          },
          error: function () {
            msgElement.html('<span style="color: red;">Error occurred. Please try again later.</span>').fadeIn(); // Display error message if AJAX request fails
            submitBtn.html('Submit').attr('disabled', false); // Reset button text and enable button
          }
        });
      });
    });
  </script>


</body>
@endsection