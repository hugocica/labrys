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
				'role__in' => array( 'administrator', 'editor', 'author', 'contributor' )
			);


		$colabrys = get_users( $colab_args );
		?>
		
		<section class="colabrys-box">
			<h3 class="section-title">Colaboradoras</h3>

			<div class="grid">
			<?php
				foreach ( $colabrys as $colab ) {
					$avatar = wp_get_attachment_image_src( (int) get_user_meta( $colab->ID, 'wp_user_avatar', true ) )[0];
					echo '<div class="author-meta grid-item">
							<div class="hover-box">
								<span class="outter-hover-wrapper">
									<span class="inner-hover-wrapper">
										<span class="author-name">'. $colab->display_name .'</span>
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



get_footer();

?>