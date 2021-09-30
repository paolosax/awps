<?php if ($args['images']) : ?>
    <section class="banner-area banner-style-two" id="bannerSlider">

        <?php foreach ($args['images'] as $id => $image) : ?>

            <div class="single-banner d-flex align-items-center justify-content-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="banner-content text-center">
                                <span class="promo-tag" data-animation="fadeInDown" data-delay=".6s"><?php echo wp_get_attachment($id, 'caption'); ?></span>
                                <div class="clearfix"></div>
                                <h1 class="title" data-animation="fadeInLeft" data-delay=".9s"><?php echo wp_get_attachment($id, 'description'); ?></h1>

                                <?php
                                $cta_label = get_post_meta($id, 'cta_label', true);
                                $cta_url = get_post_meta($id, 'cta_url', true);

                                if ($cta_url) :
                                ?>
                                    <ul class="mt-20">
                                        <li data-animation="fadeInUp" data-delay="1.1s">
                                            <a class="main-btn btn-filled" href="<?php echo $cta_url; ?>"><?php echo $cta_label; ?></a>
                                        </li>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- banner bg -->
                <div class="banner-bg" style="background-image: url('<?php echo wp_get_attachment_image_url($id, 'homepage-slider'); ?>');"></div>

                <!--<div class="banner-overly"></div>-->
            </div>
        <?php endforeach; ?>
    </section>
<?php endif; ?>