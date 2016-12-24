<?php
class Home_Service {

	public $data;

	public function __construct($data, $post_id="", $extra_data="") {

		$this->data = $data;

		$this->load_view();

	}

	public function load_view() {

		global $post;
		setup_postdata($post);

		$context = Timber::get_context();
		$context['images_uri'] = _images_uri;
		// $context['data'] = $this->data;
		$context['home_content'] = get_the_content();
		var_dump($context['home_content']);
		Timber::render( theme_views . '/home.twig', $context);
	}
}
