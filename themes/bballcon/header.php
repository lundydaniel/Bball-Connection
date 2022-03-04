<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bball_Connection
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bballcon' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			endif;
			$bballcon_description = get_bloginfo( 'description', 'display', );
			if ( $bballcon_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $bballcon_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php

			if ( has_nav_menu( 'menu-user' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'menu-user',
						'menu_id'        => 'user-menu',
					)
				);
			}

			if ( has_nav_menu( 'menu-primary' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'menu-primary',
						'menu_id'        => 'primary-menu',
					)
				);
			}
			
			if ( has_nav_menu( 'menu-secondary' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'menu-secondary',
						'menu_id'        => 'secondary-menu',
					)
				);
			}
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
