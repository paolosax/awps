<?php if ($args['images']) : ?>
    <section class="instagram-feed-section">
        <div class="container-fluid p-0">
            <div class="instagram-slider">
                <?php foreach ($args['images'] as $id => $image) : ?>
                    <a href="<?php echo esc_url(wp_get_attachment_image_url($id, 'large')); ?>" class="insta-popup" data-gallery="#home">
                        <img src="<?php echo wp_get_attachment_image_url($id, 'homepage-gallery'); ?>" alt="<?php echo esc_attr(wp_get_attachment($id, 'alt')); ?>">
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>