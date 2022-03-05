<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bball_Connection
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="parent">
		<div class="topFooter">
			<?php
			if ( has_nav_menu( 'menu-footer' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'menu-footer',
						'menu_id'        => 'footer-menu',
					)
				);
			}
			?>
		</div>
	</div>
		<div class="site-info bottomFooter">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '&copy; %1$s by %2$s.', 'bballcon' ), 'Bball Connection', '<a href="https://daniellundydev.ca">Daniel Lundy</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
