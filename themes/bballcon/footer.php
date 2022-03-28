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

		<!-- Setting up custom WP_Query for post types to be displayed in footer -->

		<?php
		/**
		 * Creating arguements
		 */
		$tip_args = array(
			'post_type'         => array(' bballcon_tips '), // searching for post type bbcallcon_tips
			'post_status'       => 'publish', // searching to see if post or page is published
			'posts_per_page'    => 3, // displaying three post
			'orderby'			=> 'rand', //display post in random order
			'post__not_in'		=> array( get_the_ID() ) //making it so when on the post. it does not show as an option to view
		);
		/**
		 * Creating WP_Query
		 */
		$tip_query = new WP_Query( $tip_args );
		?>
		
		<!-- Displaying information on screen -->
		<div class="custom-post-type-container">
			<?php
				if ( $tip_query->have_posts() ) {
					while ( $tip_query->have_posts() ) {
						$tip_query->the_post();
						?>
						<div class="custom-post-type">
							<?php
							the_post_thumbnail();
							the_title( '<h4>', '</h4>' );
							the_excerpt();
							?>
							<a href="<?php the_permalink();?>">Read article</a>
						</div>
						<?php
					}
					wp_reset_postdata();
				}
			?>
		</div>
	</div>
	<!--Custom footer content -->

		<div class="site-info bottomFooter">
			<!-- Adding the menu-footer links -->
		<div class="site-menu-footer-links">
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
			<!-- Adding the copyrite info -->
			<div class="copy-info">
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
