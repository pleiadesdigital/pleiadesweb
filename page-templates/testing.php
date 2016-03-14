<?php
/**
 * Template Name: Testing
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php if (is_page('masonry')) { ?>

		<!-- INTRO -->
			<section id="masonry">
				<div class="intro">	
					<h2>Testing Masonry</h2>
					<p>Fancy taking your digital marketing to the next level? You’re lucky you found us…</p>
				</div>
				<hr>
				<!-- MASONRY START -->
				<div class="grid">
				  <div class="grid-item"></div>
				  <div class="grid-item grid-item--width2 grid-item--height2"></div>
				  <div class="grid-item grid-item--height3"></div>
				  <div class="grid-item grid-item--height2"></div>
				  <div class="grid-item grid-item--width3"></div>
				  <div class="grid-item"></div>
				  <div class="grid-item"></div>
				  <div class="grid-item grid-item--height2"></div>
				  <div class="grid-item grid-item--width2 grid-item--height3"></div>
				  <div class="grid-item"></div>
				  <div class="grid-item grid-item--height2"></div>
				  <div class="grid-item"></div>
				  <div class="grid-item grid-item--width2 grid-item--height2"></div>
				  <div class="grid-item grid-item--width2"></div>
				  <div class="grid-item"></div>
				  <div class="grid-item grid-item--height2"></div>
				  <div class="grid-item"></div>
				  <div class="grid-item"></div>
				  <div class="grid-item grid-item--height3"></div>
				  <div class="grid-item grid-item--height2"></div>
				  <div class="grid-item"></div>
				  <div class="grid-item"></div>
				  <div class="grid-item grid-item--height2"></div>
				</div>


			</section>

	<?php } ?>



	

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>