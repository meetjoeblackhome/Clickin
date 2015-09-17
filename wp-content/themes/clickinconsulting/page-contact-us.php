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
        <h1>
        	<?php echo get_field('contact_us_title');?>
        </h1>
        <p><?php echo get_field('contact_us_sub_title');?></p>
    </div>
</div>
<!-- End Interactive Slider v2 -->


<div class="container content">
		<div class="row">
			
		</div>
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
                <form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style" novalidate="novalidate">
                    <fieldset class="no-padding">
                        <label>Name <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <label>Email <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>

                        <label>Message <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-11 col-md-offset-0">
                                <div>
                                    <textarea rows="8" name="message" id="message" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <p><button type="submit" class="btn-u">Send Message</button></p>
                    </fieldset>

                    <div class="message">
                        <i class="rounded-x fa fa-check"></i>
                        <p>Your message was successfully sent!</p>
                    </div>
                </form>
            </div><!--/col-md-9-->

            <div class="col-md-3">
                <!-- Contacts -->
                <div class="headline"><h2>Contacts</h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="#"><i class="fa fa-home"></i>5B Streat, City 50987 New Town US</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>info@example.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>1(222) 5x86 x97x</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>http://www.example.com</a></li>
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
