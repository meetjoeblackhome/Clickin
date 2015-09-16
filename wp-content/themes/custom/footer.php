<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'custom' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'custom' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'custom' ), 'custom', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione earum ut ullam, consequuntur quos illum, numquam minima recusandae inventore ex quia! Mollitia excepturi ullam minus, rerum illum aliquam accusamus, qui amet magnam eum reprehenderit, quod perspiciatis voluptatum eveniet cupiditate esse aliquid cum ducimus harum officia beatae repudiandae incidunt numquam placeat.</p>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
