<?php
/**
 * Custom template tags for this theme.
 *
 * @package QOD_Starter_Theme
 */

/**
 * Display navigation to next/previous set of posts when applicable.
 */
function qod_numbered_pagination( $query_type = '' ) {

	if ( $query_type ) {
		$the_query = $query_type;
	} else {
		global $wp_query;
		$the_query = $wp_query;
	}
	$big = 999999999;

	// Don't print empty markup if there's only one page.
	if ( $the_query->max_num_pages > 1 ) :
		echo '<nav role="navigation" class="number-pagination">';
		echo paginate_links(
			array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $the_query->max_num_pages,
				'prev_text' => '&larr; Previous',
				'next_text' => 'Next &rarr;',
			)
		);
		echo '</nav>';
	endif;
}

// https://wpsites.net/wordpress-tips/set-posts-per-page-for-tag-archive/


add_action('pre_get_posts', 'posts_per_tag_archive_page');

function posts_per_tag_archive_page( $query ){
if ( $query->is_tag() ) {
    $query->set( 'posts_per_page', 5 );
    }
}


add_action('pre_get_posts', 'posts_per_category_archive_page');

function posts_per_category_archive_page( $query ){
if ( $query->is_category() ) {
    $query->set( 'posts_per_page', 5 );
    }
}