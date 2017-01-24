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
	if ( !is_single() ) {
?>

<div class="site-banner-content">

	<?php

	/**
	 * Media
	 */

	?>

	<div class="site-banner-media">

		<?php
			$image_url = ( get_header_image() ) ? ( get_header_image() ) : ( wm_get_stylesheet_directory_uri( 'images/header.jpg' ) );
		?>

		<figure class="site-banner-thumbnail" style="background-image: url(<?php echo $image_url?>);">

			

		</figure>

	</div>

	<div class="site-banner-header">	
			
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/casa-labrys.png" title="Casa de Labrys" alt="Casa de Labrys">
		
	</div>

</div>

<?php 
	} 
?>