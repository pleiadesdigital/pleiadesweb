<?php
/**
 * Template Name: Showroom
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <?php $query = new WP_Query(); ?>
    <?php $query->the_content(); ?>


<!--    NAV SERVICES MENU -->
    <section id="serv-menu">
      <nav class="service-nav">

        <?php wp_nav_menu(array('theme_location' => 'services', 'menu_id' => 'services-menu')); ?>
      </nav><!--class="service-nav"-->
    </section><!--id="serv-menu"-->

		<!-- IMAGE -->
		<section id="image-showroom">
			<div class="<?php if (is_page("estrategia-y-consultoria")) { echo "img-str-con"; } elseif (is_page("diseno-creativo")) { echo "img-dis-cre"; } elseif (is_page("desarrollo-web")) { echo "img-des-web"; } elseif (is_page("internet-marketing")) { echo "img-int-mkt"; } ?>">
				<div class="text-container">

					<h1><?php echo the_title(); ?></h1>
					<span></span>
					<p><?php echo get_post_meta($post->ID, 'intro_text', true); ?></p>
				</div><!-- class="text-container" -->
			</div><!-- back-image() -->
		</section>
		<?php wp_reset_postdata(); ?>

    <!-- POR QUE CONFIAR EN NOSOTROS -->
    <div id="why-trust-wrap">
      <div class="why-trust-content">
        <h2>¿Por qué confiar en nosotros?</h2>
        <p><?php echo get_post_meta($post->ID, 'porque-nos', true); ?></p>

      </div><!--class="desc-serv-wrap"-->

    </div><!--id="descripcion-servicio"-->

		<!-- DESCRIPCIÓN SERVICIOS -->
		<div id="descripcion-servicio">
      <div class="desc-serv-wrap">

        <?php the_content(); ?>

      </div><!--class="desc-serv-wrap"-->

		</div><!--id="descripcion-servicio"-->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>