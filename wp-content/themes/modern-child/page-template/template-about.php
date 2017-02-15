<?php
/**
 * Custom page template
 *
 * Template Name: Sobre
 */



get_header();

	/**
	 * Page content
	 */

		wmhook_entry_before();

		if ( have_posts() ) {

			the_post();

			get_template_part( 'content', 'page' );

			wp_reset_query();

		}

		$colab_args = array(
				'role__in' => array( 'editor', 'author', 'contributor' )
			);


		$colabrys = get_users( $colab_args );
		?>
		
		<section class="colabrys-box container">
			<h3 class="section-title">Colaboradoras</h3>

			<div class="grid col-md-12" style="padding: 0;">
			<?php
				foreach ( $colabrys as $colab ) {
					$avatar = wp_get_attachment_image_src( (int) get_user_meta( $colab->ID, 'wp_user_avatar', true ) )[0];
					echo '<div class="author-meta closed grid-item">
							<span class="author-name">'. $colab->display_name .'</span>
							<div class="hover-box">
								<span class="outter-hover-wrapper">
									<span class="inner-hover-wrapper">
										<div class="author-info col-md-3">
											<figure class="author-photo" style="background-image: url('. $avatar .')"></figure>	
										</div>
										<div class="author-description col-md-9">'. get_user_meta( $colab->ID, 'description', true ) .'</div>
									</span>
								</span>
							</div>
						</div>';
				}
			?>
			</div>

		</section>

		<?php
		wmhook_entry_after();
		?>

	<script>
		jQuery(document).ready(function($) {
			var $container = $('.grid');
			// initialize Isotope
			// $container.isotope({
			//   	// options...
			//   	resizable: true, // disable normal resizing
			//   	// set columnWidth to a percentage of container width
			//   	masonry: { columnWidth: $container.width() / 4 }
			// });

			// update columnWidth on window resize
			// $(window).smartresize(function(){
			//   	$container.isotope({
			//     	// update columnWidth to a percentage of container width
			//     	masonry: { columnWidth: $container.width() / 4 }
			//   	});
			// });

			// $('.author-meta.grid-item').click(function() {
			// 	if ( $(this).hasClass('open') ) {
			// 		$(this).removeClass('open').addClass('closed');
			// 	} else if ( $(this).hasClass('closed') ) {
			// 		$(this).removeClass('closed').addClass('open');
			// 	}

				// $container.isotope({
			 //    	// update columnWidth to a percentage of container width
			 //    	masonry: { columnWidth: $container.width() / 4 }
			 //  	});
			// });
		});
	</script>

<?php

get_footer();

?>