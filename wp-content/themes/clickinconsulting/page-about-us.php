<?php
/**
 * Template Name: About Us
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

	<div class="container content-sm">
		<div class="headline-center margin-bottom-60">
			<h2>
				<?php echo get_field("about_us_heading"); ?>
			</h2>
			<?php if(get_field('about_us_sub_heading') !== "") { ?>
				<div>
					<?php echo get_field('about_us_sub_heading');?>
				</div>
			<?php } ?>
		</div>

		<?php 
			// Add Attachment Image
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
			$thumb_url = $thumb_url_array[0];
		?>

		<div class="row">
			<div class="col-md-6 md-margin-bottom-50">
				<img class="img-responsive" src="<?php echo $thumb_url ?>">
			</div>
			<div class="col-md-6">
				<p>Phasellus feugiat elit quam, nec tincidunt leo imperdiet nec. Aliquam et orci orci. In finibus lorem eget sapien mollis finibus. Cras ultrices mollis justo.</p><br>
				<div class="row">
					<ul class="col-xs-6 list-unstyled lists-v1">
						<li><i class="fa fa-angle-right"></i>Curabitur porttitor sapien</li>
						<li><i class="fa fa-angle-right"></i>Donec vitae quam neque</li>
						<li><i class="fa fa-angle-right"></i>Cum sociis natoque</li>
						<li><i class="fa fa-angle-right"></i>Aliquam et orci orci</li>
					</ul>
					<ul class="col-xs-6 list-unstyled lists-v1">
						<li><i class="fa fa-angle-right"></i>Curabitur porttitor sapien</li>
						<li><i class="fa fa-angle-right"></i>Donec vitae quam neque</li>
						<li><i class="fa fa-angle-right"></i>Cum sociis natoque</li>
						<li><i class="fa fa-angle-right"></i>Aliquam et orci orci</li>
					</ul>
				</div>
			</div>
		</div><!--/end row-->
	</div>

<?php get_footer() ?>
