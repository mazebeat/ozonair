<?php
/**
 * Check and setup theme's default settings
 *
 * @package understrap
 *
 */

if ( ! function_exists( 'understrap_setup_theme_default_settings' ) ) :
	function understrap_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$understrap_posts_index_style = get_theme_mod( 'understrap_posts_index_style' );
		if ( '' == $understrap_posts_index_style ) {
			set_theme_mod( 'understrap_posts_index_style', 'default' );
		}

		// Sidebar position.
		$understrap_sidebar_position = get_theme_mod( 'understrap_sidebar_position' );
		if ( '' == $understrap_sidebar_position ) {
			set_theme_mod( 'understrap_sidebar_position', 'right' );
		}

		// Container width.
		$understrap_container_type = get_theme_mod( 'understrap_container_type' );
		if ( '' == $understrap_container_type ) {
			set_theme_mod( 'understrap_container_type', 'container' );
		}
	}
endif;

add_filter('get_custom_logo', 'change_logo_class');

function change_logo_class($html) {
    // $html = str_replace('custom-logo', 'custom-logo hidden', $html);
    // $html = str_replace('custom-logo-link', 'custom-logo-link', $html);
 
    return $html;
}

function my_custom_login_logo()
{
    ?>
		 <style type="text/css">
		 	.login {
				background-image: url("https://images.unsplash.com/photo-1500916570864-68c2647382b6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd590c5475d25dcffd82353e81ae548d&auto=format&fit=crop&w=1950&q=80");
				background-repeat: no-repeat;
				background-attachment: scroll;
				background-position: center 75%;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			#login h1 a, .login h1 a {
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png);
				height: 90px;
				width: 240px;
				background-size: cover;
				background-repeat: no-repeat;
			}
			.login #backtoblog a, .login #nav a {
				color: #ffffff !important;
			}
		</style>
	</style>
	<?php
}
add_action('login_enqueue_scripts', 'my_custom_login_logo');

function my_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');


function my_login_logo_url_title()
{
    return 'Mi título personalizado';
}
add_filter('login_headertitle', 'my_login_logo_url_title');


