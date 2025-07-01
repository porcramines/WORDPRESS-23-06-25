<?php
function lapizzeria_style()
{
	wp_register_style('estilo',get_template_directory_uri()."/css/estilo.css",array(),'8.0.1');
	wp_enqueue_style('estilo');
}

add_action('wp_enqueue_scripts','lapizzeria_style');

?>