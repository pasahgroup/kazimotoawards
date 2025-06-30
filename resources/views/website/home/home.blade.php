@extends('spa.mainlayout')
@section('content')
  <!-- ==================== Home-Slider Area (Start) ==================== -->  
  <section class="home">

    <!-- Home Slider -->
    <div class="swiper-container home-slider">
      <div class="swiper-wrapper">

    <!-- Home Slide-1 -->       
 @foreach($slides as $slide)
        <div class="swiper-slide home-item">
          <img src="{{ URL::asset('/storage/slides/'.$slide->photo) }}" alt="Home Image"> <!-- Slide Image -->
          <div class="content">
            <div class="text">
              <h3>{{$slide->photo_title}} <i class="fas fa-hammer"></i></h3> <!-- Slide Subheading -->
              <p style="font-size:20px;color:#fff">{{$slide->photo_description}}</p>
              <a href="#" class="btn">Read more</a> <!-- Read more Page Button -->
            </div>
          </div>
        </div>
        @endforeach
  
      </div>
  
      <!-- Home Slider Pagination -->
      <div class="swiper-pagination swiper-pagination1"></div>
  
      <!-- Home Slider Navigation arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  
    </div>
  
  </section>  
  <!-- ==================== Home-Slider Area (End) ==================== -->     



  <!-- ==================== Features Area (Start) =================== -->
  <section class="features">

    <div class="box-container">
  
      <!-- Feature 1 - Custom Woodwork -->
      <div class="feature-item">
        <i class="fas fa-hammer"></i>
        <h3>Custom Woodwork</h3>
        <p>Offering bespoke woodwork solutions crafted to perfection</p>
      </div>
  
      <!-- Feature 2 - Precision Craftsmanship -->
      <div class="feature-item">
        <i class="fas fa-ruler-combined"></i>
        <h3>Precision Craftsmanship</h3>
        <p>Providing meticulous attention to detail for flawless results</p>
      </div>
  
      <!-- Feature 3 - Natural Materials -->
      <div class="feature-item">
        <i class="fas fa-tree"></i>
        <h3>Natural Materials</h3>
        <p>Using high-quality, sustainably sourced wood for timeless beauty</p>
      </div>
  
      <!-- Feature 4 - Customization Options -->
      <div class="feature-item">
        <i class="fas fa-paint-brush"></i>
        <h3>Customization Options</h3>
        <p>Offering a wide range of finishes and styles to suit your preferences</p>
      </div>
  
    </div>
  
  </section>  
  <!-- ==================== Features Area (End) ==================== -->



  <!-- ==================== About Area (Start) ==================== -->
  <section class="about">
  
    <!-- About Image -->
    <div class="image">
      <div class="sub-image double">
        <img src="./assets/images/About/About-1.jpg" alt="About-Image1">
        <img src="./assets/images/About/About-2.jpg" alt="About-Image2">
      </div>
      <div class="sub-image last">
        <img src="./assets/images/About/About-3.jpg" alt="About-Image3">
        <div class="experience"><span>25</span> years of experience</div>
      </div>
    </div>
  
    <!-- Introduction Content -->
    <div class="content">
  
      <div class="heading">
        <div class="sub"><span>About Us</span><i class="fas fa-hammer"></i></div> <!-- Sub Heading -->
        <h2>Your Trusted Source for Quality Woodwork</h2> <!-- Main Heading -->
      </div>
  
      <!-- Description -->
      <p>Welcome to TimberCraft, your premier destination for high-quality woodwork solutions. We are dedicated to providing exceptional craftsmanship and services to enhance the beauty, functionality, and durability of your space. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem enim nobis ea quo sint vero laboriosam ex repellendus.</p>
  
      <!-- Key Features -->
      <ul class="about-features">
        <li><i class="fas fa-hammer"></i><span>Custom Woodwork Creations</span></li> <!-- Feature 1 -->
        <li><i class="fas fa-hammer"></i><span>Professional Carpentry Services</span></li> <!-- Feature 2 -->
        <li><i class="fas fa-hammer"></i><span>Natural Wood Selections</span></li> <!-- Feature 3 -->
        <li><i class="fas fa-hammer"></i><span>Precision Craftsmanship</span></li> <!-- Feature 4 -->
        <li><i class="fas fa-hammer"></i><span>Expert Consultation & Support</span></li> <!-- Feature 5 -->
      </ul>
  
    </div>
  
  </section>   
  <!-- ==================== About Area (End) ==================== -->



  <!-- ==================== Count Area (Start) ==================== -->
  <div class="counting">

    <!-- Statistic Box 1: Woodwork Projects -->
    <div class="box">
      <div class="info">
        <i class="fas fa-hammer"></i> <!-- Hammer icon -->
        <div class="content">
          <h1 class="count" data-count="20000">20,000+</h1> <!-- Count of woodwork projects -->
          <h3>Woodwork Projects</h3> <!-- Statistic description -->
        </div>
      </div>
    </div>
  
    <!-- Statistic Box 2: Happy Clients -->
    <div class="box">
      <div class="info">
        <i class="fas fa-heart"></i> <!-- Heart icon -->
        <div class="content">
          <h1 class="count" data-count="30000">30,000+</h1> <!-- Count of happy clients -->
          <h3>Happy Clients</h3> <!-- Statistic description -->
        </div>
      </div>
    </div>
  
    <!-- Statistic Box 3: Years of Experience -->
    <div class="box">
      <div class="info">
        <i class="fas fa-calendar-alt"></i> <!-- Calendar icon -->
        <div class="content">
          <h1 class="count" data-count="25">25+</h1> <!-- Count of years of experience -->
          <h3>Years of Experience</h3> <!-- Statistic description -->
        </div>
      </div>
    </div>
  
    <!-- Statistic Box 4: Service Locations -->
    <div class="box">
      <div class="info">
        <i class="fas fa-map-marked-alt"></i> <!-- Map-marked-alt icon -->
        <div class="content">
          <h1 class="count" data-count="100">100+</h1> <!-- Count of service locations -->
          <h3>Service Locations</h3> <!-- Statistic description -->
        </div>
      </div>
    </div>
  
  </div>     
  <!-- ==================== Count Area (End) ==================== -->



  <!-- ==================== Service Slider Area (Start) ==================== -->
  <section class="services">

    <!-- Section Heading -->
    <div class="heading">
      <div class="sub"><i class="fa-solid fa-hammer"></i><span>What we offer</span><i class="fa-solid fa-hammer"></i></div>
      <h2>Our Services</h2>
    </div>  

    <!-- Service Slider -->
    <div class="swiper-container service-slider">
      <div class="swiper-wrapper">

        <!-- Service 1: Custom Woodworking -->
        <div class="swiper-slide service-item">
          <img src="./assets/images/Service/Services/Service-1.jpg" alt="Custom Woodworking"> <!-- Service Image -->
          <div class="content">
            <i class="fa-solid fa-hammer"></i> <!-- Hammer Icon -->
            <a href="./pages/Service/Service-Single.html"><h3>Custom Craft</h3></a> <!-- Service Title -->
            <p>Crafting custom-made furniture, cabinets, and other wooden items tailored to clients' needs.</p> <!-- Service Description -->
            <a href="./pages/Service/Service-Single.html" class="btn">read more</a>
          </div>
        </div>
    
        <!-- Service 2: Carpentry Services -->
        <div class="swiper-slide service-item">
          <img src="./assets/images/Service/Services/Service-2.jpg" alt="Carpentry Services"> <!-- Service Image -->
          <div class="content">
            <i class="fa-solid fa-wrench"></i> <!-- Wrench Icon -->
            <a href="./pages/Service/Service-Single.html"><h3>Carpentry Work</h3></a> <!-- Service Title -->
            <p>General carpentry work including framing, trim work, and finishing carpentry.</p> <!-- Service Description -->
            <a href="./pages/Service/Service-Single.html" class="btn">read more</a>
          </div>
        </div>
    
        <!-- Service 3: Furniture Restoration -->
        <div class="swiper-slide service-item">
          <img src="./assets/images/Service/Services/Service-3.jpg" alt="Furniture Restoration"> <!-- Service Image -->
          <div class="content">
            <i class="fa-solid fa-tools"></i> <!-- Tools Icon -->
            <a href="./pages/Service/Service-Single.html"><h3>Furniture Repair</h3></a> <!-- Service Title -->
            <p>Repairing and restoring antique or damaged wooden furniture to its former glory.</p> <!-- Service Description -->
            <a href="./pages/Service/Service-Single.html" class="btn">read more</a>
          </div>
        </div>
  
        <!-- Service 4: Cabinet Making -->
        <div class="swiper-slide service-item">
          <img src="./assets/images/Service/Services/Service-4.jpg" alt="Cabinet Making"> <!-- Service Image -->
          <div class="content">
            <i class="fa-solid fa-box-open"></i> <!-- Box Open Icon -->
            <a href="./pages/Service/Service-Single.html"><h3>Cabinet Design</h3></a> <!-- Service Title -->
            <p>Designing, building, and installing custom cabinets for kitchens, bathrooms, and other spaces.</p> <!-- Service Description -->
            <a href="./pages/Service/Service-Single.html" class="btn">read more</a>
          </div>
        </div>
    
        <!-- Service 5: Wood Flooring Installation -->
        <div class="swiper-slide service-item">
          <img src="./assets/images/Service/Services/Service-5.jpg" alt="Wood Flooring Installation and Refinishing"> <!-- Service Image -->
          <div class="content">
            <i class="fa-solid fa-screwdriver"></i> <!-- Screwdriver Icon -->
            <a href="./pages/Service/Service-Single.html"><h3>Flooring Installation</h3></a> <!-- Service Title -->
            <p>Installing new hardwood floors or refinishing existing ones to revitalize their appearance.</p> <!-- Service Description -->
            <a href="./pages/Service/Service-Single.html" class="btn">read more</a>
          </div>
        </div>
    
        <!-- Service 6: Deck Building -->
        <div class="swiper-slide service-item">
          <img src="./assets/images/Service/Services/Service-6.jpg" alt="Deck Building"> <!-- Service Image -->
          <div class="content">
            <i class="fa-solid fa-house"></i> <!-- House Icon -->
            <a href="./pages/Service/Service-Single.html"><h3>Deck Construction</h3></a> <!-- Service Title -->
            <p>Designing and constructing wooden decks for residential or commercial properties.</p> <!-- Service Description -->
            <a href="./pages/Service/Service-Single.html" class="btn">read more</a>
          </div>
        </div>

      </div>
    </div>

  </section>
  <!-- ==================== Service Slider Area (End) ==================== -->



  <!-- ==================== Why Choose Us Area (Start) ==================== -->
  <section class="whyUs linear-bg">

    <div class="box-container"> 

      <!-- Main Content Area -->
      <div class="content">
        <div class="text">

          <!-- Section Heading -->
          <div class="heading">  
            <div class="sub"><span>Why Choose Us</span><i class="fa-solid fa-hammer"></i></div> <!-- Sub Heading -->
            <h2>Exquisite Woodwork Craftsmanship to Elevate Your Space</h2>
          </div>

          <!-- Main Heading -->
          <p>At WoodCrafters, we're dedicated to enhancing the aesthetics and security of your home with our artisanal windows and doors.</p>
          
          <!-- Mission Points -->
          <ul class="whyUs-points">
            <li>
              <i class="fas fa-tools"></i> <!-- Tools icon -->
              <div class="text">
                <h5>Bespoke Solutions</h5>
                <p>We offer tailored window and door solutions to meet your unique needs, ensuring seamless integration with your home's style.</p>
              </div>
            </li>
            <li>
              <i class="fas fa-shield-alt"></i> <!-- Shield icon -->
              <div class="text">
                <h5>Enhanced Security</h5>
                <p>With our top-of-the-line security features, we provide unparalleled protection for your home, ensuring your peace of mind.</p>
              </div>
            </li>
            <li>
              <i class="fas fa-hammer"></i> <!-- Hammer icon -->
              <div class="text">
                <h5>Professional Craftsmanship</h5>
                <p>Our skilled artisans ensure meticulous installation of your windows and doors, ensuring superior performance and longevity.</p>
              </div>
            </li>
          </ul>
          
        </div>
      </div>

    </div>

  </section>     
  <!-- ==================== Why Choose Us Area (End) ==================== -->



  <!-- ==================== Process Slider Area (Start) ==================== -->
  <section class="process">

    <!-- Section Heading -->
    <div class="heading">
      <div class="sub"><i class="fa-solid fa-hammer"></i><span>how we work</span><i class="fa-solid fa-hammer"></i></div>
      <h2>Our Process</h2>
    </div>   

    <!-- Process Slider -->
    <div class="swiper-container process-slider">
      <div class="swiper-wrapper">
      
        <!-- Step 1: Assessment -->
        <div class="swiper-slide process-item">
          <img src="./assets/images/Process/Process-1.jpg" alt="Assessment"> <!-- Step Image -->
          <div class="content">
            <h6>01</h6>
            <h3>Assessment</h3> <!-- Step Title -->
            <p>Thorough evaluation of your woodworking needs and requirements to provide tailored solutions.</p> <!-- Step Description -->
          </div>
        </div>
    
        <!-- Step 2: Design -->
        <div class="swiper-slide process-item">
          <img src="./assets/images/Process/Process-2.jpg" alt="Design"> <!-- Step Image -->
          <div class="content">
            <h6>02</h6>
            <h3>Design</h3> <!-- Step Title -->
            <p>Professional design and customization of woodworking projects to match your space's aesthetics and requirements.</p> <!-- Step Description -->
          </div>
        </div>
    
        <!-- Step 3: Craftsmanship -->
        <div class="swiper-slide process-item">
          <img src="./assets/images/Process/Process-3.jpg" alt="Craftsmanship"> <!-- Step Image -->
          <div class="content">
            <h6>03</h6>
            <h3>Craftsmanship</h3> <!-- Step Title -->
            <p>Expert craftsmanship in woodworking with precision and attention to detail to ensure optimal results.</p> <!-- Step Description -->
          </div>
        </div>
    
        <!-- Step 4: Quality Check -->
        <div class="swiper-slide process-item">
          <img src="./assets/images/Process/Process-4.jpg" alt="Quality Check"> <!-- Step Image -->
          <div class="content">
            <h6>04</h6>
            <h3>Quality Check</h3> <!-- Step Title -->
            <p>Rigorous quality checks and inspections to verify the functionality and durability of crafted woodwork.</p> <!-- Step Description -->
          </div>
        </div>
    
        <!-- Step 5: Finishing -->
        <div class="swiper-slide process-item">
          <img src="./assets/images/Process/Process-5.jpg" alt="Finishing"> <!-- Step Image -->
          <div class="content">
            <h6>05</h6>
            <h3>Finishing</h3> <!-- Step Title -->
            <p>Professional finishing services to enhance the appearance and longevity of your woodworking projects.</p> <!-- Step Description -->
          </div>
        </div>
    
        <!-- Step 6: Client Approval -->
        <div class="swiper-slide process-item">
          <img src="./assets/images/Process/Process-6.jpg" alt="Client Approval"> <!-- Step Image -->
          <div class="content">
            <h6>06</h6>
            <h3>Client Approval</h3> <!-- Step Title -->
            <p>Ensuring client satisfaction by delivering woodworking projects that meet or exceed expectations.</p> <!-- Step Description -->
          </div>
        </div>

      </div>
    </div>

  </section>
  <!-- ==================== Process Slider Area (End) ==================== -->


  <!-- ==================== Banner Area (Start) ==================== -->
  <section class="banner">
    <div class="content">
  
      <div class="heading">
        <div class="sub"><span>Elevate Your Home Interior</span><i class="fa-solid fa-hammer"></i></div>
      </div>
      <h2>Discover the Ideal Woodwork Solutions for Your Space</h2>
      <a href="./pages/Pages/Get-Quote.html" class="btn">Get a Quote</a>
  
    </div>
  </section>  
  <!-- ==================== Banner Area (End) ==================== -->




  <!-- ==================== Projects Area (Start) ==================== -->
  <section class="projects">

    <!-- Section Heading -->
    <div class="heading">
      <div class="sub"><i class="fa-solid fa-hammer"></i><span>Explore Our Work</span><i class="fa-solid fa-hammer"></i></div>
      <h2>our projects</h2>
    </div> 

    <!-- Projects Filter Buttons -->
    <ul class="tab-buttons">
      <li class="button active" data-filter="*">all</li> <!-- Display all services -->
      <li class="button" data-filter=".craft">Custom Craft</li> <!-- Filter by lock installation -->
      <li class="button" data-filter=".carpentry">Carpentry Work</li> <!-- Filter by emergency services -->
      <li class="button" data-filter=".cabinet">Cabinet Design</li> <!-- Filter by security solutions -->
    </ul>
    
    <!-- Projects Container -->
    <div class="box-container">
  
      <!-- Project 1 - Custom Furniture -->
      <div class="project-item craft">
        <div class="projects-content">
          <img src="./assets/images/Project/Projects/Project-1.jpg" alt="Custom Furniture"> <!-- Project Image -->
          <div class="content">
            <!-- Buttons container -->
            <div class="btn-container">
              <a class="view" href="./assets/images/Project/Projects/Project-1.jpg"><i class="fa-solid fa-plus"></i></a> <!-- View image button -->
              <a href="./pages/Project/Project-Single.html"><i class="fa-solid fa-link"></i></a> <!-- Link to Project Single page -->
            </div>
            <!-- Text content -->
            <div class="text">
              <p>Custom Craft</p> <!-- Project Category -->
              <a href="./pages/Project/Project-Single.html"><h3>Custom Furniture</h3></a> <!-- Project Title -->
            </div>
          </div>
        </div>
      </div>
  
      <!-- Project 2 - Window Installations -->
      <div class="project-item carpentry">
        <div class="projects-content">
          <img src="./assets/images/Project/Projects/Project-2.jpg" alt="Window Installations"> <!-- Project Image -->
          <div class="content">
            <!-- Buttons container -->
            <div class="btn-container">
              <a class="view" href="./assets/images/Project/Projects/Project-2.jpg"><i class="fa-solid fa-plus"></i></a> <!-- View image button -->
              <a href="./pages/Project/Project-Single.html"><i class="fa-solid fa-link"></i></a> <!-- Link to Project Single page -->
            </div>
            <!-- Text content -->
            <div class="text">
              <p>Carpentry Work</p> <!-- Project Category -->
              <a href="./pages/Project/Project-Single.html"><h3>Window Installations</h3></a> <!-- Project Title -->
            </div>
          </div>
        </div>
      </div>
  
      <!-- Project 3 - Home Décor -->
      <div class="project-item craft">
        <div class="projects-content">
          <img src="./assets/images/Project/Projects/Project-3.jpg" alt="Home Décor"> <!-- Project Image -->
          <div class="content">
            <!-- Buttons container -->
            <div class="btn-container">
              <a class="view" href="./assets/images/Project/Projects/Project-3.jpg"><i class="fa-solid fa-plus"></i></a> <!-- View image button -->
              <a href="./pages/Project/Project-Single.html"><i class="fa-solid fa-link"></i></a> <!-- Link to Project Single page -->
            </div>
            <!-- Text content -->
            <div class="text">
              <p>Custom Craft</p> <!-- Project Category -->
              <a href="./pages/Project/Project-Single.html"><h3>Home Décor</h3></a> <!-- Project Title -->
            </div>
          </div>
        </div>
      </div>
  
      <!-- Project 4 - Kitchen Cabinets -->
      <div class="project-item cabinet">
        <div class="projects-content">
          <img src="./assets/images/Project/Projects/Project-4.jpg" alt="Kitchen Cabinets"> <!-- Project Image -->
          <div class="content">
            <!-- Buttons container -->
            <div class="btn-container">
              <a class="view" href="./assets/images/Project/Projects/Project-4.jpg"><i class="fa-solid fa-plus"></i></a> <!-- View image button -->
              <a href="./pages/Project/Project-Single.html"><i class="fa-solid fa-link"></i></a> <!-- Link to Project Single page -->
            </div>
            <!-- Text content -->
            <div class="text">
              <p>Cabinet Design</p> <!-- Project Category -->
              <a href="./pages/Project/Project-Single.html"><h3>Kitchen Cabinets</h3></a> <!-- Project Title -->
            </div>
          </div>
        </div>
      </div>
  
      <!-- Project 5 - Door Installations -->
      <div class="project-item carpentry">
        <div class="projects-content">
          <img src="./assets/images/Project/Projects/Project-5.jpg" alt="Door Installations"> <!-- Project Image -->
          <div class="content">
            <!-- Buttons container -->
            <div class="btn-container">
              <a class="view" href="./assets/images/Project/Projects/Project-5.jpg"><i class="fa-solid fa-plus"></i></a> <!-- View image button -->
              <a href="./pages/Project/Project-Single.html"><i class="fa-solid fa-link"></i></a> <!-- Link to Project Single page -->
            </div>
            <!-- Text content -->
            <div class="text">
              <p>Carpentry Work</p> <!-- Project Category -->
              <a href="./pages/Project/Project-Single.html"><h3>Door Installations</h3></a> <!-- Project Title -->
            </div>
          </div>
        </div>
      </div>
  
      <!-- Project 6 - Bathroom Cabinets -->
      <div class="project-item cabinet">
        <div class="projects-content">
          <img src="./assets/images/Project/Projects/Project-6.jpg" alt="Bathroom Cabinets"> <!-- Project Image -->
          <div class="content">
            <!-- Buttons container -->
            <div class="btn-container">
              <a class="view" href="./assets/images/Project/Projects/Project-6.jpg"><i class="fa-solid fa-plus"></i></a> <!-- View image button -->
              <a href="./pages/Project/Project-Single.html"><i class="fa-solid fa-link"></i></a> <!-- Link to Project Single page -->
            </div>
            <!-- Text content -->
            <div class="text">
              <p>Cabinet Design</p> <!-- Project Category -->
              <a href="./pages/Project/Project-Single.html"><h3>Bathroom Cabinets</h3></a> <!-- Project Title -->
            </div>
          </div>
        </div>
      </div>
  
    </div>

  </section> 
  <!-- ==================== Projects Area (End) ==================== -->



  <!-- ==================== Testimonials Area (Start) ==================== -->    
  <section class="testimonial-bg linear-bg">

    <!-- Section Heading -->
    <div class="heading">
      <div class="sub"><i class="fa-solid fa-hammer"></i><span>What Our Customers Say</span><i class="fa-solid fa-hammer"></i></div> <!-- Sub Heading -->
      <h2>Customer Testimonials</h2> 
    </div>    
  
    <!-- Testimonial Slider -->
    <div class="swiper-container testimonial-slider">
  
      <div class="swiper-wrapper">
    
        <!-- Testimonial Slide 1 -->
        <div class="swiper-slide testi-item">
          <i class="fas fa-quote-right"></i>
          <p>"WoodCraft's team provided excellent service! Their attention to detail and quality craftsmanship exceeded my expectations."</p>
          <img src="./assets/images/Testimonials/Pic-1.jpg" alt="Author-Pic">
          <div class="text">
            <h4>John Doe</h4>
            <h6>Homeowner</h6>
          </div>
          <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>
    
        <!-- Testimonial Slide 2 -->
        <div class="swiper-slide testi-item">
          <i class="fas fa-quote-right"></i>
          <p>"I am extremely satisfied with the woodwork installed by WoodCraft. The whole process was seamless and hassle-free."</p>
          <img src="./assets/images/Testimonials/Pic-2.jpg" alt="Author-Pic">
          <div class="text">
            <h4>Jane Smith</h4>
            <h6>Homeowner</h6>
          </div>
          <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>
    
        <!-- Testimonial Slide 3 -->
        <div class="swiper-slide testi-item">
          <i class="fas fa-quote-right"></i>
          <p>"The team at WoodCraft is professional and knowledgeable. I highly recommend their services to anyone looking for quality woodwork."</p>
          <img src="./assets/images/Testimonials/Pic-3.jpg" alt="Author-Pic">
          <div class="text">
            <h4>Michael Thompson</h4>
            <h6>Builder</h6>
          </div>
          <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>
    
        <!-- Testimonial Slide 4 -->
        <div class="swiper-slide testi-item">
          <i class="fas fa-quote-right"></i>
          <p>"WoodCraft's commitment to quality and customer satisfaction is commendable. I am delighted with the results!"</p>
          <img src="./assets/images/Testimonials/Pic-4.jpg" alt="Author-Pic">
          <div class="text">
            <h4>Emily Johnson</h4>
            <h6>Architect</h6>
          </div>
          <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>
    
      </div>
  
      <!-- Testimonial Slider Pagination -->
      <div class="swiper-pagination swiper-pagination3"></div>
  
    </div>
  
  </section>  
  <!-- ==================== Testimonials Area (End) ==================== -->



  <!-- ==================== Team Area (Start) ==================== -->
  <section class="team">

    <!-- Section Heading -->
    <div class="heading">
      <div class="sub"><i class="fas fa-hammer"></i><span>Meet Our Team</span><i class="fas fa-hammer"></i></div> <!-- Sub Heading -->
      <h2>our team</h2>
    </div>
  
    <div class="box-container">
  
      <!-- Team Member 1 -->
      <div class="team-item">
        <img src="./assets/images/Team/Team-1.jpg" alt="Team-Image"> <!-- Team Member Image -->
        <div class="content">
          <div class="icon-container">
            <a href="#"><i class="fab fa-facebook-f"></i></a> <!-- Facebook Icon -->
            <a href="#"><i class="fab fa-linkedin-in"></i></a> <!-- LinkedIn Icon -->
            <a href="#"><i class="fab fa-instagram"></i></a> <!-- Instagram Icon -->
          </div>
          <div class="intro">
            <a href="./pages/About/Team-Single.html"><h3>David Smith</h3></a> <!-- Team Member Name -->
            <p>Master Carpenter</p> <!-- Team Member Designation -->
          </div>
        </div>
      </div>
  
      <!-- Team Member 2 -->
      <div class="team-item">
        <img src="./assets/images/Team/Team-2.jpg" alt="Team-Image"> <!-- Team Member Image -->
        <div class="content">
          <div class="icon-container">
            <a href="#"><i class="fab fa-facebook-f"></i></a> <!-- Facebook Icon -->
            <a href="#"><i class="fab fa-linkedin-in"></i></a> <!-- LinkedIn Icon -->
            <a href="#"><i class="fab fa-instagram"></i></a> <!-- Instagram Icon -->
          </div>
          <div class="intro">
            <a href="./pages/About/Team-Single.html"><h3>Emma Johnson</h3></a> <!-- Team Member Name -->
            <p>Woodwork Specialist</p> <!-- Team Member Designation -->
          </div>
        </div>
      </div>
  
      <!-- Team Member 3 -->
      <div class="team-item">
        <img src="./assets/images/Team/Team-3.jpg" alt="Team-Image"> <!-- Team Member Image -->
        <div class="content">
          <div class="icon-container">
            <a href="#"><i class="fab fa-facebook-f"></i></a> <!-- Facebook Icon -->
            <a href="#"><i class="fab fa-linkedin-in"></i></a> <!-- LinkedIn Icon -->
            <a href="#"><i class="fab fa-instagram"></i></a> <!-- Instagram Icon -->
          </div>
          <div class="intro">
            <a href="./pages/About/Team-Single.html"><h3>Matthew Anderson</h3></a> <!-- Team Member Name -->
            <p>Custom Furniture Maker</p> <!-- Team Member Designation -->
          </div>
        </div>
      </div>
  
      <!-- Team Member 4 -->
      <div class="team-item">
        <img src="./assets/images/Team/Team-4.jpg" alt="Team-Image"> <!-- Team Member Image -->
        <div class="content">
          <div class="icon-container">
            <a href="#"><i class="fab fa-facebook-f"></i></a> <!-- Facebook Icon -->
            <a href="#"><i class="fab fa-linkedin-in"></i></a> <!-- LinkedIn Icon -->
            <a href="#"><i class="fab fa-instagram"></i></a> <!-- Instagram Icon -->
          </div>
          <div class="intro">
            <a href="./pages/About/Team-Single.html"><h3>Olivia Brown</h3></a> <!-- Team Member Name -->
            <p>Master Woodcarver</p> <!-- Team Member Designation -->
          </div>
        </div>
      </div>
  
    </div>
  
  </section>  
  <!-- ==================== Team Area (End) ==================== -->



  <!-- ==================== Get A Quote Area (Start) ==================== -->
  <section class="get-quote linear-bg">

    <div class="box-container">

      <div class="content">

        <form class="dark-form" id="quote-form" method="post">

          <!-- Form Heading -->
          <div class="heading">
            <div class="sub"><span>Custom Woodwork Solutions</span><i class="fa-solid fa-hammer"></i></div>
            <h2>Request A Quote</h2>
          </div>

          <div class="input-box">

            <!-- Name Input Field -->
            <div class="input-field"> 
              <label for="name" class="fa-solid fa-user"></label>
              <input type="text" name="name" class="box" id="name" placeholder="Name" required>
            </div>

            <!-- Email Input Field -->
            <div class="input-field">
              <label for="email" class="fa-solid fa-envelope"></label>
              <input type="email" name="email" class="box" id="email" placeholder="Email" required>
            </div>

          </div>

          <div class="input-box">

            <!-- Phone Number Input Field -->
            <div class="input-field">
              <label for="number" class="fa-solid fa-phone"></label>
              <input type="number" name="number" class="box" id="number" placeholder="Phone Number" required>
            </div>

            <!-- Service Select Field -->
            <div class="select">
              <div class="select-container">
                <label for="service" class="fa-solid fa-hammer"></label>
                <select class="select-box" id="service" name="service" required>
                  <option value="">Services</option>
                  <option value="custom-craft">Custom Craft</option>
                  <option value="carpentry-work">Carpentry Work</option>
                  <option value="furniture-repair">Furniture Repair</option>
                  <option value="cabinet-design">Cabinet Design</option>
                  <option value="flooring-installation">Flooring Installation</option>
                  <option value="deck-construction">Deck Construction</option>
                </select>
                <div class="icon-container">
                  <i class="fas fa-angle-down"></i>
                </div>
              </div>
            </div>

          </div>

          <div class="input-box">
            
            <!-- Address Input Field -->
            <div class="input-field">
              <label for="address" class="fa-solid fa-location-dot"></label>
              <input type="text" name="address" class="box" id="address" placeholder="Address" required>
            </div>

          </div>

          <div class="input-box">

            <!-- Budget Input Field -->
            <div class="input-field">
              <label for="budget" class="fa-solid fa-dollar-sign"></label>
              <input type="number" name="budget" class="box" id="budget" placeholder="Budget" required>
            </div>
                        
            <!-- Date Input Field -->
            <div class="input-field">
              <label for="date" class="fa-solid fa-calendar"></label>
              <input type="text" name="date" placeholder="Date" id="date" class="box" onfocus="(this.type='date')" onblur="(this.type='text')" required>
            </div>

          </div>

          <!-- Comment Text Area -->
          <div class="input-field text-area">
            <label for="comment" class="fa-solid fa-comment"></label>
            <textarea cols="30" rows="10" name="comment" class="box" id="comment" placeholder="Message" required></textarea>
          </div>

          <!-- Submit Button for Booking Confirmation -->
          <button type="submit" class="btn" name="submit" id="submit">submit</button>
          <span class="alert" id="msg"></span>

        </form>

      </div>

    </div>

  </section>  
  <!-- ==================== Get A Quote Area (End) ==================== -->
    


  <!-- ==================== Pricing Area (Start) ==================== -->
  <section class="pricing">

    <div class="heading">
      <div class="sub"><i class="fa-solid fa-hammer"></i><span>Choose your plan</span><i class="fa-solid fa-hammer"></i></div>
      <h2>Pricing Plans</h2>
    </div>
  
    <!-- Pricing Plans -->
    <div class="box-container">
  
      <!-- Pricing Plan 1 - Basic Plan -->
      <div class="plan-item">
        <div class="intro">
          <img src="./assets/images/Pricing/Plan-1.jpg" alt="Basic Plan"> <!-- Plan Image -->
          <div class="content">
            <i class="icon fas fa-wrench"></i> <!-- Wrench Icon -->
            <h3>Basic Plan</h3>
            <div class="price">$49</div>
          </div>
        </div>
        <ul> <!-- Plan Features -->
          <li><i class="fa-solid fa-check"></i> Basic Wood Repair</li>
          <li><i class="fa-solid fa-check"></i> Tool Rental</li>
          <li><i class="fa-solid fa-check"></i> Safety Gear Included</li>
          <li><i class="fa-solid fa-check"></i> 24/7 Support</li>
          <li><i class="fa-solid fa-check"></i> Priority Service</li>
        </ul>
        <a href="#" class="btn">Select Package</a>
      </div>
  
      <!-- Pricing Plan 2 - Standard Plan -->
      <div class="plan-item">
        <div class="intro">
          <img src="./assets/images/Pricing/Plan-2.jpg" alt="Standard Plan"> <!-- Plan Image -->
          <div class="content">
            <i class="icon fas fa-hammer"></i> <!-- Hammer Icon -->
            <h3>Standard Plan</h3>
            <div class="price">$99</div>
          </div>
        </div>
        <ul> <!-- Plan Features -->
          <li><i class="fa-solid fa-check"></i> Advanced Wood Restoration</li>
          <li><i class="fa-solid fa-check"></i> Premium Tool Set</li>
          <li><i class="fa-solid fa-check"></i> Safety Gear Included</li>
          <li><i class="fa-solid fa-check"></i> Expert Consultation</li>
          <li><i class="fa-solid fa-check"></i> Priority Service</li>
        </ul>
        <a href="#" class="btn">Select Package</a>
      </div>
  
      <!-- Pricing Plan 3 - Premium Plan -->
      <div class="plan-item">
        <div class="intro">
          <img src="./assets/images/Pricing/Plan-3.jpg" alt="Premium Plan"> <!-- Plan Image -->
          <div class="content">
            <i class="icon fas fa-toolbox"></i> <!-- Toolbox Icon -->
            <h3>Premium Plan</h3>
            <div class="price">$149</div>
          </div>
        </div>
        <ul> <!-- Plan Features -->
          <li><i class="fa-solid fa-check"></i> Custom Woodwork Design</li>
          <li><i class="fa-solid fa-check"></i> Deluxe Tool Set</li>
          <li><i class="fa-solid fa-check"></i> Safety Gear Included</li>
          <li><i class="fa-solid fa-check"></i> On-Site Assistance</li>
          <li><i class="fa-solid fa-check"></i> Priority Service</li>
        </ul>
        <a href="#" class="btn">Select Package</a>
      </div>
  
    </div>
  
  </section> 
  <!-- ==================== Pricing Area (End) ==================== --> 
 


  <!-- ==================== Newsletter Area (Start) ==================== -->
  <section class="newsletter-subscribe">
    <div class="content">
      <h2>Subscribe To Our Newsletter</h2> <!-- Newsletter Heading -->
      <p>Stay informed about the latest trends in woodworking, new projects, and special promotions.</p> <!-- Newsletter Description -->
      <!-- Newsletter Description -->
      <form class="newsletter-form" method="post" id="newsletter-form-1">
        <div class="box-container">
          <input type="email" id="sub-email-1" name="email" placeholder="Your email address" required>
          <!-- Email Input Field -->
          <button type="submit" class="btn" name="submit" id="submit-1">Subscribe</button> <!-- Subscribe Button -->
        </div>
        <!-- Alert Message -->
        <span class="alert" id="msg-1"></span>
      </form>
    </div>
  </section>
  <!-- ==================== Newsletter Area (End) ==================== -->



  <!-- ==================== Blogs Area (Start) ==================== -->
  <section class="blog main">

    <!-- Section Heading -->
    <div class="heading"> 
      <div class="sub"><i class="fa-solid fa-hammer"></i><span>our recent articles</span><i class="fa-solid fa-hammer"></i></div> <!-- Sub Heading -->
      <h2>our blogs</h2> 
    </div>
  
    <!-- Latest Blogs -->
    <div class="box-container">

      <!-- Blog-1 -->
      <div class="blog-item">
        <div class="image">
          <img src="./assets/images/Blog/Blogs/Blog-1.jpg" alt="Blog-Image"> <!-- Blog Image -->
          <div class="date"><span>22</span> Feb</div> <!-- Blog Date -->
        </div>
        <div class="content">
          <a class="main-heading" href="./pages/Blog/Blog-Single.html">Renovating Your Kitchen Cabinets: Before and After</a> <!-- Blog Title -->
          <div class="details">
            <h3><i class="fa-solid fa-circle-user"></i><span>By Admin</span></h3> <!-- Blog Author -->
            <h3><i class="fa-solid fa-tags"></i><span>Project Ideas</span></h3> <!-- Blog Category -->
          </div>
        </div>
      </div>

      <!-- Blog-2 -->
      <div class="blog-item">
        <div class="image">
          <img src="./assets/images/Blog/Blogs/Blog-2.jpg" alt="Blog-Image"> <!-- Blog Image -->
          <div class="date"><span>15</span> Feb</div> <!-- Blog Date -->
        </div>
        <div class="content">

          <a class="main-heading" href="./pages/Blog/Blog-Single.html">Mastering Basic Woodworking Joints</a> <!-- Blog Title -->
          <div class="details">
            <h3><i class="fa-solid fa-circle-user"></i><span>By Admin</span></h3> <!-- Blog Author -->
            <h3><i class="fa-solid fa-tags"></i><span>Woodworking Techniques</span></h3> <!-- Blog Category -->
          </div>
        </div>
      </div>

      <!-- Blog-3 -->
      <div class="blog-item">
        <div class="image">
          <img src="./assets/images/Blog/Blogs/Blog-3.jpg" alt="Blog-Image"> <!-- Blog Image -->
          <div class="date"><span>05</span> Feb</div> <!-- Blog Date -->
        </div>
        <div class="content">

          <a class="main-heading" href="./pages/Blog/Blog-Single.html">The Rise of Minimalist Wood Furniture</a> <!-- Blog Title -->
          <div class="details">
            <h3><i class="fa-solid fa-circle-user"></i><span>By Admin</span></h3> <!-- Blog Author -->
            <h3><i class="fa-solid fa-tags"></i><span>Design Trends</span></h3> <!-- Blog Category -->
          </div>
        </div>
      </div>

    </div>  
  </section>
  <!-- ==================== Blogs Area (End) ==================== -->


   <!-- ==================== Clients Area (Start) ==================== -->
  <section class="home-clients clients">
    <!-- Client Slider Container -->
    <div class="swiper-container client-slider">



      <!-- Clients Logo -->
      <div class="swiper-wrapper">
  @foreach($donors as $donor)

<div class="swiper-slide client-item"><a href="#"><img src="{{ URL::asset('/storage/donor_photos/'.$donor->logo) }}" alt="Client-Logo"  style="width:60px;height:40px"></a>

<p>{{$donor->donor_name}}</p>
</div>
@endforeach



        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-1.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-2.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-3.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-4.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-5.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-6.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-7.png" alt="Client-Logo"></a></div>
        <div class="swiper-slide client-item"><a href="#"><img src="./assets/images/Clients/Client-8.png" alt="Client-Logo"></a></div>
      </div>
    </div> 
      </section>
@endsection