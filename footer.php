<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod('understrap_container_type');
?>

<?php get_sidebar('footerfull'); ?>

	<footer class="wrapper" id="wrapper-footer">
 
		<!-- <div class="<?php echo esc_attr($container); ?>"> -->
		<?php if ('container' == $container) : ?>
			<div class="container">
		<?php else : ?>		
			<div class="container-fluid">
		<?php endif; ?>

				<div class="site-footer" id="colophon">

					<div class="row justify-content-between">

						<div class="site-info col-6">

								<a href="<?php echo esc_url(__('http://wordpress.org/', 'understrap')); ?>">
									<?php printf( /* translators:*/esc_html__('Copyright © Company. All rights reserved %s', 'understrap'), 'WordPress'); ?>
								</a>
								<span class="sep"> | </span>
						
								(<?php printf( // WPCS: XSS ok.
									/* translators:*/
									esc_html__('Version: %1$s', 'understrap'),
									$the_theme->get('Version')
								); ?>)
						</div><!-- .site-info -->

						<div class="col-4 text-right">
							One of two columns
						</div>

					</><!-- #colophon -->

				</div><!--col end -->

			</div><!-- row end -->

		</div><!-- container end -->

	</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script type="text/javascript" src="https://medialoot.com/preview/sundown/js/jquery.chocolat.min.js"></script>
<script type="text/javascript" src="https://medialoot.com/preview/sundown/js/jquery.filterizr.min.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#toggle-search').on('click', function(event) {        
			jQuery('.search-field').toggle('show');
		});
	});
	jQuery(function() {
		jQuery('.filtr-container').filterizr();
	});
	jQuery(document).ready(function(){
		jQuery('.chocolat-parent').Chocolat();
	});
</script>

</body>

</html>
