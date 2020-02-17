<?php

function add_style()
{
	wp_enqueue_style('global', get_template_directory_uri() . '/public/css/global.min.css', null, null, 'screen');
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Pacifico&display=swap', null, null, 'screen');
}
add_action('wp_enqueue_scripts', 'add_style', 1);
