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

<style>
	.preloader {
		position: absolute;
		width: 100%;
		height: 100%;
		background: #fff;
		top: 0;
		left: 0;
		z-index: 9999;
		text-align: center;
	}
	.preloader .preloader__icon__container {
		position: absolute;
		top: 250px;
		left: 0;
		width: 100%;
		height: 100%;
		overflow: hidden;
	}
	.preloader .preloader__icon__container .fa {
		color: #ccc;
	}
	#portfolio {
		overflow: hidden;
		margin-top: 100px;
		position: relative;
	}
	#portfolio .col-md-4  {
		margin-bottom: 40px;
	}
	#portfolio .portfolio__item {
		background: #fafafa;
		height: 100%;
		box-shadow: 2px 2px 4px rgba(0,0,0,.15);
	}
	.news-v1 .news-v1-in {
		background: none;
	}
</style>

<div class="container content-md" id="portfolio">
	<div class="preloader">
			<div class="preloader__icon__container">
				<i class="fa fa-3x fa-refresh fa-spin"></i>
			</div>
	</div>
	<div class="row news-v1">
		<?php $my_query = new WP_Query('category_name=portfolio-category'); ?>
		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<?php 
				$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				$thumb_url = $thumb_url_array[0];
			?>
			<div class="col-md-4 md-margin-bottom-40" data-mh="portfolio__item">
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
	$(function(){
		setTimeout(
			function(){
				$('.preloader').remove();
			}, 800);
	});
</script>
