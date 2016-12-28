<?php
class Gallery_Service {

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
        $context['gallery_title'] = get_the_title();
        $context['gallery_layouts'] = get_field('gallery_layouts');
        Timber::render( theme_views . '/home.twig', $context);
    }
}