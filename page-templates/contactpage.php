<?php
/**
 * Template Name: Contact Page Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<script>
	var nav = document.getElementById('mainNav');
	// nav.style.backgroundColor = "currentColor";
	nav.classList.add('navbar-shrink');
	nav.classList.remove('fixed-top');
</script>

<section class="wrapper" id="page-wrapper">

	<section class="<?php echo esc_attr($container); ?>" id="content">

		<div class="row">
			<div class="col-6 content-contact">
				<main class="site-main" id="main" role="main">
					<?php while (have_posts()): the_post();?>
					<?php get_template_part('loop-templates/content', 'page');?>
					<?php if (comments_open() || get_comments_number()): comments_template(); endif; ?>
					<?php endwhile; // end of the loop. ?>
				</main><!-- #main -->
			</div>

			<div class="col-md-6 content-area" id="primary">
				<h1>Contactooooooooo</h1>
			</div><!-- #primary -->
		</div><!-- .row end -->

	</section><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer();?>

<script>
	var nav = document.getElementById('mainNav');
	nav.querySelector('img').style.display = "inline-block"
</script>
