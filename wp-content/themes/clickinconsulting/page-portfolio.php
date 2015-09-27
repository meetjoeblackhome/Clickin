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
		position: fixed;
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
		top: 45%;
		left: 0;
		width: 100%;
		height: 100%;
		overflow: hidden;
	}
	.preloader .preloader__icon__container .fa {
		color: #ccc;
	}
	.heading {
		background: url('http://cs622331.vk.me/v622331273/45053/FHFnahfYGkE.jpg') no-repeat;
		background-size: 100% auto;
		background-position: left 5%;
		overflow: hidden;
		height: 300px;
		margin-top: 100px;
		margin-bottom: 20px;
		position: relative;
	}
	.heading:before {
		content: '';
		position: absolute;
		width: 100%;
		height: 100%;
		background: rgba(255,255,255,.75);
		top: 0;
		left: 0;
	}
	.heading-text {
		margin-top: 40px;
		padding: 40px;
	}
	.heading-text h1 {
		color: #333;
		font-size: 36px;
	}
	.heading-text p {
		color: #333;
		font-size: 16px;
	}
	#portfolio {
		overflow: hidden;
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

<div class="container content-md" id="portfolio">

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
	// Preloader
		$(function(){
			setTimeout(
				function(){
					$('.preloader').remove();
				}, 800);
		});
	// End :: Preloader
</script>