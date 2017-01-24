<?php
/**
 * Standard post content
 *
 * Post lists display:
 * - featured image
 * - title
 * - excerpt
 *
 * Single post page display:
 * - featured image
 * - title
 * - excerpt when excerpt field set and not paged
 * - content
 *
 * @package    Modern
 * @copyright  2015 WebMan - Oliver Juhas
 *
 * @since    1.0
 * @version  1.3
 */



$pagination_suffix = wm_paginated_suffix( 'small', 'post' );
$single_attr = ( is_single() ) ? 'data-single="true"' : '';
?>

<article id="post-<?php the_ID(); ?>" <?php echo $single_attr; ?> <?php post_class(); echo apply_filters( 'wmhook_entry_container_atts', '' ); ?>>

	<?php

	/**
	 * Post media
	 */
	if (
			has_post_thumbnail()
			&& ! $pagination_suffix
			&& apply_filters( 'wmhook_entry_featured_image_display', true )
		) :

		$image_size = apply_filters( 'wmhook_entry_featured_image_size', 'thumbnail' );
		$image_link = ( is_single() ) ? ( wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ) ) : ( array( esc_url( get_permalink() ) ) );
		$image_link = array_filter( (array) apply_filters( 'wmhook_entry_image_link', $image_link ) );
		$image_src = ( !is_single() ) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' ) : wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

		?>

		<div class="entry-media">

			<figure class="post-thumbnail"<?php echo wm_schema_org( 'image' ); ?> style="background-image: url(<?php echo $image_src[0]; ?>);">

				<?php

				if ( ! empty( $image_link ) ) {
					echo '<a href="' . esc_url( $image_link[0] ) . '" title="' . the_title_attribute( 'echo=0' ) . '">';
				}

				// the_post_thumbnail( $image_size );

				if ( ! empty( $image_link ) ) {
					echo '</a>';
				}

				?>

			</figure>

		</div>

		<?php

	endif;

	/**
	 * Post category
	 */

	$categories = get_the_category();

	foreach ( $categories as $category ) {
		if ( $category->parent != 0 ) {
			$cat_name = $category->name;
		}
	}

	if ( !is_single() ) {
		?>

		<div class="entry-category">
			<h3><?php echo $cat_name; ?></h3>
		</div>

		<?php
	}

	/**
	 * Post content
	 */

		echo '<div class="entry-inner">';

			wmhook_entry_top();

			echo '<div class="entry-content"' . wm_schema_org( 'entry_body' ) . '>';

				if ( ! is_single() || ( is_single() && has_excerpt() && ! $pagination_suffix ) ) {
					the_excerpt();
				}

				if ( is_single() ) {
					the_content( apply_filters( 'wmhook_wm_excerpt_continue_reading', '' ) );
				}

			echo '</div>';

			wmhook_entry_bottom();

		echo '</div>';

	?>

</article>