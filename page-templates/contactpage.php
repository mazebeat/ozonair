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

<div class="wrapper bg-light" id="page-wrapper">
	<section class="<?php echo esc_attr($container); ?> " id="content">
		<div class="row">
			<div class="col">
				<h1>contacto</h1>
			</div>
		</div>
		<div class="row p-3 bg-light">
			<div class="col-md-6">
				<?php echo do_shortcode('[ninja_form id=1]'); ?>
			</div>
			<div class="col-md-6">
				<span class="align-middle">
					<?php echo do_shortcode('[wpgmza id="1"]'); ?>
				</span>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-12 col-md-4">
				<div class="row">
					<div class="col-9 text-right"> 
						<h4 class="contact-heading">Correo Electrónico</h4> 
						<p class="text-muted">info@ozonair.cl</p>
					</div>
					<div class="col-3">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x text-info"></i>
							<i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
						</span>
					</div>
 				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="row">
					<div class="col-9 text-right">
						<h4 class="contact-heading">Teléfono</h4>
						<p class="text-muted">(+56) 9 8768 5516 <br> (+56) 9 6629 2385</p>
					</div>
					<div class="col-3">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x text-secondary"></i>
							<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="row">
					<div class="col-9 text-right">
						<h4 class="contact-heading">Ubicación</h4>
						<p class="text-muted">Calle Nueva 1885 B. #3613, Santiago, Chile</p>
					</div>
					<div class="col-3">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

</div><!-- Wrapper end -->

<?php get_footer();?>

<script>
	var nav = document.getElementById('mainNav');
	nav.querySelector('img').style.display = "inline-block"
</script>
