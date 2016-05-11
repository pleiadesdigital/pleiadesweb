<?php
/**
 * Template Name: Canvas Free
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


<!-- 	LA EMPRESA -->
<?php if (is_page('la-empresa')) { ?>
		<?php the_post(); ?>
		<div id="la-empresa" class="clearfix">

			<!-- Page title -->
			<?php //the_title("<h2>", "</h2>", true); ?>

			<!-- INTRO -->
			<article class="intro">
				<div class="intro-info">
					<article class="content-center">
						<p><?php echo get_post_meta($post->ID, 'intro_text', true); ?></p>
					</article> <!-- .content-center -->
				</div><!-- class="intro-info" -->
			</article><!-- class="intro" -->

			<!-- ABOUT -->
			<section class="about">
				<section class="about-info">
					<div class="about-content">
						<h2>¿Por qué trabajar con nosotros?</h2>
						<div class="about-image">
							<img src="http://pleiadesdigital.com/wp-content/themes/pleiadesweb/images/empresa/la-empresa-pleiades-digital.jpg" alt="Servicios de Marketing de vanguardia">
						</div>
						<div class="txt-content">
							<?php $query = new WP_Query(); ?>
							<?php $query->the_post(); ?>
							<?php the_content(); ?>
						</div><!-- class="txt-content"-->
					</div><!-- class="about-content" -->
				</section><!-- class="about-info" -->
			</section>

			<!-- CTA -->
			<section class="cta">
				<div class="cta-info">
					<h3>Las mejores herramientas profesionales<br> para tu empresa</h3>
					<p>Solicita más información o una cotización</p>
					<div class="cta-button">
						<a href="http://pleiadesdigital.com/contacto/">Contáctanos</a>
					</div> <!-- .cta-button -->
				</div>
			</section>

			<!-- EXTRA -->
			<!--<section class="extra">
				<div class="extra-info">
					<?php /*//$query = new WP_Query(); */?>
					<?php /*//$query->the_post(); */?>
					<?php /*//the_content(); */?>
					</article>
				</div>
			</section>-->
      <?php wp_reset_query(); ?>
		</div><!-- id="la-empresa" -->

<!-- 	SERVICIOS -->
<?php } elseif (is_page('servicios')) { ?>
		<div id="servicios">

			<!-- INTRO -->
			<section class="intro">
        <?php //$query = new WP_Query(); ?>
        <?php the_post(); ?>
				<div class="intro-info">	
					<h2><?php echo get_post_meta($post->ID, 'intro_text', true); ?></h2>
          <?php the_content(); ?>
				</div>
        <?php wp_reset_postdata(); ?>
			</section>

			<!-- SERV DESCRIPTION -->
			<section class="serv-desc">
        <?php
          $query = new WP_Query('pagename=servicios');
          $servicios_id = $query->queried_object->ID;
        ?>

        <?php
          $args = array(
            'post_type'         => 'page',
            'post_parent'       => $servicios_id,
            'post_per_parent'   => 4,
            'post_status'       => 'publish',
            'orderby'           => 'menu_order',
            'order'             => ASC
          );
        ?>

				<div class="serv-desc-info">
					<div class="boxes">
						<ul>
            <?php
              $servicios_query = new WP_Query($args);
              if ($servicios_query->have_posts()) {
                while ($servicios_query->have_posts()) {
                  $servicios_query->the_post();
                ?>

                  <li>
                    <a href="<?php the_permalink(); ?>">

                      <div class="box">
                        <article>
                          <h2><?php the_title(); ?></h2>
                        </article>
                      </div>
                    </a>
                  </li>

                <?php
                } //endwhile
              } //endif
              wp_reset_postdata();
            ?>

						</ul>
				</div><!--class="boxes"-->

					
				</div><!-- class="serv-desc-info" -->
			</section><!-- class="serv-desc" -->

			<!-- CTA -->
			<article class="cta">
				<div class="cta-info">
					<h3>Las mejores herramientas profesionales<br> para tu empresa</h3>
					<!-- CTA-button -->
					<div class="cta-services">
						<a href="http://pleiadesdigital.com/contacto/">Contáctanos</a>
					</div>
				</div>
			</article>

			
		</div><!-- id="servicios" -->

<!-- 	PREGUNTAS FRECUENTES -->
<?php } elseif (is_page('preguntas-frecuentes')) { ?>
		<?php the_post(); ?>
		<div id="preguntas-frecuentes">

			<!-- Page title -->
			<?php the_title("<h2>", "</h2>", true); ?>



		</div><!-- id="preguntas-frecuentes" -->

<!-- 	CONTACTO -->
<?php } elseif (is_page('contacto')) { ?>
		<?php the_post(); ?>
		<div id="contact-main">

			<!-- Page title -->
			<?php the_title("<h2>", "</h2>", true); ?>

			<!-- ADDRESS -->
			<div id="contact-info">
				<div class="contact-address">
					<h3>Dirección</h3>
					<p>Av. Jose Maria Aguirre Achá</p>
					<p>Esq. calle 7, Los Pinos</p>
					<p>La Paz - Bolivia</p>
					<br />
					<h3>Teléfono / Email</h3>
					<p>Telf: +591-2-2792197</p>
					<p>Móvil: +591-77799006</p>
					<p>Correo Electrónico: <a href="mailto:info@pleiadesdigital.com" target="_top">info@pleiadesdigital.com</a></p>
				</div><!-- .contact-address -->
			</div><!-- #contact-info -->

			<!-- FORM -->
			<div class="contact-form">
				<?php the_content(); ?>
			</div><!--class="contact-form"-->

			<!-- Map -->
			<div id="contact-map">
				<div id="map-canvas"></div>
			</div><!-- id=contact-map -->

		</div><!-- id="contact-main" -->
<?php } ?>


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>












