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
		$context['content'] = get_the_content();
		var_dump($context['content']);
		Timber::render( theme_views . '/home.twig', $context);
	}
}
