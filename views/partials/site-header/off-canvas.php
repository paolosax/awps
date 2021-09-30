<?php extract($args); ?>
<!--====== OFF CANVAS START ======-->
<div class="offcanvas-wrapper">
    <div class="offcanvas-overly"></div>
    <div class="offcanvas-widget">
        <a href="#" class="offcanvas-close"><i class="fas fa-times"></i></a>

        <!-- About Widget -->
        <div class="widget about-widget">
            <div class="site-logo">
                <?php the_custom_logo(); ?>
            </div>
        </div>
        <!-- Nav Widget -->
        <div class="widget nav-widget">
            <!--<h5 class="widget-title"><?php /*_e('Nav', 'buonsito'); */ ?></h5>-->
            <?php buonsito_main_menu('primary-menu'); ?>
        </div>
        <!-- Social Link -->
        <div class="widget social-link">
            <h5 class="widget-title"><?php _e('Follow us', 'buonsito'); ?></h5>
            <ul>
                <?php if ($social_network) :
                    foreach ($social_network as $social) : ?>
                        <li>
                            <a href="<?php echo $social[buonsito_get_meta().'social_media_url']; ?>" target="_blank">
                                <i class="<?php echo $social[buonsito_get_meta().'iconselect']; ?>"></i>
                            </a>
                        </li>
                <?php
                    endforeach;
                endif; ?>
            </ul>

            <hr class="mt-20">

            <p><i class="fas fa-phone"></i> &nbsp; <a href="tel:<?php echo $details_phone_1; ?>"><?php echo $details_phone_1; ?></a></p>
            <p><i class="fab fa-whatsapp"></i> &nbsp; <a href="https://wa.me/<?php echo str_replace('+', '', str_replace(' ', '', $details_whatsapp)); ?>?text=Salve,%20desidero%20ricevere%20informazioni%20per%20un%20soggiorno.%20Grazie!" class="whatsapp-message" target="_blank"><?php echo $details_whatsapp; ?></a></p>
            <p><i class="fas fa-envelope"></i> &nbsp; <a href="<?php echo buonsito_url('_contact'); ?>#contact-form" class="w-email-ga" data-ga="<?php echo $details_email; ?>"><?php echo $details_email; ?></a></p>
            <p><i class="fas fa-map-signs"></i> &nbsp; <a href="<?php echo $gmaps_url; ?>" target="_blank"><small><?php echo $details_address; ?></small></a></p>
        </div>
    </div>
</div>
<!--====== OFF CANVAS END ======-->