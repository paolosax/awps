<?php
// var_dump($args);
extract($args);

// archive
if (is_archive()) {
    $bg_image = !empty($titlebar_custom_background_image) ? esc_url($titlebar_custom_background_image) : esc_url('//demo1.buonsito.net/wp-demo/wp-content/uploads/2021/06/royal2.jpg');
    $inline_bg = $bg_image ? ' style="background-image: url(\'' . $bg_image . '\')"' : '';
}

if (is_singular()) {
    // set default titlebar background to post poster image @todo: i doesn't know is this is right but it work, and if other condition go true it will be replaced by their
    $bg_image = get_the_post_thumbnail_url(get_the_ID(), 'titlebar') ? esc_url(get_the_post_thumbnail_url(get_the_ID(), 'titlebar')) : esc_url($titlebar_default_background_image);
    $inline_bg = ($bg_image) ? ' style="background-image: url(\'' . $bg_image . '\')"' : '';

    // single - get the background image based on titlebar_background_selection:
    // Default: get header image from Customizer>Theme settings>Title-bar>Background 
    if ('default' === $titlebar_background_selection) {
        $bg_image = esc_url(get_header_image());
        $inline_bg = ($bg_image) ? ' style="background-image: url(\'' . $bg_image . '\')"' : '';
    }
    // Post (default setting): get the post's Featured Image (with fallbackimage from Customizer>Theme settings>Posts & Pages>Posts>Single
    if ('post_image' === $titlebar_background_selection) {
        $bg_image = esc_url(get_the_post_thumbnail_url(get_the_ID(), 'titlebar'));
        $inline_bg = ($bg_image) ? ' style="background-image: url(\'' . $bg_image . '\')"' : ' style="background-image: url(\'' . esc_url(wp_get_attachment_image_url($titlebar_default_background_image, 'titlebar')) . '\')"';
    }
    // Custom image: get the post's Custom image from the Title-bar section in edit page (with fallbackimage from Customizer>Theme settings>Posts & Pages>Posts>Single
    if ('custom_image' === $titlebar_background_selection) {
        $bg_image = esc_url(wp_get_attachment_image_url($titlebar_custom_background_image, 'titlebar'));
        $inline_bg = ($bg_image) ? ' style="background-image: url(\'' . $bg_image . '\')"' : ' style="background-image: url(\'' . esc_url(wp_get_attachment_image_url($titlebar_default_background_image, 'titlebar')) . '\')"';
    }
    // Color: Set a color as Title-bar Background
    if ('color' === $titlebar_background_selection) {
        $bg_color = esc_attr($titlebar_background_color);
        $inline_bg = ($bg_color) ? ' style="background-color: ' . $bg_color . ';"' : '';
    }
}

if (is_404()) {
    // $bg_image = !empty($titlebar_default_background_image) ? esc_url($titlebar_default_background_image) : esc_url('//demo1.buonsito.net/wp-demo/wp-content/uploads/2021/06/royal2.jpg');
    $bg_image = $titlebar_default_background_image;
    $inline_bg = ($bg_image) ? ' style="background-image: url(\'' . $bg_image . '\')"' : '';
}

?>

<section class="breadcrumb-area" <?php echo $inline_bg; ?>>
    <div class="container">
        <div class="breadcrumb-text">
            <?php if ($titlebar_tag) : ?>
                <span>
                    <?php echo $titlebar_tag; ?>
                </span>
            <?php endif; ?>
            <?php if ($titlebar_title) : ?>
                <h2 class="page-title"><?php echo $titlebar_title; ?></h2>
            <?php endif; ?>
            <?php
            if (function_exists('buonsito_breadcrumbs'))
                echo buonsito_breadcrumbs();
            ?>
        </div>
    </div>
</section>