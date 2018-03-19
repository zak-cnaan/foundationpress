<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header id="logo-header">
	<span id="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<!-- <?php bloginfo( 'name' ); ?> -->
						zak<span>cnaan</span>
					</a>
				</span>

<button <?php foundationpress_title_bar_responsive_toggle(); ?> aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon dark" type="button" data-toggle="top-navigation"></button>
				
<nav class="site-navigation top-bar-x show-for-medium" data-toggler=".show-for-medium" role="navigation" id="top-navigation">
			<?php foundationpress_top_bar_r(); ?>
	</nav>
		
<div class="missing">Ooops <span>how</span></div>
	</header>
