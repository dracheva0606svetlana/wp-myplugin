<?php

class PhotoSlider {
	private $images;

	public function __construct($images) {
		$this->images = explode(',', (string)$images);
	}

	public function render() {
		$output = '<div class="photo-slider">';

		// Слайды с изображениями
		$output .= '<div class="slides">';
		foreach ($this->images as $image) {
			$output .= '<div class="slide"><img src="' . esc_url(trim($image)) . '" alt="Фото"></div>';
		}
		$output .= '</div>';

		// Кнопки "Предыдущий" и "Следующий"
		$output .= '<button class="prev">&lt;</button>';
		$output .= '<button class="next">&gt;</button>';

		$output .= '</div>'; // Закрываем контейнер слайдера

		return $output;
	}
}
