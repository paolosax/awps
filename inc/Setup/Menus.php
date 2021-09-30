<?php

namespace Awps\Setup;

/**
 * Menus
 */
class Menus
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action('after_setup_theme', array($this, 'menus'));
    }

    /**
     * Register all the menus
     *
     * @return void
     */
    public function menus()
    {
        /*
            Register all your menus here
        */
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'awps'),
            'primary-menu' => __('Primary Menu', 'buonsito'),
            'topbar-right' => __('Topbar right menu', 'buonsito'),
            'footer-menu'  => __('Footer Menu', 'buonsito'),
        ));
    }

    /**
     * Register the topbar menu
     *
     * @return void
     */
    public function topbar_menu()
    {
        // generate the topbar menu
        wp_nav_menu(array(
            'theme_location'  => 'topbar-right',
            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => null,
            'container_class' => null,
            'container_id'    => null,
            'menu_class'      => null,
            // 'walker'          => new WP_Main_Navwalker(),
            // 'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            // 'walker'          => new WP_Bootstrap_Navwalker(),
        ));
    }
}
