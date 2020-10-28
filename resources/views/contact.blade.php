@extends('base')    

@section('content')
<section class="wt-section bg-gray text-center inner-page-header"> 
    <div class="container">
        <div class="row justify-content-md-center align-items-center text-white py-4 py-lg-5">
            <div class="col-md-7">
                <div class="text-center">
                    <h1 class="display-sm-4 display-lg-3">Contact Us</h1>
                    <p class="sub-text">Aspernatur at enim excepturi facere in reiciendis</p>
              </div>
            </div>
        </div>
    </div>
</section>
<main role="main">

    <!-- Icon Block -->
<section class="wt-section bg-light">
<div class="container">
<div class="row justify-content-center align-items-center text-center pb-lg-5">
    <div class="col-md-8"> 
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias aliquid delectus, dolor
            doloremque enim eos est fugit inventore ipsam iure laudantium molestiae.</p>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 mb-5 mb-lg-0 text-center">
      <div class="contactIcons text-primary mb-2">
        <i class="fa fa-location-arrow"></i>
      </div>
      <h3 class="h5">Address</h3>
    <p class="mb-0">Tom Mboya street</p>
    </div>

    <div class="col-lg-4 mb-5 mb-lg-0 text-center">
      <div class="contactIcons text-primary mb-2">
        <i class="fa fa-phone"></i>
      </div>
     <h3 class="h5">Phone Number</h3>
    <p class="mb-0">1-234-567-2401</p>
    </div>

    <div class="col-lg-4 mb-5 mb-lg-0 text-center">
      <div class="contactIcons text-primary mb-2">
        <i class="fa fa fa-envelope"></i>
      </div>
      <h3 class="h5">Email</h3>
    <p class="mb-0">mail@e4mission.com</p>
    </div>
  </div> 
</div>
</section>
<!-- End Icon Block -->

<!-- Contact Form -->
<section class="wt-section">
<div class="container"> 
<div class="row justify-content-center align-items-center text-center mb-lg-4 mb-4">
    <div class="col-md-6 mb-lg-5 mb-4">
        <h2 class="mb-4">Let us know</h2>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at enim excepturi facere in non reiciendis.</p>
    </div>
</div>
  <form class="text-center" action="#">
    <div class="row text-center">
             <div class="col-lg-5">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8186639411424!2d36.82158631427464!3d-1.2826126359827668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMTYnNTcuNCJTIDM2wrA0OScyNS42IkU!5e0!3m2!1sen!2ske!4v1603265120052!5m2!1sen!2ske" width="100%" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
      <div class="col-lg-7">
          
   <!-- Form itself -->
          <form name="sentMessage" class="well" id="contactForm"  novalidate> 
         <div class="control-group">
                   <div class="form-group mb-4">
            <input type="text" class="form-control form-control-lg" 
                   placeholder="Full Name" id="name" required
                       data-validation-required-message="Please enter your name" />
              <p class="help-block"></p>

           </div>
             </div> 	
                <div class="form-group mb-4">
                  <div class="controls">
            <input type="email" class="form-control form-control-lg" placeholder="Email" 
                            id="email" required
                       data-validation-required-message="Please enter your email" />
        </div>
        </div> 	
              
               <div class="form-group mb-4">
                 <div class="controls">
                 <textarea rows="10" cols="100" class="form-control form-control-lg" 
                       placeholder="Message" id="message" required
               data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
        </div>
               </div> 		 
         <div id="success"> </div> <!-- For success/fail messages -->
     <div class="text-center">
      <button class="btn btn-lg btn-primary py-3 mt-3 px-4 btn-pill" type="submit">Send Your Message</button>
    </div> 
          </form>
    </div>
    </div>
   
  </form>
</div>
</section>
<!-- End Contact Form -->  
</main>
@endsection