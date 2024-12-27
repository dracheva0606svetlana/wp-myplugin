<?php

class PhotoGrid {
	private $images;

	public function __construct($images) {
		$this->images = explode(',', (string)$images);
	}

	public function render() {
		$output = '<div class="photo-grid">';

		// Генерируем элементы сетки
		foreach ($this->images as $image) {
			$output .= '<div class="photo-item"><img src="' . esc_url(trim($image)) . '" alt="Фото"></div>';
		}

		$output .= '</div>'; // Закрываем контейнер сетки

		return $output;
	}
}
