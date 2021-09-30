<?php

namespace Awps\Setup;

class Setup
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action('after_setup_theme', array($this, 'setup'));
        add_action('after_setup_theme', array($this, 'content_width'), 0);
    }

    public function setup()
    {
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on goldengames, use a find and replace
		 * to change 'goldengames' to the name of your theme in all the template files.
         * You can activate this if you're planning to build a multilingual theme
		 */
        load_theme_textdomain('awps', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Excertp on pages.
         *
         * @link https://developer.wordpress.org/reference/functions/add_post_type_support/
         */
        add_post_type_support('page', 'excerpt');

        /*
         * Enable support for Post Formats.
         *
         * @link https://wordpress.org/support/article/post-formats/
         */
        add_theme_support(
            'post-formats',
            array(
                'aside',
                'image',
                'video',
                'quote',
                'link',
                'gallery',
                'audio',
                'status',
                'chat',
            )
        );
        /* To enable Post Formats in other post types than posts (Page, CPTs...):  */
        // add_post_type_support( 'page', 'post-formats' );
        // add_post_type_support( 'offer', 'post-formats' );

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support('post-thumbnails');
        // Add image sizes
        add_image_size('slider', 1920, 1080, true); //
        add_image_size('banner-bg', 1900, 815, true); //
        add_image_size('sectors', 450, 800, true); //
        add_image_size('products-grid', 500, 282, true); //
        add_image_size('offers-carousel', 600, 600, true); //
        add_image_size('works-carousel', 600, 450, true); //
        add_image_size('cover-banner', 424, 99999); //

        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add woocommerce support and woocommerce override
         */
        add_theme_support('woocommerce');


        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
        /* add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )); */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'awps_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        /**
         * Add support for blocks Wide Alignment.
         *
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#wide-alignment
         */
        add_theme_support('align-wide');

        /**
         * Add support for blocks Styles.
         *
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#default-block-styles
         */
        add_theme_support('wp-block-styles');

        /**
         * Add support for Editor styles.
         *
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#editor-styles
         */
        // add_theme_support('editor-styles');
        // add_editor_style('dist/assets/css/editor.css');

        /**
         * Add support for blocks color palettes.
         *
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes
         */

        /* $customizer_palette = goldengames_get_customizer('global_color_palette_settings');
        if ($customizer_palette) {
            add_theme_support('editor-color-palette', $customizer_palette);
        } */

        /**
         * Add support for responsive embedds.
         * The embed blocks automatically apply styles to embedded content to reflect the aspect ratio of content that is embedded in an iFrame
         *
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#responsive-embedded-content
         */
        add_theme_support('responsive-embeds');

        /**
         * Add support for custom units.
         * In addition to pixels, users can use other units to define sizes, paddings… The available units are: px, em, rem, vh, vw.
         *
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#support-custom-units
         */
        add_theme_support('custom-units');

        /**
         * Disabling custom colors in block color palettes
         *
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-colors-in-block-color-palettes
         */
        // add_theme_support( 'disable-custom-colors' );

        /**
         * Disabling custom gradients
         *
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-gradients
         */
        // add_theme_support( 'disable-custom-gradients' );

        /**
         * Add support for block gradient presets
         *
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-gradient-presets
         */
        // $customizer_gradient_palette = BUONSITO_CONFIG['global_gradient_palette_settings'];
        // $gradients = array();
        // foreach ($customizer_gradient_palette as $row)
        // {
        //     array_push($gradients, array(
        //         'name'      => __( $row['name'], 'goldengames' ),
        //         'gradient'  => 'linear-gradient(135deg, ' . hex2rgba($row['from-color']) . ') 0%, ' . hex2rgba($row['to-color']) . ' 100%)',
        //         'slug'      => sanitize_title($row['name'])
        //     ));
        // }
        // add_theme_support( 'editor-gradient-presets', $gradients);

        /**
         * Add support for block font sizes
         *
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-font-sizes
         */
        add_theme_support('editor-font-sizes', array(
            array(
                'name' => __('Small', 'goldengames'),
                'size' => 12,
                'slug' => 'small'
            ),
            array(
                'name' => __('Regular', 'goldengames'),
                'size' => 16,
                'slug' => 'regular'
            ),
            array(
                'name' => __('Large', 'goldengames'),
                'size' => 36,
                'slug' => 'large'
            ),
            array(
                'name' => __('Huge', 'goldengames'),
                'size' => 50,
                'slug' => 'huge'
            )
        ));

        /**
         * Disabling custom font sizes
         *
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-font-sizes
         */
        // add_theme_support('disable-custom-font-sizes');
    }

    /*
        Define a max content width to allow WordPress to properly resize your images
    */
    public function content_width()
    {
        $GLOBALS['content_width'] = apply_filters('content_width', 1440);
    }
}
