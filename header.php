<?php
/**
 * The header template file
 *
 * @package WPlook
 * @subpackage Morning Time Lite
 * @since Morning Time Lite 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php wp_head(); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!--
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
-->
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
	<header class="header">
		<div class="row">
			<div class="columns medium-12">
				<nav class="top-bar" data-topbar role="navigation">
					<ul class="title-area">
						<li class="name">
							<?php if ( get_theme_mod('wplook_logo') ){ ?>
								<h1 id="site-title">
									<a class="logo-img" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo('description'); ?>" rel="home">
										<img src="<?php echo get_theme_mod('wplook_logo') ?>">
									</a>
									<small><?php bloginfo('description'); ?></small>
								</h1>
							<?php } else { ?>
								<h1 id="site-title">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo('description'); ?>" rel="home"> <?php bloginfo('name'); ?> </a>
									<small><?php bloginfo('description'); ?></small>
								</h1>
							<?php } ?>
						</li>

						<li class="toggle-topbar menu-icon">
							<a href="#"><i class="fa fa-bars"></i></a>
							<span class="toggle-area"></span>
						</li>
					</ul>

					<section class="top-bar-section">

						<?php if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'container' => false,
								'container_class' => '',
								'container_id' => '',
								'menu_class' => 'right',
								'menu_id' => '',
								'walker' => new morning_time_lite_Page_Navigation_Walker(),
								'depth' => '4'
								)
							);
						} ?>

					</section>

					<div class="socials right">
						<?php wp_nav_menu(array(
							'container' => false,                           // remove nav container
							'container_class' => 'social',                 // class of container (should you choose to use it)
							'menu' => __( 'Secondary Navigation', 'morningtime-lite' ), // nav name
							'menu_class' => '',               // adding custom nav class
							'theme_location' => 'social',                  // where it's located in the theme
							'before' => '',                                 // before the menu
		    				'after' => '',                                  // after the menu
		    				'link_before' => '',                            // before each link
		    				'link_after' => '',                             // after each link
		    				'depth' => 0,                                   // limit the depth of the nav
							'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>
					</div><!-- /.socials right -->
				</nav>
			</div><!-- /.columns medium-12 -->
		</div><!-- /.row -->
	</header><!-- /.header -->

	<?php if ( is_front_page()  ){
		get_template_part( 'inc', 'slider' );
	}  ?>
