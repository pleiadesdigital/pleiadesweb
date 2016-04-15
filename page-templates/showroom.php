<?php
/**
 * Template Name: Showroom
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <?php $query = new WP_Query(); ?>
    <?php $query->the_content(); ?>

		<!-- INTRO -->
<!--			<section id="intro">-->
<!--				<div class="intro-info">-->
<!--					<h2>--><?php ////echo the_title(); ?><!--</h2>-->
<!--					<p>Fancy taking your digital marketing to the next level? You’re lucky you found us…</p>-->
<!--				</div>-->
<!--			</section>-->

<!--    NAV SERV MENU -->
    <section id="serv-menu">
      <nav class="service-nav">
        <ul>
          <li>
            <a href="#" title="none">Servicio 1</a>
          </li>
          <li>
            <a href="#" title="none">Servicio 2</a>
          </li>
          <li>
            <a href="#" title="none">Servicio 3</a>
          </li>
          <li>
            <a href="#" title="none">Servicio 4</a>
          </li>
        </ul>
      </nav><!--class="service-nav"-->
    </section><!--id="serv-menu"-->




		<!-- IMAGE -->
		<section id="image-showroom">
			<div class="<?php if (is_page("estrategia-y-consultoria")) { echo "img-str-con"; } elseif (is_page("diseno-creativo")) { echo "img-dis-cre"; } elseif (is_page("desarrollo-web")) { echo "img-des-web"; } elseif (is_page("marketing-digital")) { echo "img-mkt-dig"; } ?>">
				<div class="text-container">

					<h1><?php echo the_title(); ?></h1>
					<span></span>
					<p>Get Your Content Noticed By Those Who Matter Most</p>
				</div><!-- class="text-container" -->
			</div><!-- back-image() -->
		</section>
		<?php wp_reset_postdata(); ?>

		<!-- DESCRIPCIÓN SERVICIOS -->
		<div id="descripcion-servicio">
			
		</div>




	

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>