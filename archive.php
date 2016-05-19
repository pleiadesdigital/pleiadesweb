<?php
/**
 * The template for displaying archive pages.
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
				?>
					<header class="main-header">
						<!--			INTRO-->
						<h2 class="page-title screen-reader-text">Nuestra biblioteca virtual</h2>
						<?php
						the_archive_title( '<h3 class="page-title">', '</h3>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>

					</header>

				<!-- MASONRY START -->
				<div id="grid">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="grid-item"><?php
							get_template_part( 'template-parts/content-index', get_post_format() );?>
						</div>
					<?php endwhile; ?>
				</div>


				<?php

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
