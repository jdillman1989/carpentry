<?php
class Home_Service {

	public $data;

	public function __construct($data, $post_id="", $extra_data="") {

		$this->data = $data;

		$this->load_view();

	}

	public function load_view() {

		$context = Timber::get_context();
		$context['images_uri'] = _images_uri;
		// $context['data'] = $this->data;
		$context['home_content'] = '<p>This is a test for the home page</p>'
		var_dump($context['home_content']);
		Timber::render( theme_views . '/home.twig', $context);
	}
}
