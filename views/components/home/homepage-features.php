<?php if ($args['title']) : ?>
    <section class="cta-section pt-100 pb-150">
        <div class="container">
            <div class="cta-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-8 col-sm-9 col-10 order-2 order-lg-1">
                        <div class="cta-text">
                            <div class="section-title mb-20">
                                <span class="title-tag"><?php echo esc_html($args['title_tag']); ?></span>
                                <h2><?php echo esc_html($args['title']); ?></h2>
                            </div>
                            <p><?php echo esc_html($args['lead_text']); ?>...</p>
                            <?php if ($args['cta_url']) : ?>
                                <a href="<?php echo $args['cta_url'] ?>" class="main-btn btn-filled"><?php echo $args['cta_label']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-10 col-sm-11 col-10 order-1 order-lg-2">
                        <!-- feature loop -->
                        <div class="cta-features">
                            <?php foreach ($args['list'] as $group => $meta) : ?>
                                <!-- feature box -->
                                <div class="single-feature wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <i class="<?php echo esc_attr($meta[buonsito_get_meta().'homepage_features_list_item_icon_class']); ?>"></i>
                                    </div>
                                    <div class="cta-desc">
                                        <h3><a href="#"><?php echo esc_html($meta[buonsito_get_meta().'homepage_features_list_item_title']); ?></a></h3>
                                        <p><?php echo esc_html($meta[buonsito_get_meta().'homepage_features_list_item_text']); ?></p>
                                        <span class="count"><?php echo esc_html($meta[buonsito_get_meta().'homepage_features_list_item_count']); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>