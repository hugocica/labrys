<?php
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	$template_file = get_post_meta($post_id,'_wp_page_template',TRUE);

	$servicos_config = new WPAlchemy_MetaBox(
						array(
							'id' => '_highlight_metabox',
							'title' => 'Frase do Banner',
							'types' => array('page'),
							'context' => 'normal',
							'priority' => 'high',
							'template' => get_stylesheet_directory() . '/metaboxes/destaques-meta.php'
						)
					);
?>
