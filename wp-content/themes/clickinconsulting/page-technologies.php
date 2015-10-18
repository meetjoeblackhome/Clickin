<?php
/**
 * Template Name: Technologies
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clickinconsulting
 */
get_header();
?>
<div class="technologies__page">
	<!-- Breadcrumbs -->
	<div class="breadcrumbs-v3 img-v3 text-center">
		<div class="container">
			<h1>Technologies</h1>
			<p>Creative Freedom Matters User Experience</p>
		</div>
	</div>
	<!-- End :: Breadcrumbs -->
	<div class="container content">
		<?php $my_query = new WP_Query('category_name=technologies_category'); ?>
		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<?php 
				$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				$thumb_url = $thumb_url_array[0];
			?>
		<!-- Clients Block-->
		<div class="row clients-page">
			<div class="col-xs-12">
				<div class="col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-4">
					<img src="<?php echo $thumb_url; ?>" class="img-responsive hover-effect" alt="">
				</div>
				<div class="col-md-10 col-sm-12">
					<h3><?php the_title(); ?></h3>
					<div>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- End Clients Block-->
		<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>