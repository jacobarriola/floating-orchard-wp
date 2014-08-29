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
              <p><a href="mailto:sales@floatingorchard.com">sales@floatingorchard.com</a><br>
                (888) 970-8870</p>
            </div> 

            <div class="large-3 columns">
              <h5>Address</h5>
              <p>236-250 Greenpoint Ave<br>
                Box 12<br>
                Brooklyn, NY 11222</p>
            </div> 

            <div class="large-6 columns">
              <h5>Disclaimer</h5>
              <p class="disclaimer">The Casper Suite is a trademark of JAMF Software.  Mac, iOS, iPhone and iPad are trademarks of Apple Inc.  All other brands and trademarks are the property of their respective owners.</p>
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

    
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
    
    <script>
      $(document).foundation();
    </script>

<?php wp_footer(); ?>

</body>
</html>

    

