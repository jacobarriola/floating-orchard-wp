<?php
/**
 * The template for displaying the footer.
 *
 * @package Floating Orchard
 */
?>

      <!-- begin Footer -->
      <div class="footer-primary">
          <div class="row section footer-first-section">
            <div class="large-3 columns">
              <h5>Contact</h5>
              <!-- ACF 'Footer Contact' field -->
              <?php the_field( 'text_contact', 'option' ); ?>
            </div> 

            <div class="large-3 columns">
              <h5>Address</h5>
              <!-- ACF 'Footer Address' field -->
              <?php the_field( 'text_address', 'option' ); ?>
            </div> 

            <div class="large-6 columns disclaimer">
              <h5>Disclaimer</h5>
                <!-- ACF 'Footer Disclaimer' field -->
                <?php the_field( 'text_disclaimer', 'option' ); ?>
            </div> 
          </div> 
      </div><!--end footer-primary -->

      <div class="footer-secondary">
          <div class="row section footer-second-section">
            <div class="medium-8 columns">
              <p>&copy; <?php echo date("Y") ?> Floating Orchard Inc.
                New York, NY.  All Rights Reserved</p>
            </div>
  
            <!--<div class="medium-4 columns medium-text-right">
              <p><strong>Contact | Terms of Service</strong></p>
            </div>-->
          </div> 
      </div><!-- end footer-secondary --> 

    



<?php wp_footer(); ?>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/fastclick.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation/foundation.topbar.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>

    

