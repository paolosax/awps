<?php

/**
 * The Site footer of the theme
 *
 * This is the template that include all the footer components/partials
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Buonsito_Theme
 */

// Get args from footer template
extract($args);
?>

<footer id="site-footer" <?php footer_classes("footer-two"); ?>>
    <div class="footer-widget-area light-theme pt-100 pb-50">
        <div class="container">
            <?php
            /**
             * Hook: buonsito_hook_footer_start
             */
            do_action('buonsito_hook_footer_start'); ?>
            <div class="row">
                <div class="col-lg-3 col-sm-6 order-1">
                    <!-- Site Info Widget -->
                    <div class="widget site-info-widget mb-50">
                        <div class="footer-logo mb-50">
                            <img src="<?php echo esc_attr(wp_get_attachment_image_url($company_logo, 'full')); ?>" alt="Logo">
                        </div>
                        <?php if (is_active_sidebar('footer_brand_sidebar')) : ?>
                            <?php dynamic_sidebar('footer_brand_sidebar'); ?>
                        <?php else : ?>
                            <p class="text-justify">
                                Situati a Miramare di Rimini, a pochi passi dalla spiaggia, questi appartamenti dispongono di angolo cottura, balcone e connessione Wi-Fi gratuita.
                            </p>
                            <br>
                            <p class="text-justify">
                                Gli alloggi del Residence Royal presentano arredi semplici e moderni, pavimenti piastrellati e una cucina provvista di forno, piano cottura e frigorifero.
                            </p>

                            <?php if ($social_network) : ?>
                                <div class="social-links mt-40 text-center">
                                    <?php foreach ($social_network as $social) : ?>
                                        <a href="<?php echo $social[buonsito_get_meta() . 'social_media_url']; ?>" target="_blank">
                                            <i class="<?php echo $social[buonsito_get_meta() . 'iconselect']; ?>"></i>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 order-3 order-lg-2">
                    <!-- Nav Widget -->
                    <div class="widget nav-widget mb-50">
                        <div>
                            <h4 class="widget-title"><?php _e('Menu.', 'buonsito'); ?></h4>
                            <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'primary-menu',
                                'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => null,
                                'container_class' => null,
                                'container_id'    => 'footer-menu',
                                'menu_class'      => null,
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 order-2 order-lg-3">
                    <!-- Contact Widget -->
                    <div class="widget contact-widget mb-50">
                        <h4 class="widget-title"><?php _e('Contact Us.', 'buonsito'); ?></h4>
                        <div class="contact-lists">
                            <div class="contact-box">
                                <div class="icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="desc">
                                    <h6 class="title"><?php _e('Phone Number.', 'buonsito'); ?></h6>
                                    <?php if ($details_phone_1) : ?>
                                        <a href="tel:<?= $details_phone_1; ?>" target="_blank"><?= $details_phone_1; ?></a>
                                    <?php endif; ?>
                                    <br>
                                    <?php if ($details_whatsapp) : ?>
                                        <a href="https://wa.me/<?php echo str_replace('+', '', str_replace(' ', '', $details_whatsapp)); ?>?text=Salve,%20desidero%20ricevere%20informazioni%20per%20un%20soggiorno.%20Grazie!" class="whatsapp-message" target="_blank"><?php echo $details_whatsapp; ?> &nbsp; <i class="fab fa-whatsapp"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="contact-box">
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="desc">
                                    <h6 class="title"><?php _e('Email Address.', 'buonsito'); ?></h6>
                                    <?php if ($details_email) : ?>
                                        <a href="<?php echo buonsito_url('_contact'); ?>#contact-form" class="w-email-ga" data-ga="<?php echo $details_email; ?>"><?= $details_email; ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="contact-box">
                                <div class="icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="desc">
                                    <h6 class="title"><?php _e('Office Address.', 'buonsito'); ?></h6>
                                    <?php if ($gmaps_url) : ?>
                                        <a href="<?= $gmaps_url; ?>" target="_blank"><?= $details_address; ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            /**
             * Hook: buonsito_hook_footer_end.
             */
            do_action('buonsito_hook_footer_end'); ?>
        </div>
    </div>
    <div class="copyright-area light-theme pt-30 pb-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5 order-2 order-md-1">
                    <?php /* translators: %1$s: copyright url %2$s: copyright name %3$s: copyright year */
                    $copyright_text = sprintf(__('All rights reserved &copy;%1$s', 'buonsito'), date('Y'));
                    ?>
                    <p class="copyright-text copyright-two">
                        <?php echo $copyright_text; ?>
                        | <?php _e('P.IVA', 'buonsito'); ?>: <?php echo $vat; ?>
                    </p>
                </div>
                <div class="col-lg-6 col-md-7 order-1 order-md-2">
                    <div class="footer-menu text-center text-md-right">
                        <ul>
                            <li><a href="<?php echo buonsito_url('_privacy'); ?>"><?php _e('Privacy Policy', 'buonsito'); ?></a></li>
                            <li><a href="//www.buonsito.it"><?php _e('Siti web hotel', 'buonsito'); ?> Buonsito.it</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>