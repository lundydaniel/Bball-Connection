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
	<!--Custom footer content -->

		<div class="site-info bottomFooter">
			<!-- Adding the copyrite info -->
			<div>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '&copy; %1$s by %2$s.', 'bballcon' ), 'Bball Connection', '<a href="https://daniellundydev.ca">Daniel Lundy</a>' );
				?>
			</div>	
			<!-- Adding Social Media Menu -->
			<div>
				<ul>
					<li><a href="<?php echo esc_url( get_theme_mod( 'bballcon_facebook_url' ) ); ?>"><?php echo get_theme_mod( 'bballcon_facebook_title' ); ?></a></li>
					<li><a href="<?php echo esc_url( get_theme_mod( 'bballcon_instagram_url' ) ); ?>"><?php echo get_theme_mod( 'bballcon_instagram_title' ); ?></a></li>
					<li><a href="<?php echo esc_url( get_theme_mod( 'bballcon_twitter_url' ) ); ?>"><?php echo get_theme_mod( 'bballcon_twitter_title' ); ?></a></li>
				</ul>
			<div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
