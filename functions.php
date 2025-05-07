function my_scripts() {
wp_enqueue_script('jquery');
wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, true );
wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true );
wp_enqueue_script('other-member',get_template_directory_uri().'/js/other-member.js',array(), false, true );
wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );