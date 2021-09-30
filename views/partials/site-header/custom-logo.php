<?php

/**
 * Generate Custom logo
 */
if (has_custom_logo()) {
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo_img = wp_get_attachment_image_src($custom_logo_id, 'full');
    // var_dump($logo[0]);

    $custom_logo_image = goldengames_html_tag(
        'img',
        array(
            'class' => 'logo',
            // 'src' => wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full'),
            'src' => $logo_img[0],
        )
    );
    $custom_logo_motto = goldengames_html_tag(
        'span',
        array(
            'class' => 'logo__payoff',
        ),
        get_bloginfo('description')
    );
    $custom_logo = goldengames_html_tag(
        'a',
        array(
            'class' => 'logo',
            'src' => get_bloginfo('url'),
        ),
        $custom_logo_image . $custom_logo_motto,
    );
    echo $custom_logo;
} else {
    $logo_h1 = goldengames_html_tag(
        'h1',
        array(),
        get_bloginfo('name')
    );

    $logo = goldengames_html_tag(
        'a',
        array(
            'src' =>  get_bloginfo('url'),
        ),
        '<h1>' . get_bloginfo('name') . '</h1>',
    );
    echo $logo;
}
