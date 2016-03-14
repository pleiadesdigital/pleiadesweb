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

			<!-- INTRO -->
			<article class="intro">
				<div class="intro-info">
					<article class="content-center">
						<?php echo get_post_meta($post->ID, 'intro_text', true); ?>
					</article> <!-- .content-center -->
				</div><!-- class="intro-info" -->
			</article><!-- class="intro" -->

			<!-- CTA -->
			<section class="cta">
				<div class="cta-info">
					<h3>Las mejores herramientas profesionales<br> para tu empresa</h3>				
					<div class="cta-button">
						<a href="#">Contáctanos</a>
					</div> <!-- .cta-button -->
				</div>
			</section>

			<!-- ABOUT -->
			<section class="about">
				<section class="about-info">
					<div class="about-content">
						<h2>¿Por qué trabajar con nosotros?</h2>
						<div class="about-image">
							<img src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/empresa/la-empresa-pleiades-digital.jpg" alt="Servicios de Marketing de vanguardia">
						</div>
						<div class="txt-content">
							<?php $query = new WP_Query(); ?>
							<?php $query->the_post(); ?>
							<?php the_content(); ?>
						</div><!-- class="txt-content" -->
					</div><!-- class="about-content" -->
				</section><!-- class="about-info" -->
			</section>

			<!-- EXTRA -->
			<section class="extra">
				<div class="extra-info">
					<?php //$query = new WP_Query(); ?>
					<?php //$query->the_post(); ?>
					<?php //the_content(); ?>
					</article>
				</div>
			</section>

		</div><!-- id="la-empresa" -->

<!-- 	SERVICIOS -->
<?php } elseif (is_page('servicios')) { ?>
		<?php the_post(); ?>
		<div id="servicios">

			<!-- Page title -->
			<?php //the_title("<h2>", "</h2>", true); ?>

			<!-- INTRO -->
			<section class="intro">
				<div class="intro-info">	
					<h2>Digital Marketing Services</h2>
					<p>Fancy taking your digital marketing to the next level? You’re lucky you found us…</p>
				</div>
			</section>

			<!-- SERV DESCRIPTION -->
			<section class="serv-desc">
				<div class="serv-desc-info">
					<div class="boxes">
						<ul>

							<li>
								<div class="box">
									<article>
										DESARROLLO WEB MARKETING&nbsp;EN&nbsp;LÍNEA</h3>
									</article>
								</div>
							</li>

							<li>
								<div class="box">
									<article>
										DISEÑO&nbsp;GRÁFICO IMAGEN&nbsp;CORPORATIVA
									</article>
								</div>
							</li>

							<li>
								<div class="box">
									<article>
										AUDIO PROMOCIONAL PARA RADIO&nbsp;Y&nbsp;VIDEO
									</article>
								</div>
							</li>
						</ul>
				</div>

					
				</div><!-- class="serv-desc-info" -->
			</section><!-- class="serv-desc" -->

			<!-- CTA -->
			<article class="cta">
				<div class="cta-info">
					<h3>Las mejores herramientas profesionales<br> para tu empresa</h3>
					<!-- CTA-button -->
					<div class="cta-services">
						<a href="#">Contáctanos</a>
					</div>
				</div>
			</article>
	
			<!-- CLIENTES -->
			<article class="clientes">
				<div class="clientes-info">
					<h2>Algunos de nuestros clientes</h2>
							<div id="slider" class="flexslider">
								<ul class="slides">

							<?php 
								$slider_loop = new WP_Query(
									array(
										'post_type'							=> 'slider_panel',
										'category_name'					=> 'clientes',
										'post_per_page'					=> 10,
										'post_status'						=> 'publish',
										'order'									=> 'asc'
									)
								);
								// Loop
								while ($slider_loop->have_posts()) {
									$slider_loop->the_post(); ?>
									<li>
										<?php echo get_the_post_thumbnail($post->ID, 'image_slider'); ?>
									</li>

							<?php } //closing while loop ?>

								</ul><!-- class="slides" -->
							</div><!-- id="slider" -->

							<div id="carousel" class="flexslider">
								<ul class="slides">
								<?php
								// Loop
								while ($slider_loop->have_posts()) {
									$slider_loop->the_post(); ?>
									<li>
										<?php echo get_the_post_thumbnail($post->ID, 'image_slider'); ?>
									</li>

							<?php } //closing while loop ?>
								</ul><!-- class="slides" -->
							<?php  ?>
							</div><!-- id="carousel" -->
						<?php wp_reset_postdata(); ?> 
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












