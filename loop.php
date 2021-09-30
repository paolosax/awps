<?php

/**
 * The main Loop
 *
 * @package Buonsito_Theme
 */

/**
 * Hook: buonsito_hook_content_before_loop.
 */
do_action('buonsito_hook_content_before_loop');

if (have_posts()) {
    /* Start the Loop */
    while (have_posts()) :
        the_post();

        /**
         * Hook: buonsito_hook_content_before_loop_template
         */
        do_action('buonsito_hook_content_before_loop_template');

        if (is_search()) {

            /**
             * Run the loop for the search to output the results.
             * If you want to overload this in a child theme then include a file
             * called content-search.php and that will be used instead.
             */
            get_template_part('template-parts/content', 'search');
        } elseif (is_archive()) {

            // Get templates from archives
            get_template_part('template-parts/archives/item', get_post_type(), $args = $args);
        } else {

            /*
            * Include the Post-Type-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
            */
            get_template_part('template-parts/content', get_post_type(), $args = $args);
        }
        /**
         * Hook: buonsito_hook_content_after_loop_template
         * // @hooked comment template [single & page] - outputs the comment template
         * // @hooked the_post_navigation() [single] - outputs the post navigation
         * @hooked get_template_part "lodging-amenities-list" (is_singular('lodging')) - 10
         */
        do_action('buonsito_hook_content_after_loop_template');

    endwhile;
} else {

    /**
     * Hook: buonsito_hook_content_before_loop_template
     */
    do_action('buonsito_hook_content_before_loop_template');

    get_template_part('template-parts/content', 'none');

    /**
     * Hook: buonsito_hook_content_after_loop_template
     * // @hooked comment template [single & page] - outputs the comment template
     * // @hooked the_post_navigation() [single] - outputs the post navigation
     * @hooked get_template_part "lodging-amenities-list" (is_singular('lodging')) - 10
     */
    do_action('buonsito_hook_content_after_loop_template');
}

/**
 * Hook: buonsito_hook_content_after_loop.
 * @hooked get_template_part "lodging-related-posts" (is_singular('lodging')) - 10
 */
do_action('buonsito_hook_content_after_loop');
