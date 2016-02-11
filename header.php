<?php
/*
SITE HEADER
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<meta name="viewport" content="user-scalable = yes">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<!-- 	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pleiadesweb' ); ?></a> -->

	<header id="masthead" class="site-header" role="banner">
		<div class="fullheight">
			<div class="top-header-wrapper">
				<section class="top-header">
					<div class="site-branding">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/misc/logo-pleiades-digital.png" alt="Pleiades Digital - Online Marketing Agency"></a>
					</div><!-- class="site-branding" -->

					<div class="main-menu-wrap">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<h1 class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e('<i class="fa fa-align-justify"></i>', 'pleiadesweb'); ?></h1>
							<!-- MAIN MENU -->
								<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
						</nav><!-- #site-navigation -->
					</div><!-- class="menutemp" -->
				</section><!-- class="top-header" -->
			</div>
			<div class="hgroup">
				<h1 class="site-title">Pleiades digital</h1>
				<h2>agencia de marketing a tu medida</h2>
				<p><a href="#welcome"><img src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/icons/arrow.png" alt="down arrow"></a></p>
			</div>

		</div><!-- id="header-wrapper" class="fullheight" -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
















