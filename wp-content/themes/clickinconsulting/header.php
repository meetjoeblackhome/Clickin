<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
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
			<!--=== Header ===-->
			<div class="header">
			    <div class="container">
			        <!-- Logo -->
			        <a class="logo" href="<?php get_home_url(); ?>">
			            <img style="padding-top: 10px;" width="120px" height="auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/clickin-logo.png" alt="Logo">
			        </a>
			        <!-- End Logo -->
			        <!-- Toggle get grouped for better mobile display -->
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="fa fa-bars"></span>
			        </button>
			        <!-- End Toggle -->
			    </div><!--/end container-->
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
			        <div class="container">
			            <?php wp_nav_menu( array(
			                'theme_location' => '',
			                'menu_class' => 'nav navbar-nav',
			                'container' => '',
			                'before'          => '',
			                'after'           => '',
			                ) );
			            ?>
			        </div><!--/end container-->
			    </div><!--/navbar-collapse-->
			</div>
			<!--=== End Header ===-->