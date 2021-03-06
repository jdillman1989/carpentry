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
		$context['home_title'] = get_the_title();
		$context['home_content'] = get_the_content();
		$context['include_feed'] = get_field('include_feed');
		$context['home_images'] = get_field('home_images');
		$context['feed_content'] = do_shortcode('[instagram-feed]');
		Timber::render( theme_views . '/home.twig', $context);
	}
}
