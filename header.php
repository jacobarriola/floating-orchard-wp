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
// Keep mouse position at form
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!--begin HEADER -->
	<nav class="top-bar header" data-topbar role="navigation">
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Floating Orchard</a></h1>
	    </li>
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
	  </ul>



		<?php
            wp_nav_menu( array(
                'theme_location'    =>	'Primary Menu',
                'menu'				=>	'Main Menu',
                'depth'             =>	3,
                'container'			=>	'div',
                'container_class'	=>	'top-bar-section',
                'menu_class'		=>	'left',
                'walker'			=>	new Foundation_Walker_Nav_Menu()
                )
            );
        ?>

        <!--<div class="contact-header-button text-center show-for-medium-and-up">Contact<br><img src="<?php bloginfo('template_directory'); ?>/img/phone.png" class="phone-icon">(888) 970-8890</div>-->
    </nav><!--end HEADER -->
