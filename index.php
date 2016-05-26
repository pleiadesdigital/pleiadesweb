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

		<?php
		if ( have_posts() ) :

		if ( is_home() && ! is_front_page() ) : ?>
			<header class="main-header">
<!--			INTRO-->
				<h2 class="page-title screen-reader-text">Nuestra biblioteca virtual</h2>
				<p>Información sobre marketing digital, estrategia, imagen, y otros temas interesantes vitales para empresas o emprendimientos de cualquier tamaño. </p>
			</header>

			<?php
			endif;
			?>
				<!-- MASONRY START -->
			<div id="grid">
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="grid-item"><?php
					get_template_part( 'template-parts/content-index', get_post_format() );?>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="blog-navigation">
				<?php the_posts_navigation(); ?>
			</div>

	<?php else :
			get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
