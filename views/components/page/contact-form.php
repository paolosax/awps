<?php
extract($args);
?>
<div class="contact-form">
    <h3 class="m-0"><?php _e('Contact Us.', 'buonsito'); ?></h3>

    <?php
    if (is_active_sidebar('contact_section_sidebar')) :
        dynamic_sidebar('contact_section_sidebar');
    endif;

    /* if (function_exists('pll_current_language')) {
        $language = pll_current_language('slug');
        switch ($language) {
            case 'it':
                echo do_shortcode('[contact-form-7 id="4" title="Contact form - IT"]');
                break;
            case 'en':
                echo do_shortcode('[contact-form-7 id="2184" title="Contact form - EN"]');
                break;
            default:
                echo do_shortcode('[contact-form-7 id="4" title="Contact form - IT"]');
        }
    } else {
        echo do_shortcode('[contact-form-7 id="4" title="Contact form - IT"]');
    } */
    ?>
</div>