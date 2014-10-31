 <?php get_header(); ?>
      <!--begin Splash -->

      <div class="hero-container">
        <div class="row section">
          <div class="large-12 columns">
            <div class="row">
              <div class="large-6 columns end">
                <h1>Floating Orchard</h1>
              </div> 
            </div>
            <div class="row">
              <div class="medium-7 large-5 columns end">
                <!-- ACF 'hero text' field -->
                <?php the_field( 'hero_text' ); ?>
                <a href="#contact-form"><button>Free Trial</button></a>
              </div>
            </div>
          </div>
        </div><!--end row -->  
      </div><!--end Splash -->
    </div>

      <!-- begin Core Commitments -->
        <div class="row text-center core-commitments section">
          <div class="column">
            <div class="row commitment-content">
              <div class="medium-8 large-7 medium-centered columns">
                <h2>Core Commitments</h2>
                <!-- ACF 'hero text' field -->
                <?php the_field( 'core_commitments' ); ?>
              </div>
            </div>

            <!-- begin first row -->
            <div class="row text-center orchard-features first-row-icons">
              <div class="medium-4 columns">
                <div class="row icon-row">
                  <div class="small-6 large-7 small-centered columns">
                    <img src="<?php bloginfo('template_directory'); ?>/img/monitoring@2x.png" alt="monitoring icon">
                  </div>
                </div>
                <h3>Monitoring</h3>
                <p>Floating Orchard tracks the vital signs your Macs and iOS devices. Helpful for daily troubleshooting, essential for the occasional crisis.</p>
              </div>

              <div class="medium-4 columns">
                <div class="row icon-row">
                  <div class="small-6 large-7 small-centered columns">
                    <img src="<?php bloginfo('template_directory'); ?>/img/protection@2x.png" alt="protection icon">
                  </div>
                </div>
                <h3>Protection</h3>
                <p>Less threats &#8800; No threats. Floating Orchard protects your users from emerging malware threats.</p>
              </div>

              <div class="medium-4 columns">
                <div class="row icon-row">
                  <div class="small-6 large-7 small-centered columns">
                    <img src="<?php bloginfo('template_directory'); ?>/img/updates@2x.png">
                  </div>
                </div>
                <h3>Updates</h3>
                <p>Updates are inevitable.  Floating Orchard automates them, giving you more time to focus on everything else.</p>
              </div>
            </div><!-- end first row -->

            <!-- begin second row -->
            <div class="row text-center orchard-features">
              <div class="medium-4 medium-offset-2 columns">
                <div class="row">
                  <div class="small-6 large-7 small-centered columns">
                    <div class="icon-row">
                      <img src="<?php bloginfo('template_directory'); ?>/img/backup@2x.png" class="home-icons">
                    </div>  
                  </div>
                </div>
                <h3>Backup</h3>
                <p>Dealing with your own backups can be a chore.  Dealing with everyone's backups is a breeze with Floating Orchard.</p>
              </div>

              <div class="medium-4 columns end">
                <div class="row">
                  <div class="small-6 large-7 small-centered columns">
                    <div class="icon-row">
                      <img src="<?php bloginfo('template_directory'); ?>/img/security@2x.png" class="home-icons">
                    </div>
                  </div>
                </div>
                  <h3>Security</h3>
                  <p>Every firm's data is its lifeblood.  Floating Orchard helps you prevent loss with encryption and network security monitoring. Your IP stays safe inside, intruders stay out.</p>
              </div>
            </div><!--end second row-->
          </div> 
        </div> <!-- end Core Commitments -->
         
      <!-- begin Our Customers -->
      <?php $bgb = get_field('bg_b'); ?>
      <div class="our-customers" data-interchange="[<?php bloginfo('template_directory'); ?>/img/space.png, (small)], [<?=$bgb?>, (medium)]">
        <div class="row section">
          <div class="medium-5 large-4 columns">
            <h2>Our Customers</h2>
              <!-- ACF 'our customers' field -->
              <?php the_field( 'our_customers' ); ?>
          </div>
        </div><!-- end row -->
      </div><!-- end Our Customers -->

      <!-- begin Cloud Technologies -->
      <div class="cloud-technologies section">
        <div class="row">
          <div class="large-12 columns text-center">
           <img src="<?php bloginfo('template_directory'); ?>/img/devices.png" alt="Image of devices" />
          </div>
          <div class="medium-8 large-6 medium-centered columns text-center">
            <h2>Cloud Technologies</h2>
              <!-- ACF 'cloud technologies' field -->
              <?php the_field( 'cloud_technologies' ); ?>
          </div>
        </div>  
      </div><!-- end Cloud Technologies -->

      <!-- begin Partnerships -->
      <div class="partnerships row section">
        <div class="large-12 columns">
          <div class="row">
            <div class="medium-8 large-5 medium-centered columns text-center">
              <h2>Partnerships</h2>
              <!-- ACF 'partnerships' field -->
              <?php the_field( 'partnerships' ); ?>
            </div>
          </div>
  
          <div class="row partnership-logos">
            <div class="small-5 medium-4 large-3 small-offset-1 medium-offset-2 large-offset-3 text-center columns">
              <img src="<?php bloginfo('template_directory'); ?>/img/casper.jpg" alt="Casper Suite logo" title="Casper Suite logo" class="casper-image" />
            </div>
            <div class="small-5 medium-4 large-3 columns text-center end">
              <img src="<?php bloginfo('template_directory'); ?>/img/apple.png" alt="Apple Consultants Network logo" title="Apple Consultants Network logo" class="consultants-network-image" />
            </div>
          </div>
        </div>
      </div><!-- end Partnerships -->

      <!-- begin Contact Area -->
      <?php $bgc = get_field('bg_c'); ?>
      <div class="contact-area" id="contact-form" data-interchange="[<?php bloginfo('template_directory'); ?>/img/space.png, (small)], [<?=$bgc?>, (medium)]">
        <div class="row section">  
          <!--begin Contact Form -->
          <div class="columns contact-section">
            <div class="contact-form">
              <a name="contactform"></a>
              <h4>Get a Quote &amp; Free Trial</h4>
              <p>Fill out the form below to try Floating Orchard.</p>
              <?php gravity_form(1, false, false, false, '', false); ?>
            </div><!--end Contact Form -->
          </div>
        </div>
      </div><!-- end Contact Area -->
<?php get_footer(); ?>