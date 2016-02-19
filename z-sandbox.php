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
			</div><!-- .top-header-wrapper -->