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
	<meta name="theme-color" content="#7452a2">
	<meta property="og:site_name" content="Casa de Labrys">
	<meta property="og:description" content="Jornalismo colaborativo, com recorte de gênero, raça, classe e sexualidade. Ecoamos nossas vozes contra a invisibilidade lésbica e toda forma de opressão.">
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Offside|Open+Sans+Condensed:300,700|Roboto+Condensed:300,400,700" rel="stylesheet">

	<!-- GOOGLE ANALYTICS -->
	<script>

		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-92082821-1', 'auto');
		ga('send', 'pageview');

	</script>
</head>


<body id="top" <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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