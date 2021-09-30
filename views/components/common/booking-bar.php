<?php //extract($args);  ?>
<section class="booking-form booking-form-dark">
    <div class="container">
        <div class="booking-form-inner">
            <form action="<?php echo buonsito_url('_contact'); ?>#contact-form" method="POST" class="to-contact-form">
                <div class="row align-items-end period">
                    <div class="col-lg-3 col-sm-6">
                        <div class="inputs-filed mt-30">
                            <label for="arrival-date"><?php _e('Arrival', 'buonsito'); ?></label>
                            <div class="icon"><i class="far fa-calendar-alt"></i></div>

                            <input type="text" class="range checkin w-cookie" placeholder="<?php _e('Arrival', 'buonsito'); ?>" name="checkin" id="checkin">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="inputs-filed mt-30">
                            <label for="departure-date"><?php _e('Departure', 'buonsito'); ?></label>
                            <div class="icon"><i class="far fa-calendar-alt"></i></div>

                            <input type="text" class="range checkout w-cookie" placeholder="<?php _e('Departure', 'buonsito'); ?>" name="checkout" id="checkout">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="inputs-filed mt-30">
                            <label for="guests"><?php _e('Room', 'buonsito'); ?></label>

                            <select name="room" id="guests" class="w-cookie">
                                <option value="" disabled selected><?php _e('Select from here', 'buonsito'); ?></option>
                                <option>Appartamento 1 camera da letto</option>
                                <option>Appartamento 2 camere da letto</option>
                                <option>Appartamento piano terra 2 camere</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="inputs-filed mt-30">
                            <button type="submit"><?php _e('Check availability', 'buonsito'); ?></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>