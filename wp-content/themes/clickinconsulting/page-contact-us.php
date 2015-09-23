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
<!-- Interactive Slider v2 -->
<div class="interactive-slider-v2">
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
<!-- End Interactive Slider v2 -->
<div class="container content">
		<div class="row margin-bottom-30">
			<div class="col-md-9 mb-margin-bottom-30">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<?php echo do_shortcode('[contact-form-7 id="54" title="Contact Us Form"]'); ?>
					</div>
				</div>
			</div><!--/col-md-9-->

			<div class="col-md-3">
				<!-- Contacts -->
				<div class="headline"><h2>Contacts</h2></div>
				<ul class="list-unstyled who margin-bottom-30">

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
				<!-- Business Hours -->
				<div class="headline"><h2>Business Hours</h2></div>
				<ul class="list-unstyled margin-bottom-30">
					<li><strong>Monday-Friday:</strong> 10am to 8pm</li>
					<li><strong>Saturday:</strong> 11am to 3pm</li>
					<li><strong>Sunday:</strong> Closed</li>
				</ul>
				<!-- Why we are? -->
				<div class="headline"><h2>Why we are?</h2></div>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
				<ul class="list-unstyled">
					<li><i class="fa fa-check color-green"></i> Odio dignissimos ducimus</li>
					<li><i class="fa fa-check color-green"></i> Blanditiis praesentium volup</li>
					<li><i class="fa fa-check color-green"></i> Eos et accusamus</li>
				</ul>
			</div><!--/col-md-3-->
		</div><!--/row-->
	</div>



<?php get_footer() ?>
