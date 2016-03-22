<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Pleiades_Web
 */

if ( ! function_exists( 'pleiadesweb_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function pleiadesweb_posted_on() {




	// POSTED ON
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}
	$time_string = sprintf( $time_string,
		esc_attr(get_the_date('c')),
		esc_html(get_the_date() ),
		esc_attr(get_the_modified_date('c')),
		esc_html(get_the_modified_date())
	);
	$posted_on = sprintf('<i class="fa fa-calendar"></i>' . esc_html_x( ' %s', 'post date', 'pleiadesweb' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	// AUTHOR
	$byline = sprintf(
		esc_html_x( '| escrito por %s', 'post author', 'pleiadesweb' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';

	// CATEGORIES

	/* translators: used between list items, there is a space after the comma */
	$categories_list = get_the_category_list( esc_html__( ', ', 'pleiadesweb' ) );
	if ( $categories_list && pleiadesweb_categorized_blog() ) {
		echo ' | </i><span class="category-list">' . $categories_list . '</span>';
	}	

	// COMMENTS

    if (! post_password_required() && (comments_open() || '0' != get_comments_number())) { 
        echo ' | <span class="comments-link">';
        comments_popup_link( __('Deja un comentario', 'my-simone'), __('1 comentario', 'my-simone'), __('% comentarios', 'my-simone'));
        echo '</span>';
    }

}
endif;

if ( ! function_exists( 'pleiadesweb_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function pleiadesweb_entry_footer() {
	// Hide category and tag text for pages.
	if ('post' === get_post_type()) {
		
		/* translators: used between list items, there is a space after the comma */
	
			echo get_the_tag_list('<ul><li><i class="fa fa-tag"></i>', '</li><li><i class="fa fa-tag"></i>',  '</li></ul>');  

	} // if ('post' === get_post_type())

	/*edit_post_link(
		sprintf(
			esc_html__( 'Edit %s', 'pleiadesweb' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);*/

}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function pleiadesweb_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'pleiadesweb_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'pleiadesweb_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so pleiadesweb_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so pleiadesweb_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in pleiadesweb_categorized_blog.
 */
function pleiadesweb_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'pleiadesweb_categories' );
}
add_action( 'edit_category', 'pleiadesweb_category_transient_flusher' );
add_action( 'save_post',     'pleiadesweb_category_transient_flusher' );
