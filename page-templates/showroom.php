<?php
/**
 * Template Name: Showroom
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<!-- INTRO -->
			<section id="intro">
				<div class="intro-info">	
					<h2>Digital Marketing Services</h2>
					<p>Fancy taking your digital marketing to the next level? You’re lucky you found us…</p>
				</div>
			</section>

		<!-- IMAGE -->
		<section id="image-showroom">
			<div class="<?php if (is_page("desarrollo-web")) { echo "img-web-dev"; } elseif (is_page("diseno-grafico-imagen")) { echo "img-dis-gra"; } elseif (is_page("seo-google-analytics")) { echo "img-seo-gle"; } ?>">
				<div class="text-container">
					<h1>Expand Your Reach With Content Seeding and Promotion</h1>
					<span></span>
					<p>Get Your Content Noticed By Those Who Matter Most</p>
				</div><!-- class="text-container" -->
			</div><!-- back-image() -->
		</section>
		

		<!-- DESCRIPCIÓN SERVICIOS -->
		<div id="descripcion-servicio">
			
		</div>




	

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>