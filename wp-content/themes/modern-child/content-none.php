<?php
/**
 * Empty content page
 *
 * @package    Modern
 * @copyright  2015 WebMan - Oliver Juhas
 * @version    1.0
 */

?>

<section class="no-results not-found">

	<header class="page-header">

		<h1 class="page-title"><?php _e( 'Nenhum resultado encontrado', 'wm_domain' ); ?></h1>

	</header>

	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wm_domain' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

		<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wm_domain' ); ?></p>

		<?php get_search_form(); ?>

	<?php else : ?>

		<p><?php _e( 'Parece que você não achou o que está procurando. Talvez fazer uma busca ajude.', 'wm_domain' ); ?></p>

		<?php get_search_form(); ?>

	<?php endif; ?>

</section>