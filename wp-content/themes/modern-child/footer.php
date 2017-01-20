<?php
/**
 * Website footer template
 *
 * @package    Modern
 * @copyright  2015 WebMan - Oliver Juhas
 * @version    1.0
 */



	if ( ! apply_filters( 'wmhook_disable_footer', false ) ) {

		/**
		 * Content
		 */

			wmhook_content_bottom();

			wmhook_content_after();



		/**
		 * Footer
		 */

			wmhook_footer_before();

			wmhook_footer_top();

			wmhook_footer();

			wmhook_footer_bottom();

			wmhook_footer_after();

			echo '<div id="copyright-container">
						<div class="container">
							<div class="cr-box col-md-8 col-sm-6">';
								
								if ( date('Y') != '2017' )
									$date_range = '-' . date('Y');
								
								echo '<p>© COPYRIGHT 2016'. $date_range .' Casa de Labrys TODOS OS DIREITOS RESERVADOS.</p>
								<div class="support-div"></div>
							</div>
							<div class="dev-container col-md-4 col-sm-5">
								<p>Desenvolvido por:</p>
								<div class="dev-box">
									<a href="https://github.com/hugocica/" target="_blank">
										<i class="fa fa-github" aria-hidden="true"></i>
										<span>Hugo Cicarelli</span>
									</a>
								</div>
								<div class="support-div"></div>
							</div>
						</div>
					</div>';

	} // /wmhook_disable_footer



	/**
	 * Body and WordPress footer
	 */

		wmhook_body_bottom();

		wp_footer();

?>

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

</body>

</html>