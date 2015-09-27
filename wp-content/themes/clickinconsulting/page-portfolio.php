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
<!-- Preloader -->
<div class="preloader">
	<div class="preloader__icon__container">
		<i class="fa fa-3x fa-refresh fa-spin"></i>
	</div>
</div>
<!-- End :: Preloader -->

<!-- Heading Image -->
<div class="heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="heading-text">
					<h1>Portfolio</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque illo aliquid, at accusantium, amet officiis qui nulla tempore. Consequatur, molestias?</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End :: Heading Image -->

<div class="container content-md portfolio__page">
	<div class="row news-v1">
		<?php $my_query = new WP_Query('category_name=portfolio-category'); ?>
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




<?php get_footer() ?>

<script>
	// Preloader
		$(function(){
			setTimeout(
				function(){
					$('.preloader').remove();
				}, 800);
		});
	// End :: Preloader
</script>