<?php
class Error_Service {

	public $data;

	public function __construct($data, $post_id="", $extra_data="") {

		$this->data = $data;

		$this->load_view();

	}

	public function load_view() {

		$context = Timber::get_context();
		$context['error_title'] = get_field('error_title', 'options');
		$context['error_message'] = get_field('error_message', 'options');
		Timber::render( theme_views . '/error.twig', $context);
	}
}