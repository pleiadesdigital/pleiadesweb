<?php
/**
 * Template part for displaying posts on index pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pleiades_Web
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="index-box">
        <header class="entry-header">
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

            <?php if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php pleiadesweb_posted_on(); ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-summary">
            <!--		The feature image-->
            <?php //if(has_post_thumbnail()) { ?>
                <!--<div class="single-post-thumbnail clear">
                    <?php /*//echo the_post_thumbnail('index-thumb'); */?>
                </div>-->
            <?php //} ?>
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->

        <footer class="entry-footer continue-reading">
            <div class="continue-reading">
                <a href="<?php echo get_permalink(); ?>" title="<?php echo __('Continue Reading ', 'pleiadesweb') . get_the_title() ?>" rel="bookmark">Continue reading&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-## -->
