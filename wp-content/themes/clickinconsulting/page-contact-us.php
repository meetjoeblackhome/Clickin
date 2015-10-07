<?php
/**
 * Template Name: Contact Us
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
<!-- Contact Us Page -->
<div class="contact-us__page">

	<!-- Breadcrumbs -->
	<div class="breadcrumbs-v3 img-v3 text-center">
		<div class="container">
			<?php if(get_field('contact_us_title') !== "") { ?>
				<h1>
					<?php echo get_field('contact_us_title');?>
				</h1>
			<?php } ?>
			<?php if(get_field('contact_us_sub_title') !== "") { ?>
				<p>
					<?php echo get_field('contact_us_sub_title');?>
				</p>
			<?php } ?>
		</div>
	</div>
	<!-- End :: Breadcrumbs -->

	<div class="container content">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-xs-12 col-sm-11">
							<?php echo do_shortcode('[contact-form-7 id="47" title="Contact Us Form"]'); ?>
						</div>
					</div>
				</div><!--/col-md-9-->

				<div class="col-md-3">
					<!-- Contacts -->
					<div class="headline"><h2>Contacts</h2></div>
					<ul class="list-unstyled who">

						<? if(get_field('sidebar_address') !== "") { ?>
							<li>
								<a href="#">
									<i class="fa fa-home"></i>
										<?php echo get_field('sidebar_address');?>
								</a>
							</li>
						<?php } ?>

						<? if(get_field('sidebar_email') !== "") { ?>
							<li>
								<a href="#">
									<i class="fa fa-envelope"></i>
										<?php echo get_field('sidebar_email');?>
								</a>
							</li>
						<?php } ?>

						<? if(get_field('sidebar_phone') !== "") { ?>
							<li>
								<a href="#">
									<i class="fa fa-phone"></i>
										<?php echo get_field('sidebar_phone');?>
								</a>
							</li>
						<?php } ?>

						<? if(get_field('sidebar_site') !== "") { ?>
							<li>
								<a href="#">
									<i class="fa fa-globe"></i>
										<?php echo get_field('sidebar_site');?>
								</a>
							</li>
						<?php } ?>

					</ul>
				</div><!--/col-md-3-->
			</div><!--/row-->
	</div><!-- End :: Contact Us Page -->
</div>

<?php get_footer() ?>
