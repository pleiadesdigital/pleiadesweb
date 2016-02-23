<?php
/**
 * Template Name: Canvas Free
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


<!-- 	CONTACTO -->

<?php if (is_page('contacto')) { ?>
		<?php the_post(); ?>
		<div id="contact-main" class="clearfix">

			<!-- Page title -->
			<?php the_title("<h2>", "</h2>", true); ?>
			<!-- Map -->
			<div id="contact-map">
				<div id="map-canvas"></div>
			</div><!-- id=contact-map -->

			<!-- ADDRESS -->
			<div id="contact-address">
				<h3>Información de Contacto</h3>
				<p>Edif. Torre Ketal, oficina #302</p>
				<p>Calle 15, Calacoto</p>
				<p>La Paz - Bolivia</p>
				<br />
				<p>Telf: +591-77799006</p>
				<p>Correo Electrónico: <a href="mailto:info@pleiadesdigital.com" target="_top">info@pleiadesdigital.com</a></p>
			</div>

			<!-- FORM -->
			<div id="contact-form">
				<?php the_content(); ?>
			</div>

		</div><!-- id="contact-main" -->
	<?php } ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>