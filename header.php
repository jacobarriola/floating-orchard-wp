<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till the end of <div class="header-primary"> container
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
<?php
gravity_form_enqueue_scripts(1, true);
// Keep mouse position at form after submission rather than default behavior which pushes to top of page
?>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    	<div class="header-primary">
            <!-- begin top-bar -->
            <nav class="top-bar row section" data-topbar role="navigation">   
        	    <ul class="title-area">
            	    <li class="name">
            	      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo-container"><img src="<?php bloginfo('template_directory'); ?>/img/logo-small.png" class="show-for-small-only"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" class="site-logo show-for-medium-up"></a>
            	    </li>
            	    <li class="toggle-topbar menu-icon"><a href="#"><span class="hamburger"></span></a></li>
        	    </ul>
                <section class="top-bar-section header">
            		<?php
                    // WordPress menu
                        wp_nav_menu( array(
                            'theme_location'    =>	'Primary Menu',
                            'menu'				=>	'Main Menu',
                            )
                        );
                    ?>
                </section>
                <div class="contact-header-button text-center show-for-large-up"><img src="<?php bloginfo('template_directory'); ?>/img/phone.png" class="phone-icon">(888) 970-8890</div>
            </nav><!-- end top-bar -->
        </div><!-- end header-primary -->
