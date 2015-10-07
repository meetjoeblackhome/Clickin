<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clickinconsulting
 */
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body class="header-fixed">
		<div class="wrapper">
			<div class="header-v6 header-classic-white header-sticky">
				<div class="navbar mega-menu" role="navigation">
					<div class="container container-space">
						<div class="menu-container">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>


							<div class="navbar-brand">
								<a class="logo" href="<?php get_home_url(); ?>">
									<img class="shrink-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clickin-logo.png" alt="Logo">
								</a>
							</div>


						</div>


						<div class="collapse navbar-collapse navbar-responsive-collapse">
							<div class="menu-container">
								<?php wp_nav_menu( array(
									'theme_location' => '',
									'menu_class' => 'nav navbar-nav',
									'container' => '',
									'before'          => '',
									'after'           => '',
									) );
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="preloader">
				<div class="preloader__icon__container">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>

