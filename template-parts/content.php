<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pleiades_Web
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		
		<div class="entry-meta">
			<?php pleiadesweb_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>

<!--		The feature image-->
		<?php if(has_post_thumbnail()) { ?>
		<div class="single-post-thumbnail clear">
			<?php echo the_post_thumbnail('index-thumb'); ?>
		</div>
		<?php } ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
//			the_content(sprintf(wp_kses( __('Continue reading %s <span class="meta-nav">&rarr;</span>', 'pleiadesweb'), array('span' => array('class' => array()))), the_title( '<span class="screen-reader-text">"', '"</span>', false)
//			) );
			the_content( __( 'Continue reading <span class="meta-nav">→</span>', 'pleiadesweb' ) );


			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pleiadesweb' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php pleiadesweb_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
