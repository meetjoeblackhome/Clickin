<?php
/**
 * Template Name: Portfolio
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

<div class="portfolio__page">
	<!-- Breadcrumbs -->
	<div class="breadcrumbs-v3 img-v3 text-center">
		<div class="container">
			<h1>Portfolio</h1>
			<p>Creative Freedom Matters User Experience</p>
		</div>
	</div>
	<!-- End :: Breadcrumbs -->

	<div class="container content">

		<div class="row news-v1">
			<?php $my_query = new WP_Query('category_name=portfoliocategory'); ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<?php 
					$thumb_id = get_post_thumbnail_id();
					$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
					$thumb_url = $thumb_url_array[0];
				?>
				<div class="col-md-4 md-margin-bottom-40 portfolio__item__container" data-mh="portfolio__item">
					<div class="portfolio__item">
						<div class="news-v1-in">
							<img class="img-responsive" src="<?php echo $thumb_url; ?>" />
							<h3>
								<?php the_title(); ?>
							</h3>
							<div class="post-content">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer() ?>