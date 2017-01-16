<?php
/**
 * Website header template
 *
 * @package    Modern
 * @copyright  2015 WebMan - Oliver Juhas
 *
 * @since    1.0
 * @version  1.2
 */



/**
 * HTML
 */

	wmhook_html_before();

?>

<html class="no-js" <?php language_attributes(); ?>>

<head>

<?php

	/**
	 * HTML head
	 */

	wmhook_head_top();

	wmhook_head_bottom();

	wp_head();

?>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

</head>


<body id="top" <?php body_class(); ?>>

<?php

	/**
	 * Body
	 */

		wmhook_body_top();



	if ( ! apply_filters( 'wmhook_disable_header', false ) ) {

		/**
		 * Header
		 */

			wmhook_header_before();

			wmhook_header_top();

			wmhook_header();

			wmhook_header_bottom();

			wmhook_header_after();



		/**
		 * Content
		 */

			wmhook_content_before();

			wmhook_content_top();

	} // /wmhook_disable_header

?>