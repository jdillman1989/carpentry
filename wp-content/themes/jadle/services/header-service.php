<?php
class Header_Service {

	public $data;

	public function __construct($data, $post_id="", $extra_data="") {

		$this->data = $data;

		$this->load_view();

	}

	public function load_view() {

		$context = Timber::get_context();

		$context['data'] = $this->data;
		$context['blog_url'] = _blog_url;
		$context['images_uri'] = _images_uri;

		$social_links = get_field('social_media_links', 'options');

		foreach ($social_links as $link) {
            $theme = get_template_directory_uri();
            $domain = str_ireplace('www.', '', parse_url($link['social_media_url'], PHP_URL_HOST));

			$social_data[] = array(
				'url' => $link['social_media_url'],
				'icon' => file_get_contents($theme.'/assets/img/'.$domain.'.svg');
			);
		}

		$context['social_data'] = $social_data;

		$phone = get_field('phone', 'options');
		$stripped_phone = preg_replace("/[^\d]/", "", $phone);
		$phone_formatted = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $stripped_phone);

		$context['phone_formatted'] = $phone_formatted;
		$context['phone'] = $phone;

		Timber::render( theme_views . '/home.twig', $context);
	}
}