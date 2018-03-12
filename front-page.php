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
/* .wrapper-navbar {
	width: 100vw;
	position: sticky;
	z-index: 999;
	background: none !important;
	margin-top: -60px;
}

 #carousel-home {
	top: 0;
	width: 100vw;
	display: block;
	clear: both;
} 

.bg-light {
	background: none;
	background-color: rgb(255, 255, 255, .9) !important;
}

.carousel-item {
	top: 0;
	height: 80vh !important;
	overflow: hidden;
}
.carousel-item  img {
	position: absolute;
	 bottom: -100px;
}

.gallery {
	position: relative;
	display: block;
	clear: both;
} */
</style>

	<div id="carousel-home" class="carousel slide clearfix" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-home" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-home" data-slide-to="1" class=""></li>
			<li data-target="#carousel-home" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" data-src="http://127.0.0.1/wordpress/wp-content/uploads/2018/03/eberhard-grossgasteiger-330357.jpg" alt="First slide [800x400]" src="http://127.0.0.1/wordpress/wp-content/uploads/2018/03/eberhard-grossgasteiger-330357.jpg" data-holder-rendered="true">
				<div class="carousel-caption d-none d-md-block">
					<h5>First slide label</h5>
					<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" data-src="http://127.0.0.1/wordpress/wp-content/uploads/2018/03/sky-1551112_1920.jpg" alt="Second slide [800x400]" src="http://127.0.0.1/wordpress/wp-content/uploads/2018/03/sky-1551112_1920.jpg" data-holder-rendered="true">
				<div class="carousel-caption d-none d-md-block">
					<h5>Second slide label</h5> 
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<section class="gallery text-center">
		<div class="container-fluid">
			
			<!--Gallery Filter-->
			<!-- <ul class="category-filter simplefilter mb-4">
				<li class="active" data-filter="all">All</li>
				<li data-filter="1">Nature</li>
				<li data-filter="2">Landscape</li>
				<li data-filter="3">Sunset</li>
				<li data-filter="4">Human</li>
			</ul> -->
			
			<?php $prod_categories = get_terms('product_cat', array( 'orderby' => 'name', 'order' => 'ASC', 'hide_empty' => 0 )); ?>
			
			<h2 class="mb-4">Equipos</h2>
			
			<div class="row" data-chocolat-title="Equipos">

				<?php
				foreach ($prod_categories as $prod_cat) :
					$cat_thumb_id = get_woocommerce_term_meta($prod_cat->term_id, 'thumbnail_id', true);
					$cat_thumb_url = wp_get_attachment_image($cat_thumb_id, 'large', "", array("class" => "img-fluid"));
				?>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-gallery filtr-item" data-category="1" data-sort="value">
					<figcaption>
						<div class="parent">
							<?php echo $cat_thumb_url; ?>
							<div class="child">
								<h3><?php echo $prod_cat->name; ?></h3>
								<p><?php echo $prod_cat->description; ?></p>
								<a href="<?php echo get_category_link($prod_cat->term_id); ?>" class="btn btn-outline-white pill-btn" title="">Ver</a>
							</div>
						</div>
					</figcaption>
				</div>
				<?php endforeach; wp_reset_query(); ?>
				
			</div>
		
		</div>
	</section>

<?php get_footer(); ?>