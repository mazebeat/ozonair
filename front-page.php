<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

$container = get_theme_mod('understrap_container_type');


get_header(); 

?>
<style>

.bounce {
  display: inline-block;
  position: relative;
  -moz-animation: bounce 0.5s infinite linear;
  -o-animation: bounce 0.5s infinite linear;
  -webkit-animation: bounce 0.5s infinite linear;
  animation: bounce 0.5s infinite linear;
}
@-webkit-keyframes bounce {
    0% { top: 0; }
    50% { top: -0.2em; }
    70% { top: -0.3em; }
    100% { top: 0; }
}
@-moz-keyframes bounce {
    0% { top: 0; }
    50% { top: -0.2em; }
    70% { top: -0.3em; }
    100% { top: 0; }
}
@-o-keyframes bounce {
    0% { top: 0; }
    50% { top: -0.2em; }
    70% { top: -0.3em; }
    100% { top: 0; }
}
@-ms-keyframes bounce {
    0% { top: 0; }
    50% { top: -0.2em; }
    70% { top: -0.3em; }
    100% { top: 0; }
}
@keyframes bounce {
    0% { top: 0; }
    50% { top: -0.2em; }
    70% { top: -0.3em; }
    100% { top: 0; }
}

.jumbotron {
  position: absolute;
  top: 50%;
  left:50%;
  transform: translate(-50%,-50%);
  background-color: transparent;
}
</style>
	<!-- Header -->
    <header class="masthead text-center">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<div class="row align-items-center">
					<div class="col col-6 col-sm-6 col-md-4 mx-auto p-2">
						<img src="<?php echo wp_get_attachment_url(154); ?>" alt="Main Logotype" id="front-logotype" class="img-fluid">
					</div>
					<div class="col-12 mb-2">
						<h1 class="sr-only">Ozonair</h1>
						<h2 class="display-3">Para un ambiente libre de gérmenes</h2>
						<a class="btn btn-primary btn-lg text-uppercase d-none d-lg-inline" href="<?php echo get_permalink(65); ?>">Conocenos más</a>
					</div>
					<div class="col-12">
						<span class="align-text-bottom bounce mt-4"><i class="fa fa-arrow-down fa-2x bounce" aria-hidden="true"></i></span>
					</div>
				</div>
			</div>
		</div>
	</header>	

	<section id="intro" class="bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<blockquote class="blockquote text-left">
						<h2 class="mb-0">Tecnología de Ozono para el bienestar de las personas.</h2>
						<footer class="blockquote-footer">Empleamos tecnología, innovación y seguridad de alta calidad para el tratamiento del agua y aire a través de equipos que cumplen con los más altos estándares de calidad y seguridad con el propósito de crear ambientes libres de contaminación.</footer>
					</blockquote> 
				</div>
			</div>
		</div>
	</section>

	<!-- Services -->
	<section id="services" class="bg-white">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">¿Por qué usar Ozono?</h2>
				</div>
			</div>
			<div class="row text-center">
				<div class="col">
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-leaf fa-stack-1x fa-inverse"></i>
					</span>
					<!-- <h4 class="service-heading">E-Commerce</h4> -->
					<p class="text-muted"> Desinfectante ecológico, su uso no perjudica al medio ambiente.</p>
				</div>
				<div class="col">
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-info"></i>
						<i class="fa fa-exclamation fa-stack-1x fa-inverse"></i>
					</span>
					<!-- <h4 class="service-heading">Responsive Design</h4> -->
					<p class="text-muted">Elimina virus, bacterias, hongos, moho, esporas, algas, toxinas, y más.</p>
				</div>
				<div class="col">
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-secondary"></i>
						<i class="fa fa-ban fa-stack-1x fa-inverse"></i>
					</span>
					<!-- <h4 class="service-heading">Web Security</h4> -->
					<p class="text-muted">Destruye los microrganismos generadores de olores desagradables.</p>
				</div>
				<div class="col">
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-dark"></i>
						<i class="fa fa-bed fa-stack-1x fa-inverse"></i>
					</span>
					<!-- <h4 class="service-heading">Web Security</h4> -->
					<p class="text-muted">Tecnología de ozonización puede ser usada a nivel doméstico.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-light" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Equipos</h2>
					<!-- <h3 class="section-subheading text-muted">...</h3> -->
				</div>
			</div>
		
			<?php $prod_categories = get_terms('product_cat', array('orderby' => 'name', 'order' => 'ASC', 'hide_empty' => false, 'exclude' => array(15))); ?>

	        <div class="row row-eq-height">
				<?php 
					foreach ($prod_categories as $prod_cat):
						$cat_thumb_id = get_woocommerce_term_meta($prod_cat->term_id, 'thumbnail_id', true);
						$cat_thumb_url = wp_get_attachment_image($cat_thumb_id, 'large', "", array("class" => "img-fluid"));
				?>
					<div class="col-md-3 col-sm-6 portfolio-item">
						<a href="<?php echo get_category_link($prod_cat->term_id); ?>" class="portfolio-link">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<?php echo $cat_thumb_url; ?>
						</a>
						<div class="portfolio-caption text-center">
							<h4><a href="<?php echo get_category_link($prod_cat->term_id); ?>" class="btn btn-outline-white pill-btn" title=""><?php echo $prod_cat->name; ?></a></h4>
							<!-- <p class="text-muted"><?php // echo $prod_cat->description; ?></p> -->
						</div>
					</div>
				<?php endforeach; wp_reset_query();?>
			</div>
		</div>
	</section>

<script type="text/javascript">
	(function($) {
  		"use strict"; // Start of use strict
		// Collapse Navbar
		var navbarCollapse = function() {
			if ($("#mainNav").offset().top > 300) {
				$("#mainNav").addClass("navbar-shrink");
				$(".navbar-brand.custom-logo-link").find('img').css("display", "inline-block"); 
			} else {
				$("#mainNav").removeClass("navbar-shrink");
				$(".navbar-brand.custom-logo-link").find('img').css("display", "none"); 
			}
		};
		// Collapse now if page is not at top
		navbarCollapse();
		// Collapse the navbar when page is scrolled
		$(window).scroll(navbarCollapse);
	})(jQuery); // End of use strict
</script>
<?php get_footer();?>