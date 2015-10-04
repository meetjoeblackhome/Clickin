<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clickinconsulting
 */

?>
			<div class="footer-v1" id="footer">
				<div class="footer">
					<div class="container">
						<div class="row">
							<!-- About -->
							<div class="col-md-3 md-margin-bottom-40">
								<a href="/">
									<img id="logo-footer" class="footer-logo img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/clickin-logo-footer.png" alt="Clickin Consulting Logotype">
								</a>
							</div><!--/col-md-3-->
							<!-- End About -->

							<!-- Link List -->
							<div class="col-md-3 md-margin-bottom-40">
								<div class="headline"><h2>Useful Links</h2></div>
								<ul class="list-unstyled link-list">
									<?php wp_nav_menu( array(
										'theme_location' => '',
										'menu_class' => 'list-unstyled link-list',
										'container' => '',
										'before'          => '',
										'after'           => '<i class="fa fa-angle-right"></i>',
										) );
									?>
								</ul>
							</div><!--/col-md-3-->
							<!-- End Link List -->

							<!-- Address -->
							<div class="col-md-3 map-img md-margin-bottom-40">
								<div class="headline"><h2>Contact Us</h2></div>
								<address class="md-margin-bottom-40">
									25, Lorem Lis Street, Orange <br>
									California, US <br>
									Phone: 800 123 3456 <br>
									Fax: 800 123 3456 <br>
									Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
								</address>
							</div><!--/col-md-3-->
							<!-- End Address -->
						</div>
					</div>
				</div><!--/footer-->

				<div class="copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p>
									2015 © All Rights Reserved.
								   <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
								</p>
							</div>

							<!-- Social Links -->
							<div class="col-md-6">
								<ul class="footer-socials list-inline">
									<li>
										<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
											<i class="fa fa-skype"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
											<i class="fa fa-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
											<i class="fa fa-pinterest"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
											<i class="fa fa-dribbble"></i>
										</a>
									</li>
								</ul>
							</div>
							<!-- End Social Links -->
						</div>
					</div>
				</div><!--/copyright-->
			</div><!-- / footer -->
		</div><!-- / wrapper -->
		<?php wp_footer(); ?>
		<script>
			(function(){
				if(typeof App === "object" && App !== "undefined") {
					App.init();
				}
				if(typeof RevolutionSlider === "object" && App !== "undefined") {
					RevolutionSlider.initRSfullScreenOffset();
				}
			}());
		</script>
	</body>
</html>
