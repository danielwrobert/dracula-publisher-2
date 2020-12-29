<?php
/**
 * Dracula Publisher 2 - functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Dracula_Publisher_2
 */

/**
 * Enqueue scripts and styles.
 */
function dracula_publisher_2_scripts() {
	// enqueue parent styles
	wp_enqueue_style( 'parent-theme', get_template_directory_uri() . '/style.css' );
	// enqueue font styles
	wp_enqueue_style( 'font-styles-muli', get_stylesheet_directory_uri() . '/assets/fonts/typeface-muli/index.css', array(), null );
	wp_enqueue_style( 'font-styles-ovo', get_stylesheet_directory_uri() . '/assets/fonts/typeface-ovo/index.css', array(), null );
}
add_action( 'wp_enqueue_scripts', 'dracula_publisher_2_scripts' );


/**
 * Parent Theme Overrides
 */

/**
 * Prints HTML with meta information for author and categories.
 */
function independent_publisher_2_entry_meta() { ?>
		<div class="entry-meta">
			<span class="byline">
				<?php the_author_posts_link(); ?>
			</span>
			<?php if ( 'post' === get_post_type() ) { ?>
				<span class="cat-links">
					<?php
						/* translators: Used between list items, there is a space after the comma */
						echo get_the_category_list( esc_html__( ', ', 'independent-publisher-2' ) );
					?>
				</span><!-- .cat-links -->
			<?php } ?>

			<span class="published-on">
				<?php if ( is_single() ) {
					echo independent_publisher_2_posted_time();
				} else { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo independent_publisher_2_posted_time(); ?></a>
				<?php } ?>
			</span>

			<?php

			if ( independent_publisher_2_show_word_count() ) {
				printf( '<span class="word-count">%s</span>', sprintf( _nx( '%s Minute', '%s Minutes', independent_publisher_2_word_count(), 'time to read', 'independent-publisher-2' ), independent_publisher_2_word_count() ) );
			}

			// Edit post link
			if ( ! is_single() ) {
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'independent-publisher-2' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			} ?>
		</div><!-- .entry-meta -->
	<?php
}

