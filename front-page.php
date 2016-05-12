<?php get_header(); ?>

	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<div class="scene" id="welcome">
	<article class="copycontent">
	<h2>Bienvenidos</h2>
	<p>Somos una agencia de marketing multi-propósito que enfatiza  la utilización de herramientas digitales, sin dejar de lado los fundamentos de marketing y estrategia, que son indispensables para lograr resultados en cualquier tamaño de empresa, rubro o tipo de emprendimiento.</p>
	</article><!-- class="copycontent" -->
	</div><!-- class="scene" -->

	<!-- SERVICES -->
	<section class="scene" id="services">
		<h2>Nuestros Servicios</h2>
		<h3>Construimos tu marca con un enfoque de 360˚</h3>

		<div id="showroom">

		<section id="strategy">
		<div class="view view-tenth">
		<img src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/services/estrategia-consultoria.jpg" />
		<div class="mask1">
		<h2>Estrategia y Consultoría</h2>
		<p>Servicios estratégicos que esquematizan los fundamentos de su negocio</p>
		<a href="http://localhost/~ronyortiz/pleiadesweb/index.php/servicios/estrategia-y-consultoria/" class="info1">Leer más</a>
		</div>
		</div>
		</section><!-- id="webdev" -->

		<section id="design">
		<div class="view view-tenth">
		<img src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/services/diseno-creativo.jpg" />
		<div class="mask2">
		<h2>Diseño Creativo</h2>
		<p>Haga que su diseño destaque para aquellos que más importan</p>
			<a href="http://localhost/~ronyortiz/pleiadesweb/index.php/servicios/diseno-creativo/" class="info2">Leer más</a>
		</div>
		</div>
		</section><!-- id="graphdes" -->

		<section id="webdev">
		<div class="view view-tenth">
		<img src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/services/desarrollo-web.jpg" />
		<div class="mask3">
		<h2>Desarrollo WEB</h2>
		<p>Websites desarrollados con las mejores prácticas y tecnología de punta</p>
		<a href="http://localhost/~ronyortiz/pleiadesweb/index.php/servicios/desarrollo-web/" class="info3">Leer más</a>
		</div>
		</div>
		</section><!-- id="webdev" -->

		<section id="mktg">
		<div class="view view-tenth">
		<img src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/services/marketing-digital.jpg" />
		<div class="mask4">
		<h2>Marketing Digital</h2>
		<p>Consolida tu presencia en Internet, aumenta el tráfico de tu sitio y tus conversiones</p>
		<a href="http://localhost/~ronyortiz/pleiadesweb/index.php/servicios/internet-marketing/" class="info4">Leer más</a>
		</div>
		</div>
		</section><!-- id="mktg" -->

		</div><!--id="showroom"-->
	</section><!-- SERVICES -->


	<!-- POR QUÉ NOSOTROS -->
	<section id="porque-nos">
		<article class="porque-nos-content">
		<h2>¿Por qué confiar en nosotros?</h2>
		<p>Porque antes de proponer alguna solución nos aseguramos que entendemos muy bien sus objetivos, su mercado, su competencia, y otras variables que pueden afectar sus resultados.</p>
		<img src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/misc/imac-e360.png" alt="infografía de servicios" />
		<ul>
		<li>
		<i class="fa fa-check"></i>
		<p>¿Tiene un gran producto o servicio y necesita algún tipo de “plan” para promocionarlo en el mercado de forma eficaz?</p>
		</li>
		<li>
		<i class="fa fa-check"></i>
		<p>¿Quiere utilizar las ventajas de la Internet (website, redes sociales, email, etc.) para promocionar sus productos y/o servicios?</p>
		</li>
		<li>
		<i class="fa fa-check"></i>
		<p>¿Necesita crear o revitalizar su imagen corporativa y generar credibilidad en su mercado?</p>
		</li>
		<li>
		<i class="fa fa-check"></i>
		<p>¿Quiere utilizar audio y video para promocionar sus productos?</p>
		</li>
		</ul>
		</article>
	</section><!--id="porque-nos"-->


		<!-- CALL TO ACTION -->
		<section id="cta-frontpage">
			<article class="cta-front">
				<h3>Tenemos las mejores herramientas profesionales<br> para tu empresa</h3>
				<!-- CTA-button -->
				<div class="cta-button">
					<a href="http://localhost/~ronyortiz/pleiadesweb/index.php/contacto/" class="cta-info">Contáctanos</a>
				</div>
<!--        Teléfono-->
        <p><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;&nbsp;+(591)77799006</p>
			</article>
		</section>

	<!-- CLIENTES -->
	<section class="clientes">
		<div class="clientes-info">
			<h2>Portafolio</h2>

			<?php
			$slider_loop = new WP_Query(
			array(
				'post_type'							=> 'slider_panel',
				'category_name'					=> 'clientes',
				'post_per_page'					=> 10,
				'post_status'						=> 'publish',
				'orderby'								=> 'date'
			)
			);
			?>

			<!--							CARROUSELL-->
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

			<!--							SLIDER-->
			<div id="slider" class="flexslider">
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
			</div><!-- id="slider" -->


			<?php wp_reset_postdata(); ?>
		</div>
	</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>