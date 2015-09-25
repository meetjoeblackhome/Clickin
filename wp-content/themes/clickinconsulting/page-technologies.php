<?php
/**
 * Template Name: Technologies
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
	#technologies {
		margin-top: 100px;
	}
	.post {
		border-bottom: 1px solid #eee;
		border-top: ;
		padding-bottom: 10px;
	}
	.post:last-child {
		border-bottom: none;
	}
	.post .post-image {
		max-width: 100px;
		margin: 0 auto;
	}
	.post .tags .tag {
		background: #fafafa;
		border-radius: 2px;
		margin-right: 10px;
		font-weight: bold;
		padding: 8px 12px;
	}
	.post .tags .tag:last-child {
		margin-right: 0;
	}
</style>
<!--=== Content Part ===-->
<div class="container content" id="technologies">
	<div class="row">
		<div class="col-md-12">
			<div class="headline">
				<h2>Technologies</h2>
			</div>
			
			<?php $my_query = new WP_Query('category_name=technologies-category'); ?>
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
						<?php
							// Tags
							$posttags = get_the_tags();
							if($posttags !== "undefined") { ?>
								<ul class="list-inline tags">
									<?php
										if ($posttags) {
											foreach($posttags as $tag) {
												echo "<li class='tag'>{$tag->name }</li>"; 
											}
										}
									?>
									<!-- <li><i class="fa fa-map-marker color-green"></i> USA</li>
									<li><i class="fa fa-globe color-green"></i> <a class="linked" href="#">http://www.example.com</a></li>
									<li><i class="fa fa-briefcase color-green"></i> Web Design &amp; Development</li> -->
								</ul>
							<?php } ?>
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

<?php get_footer() ?>
