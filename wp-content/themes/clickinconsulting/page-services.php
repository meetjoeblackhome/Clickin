<?php
/**
 * Template Name: Services
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clickinconsulting
 */
get_header();
?>

<!-- Services -->
<div class="services__page">
	<!-- Breadcrumbs -->
	<div class="breadcrumbs-v3 img-v3 text-center">
		<div class="container">
			<h1>Our Services</h1>
			<p>Creative Freedom Matters User Experience</p>
		</div>
	</div>
	<!-- End :: Breadcrumbs -->
	<!-- Featured Blog -->
	<div class="container content">
		<div class="row featured-blog">

			<?php $my_query = new WP_Query('category_name=services_category'); ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<?php 
					$thumb_id = get_post_thumbnail_id();
					$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
					$thumb_url = $thumb_url_array[0];
				?>
				<div class="col-sm-4 sm-margin-bottom-50">
					<div class="featured-img">
						<img class="img-responsive margin-bottom-20" src="<?php echo $thumb_url; ?>" alt="">
					</div>
					<h2 class="color-dark"><?php the_title(); ?></h2>
					<div class="featured-content">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; ?>


		</div>
	</div>
	<!-- End :: Featured Blog -->
	<!-- Services -->
	<div class="bg-color-light">
		<div class="container content-sm">
			<div class="headline-center margin-bottom-60">
				<h2>OUR FEATURES</h2>
				<p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante. <br>
				Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla </p>
			</div>

			<!-- Service Block v8 -->
			<div class="row margin-bottom-30">
				<div class="col-sm-6 sm-margin-bottom-50">
					<div class="service-block-v8">
						<i class="icon-rocket"></i>
						<div class="service-block-desc">
							<h3>Creative Ideas</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 sm-margin-bottom-20">
					<div class="service-block-v8">
						<i class="icon-bubbles"></i>
						<div class="service-block-desc">
							<h3>Dedicated Support</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Service Block v8 -->

			<!-- Service Block v8 -->
			<div class="row margin-bottom-30">
				<div class="col-sm-6 sm-margin-bottom-50">
					<div class="service-block-v8">
						<i class="icon-star"></i>
						<div class="service-block-desc">
							<h3>Free Updates</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 sm-margin-bottom-20">
					<div class="service-block-v8">
						<i class="icon-settings"></i>
						<div class="service-block-desc">
							<h3>CSS3 + HTML5</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Service Block v8 -->
		</div>
	</div>
	<!-- End :: Services -->
</div>
<!-- End :: Services Page -->

<?php get_footer() ?>



