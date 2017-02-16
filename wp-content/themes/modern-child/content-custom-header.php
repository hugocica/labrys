<?php
/**
 * Custom Header content
 *
 * @package    Modern
 * @copyright  2015 WebMan - Oliver Juhas
 *
 * @since    1.0
 * @version  1.4.3
 */

?>

<?php
	
	if ( !is_search() ) {

?>

<div class="site-banner-content">

	<?php

	/**
	 * Media
	 */

		$highlight_box = get_post_meta( get_the_ID(), '_highlight_metabox', true );
	?>

	<div class="site-banner-media">

		<?php
			if ( is_front_page() || empty(get_post_thumbnail_id( get_the_ID() )) || is_category() ) {
				$image_url = get_header_image();
			} else {
				$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
				$image_url = $image_url[0];
			}
		?>

		<figure class="site-banner-thumbnail" style="background-image: url(<?php echo $image_url?>);">
		</figure>

		<?php
			if ( is_singular() && !is_page() ) {
		?>
			<div class="gradient-overlay"></div>
		<?php } ?>

	</div>

	<div class="site-banner-header <?php echo ( !is_front_page() && !empty( $highlight_box ) ) ? 'highlight-box' : '' ; ?>">	
	
	<?php
		if ( is_front_page() || ( is_category() && empty($highlight_box['destaque']) ) ) {
	?>
				
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/casa-labrys.png" title="Casa de Labrys" alt="Casa de Labrys">	

	<?php
		} else {
			if ( ! empty($highlight_box['destaque']) ) {
	?>
	
				<p><?php echo $highlight_box['destaque']; ?></p>

	<?php
			}
		}
	?>

	</div>
</div>

<?php

	}

?>