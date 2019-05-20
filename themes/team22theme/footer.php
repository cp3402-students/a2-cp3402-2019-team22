<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
                        <div class="wp-block-image"><figure class="aligncenter"><img src="http://34.229.102.181/wp-content/uploads/2019/05/coffee.png" alt="" class="wp-image-65"/></figure></div>

                        <p style="text-align:center">[ <a href="https://www.facebook.com/Mycoffeecan/" target = _blank>facebook</a> ]  [ <a href="https://www.instagram.com/thecoffeecan_cafe/?hl=en" target = _blank>instagram</a> ]</p>

						<?php understrap_site_info(); ?>


					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

