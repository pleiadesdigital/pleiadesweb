<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pleiades_Web
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Error 404', 'pleiadesweb' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pleiadesweb' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Lamentablemente no pudimos encontrar nada con esa búsqueda. Por favor trate de nuevo con palabras diferentes.', 'pleiadesweb' ); ?></p>
			<?php

				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'Aparentemente no podemos encontrar lo que Ud. está buscando. Por favor trate con una nueva búsqueda.', 'pleiadesweb' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
