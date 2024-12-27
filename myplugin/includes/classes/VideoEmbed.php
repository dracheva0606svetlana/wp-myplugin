<?php

class VideoEmbed {
	private $video_url;

	public function __construct($video_url) {
		$this->video_url = $video_url;
	}

	public function render() {
		return '<div class="video-wrapper"><iframe src="' . esc_url($this->video_url) . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>';
	}
}
