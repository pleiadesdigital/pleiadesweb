<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Pleiades_Web
 */

get_header(); ?>

	<div id="primary" class="content-area">∑
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Error 404', 'pleiadesweb' ); ?></h1>
					<h2>Página no encontrada</h2>
				</header><!-- .page-header -->
        <hr>
				<div class="page-content">
					<p>Lo sentimos, pero esta página no existe o se ha movido a otro directorio. Nos disculpamos por el inconveniente.</p>
					<p> Por favor intente una nueva búsqueda o navegue por el menu. Gracias. <?php echo convert_smilies( ':)' ); ?></p>

					<?php
						get_search_form();
					?>



				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
