<?php

// Шорткод для модального окна
function modal_window_shortcode($atts) {
	// Атрибуты шорткода
	$atts = shortcode_atts(array(
		'id' => '', // ID модального окна
	), $atts);

	// Получаем данные модального окна
	$modal_window = get_post($atts['id']);
	if (!$modal_window || $modal_window->post_type != 'modal_window') {
		return ''; // Если нет такого модального окна
	}

	// Шаблон модального окна
	$output = '<button class="open-modal" data-modal-id="modal-' . $atts['id'] . '">Открыть модальное окно</button>';
	$output .= '<div class="modal-window" id="modal-' . $atts['id'] . '">';
	$output .= '<div class="modal-content">' . $modal_window->post_content . '</div>';
	$output .= '</div>';

	return $output;
}
add_shortcode('modal_window', 'modal_window_shortcode');

add_shortcode('modal_window', 'modal_window_shortcode');

// Шорткод для слайдера фото
function photo_slider_shortcode($atts) {
	$atts = shortcode_atts(array(
		'images' => array(),
	), $atts);

	$slider = new PhotoSlider($atts['images']);
	return $slider->render();
}
add_shortcode('photo_slider', 'photo_slider_shortcode');

// Шорткод для сетки фото
function photo_grid_shortcode($atts) {
	$atts = shortcode_atts(array(
		'images' => array(),
	), $atts);

	$grid = new PhotoGrid($atts['images']);
	return $grid->render();
}
add_shortcode('photo_grid', 'photo_grid_shortcode');

// Шорткод для видео
function video_shortcode($atts) {
	$atts = shortcode_atts(array(
		'video_url' => '',
	), $atts);

	$video = new VideoEmbed($atts['video_url']);
	return $video->render();
}
add_shortcode('video_embed', 'video_shortcode');
