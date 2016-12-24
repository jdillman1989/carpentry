<?php
class Page_Service {

	public $data;

	public function __construct($data, $post_id="", $extra_data="") {

		$this->data = $data;

		$this->load_view();

	}

	public function load_view() {
		global $post;
		setup_postdata($post);

		$context = Timber::get_context();
		$context['content'] = get_the_content();
		Timber::render( theme_views . '/page.twig', $context);
	}
}
