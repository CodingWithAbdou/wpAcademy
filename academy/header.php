<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpAcademy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<style>
		@font-face {
			font-family: 'Noto Kufi Arabic';
			src: url('/wordpress/wp-content/themes/academy/assets/NotoKufiArabic-Regular.ttf') format('truetype');
			font-weight: normal;
		}

		@font-face {
			font-family: 'Noto Kufi Arabic', sans-serif;
			src: url('/wordpress/wp-content/themes/academy/assets/NotoKufiArabic-Bold.ttf') format('truetype');
			font-weight: bold;
		}
	</style>
	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'academy'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$academy_description = get_bloginfo('description', 'display');
				if ($academy_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $academy_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'academy'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
		<div class="header_image" id="header-image">
			<?php if (is_front_page()) {
				the_header_image_tag();
			}
			?>
		</div>