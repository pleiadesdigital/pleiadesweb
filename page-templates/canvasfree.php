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
			<?php the_title("<h2>", "</h2>", true); ?>




			

		</div><!-- id="la-empresa" -->
	<?php } ?>


<!-- 	SERVICIOS -->
<?php if (is_page('servicios')) { ?>
		<?php the_post(); ?>
		<div id="servicios">

			<!-- Page title -->
			<?php the_title("<h2>", "</h2>", true); ?>

			<article class="intro">
				<div class="intro-info">
					<div class="content-center">
						<img src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/misc/servicios-intro.jpg" alt="Servicios de Marketing de vanguardia">
						<article class="txt-content">
							<?php $query = new WP_Query(); ?>
							<?php $query->the_post(); ?>
							<?php the_content(); ?>
						</article>
					</div> <!-- .content-center -->
				</div>
			</article>
			<article class="cta">
				<div class="cta-info">
					<h3>Las mejores herramientas profesionales<br> para tu empresa</h3>				
					<div class="cta-button">
						<a href="#" class="cta-info">Contáctanos</a>
					</div> <!-- .cta-button -->
				</div>
			</article>			
			<article class="services">
				<div class="services-info"></div>
			</article>
			
			<article class="extra">
				<div class="extra-info"></div>
			</article>


			

		</div><!-- id="servicios" -->
	<?php } ?>


<!-- 	PREGUNTAS FRECUENTES -->
<?php if (is_page('preguntas-frecuentes')) { ?>
		<?php the_post(); ?>
		<div id="preguntas-frecuentes">

			<!-- Page title -->
			<?php the_title("<h2>", "</h2>", true); ?>



		</div><!-- id="preguntas-frecuentes" -->
	<?php } ?>


<!-- 	CONTACTO -->
<?php if (is_page('contacto')) { ?>
		<?php the_post(); ?>
		<div id="contact-main">

			<!-- Page title -->
			<?php the_title("<h2>", "</h2>", true); ?>

			<!-- ADDRESS -->
			<div id="contact-info">
				<div class="contact-address">
					<h3>Dirección</h3>
					<p>Edif. Torre Ketal, oficina #302</p>
					<p>Calle 15, Calacoto</p>
					<p>La Paz - Bolivia</p>
					<br />
					<h3>Teléfono / Email</h3>
					<p>Telf: +591-77799006</p>
					<p>Correo Electrónico: <a href="mailto:info@pleiadesdigital.com" target="_top">info@pleiadesdigital.com</a></p>
				</div><!-- .contact-address -->
			</div><!-- #contact-info -->
			
			<!-- Map -->
			<div id="contact-map">
				<div id="map-canvas"></div>
			</div><!-- id=contact-map -->

			<!-- FORM -->
			<div class="contact-form">
				<?php the_content(); ?>
			</div>

		</div><!-- id="contact-main" -->
	<?php } ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>