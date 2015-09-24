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

	<!--=== Slider ===-->
	<div class="tp-banner-container">
	    <div class="tp-banner">
	        <ul>
	            <!-- SLIDE -->
	            <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
	                <!-- MAIN IMAGE -->
	                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sliders/7.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

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
	                    Welcome To Unify
	                </div>
	                <!-- END LAYER -->

	                <!-- LAYER -->
	                <div class="tp-caption re-text-v1 sft"
	                    data-x="center"
	                    data-hoffset="0"
	                    data-y="200"
	                    data-speed="1400"
	                    data-start="2000"
	                    data-easing="Power4.easeOut"
	                    data-endspeed="300"
	                    data-endeasing="Power1.easeIn"
	                    data-captionhidden="off"
	                    style="z-index: 6">
	                    Unify is creative technology company providing key digital services on web and mobile. <br>
	                    We minimize the gap between technology and its audience.
	                </div>
	                <!-- END LAYER -->

	                <!-- LAYER -->
	                <div class="tp-caption sft"
	                    data-x="center"
	                    data-hoffset="0"
	                    data-y="320"
	                    data-speed="1600"
	                    data-start="2800"
	                    data-easing="Power4.easeOut"
	                    data-endspeed="300"
	                    data-endeasing="Power1.easeIn"
	                    data-captionhidden="off"
	                    style="z-index: 6">
	                    <a href="#" class="btn-u btn-u-lg re-btn-brd margin-right-5">Read About Us</a>
	                    <a href="#" class="btn-u btn-u-lg">Visit Our Work</a>
	                </div>
	                <!-- END LAYER -->
	            </li>
	            <!-- END SLIDE -->

	            <!-- SLIDE -->
	            <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
	                <!-- MAIN IMAGE -->
	                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sliders/9.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

	                <!-- LAYER -->
	                <div class="tp-caption re-title-v2 sft"
	                    data-x="center"
	                    data-hoffset="0"
	                    data-y="100"
	                    data-speed="1400"
	                    data-start="1000"
	                    data-easing="easeOutBack"
	                    data-endspeed="300"
	                    data-endeasing="easeInQuad"
	                    data-captionhidden="off"
	                    style="z-index: 6">
	                    We're Creative Team
	                </div>

	                <!-- LAYER -->
	                <div class="tp-caption re-text-v1 sft"
	                    data-x="center"
	                    data-hoffset="0"
	                    data-y="150"
	                    data-speed="1600"
	                    data-start="2000"
	                    data-easing="Power4.easeOut"
	                    data-endspeed="300"
	                    data-endeasing="Power1.easeIn"
	                    data-captionhidden="off"
	                    style="z-index: 6">
	                    Unify provides key digital services on web and mobile.
	                </div>

	                <!-- LAYER -->
	                <div class="tp-caption sfb"
	                    data-x="center"
	                    data-hoffset="0"
	                    data-y="230"
	                    data-speed="1800"
	                    data-start="3000"
	                    data-easing="Power4.easeOut"
	                    data-endspeed="300"
	                    data-endeasing="Power1.easeIn"
	                    data-captionhidden="off"
	                    style="z-index: 6">

	                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mockup/white-ipad.png" alt="">
	                </div>
	            </li>
	            <!-- END SLIDE -->

	            <!-- SLIDE -->
	            <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 3">
	                <!-- MAIN IMAGE -->
	                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sliders/8.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

	                <div class="tp-caption re-title-v2 sft start"
	                    data-x="20"
	                    data-hoffset="0"
	                    data-y="150"
	                    data-speed="1500"
	                    data-start="500"
	                    data-easing="Back.easeInOut"
	                    data-endeasing="Power1.easeIn"
	                    data-endspeed="300">
	                    Welcome To Unify
	                </div>

	                <div class="tp-caption re-text-v2 sft start"
	                    data-x="20"
	                    data-hoffset="0"
	                    data-y="220"
	                    data-speed="2000"
	                    data-start="1000"
	                    data-easing="Back.easeInOut"
	                    data-endeasing="Power1.easeIn"
	                    data-endspeed="300">
	                    Unify is creative technology company providing <br>
	                    We minimize the gap between technology and its.
	                </div>

	                <!-- LAYER -->
	                <div class="tp-caption sft"
	                    data-x="20"
	                    data-hoffset="0"
	                    data-y="320"
	                    data-speed="1600"
	                    data-start="2800"
	                    data-easing="Power4.easeOut"
	                    data-endspeed="300"
	                    data-endeasing="Power1.easeIn"
	                    data-captionhidden="off"
	                    style="z-index: 6">
	                    <a href="#" class="btn-u btn-u-lg re-btn-brd margin-right-5">Read About Us</a>
	                    <a href="#" class="btn-u btn-u-lg">Visit Our Work</a>
	                </div>
	            </li>
	            <!-- END SLIDE -->
	        </ul>
	        <div class="tp-bannertimer tp-bottom"></div>
	    </div>
	</div>
	<!--=== End Slider ===-->

	<div class="container content-sm">
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



<?php get_footer(); ?>
