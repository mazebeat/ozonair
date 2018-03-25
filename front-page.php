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

	<!-- Header -->
    <header class="masthead">
		<div class="container">
			<div class="intro-text">
				<h1 class="sr-only">Ozonair</h1>
				<div class="intro-lead-in"> 
					<!-- Bienvenido a Ozonair! -->
					<img src="<?php echo wp_get_attachment_url(71); ?>" alt="Main Logotype" id="front-logotype" class="img-fluid">
				</div>
				<div class="intro-heading text-uppercase">
					Generadores de Ozono
				</div>
				<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php echo get_permalink( 65); ?>">Conocenos más</a>
			</div>
		</div>
	</header>

	<?php // get_header(); 
 ?>

	<section id="intro" class="bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<blockquote class="blockquote text-left">
						<h2 class="mb-0">Tecnología Ozono para el bienestar de las personas.</h2>
						<footer class="blockquote-footer">Empleamos tecnología, innovación y seguridad de alta calidad para el tratamiento del agua y aire a través de equipos que cumplen con los más altos estándares de calidad y seguridad con el propósito de crear ambientes libres de contaminación.</footer>
					</blockquote> 
				</div>
			</div>
		</div>
	</section>

	<!-- Services -->
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Servicios</h2>
					<!-- <h3 class="section-subheading text-muted">...</h3> -->
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">E-Commerce</h4>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Responsive Design</h4>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-lock fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Web Security</h4>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
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
		
			<?php $prod_categories = get_terms('product_cat', array('orderby' => 'name', 'order' => 'ASC', 'hide_empty' => 0)); ?>

	        <div class="row row-eq-height">
				<?php 
					foreach ($prod_categories as $prod_cat):
						$cat_thumb_id = get_woocommerce_term_meta($prod_cat->term_id, 'thumbnail_id', true);
						$cat_thumb_url = wp_get_attachment_image($cat_thumb_id, 'large', "", array("class" => "img-fluid"));
				?>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a href="<?php echo get_category_link($prod_cat->term_id); ?>" class="portfolio-link">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<?php echo $cat_thumb_url; ?>
						</a>
						<div class="portfolio-caption">
							<h4><a href="<?php echo get_category_link($prod_cat->term_id); ?>" class="btn btn-outline-white pill-btn" title=""><?php echo $prod_cat->name; ?></a></h4>
							<p class="text-muted"><?php echo $prod_cat->description; ?></p>
						</div>
					</div>
				<?php endforeach; wp_reset_query();?>
			</div>
		</div>
	</section>

<?php get_footer();?>