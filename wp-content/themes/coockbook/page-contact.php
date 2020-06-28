<?php 
get_header(); 

if(have_posts()){
    while(have_posts()){
        the_post(  );
    }
}
?>
  <!-- Page Content -->
  <div class="container">


    <h1 class="mt-4 mb-3 text-warning"><?php echo get_the_title(); ?></h1>


    <div class="row">
     
      <div class="col-lg-8 mb-4">
      
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.3598054632075!2d20.47687315134163!3d44.81423408449379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7abdb49a8623%3A0xda12a92a5158f451!2sLjubomira%20Stojanovi%C4%87a%2031%2C%20Beograd%2011000!5e0!3m2!1sen!2srs!4v1593170065410!5m2!1sen!2srs" style="width: 100%; height: 400px; border: 0;"></iframe>
      </div>
  
      <div class="col-lg-4 mb-4">
        <h3 class="text-warning">Contact Details</h3>
        <p>
          Ljubomira Stojanovića 31, 
          <br>Beograd, 11 000
          <br>
        </p>
        <p>
          <abbr title="Phone">P</abbr>: (123) 456-7890
        </p>
        <p>
          <abbr title="Email">E</abbr>:
          <a href="mailto:name@example.com">name@example.com
          </a>
        </p>
        <p>
          <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
        </p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->

    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3 class="text-warning">Send us a Message</h3>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Message:</label>
              <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
        
          <button type="submit" class="btn btn-success" id="sendMessageButton">Send Message</button>
        </form>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

=
<?php get_footer(); ?>