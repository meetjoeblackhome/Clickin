<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clickinconsulting
 */
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-152x152.png" />
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-180x180.png" />
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/android-icon-192x192.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-32x32.png" />
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-96x96.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-16x16.png" />
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/manifest.json" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" />
		<meta name="msapplication-TileColor" content="#ffffff" />
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/ms-icon-144x144.png" />
		<meta name="theme-color" content="#ffffff" />
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="msapplication-tap-highlight" content="no"/>
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
								<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
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

