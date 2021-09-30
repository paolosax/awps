<?php
// Get args
extract($args);
?>
<div class="contact-info py-30">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-6 col-10">
            <div class="info-box">
                <div class="icon">
                    <i class="flaticon-address"></i>
                </div>
                <div class="desc">
                    <h4><?php _e('Address', 'buonsito'); ?></h4>
                    <p><a href="<?php echo esc_attr($gmaps_url); ?>" target="_blank"><?php echo $details_address; ?></a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-10">
            <div class="info-box">
                <div class="icon">
                    <i class="flaticon-call"></i>
                </div>
                <div class="desc">
                    <h4><?php _e('Phone', 'buonsito'); ?></h4>
                    <p><a href="tel:<?php echo esc_attr($details_phone_1); ?>" target="_blank"><?php echo $details_phone_1; ?></a></p>
                    <p><i class="fab fa-whatsapp"></i> <a href="https://wa.me/<?php echo str_replace('+', '', str_replace(' ', '', $details_whatsapp)); ?>?text=Salve,%20desidero%20ricevere%20informazioni%20per%20un%20soggiorno.%20Grazie!" class="whatsapp-message" target="_blank"><?php echo $details_whatsapp; ?></a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-10">
            <div class="info-box">
                <div class="icon">
                    <i class="flaticon-email-2"></i>
                </div>
                <div class="desc">
                    <h4><?php _e('Email', 'buonsito'); ?></h4>
                    <p><a href="mailto:<?php echo esc_attr($details_email); ?>" target="_blank"><?php echo $details_email; ?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>