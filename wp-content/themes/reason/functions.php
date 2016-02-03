<?php
/**
 * Reason functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Reason
 */

show_admin_bar(false);
add_theme_support('post-thumbnails');

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );

//отключение Emoji start
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
//отключение Emoji end

remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function portfolio_scripts_styles() {

	wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0' );
	wp_enqueue_script( 'jquery2', '//code.jquery.com/jquery-2.1.4.min.js', array(), '2.1.4', true );
	wp_enqueue_script( 'plugins-scroll', get_template_directory_uri() . '/libs/plugins-scroll/plugins-scroll.js', array( 'jquery2' ), '1.0', true );
	wp_enqueue_script( 'footer-common', get_template_directory_uri() . '/js/footer-common.js', array( 'jquery2' , 'plugins-scroll' ), '1.0', true );

	if ( is_page('2') ) {

		wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array('reset'), '1.0' );

	} else if ( is_page( array( 7, 27, 29, 31 ) ) ) {

		wp_enqueue_style('portfolio-main', get_template_directory_uri() . '/css/projects-main.css', array('reset'), '1.0' );

	} else if ( is_page('9') ) {

		wp_enqueue_style('about-us-main', get_template_directory_uri() . '/css/about-us-main.css', array('reset'), '1.0' );

	} else if ( is_page( array( 11, 40, 42, 44, 46 ) ) ) {

		wp_enqueue_style('blog-main', get_template_directory_uri() . '/css/blog-main.css', array('reset'), '1.0' );
		wp_enqueue_script( 'masonry', 'https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js', array( 'jquery2' ), '1.0', true );
		wp_enqueue_script( 'blog-common', get_template_directory_uri() . '/js/blog-common.js', array( 'jquery2' , 'masonry' ), '1.0', true );

	} else if ( is_page( '13' ) ) {

		wp_enqueue_style('news-main', get_template_directory_uri() . '/css/news-main.css', array('reset'), '1.0' );
		wp_enqueue_script( 'masonry', 'https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js', array( 'jquery2' ), '1.0', true );
		wp_enqueue_script( 'blog-common', get_template_directory_uri() . '/js/blog-common.js', array( 'jquery2' , 'masonry' ), '1.0', true );

	} else if ( is_page('15') ) {

		wp_enqueue_style('services-main', get_template_directory_uri() . '/css/services-main.css', array('reset'), '1.0' );

	} else if ( is_page('17') ) {

		wp_enqueue_style('vacancies-main', get_template_directory_uri() . '/css/vacancies-main.css', array('reset'), '1.0' );
		wp_enqueue_script( 'vacancies-common', get_template_directory_uri() . '/js/vacancies-common.js', array( 'jquery2' ), '1.0', true );

	} else if ( is_page('19') ) {

		wp_enqueue_style('contacts-main', get_template_directory_uri() . '/css/contacts-main.css', array('reset'), '1.0' );

	} else if ( is_page('33') ) {

		wp_enqueue_style('form-main', get_template_directory_uri() . '/css/form-main.css', array('reset'), '1.0' );
		wp_enqueue_script( 'form-common', get_template_directory_uri() . '/js/form-common.js', array( 'jquery2' ), '1.0', true );

	} else if ( is_page( array( 50, 52, 54 ) ) ) {

		wp_enqueue_style('services-in-main', get_template_directory_uri() . '/css/services-in-main.css', array('reset'), '1.0' );

	}
	if ( in_category( array( 2, 3, 4 ) ) ) {
		if ( is_single() ) {

			wp_enqueue_style('project-in-main', get_template_directory_uri() . '/css/project-in-main.css', array('reset'), '1.0' );
			/*wp_enqueue_script( 'picturefill', get_template_directory_uri() . '/libs/picturefill/picturefill.min.js', array( 'jquery2' ), '1.0', true );*/
			wp_enqueue_script( 'share1', '//yastatic.net/es5-shims/0.0.2/es5-shims.min.js', array( 'jquery2' ), '1.0', true );
			wp_enqueue_script( 'share2', '//yastatic.net/share2/share.js', array( 'jquery2' ), '1.0', true );
			wp_enqueue_script( 'project-in-common', get_template_directory_uri() . '/js/project-in-common.js', array( 'jquery2' ), '1.0', true );

		}
	} else if ( in_category( array( 11, 12 ) ) ) {
		if ( is_single() ) {

			wp_enqueue_style('news-in-main', get_template_directory_uri() . '/css/news-in-main.css', array('reset'), '1.0' );

		}
	} else if ( in_category( array( 10 ) ) ) {
		if ( is_single() ) {

			wp_enqueue_style('about-us-in-main', get_template_directory_uri() . '/css/about-us-in-main.css', array('reset'), '1.0' );

		}
	} else if ( in_category( array( 6, 7, 8, 9 ) ) ) {
		if ( is_single() ) {

			wp_enqueue_style('blog-in-main', get_template_directory_uri() . '/css/blog-in-main.css', array('reset'), '1.0' );
			wp_enqueue_script( 'scroolly', get_template_directory_uri() . '/libs/scroolly/jquery.scroolly.min.js', array( 'jquery2' ), '1.0', true );
			wp_enqueue_script( 'blog-in-common', get_template_directory_uri() . '/js/blog-in-common.js', array( 'jquery2' ), '1.0', true );

		}
	}

}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts_styles' );



add_image_size('s430', 430, 2000);


function misha_custom_razmer( $sources, $size_array, $img_src, $img_metadata, $attachment_id ){
 
	$img_size_name = 's430'; // ваш размер изображения, добавленный через add_image_size('s500', 500, 500, true);
 
	$upload_dir = wp_upload_dir();
 
	// знаю, что мог использовать wp_get_attachment_image_url() для получения URL изображения
	// но я хотел использовать только те данные, которые имеются, с минимумом доп. функций
	$img_url = $upload_dir['baseurl'] . '/' . str_replace( basename( $img_metadata['file'] ), $img_metadata['sizes'][$img_size_name]['file'], $img_metadata['file'] );
 
	$sources[ 430 ] = array( // добавляем свой размер в общий список размеров sources
		'url'        => $img_url,
		'descriptor' => '430w',
		'value'      => $breakpoint,
	);
	return $sources;
}
 
add_filter('wp_calculate_image_srcset', 'misha_custom_razmer', 10, 5);

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 480px) 300px, (max-width: 768px) 430px, (max-width: 992px) 720px, (max-width: 1210px) 80vw, 920px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 480px) 85vw, (max-width: 768px) 85vw, (max-width: 992px) 67vw, (max-width: 1210px) 62vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );