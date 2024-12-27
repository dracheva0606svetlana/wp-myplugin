<?php
/**
 * Plugin Name: Модальные окна
 * Description: Плагин "Модальные окна" для WordPress - разработка с применением гитхаб
 */

// Подключаем стили и скрипты для модальных окон
function enqueue_modal_window_assets() {
	// Подключаем стили
	wp_enqueue_style('modal-window-style', plugin_dir_url(__FILE__) . 'assets/css/modal-window.css');

	// Подключаем скрипты
	wp_enqueue_script('modal-window-script', plugin_dir_url(__FILE__) . 'assets/js/modal-window.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_modal_window_assets');

// Подключаем стили и скрипты для PhotoSlider
function enqueue_photo_slider_assets() {
	// Подключаем стили для слайдера
	wp_enqueue_style('photo-slider-style', plugin_dir_url(__FILE__) . 'assets/css/photo-slider.css');

	// Подключаем скрипт для слайдера
	wp_enqueue_script('photo-slider-script', plugin_dir_url(__FILE__) . 'assets/js/photo-slider.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_photo_slider_assets');

// Подключаем стили и скрипты для PhotoGrid
function enqueue_photo_grid_assets() {
	// Подключаем стили для сетки изображений
	wp_enqueue_style('photo-grid-style', plugin_dir_url(__FILE__) . 'assets/css/photo-grid.css');
}
add_action('wp_enqueue_scripts', 'enqueue_photo_grid_assets');


require_once plugin_dir_path(__FILE__) . 'includes/custom-post-type.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcodes.php';

require_once plugin_dir_path(__FILE__) . 'includes/classes/PhotoSlider.php';
require_once plugin_dir_path(__FILE__) . 'includes/classes/PhotoGrid.php';
require_once plugin_dir_path(__FILE__) . 'includes/classes/VideoEmbed.php';