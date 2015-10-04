<?php
/**
 * Template Name: Techno
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clickinconsulting
 */
get_header();
?>

<!--=== Content Part ===-->
<div class="container content technologies__page">
	<div class="row">
		<div class="col-md-12">
			<div class="headline">
				<h2>Technologies</h2>
			</div>
			
			<?php $my_query = new WP_Query('category_name=techno-category'); ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			
			<?php
				$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				$thumb_url = $thumb_url_array[0];
			?>

				<!-- Clients Block-->
				<div class="row clients-page margin-bottom-20 post">
					<div class="col-md-2">
						<img src="<?php echo $thumb_url; ?>" class="img-responsive hover-effect post-image" alt="" />
					</div>
					<div class="col-md-10">
						<h3>
							<?php the_title(); ?>
						</h3>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<!-- End Clients Block-->
			<?php endwhile; ?>
		</div><!--/col-md-12-->
	</div><!--/row-->
</div><!--/container-->
<!--=== End Content Part ===-->

<?php get_footer(); ?>