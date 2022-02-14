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
			<p>About</p>
			<p>Contact Us</p>
			<p>Blog</p>
			<a><i class="fa fa-facebook"></a>
			<a><i class="fa fa-twitter"></a>
			<a><i class="fa fa-instagram"></a>
		</div>
		<div class="bottomFooter">
			<p>&copy; Bball Connection 2022</p>
		</div>
	</div>
		<div class="site-info">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bballcon' ), 'bballcon', '<a href="https://daniellundydev.ca">Daniel Lundy</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
