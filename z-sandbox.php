<div class="bubble">
	<h3>Desarrollo Web para Marketing en Línea</h3>
</div><!-- class="bubble" -->
<div class="bubble">
	<h3>Imagen Corporativa y Diseño Gráfico</h3>
</div><!-- class="bubble" -->
<div class="bubble">
	<h3>Audio Promocional para Radio y Video</h3>
</div><!-- class="bubble" -->



<!--PORTAFOLIO WORKING!-->
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
</section><!--class="clientes"-->