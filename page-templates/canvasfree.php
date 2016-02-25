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