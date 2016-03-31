<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Pleiades_Web
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<hr>
			<!-- MASONRY START -->
			<div id="grid">
				<div class="grid-item">grid 1</div>
				<div class="grid-item">grid 2</div>
				<div class="grid-item">grid 3</div>
				<div class="grid-item">grid 4</div>
				<div class="grid-item">grid 5</div>
				<div class="grid-item">grid 6</div>
				<div class="grid-item">grid 7</div>
				<div class="grid-item">grid 8</div>
			</div>


		<?php
		if ( have_posts() ) :

		if ( is_home() && ! is_front_page() ) : ?>
			<header class="main-header">
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();


			get_template_part( 'template-parts/content-index', get_post_format() );

			endwhile;

			the_posts_navigation();

			else :

			get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
