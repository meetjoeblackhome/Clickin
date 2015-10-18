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
							<div class="col-md-3 col-md-offset-1">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo-link">
									<img id="logo-footer" class="footer-logo img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/clickin-logo-footer.png" alt="Clickin Consulting Logotype">
								</a>
							</div><!--/col-md-4-->

							<!-- Link List -->
							<div class="col-md-3">
								<div class="headline"><h2>Menu</h2></div>
								<?php wp_nav_menu( array(
									'theme_location' => '',
									'menu_class' => 'list-unstyled link-list',
									'container' => '',
									'before'          => '',
									'after'           => '<i class="fa fa-angle-right"></i>',
									) );
								?>
							</div><!--/col-md-4-->
							<!-- End Link List -->
							<!-- Address -->
							<div class="col-md-4 col-md-offset-1 map-img">
								<?php 
								function get_id_by_slug($page_slug) {
								    $page = get_page_by_path($page_slug);
								    if ($page) {
								        return $page->ID;
								    } else {
								        return null;
								    }
								}
								$slug = get_id_by_slug('contact_us');
								?>
								<div class="headline"><h2>Contact Us</h2></div>
								<address>
									<? if(get_field('sidebar_address', $slug, true) !== "") { ?>
										<div>
											<a href="#">
												<i class="fa fa-home"></i>
													<?php echo get_field('sidebar_address', $slug, true);?>
											</a>
										</div>
									<?php } ?>

									<? if(get_field('sidebar_email') !== "") { ?>
										<div>
											<a href="#">
												<i class="fa fa-envelope"></i>
													<?php echo get_field('sidebar_email', $slug, true);?>
											</a>
										</div>
									<?php } ?>

									<? if(get_field('sidebar_phone') !== "") { ?>
										<div>
											<a href="#">
												<i class="fa fa-phone"></i>
													<?php echo get_field('sidebar_phone', $slug, true);?>
											</a>
										</div>
									<?php } ?>

									<? if(get_field('sidebar_site') !== "") { ?>
										<div>
											<a href="#">
												<i class="fa fa-globe"></i>
													<?php echo get_field('sidebar_site', $slug, true);?>
											</a>
										</div>
									<?php } ?>
								</address>
							</div><!--/col-md-4-->
							<!-- End Address -->
						</div>
					</div>
				</div><!--/footer-->

				<div class="copyright">
					<div class="container">
						<div class="row">
							<!-- Social Links -->
							<div class="col-md-12">
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
