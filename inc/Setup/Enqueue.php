<?php

namespace Awps\Setup;

/**
 * Enqueue.
 */
class Enqueue
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register()
	{
		add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
	}

	/**
	 * Notice the mix() function in wp_enqueue_...
	 * It provides the path to a versioned asset by Laravel Mix using querystring-based 
	 * cache-busting (This means, the file name won't change, but the md5. Look here for 
	 * more information: https://github.com/JeffreyWay/laravel-mix/issues/920 )
	 */
	public function enqueue_scripts()
	{
		// Deregister the built-in version of jQuery from WordPress
		/* if (!is_customize_preview()) {
			wp_deregister_script('jquery');
		} */

		// CSS
		wp_enqueue_style('main', mix('css/style.css'), array(), '1.0.0', 'all');

		// JS

		// Template
		wp_register_script(
			'goldengames-jquery',
			// mix('template/js/jquery.min.js'),
			get_template_directory_uri() . '/assets/dist/template/js/jquery.min.js',
			null,
			false,
			false
		);
		wp_register_script(
			'goldengames-swiper',
			// mix('vendor/swiper-bundle.js'),
			get_template_directory_uri() . '/assets/dist/vendor/swiper-bundle.js',
			null,
			false,
			false
		);
		wp_register_script(
			'goldengames-lightcase',
			// mix('vendor/lightcase/src/js/lightcase.js'),
			get_template_directory_uri() . '/assets/dist/vendor/lightcase/src/js/lightcase.js',
			null,
			false,
			false
		);
		wp_register_script(
			'goldengames-aos',
			// mix('vendor/aos.js'),
			get_template_directory_uri() . '/assets/dist/vendor/aos.js',
			null,
			false,
			false
		);
		wp_register_script(
			'goldengames-bootstrap',
			// mix('template/js/bootstrap.bundle.min.js'),
			get_template_directory_uri() . '/assets/dist/template/js/bootstrap.bundle.min.js',
			null,
			false,
			false
		);
		wp_register_script(
			'goldengames-jquery-hoverIntent',
			// mix('template/js/jquery.hoverIntent.min.js'),
			get_template_directory_uri() . '/assets/dist/template/js/jquery.hoverIntent.min.js',
			null,
			false,
			false
		);
		wp_register_script(
			'goldengames-jquery-waypoints',
			// mix('template/js/jquery.waypoints.min.js'),
			get_template_directory_uri() . '/assets/dist/template/js/jquery.waypoints.min.js',
			null,
			false,
			false
		);
		wp_register_script(
			'goldengames-superfish',
			// mix('template/js/superfish.min.js'),
			get_template_directory_uri() . '/assets/dist/template/js/superfish.min.js',
			null,
			false,
			false
		);
		wp_register_script(
			'goldengames-bootstrap-input-spinner',
			// mix('template/js/bootstrap-input-spinner.js'),
			get_template_directory_uri() . '/assets/dist/template/js/bootstrap-input-spinner.js',
			null,
			false,
			false
		);
		wp_register_script(
			'goldengames-jquery-elevateZoom',
			// mix('template/js/jquery.elevateZoom.min.js'),
			get_template_directory_uri() . '/assets/dist/template/js/jquery.elevateZoom.min.js',
			null,
			false,
			false
		);
		wp_register_script(
			'goldengames-jquery-plugin',
			// mix('template/js/jquery.plugin.min.js'),
			get_template_directory_uri() . '/assets/dist/template/js/jquery.plugin.min.js',
			null,
			false,
			false
		);
		wp_register_script(
			'goldengames-jquery-countdown',
			// mix('template/js/jquery.countdown.min.js'),
			get_template_directory_uri() . '/assets/dist/template/js/jquery.countdown.min.js',
			null,
			false,
			false
		);
		wp_register_script(
			'goldengames-jquery-magnific-popup',
			// mix('template/js/jquery.magnific-popup.min.js'),
			get_template_directory_uri() . '/assets/dist/template/js/jquery.magnific-popup.min.js',
			null,
			false,
			false
		);

		wp_enqueue_script(
			'goldengames-template-scripts',
			// mix('template/js/main.js'),
			get_template_directory_uri() . '/assets/dist/template/js/main.js',
			array(
				'goldengames-jquery',
				'goldengames-lightcase',
				'goldengames-bootstrap',
				// 'goldengames-jquery-hoverIntent',
				'goldengames-jquery-waypoints',
				'goldengames-superfish',
				'goldengames-bootstrap-input-spinner',
				'goldengames-jquery-elevateZoom',
				'goldengames-jquery-plugin',
				// 'goldengames-jquery-countdown',
				'goldengames-jquery-magnific-popup',
			),
			'1.0.0',
			true
		);

		// APP
		wp_enqueue_script('main', mix('js/app.js'), array(), '1.0.0', true);

		if (is_front_page()) {
			// SWIPER - Hero Slider
			wp_enqueue_script(
				'goldengames-slider',
				mix('js/scripts/swiperSlider.js'),
				array('goldengames-swiper'),
				'1.0.0',
				true
			);
			// SWIPER - Offers tabs
			wp_enqueue_script(
				'goldengames-tabs-carousel',
				mix('js/scripts/swiperTabsCarousels.js'),
				array('goldengames-swiper'),
				'1.0.0',
				true
			);
			// SWIPER - Works carousel
			wp_enqueue_script(
				'goldengames-works-carousel',
				mix('js/scripts/swiperWorksCarousel.js'),
				array('goldengames-swiper'),
				'1.0.0',
				true
			);
			// AOS
			wp_enqueue_script(
				'goldengames-aos-init',
				mix('js/scripts/aos.js'),
				array('goldengames-aos'),
				'1.0.0',
				true
			);
		}

		// LOCALIZE
		global $post;
		$root_url = get_site_url();
		$find = array('http://', 'https://', 'www.', '/wp');
		$replace = '';
		$host_name = str_replace($find, $replace, $root_url);
		$languages = (function_exists('pll_languages_list')) ? (implode(", ", pll_languages_list($args = array('fields' => 'name')))) : '';
		$locale = (function_exists('pll_current_language')) ? pll_current_language() : '';
		$default_pagebanner_image = get_header_image();

		wp_localize_script('main', 'goldengamesData', array(
			'rootUrl'                   => $root_url,
			'hostName'                  => $host_name,
			'locale'                    => $locale,
			'languages'                 => $languages,
			'currentPage'               => $post->post_title,
			'defaultPageBannerImage'    => $default_pagebanner_image,
			'heroSwiper__speed'         => 1000,
			'heroSwiper__autoplayDelay' => 2500,
		));

		// Activate browser-sync on development environment
		if (getenv('APP_ENV') === 'development') :
			wp_enqueue_script('__bs_script__', getenv('WP_SITEURL') . ':3000/browser-sync/browser-sync-client.js', array(), null, true);
		endif;

		// Extra
		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
