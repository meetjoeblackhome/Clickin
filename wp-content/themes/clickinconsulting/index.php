<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clickinconsulting
 */

get_header(); ?>

<div class="home__page">
	<!--=== Slider ===-->
	<div class="tp-banner-container">
		<div class="tp-banner">
			<ul>
				<!-- SLIDE -->
				<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
					<!-- MAIN IMAGE -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sliders/92k0uVmBAjI.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

					<!-- LAYER -->
					<div class="tp-caption re-title-v1 sft start"
						data-x="center"
						data-hoffset="0"
						data-y="100"
						data-speed="1500"
						data-start="500"
						data-easing="Back.easeInOut"
						data-endeasing="Power1.easeIn"
						data-endspeed="300">
						Clickin Consulting
					</div>
					<!-- END LAYER -->

					<!-- LAYER -->
					<div class="tp-caption sft"
						data-x="center"
						data-hoffset="0"
						data-y="320"
						data-speed="1600"
						data-start="1000"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
						<a href="about-us" class="btn-u btn-u-lg re-btn-brd margin-right-5">Read About Us</a>
						<a href="portfolio" class="btn-u btn-u-lg">Visit Our Work</a>
					</div>
					<!-- END LAYER -->
				</li>
				<!-- END SLIDE -->

				<!-- SLIDE -->
				<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
					<!-- MAIN IMAGE -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sliders/vRuj-aEE-X8.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

					<!-- LAYER -->
					<div class="tp-caption re-title-v1 sft start"
						data-x="center"
						data-hoffset="0"
						data-y="100"
						data-speed="1500"
						data-start="500"
						data-easing="Back.easeInOut"
						data-endeasing="Power1.easeIn"
						data-endspeed="300">
						Clickin Consulting
					</div>
					<!-- END LAYER -->

					<!-- LAYER -->
					<div class="tp-caption sft"
						data-x="center"
						data-hoffset="0"
						data-y="320"
						data-speed="1600"
						data-start="1000"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
						<a href="about-us" class="btn-u btn-u-lg re-btn-brd margin-right-5">Read About Us</a>
						<a href="portfolio" class="btn-u btn-u-lg">Visit Our Work</a>
					</div>
					<!-- END LAYER -->
				</li>
				<!-- END SLIDE -->
				
				<!-- SLIDE -->
				<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
					<!-- MAIN IMAGE -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sliders/0QoCf9WJOfc.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

					<!-- LAYER -->
					<div class="tp-caption re-title-v1 sft start"
						data-x="center"
						data-hoffset="0"
						data-y="100"
						data-speed="1500"
						data-start="500"
						data-easing="Back.easeInOut"
						data-endeasing="Power1.easeIn"
						data-endspeed="300">
						Clickin Consulting
					</div>
					<!-- END LAYER -->

					<!-- LAYER -->
					<div class="tp-caption sft"
						data-x="center"
						data-hoffset="0"
						data-y="320"
						data-speed="1600"
						data-start="1000"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
						<a href="about-us" class="btn-u btn-u-lg re-btn-brd margin-right-5">Read About Us</a>
						<a href="portfolio" class="btn-u btn-u-lg">Visit Our Work</a>
					</div>
					<!-- END LAYER -->
				</li>
				<!-- END SLIDE -->
			</ul>
			<div class="tp-bannertimer tp-bottom"></div>
		</div>
	</div>
	<!--=== End Slider ===-->

	<div class="container content">
		<div class="text-center margin-bottom-50">
			<h2 class="title-v2 title-center">WE ARE UNIFY AGENCY</h2>
			<p class="space-lg-hor">If you are going to use a <span class="color-green">passage of Lorem Ipsum</span>, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making <span class="color-green">this the first</span> true generator on the Internet.</p>
		</div>

		<div class="row content-boxes-v4">
			<div class="col-md-4 md-margin-bottom-40">
				<i class="pull-left fa fa-lightbulb-o"></i>
				<div class="content-boxes-in-v4">
					<h2>Creative Ideas</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					<a href="#">Learn More</a>
				</div>
			</div>
			<div class="col-md-4 md-margin-bottom-40">
				<i class="pull-left fa fa-flash"></i>
				<div class="content-boxes-in-v4">
					<h2>Excellent Features</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					<a href="#">Learn More</a>
				</div>
			</div>
			<div class="col-md-4">
				<i class="pull-left fa fa-compress"></i>
				<div class="content-boxes-in-v4">
					<h2>Fully Responsive</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					<a href="#">Learn More</a>
				</div>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>
