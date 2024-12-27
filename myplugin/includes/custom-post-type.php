<?php

// Регистрация типа записи "Модальные окна"
function register_modal_window_post_type() {
	$args = array(
		'labels' => array(
			'name' => 'Модальные окна',
			'singular_name' => 'Модальное окно',
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'show_in_rest' => true,
	);
	register_post_type('modal_window', $args);
}
add_action('init', 'register_modal_window_post_type');
