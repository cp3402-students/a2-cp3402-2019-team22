<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

//Footer menu
function register_my_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Footer Image
function theme_customizer_register($wp_customize) {
// add a setting
    $wp_customize->add_setting('site_footer_image');
// Add a control to upload the hover logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_footer_image', array(
        'label' => 'Upload Footer Image',
        'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
        'settings' => 'site_footer_image',
        'priority' => 8 // show it just below the custom-logo
    )));

    //Main colour
    $wp_customize->add_setting('site_main_color',array(
        'default' => '#FF0000',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'site_main_color',array(
        'label' => 'Main site colour',
        'section' => 'colors',
        'settings' => 'site_main_color',
        'priority' => 8,
    )));
}

add_action('customize_register', 'theme_customizer_register');

function theme_get_customizer_css() {
    ob_start();

    $site_main_color = get_theme_mod( 'site_main_color', '' );
    if ( ! empty( $site_main_color ) ) {
        ?>
        .bg-primary {background-color: <?php echo $site_main_color; ?> !important;
        }
        #wrapper-footer {
        background-color: <?php echo $site_main_color; ?> !important;
        }
        .current-menu-item > a {
            background-color: <?php echo $site_main_color; ?> !important;
        }
        .navbar-dark:hover, .navbar-nav:hover, .nav-link:hover {
            background-color: <?php echo $site_main_color; ?>;
        }
        .navbar-dark, .navbar-nav, .nav-link {
            color: <?php echo $site_main_color; ?> !important;
        }
        #navbarNavDropdown ul li::after{
            color: <?php echo $site_main_color; ?>;
        }
        <?php
    }

    $css = ob_get_clean();
    return $css;
}

function theme_enqueue_styles() {
    wp_enqueue_style( 'theme-styles', get_stylesheet_uri() ); // This is where you enqueue your theme's main stylesheet
    $custom_css = theme_get_customizer_css();
    wp_add_inline_style( 'theme-styles', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

