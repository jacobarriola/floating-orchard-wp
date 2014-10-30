<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="main-header">
 *
 * @package Floating Orchard
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>
<?php
gravity_form_enqueue_scripts(1, true);
// Keep mouse position at form after submission
?>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!--begin HEADER -->
	<div class="header-primary sticky">
        <!-- Foundation top-bar navigation start -->
        <nav class="top-bar row section" data-topbar role="navigation">   
    	    <ul class="title-area">
        	    <li class="name">
        	      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo-container"><img src="<?php bloginfo('template_directory'); ?>/img/logo-small.png"></a>
        	    </li>
        	    <li class="toggle-topbar menu-icon"><a href="#"><span class="hamburger"></span></a></li>
    	    </ul>
            <section class="top-bar-section header">
                <!-- Begin Wordpress Menu -->
        		<?php
                    wp_nav_menu( array(
                        'theme_location'    =>	'Primary Menu',
                        'menu'				=>	'Main Menu',
                        )
                    );
                ?>
            </section>
            <div class="contact-header-button text-center show-for-large-up">Contact<br><img src="<?php bloginfo('template_directory'); ?>/img/phone.png" class="phone-icon">(888) 970-8890</div>
        </nav>
        <!-- Foundation top-bar navigation end -->
    </div><!--end HEADER -->
