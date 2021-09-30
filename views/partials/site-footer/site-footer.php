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

<!-- .footer -->
<footer id="site-footer" <?php footer_classes('gg-footer'); ?> <?= buonsito_inline_styles(); ?>>
    <?php
    /**
     * Hook: buonsito_hook_footer_start
     */
    do_action('buonsito_hook_footer_start');
    ?>
    <div class="gg-footer-top gg-section" <?= buonsito_inline_styles(['background-color' => '#ff8300']); ?>>
        <div class="gg-footer__wrapper d-flex flex-column flex-lg-row align-items-stretch">
            <div class="contact-box text-center">
                <h3>Dove siamo</h3>
                <address>Ponte Ospedaletto di Longiano, <br>47020 (Forlì-Cesena), Italy</address>
                <dl>
                    <dt><i class="icon-map-marker"></i> Sede legale e operativa</dt>
                    <dd>Via Montali 384</dd>
                    <dt><i class="icon-map-marker"></i> Esposizione e deposito</dt>
                    <dd>Via Pio La Torre 68</dd>
                </dl>
                <ul class="widget-list customer-care">
                    <li class="d-flex flex-row justify-content-center">
                        <a href="mailto:goldengames@goldengames.org"><i class="icon-envelope"></i> goldengames@goldengames.org</a>
                    </li>
                    <li class="d-flex flex-row justify-content-center">
                        <a href="tel:+39 0547 56710"><i class="icon-phone"></i> +39 0547 56710</a>
                    </li>
                    <li class="d-flex flex-row justify-content-center">
                        <i class="fas fa-fax"></i>&nbsp;+39 0547 655612
                    </li>
                </ul><!-- End .widget-list -->
            </div><!-- End .contact-box -->
            <div class="contact-box text-center">
                <h3>Responsabili Commerciali</h3>
                <ul class="widget-list customer-care">
                    <li class="d-flex flex-column align-items-center">
                        <strong>Simone Faedi</strong>
                        <a href="#"><i class="icon-phone"></i> +39 335 1201290</a>
                        <a href="#"><i class="icon-envelope"></i> simone.faedi@goldengames.org</a>
                    </li>
                    <li class="d-flex flex-column align-items-center">
                        <strong>Marcello Maroni</strong>
                        <a href="#"><i class="icon-phone"></i> +39 334 6664770</a>
                        <a href="#"><i class="icon-envelope"></i> marcello.maroni@goldengames.org</a>
                    </li>
                    <li class="d-flex flex-column align-items-center">
                        <strong>Emanuele Frisoni</strong>
                        <a href="#"><i class="icon-phone"></i> +39 337 612362</a>
                    </li>
                </ul><!-- End .widget-list -->
            </div><!-- End .contact-box -->
            <div class="contact-box text-center">
                <h3>Responsabili noleggio</h3>
                <ul class="widget-list customer-care">
                    <li class="d-flex flex-column align-items-center">
                        <strong>Marcello Maroni</strong>
                        <a href="#"><i class="icon-phone"></i> +39 334 6664770</a>
                        <a href="#"><i class="icon-envelope"></i> marcello.maroni@goldengames.org</a>
                    </li>
                </ul><!-- End .widget-list -->
            </div><!-- End .contact-box -->
        </div>
    </div>
    <!-- Google Map -->
    <div class="gg-footer-map map-responsive gg-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11460.598021457748!2d12.359393!3d44.100907!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xced193dbd064ba7c!2sGolden+Games+Srl!5e0!3m2!1sit!2sit!4v1436971847228" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="gg-footer-middle gg-section" <?= buonsito_inline_styles(['background-color' => '#31AB54']); ?>>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="widget">
                        <h4 class="widget-title text-center text-md-left">Golden Games S.r.l.</h4><!-- End .widget-title -->
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="widget-list">
                                    <li>Via Montali n° 384</li>
                                    <li>Ponte Ospedaletto di Longiano</li>
                                    <li>47020 (Forli-Cesena) ITALY</li>
                                    <li>Partita IVA: 02041030400</li>
                                    <li>Iscrizione CCIAA di Forlì-Cesena</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="widget-list mb-2">
                                    <li><strong>Banca Popolare Emilia Romagna</strong> - Sede Centrale di Rimini</li>
                                    <li>IBAN: IT98Q0538724201000000603435</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="payments-logos">
                                    <li class="payments-logos__item"><img src="https://dummyimage.com/160x120/cccccc/fff" alt=""></li>
                                    <li class="payments-logos__item"><img src="https://dummyimage.com/160x120/cccccc/fff" alt=""></li>
                                    <li class="payments-logos__item"><img src="https://dummyimage.com/160x120/cccccc/fff" alt=""></li>
                                    <li class="payments-logos__item"><img src="https://dummyimage.com/160x120/cccccc/fff" alt=""></li>
                                    <li class="payments-logos__item"><img src="https://dummyimage.com/160x120/cccccc/fff" alt=""></li>
                                    <li class="payments-logos__item"><img src="https://dummyimage.com/160x120/cccccc/fff" alt=""></li>
                                    <li class="payments-logos__item"><img src="https://dummyimage.com/160x120/cccccc/fff" alt=""></li>
                                    <li class="payments-logos__item"><img src="https://dummyimage.com/160x120/cccccc/fff" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- End .widget -->
                </div><!-- End .col -->
            </div>
        </div>
    </div>
    <div class="gg-footer-bottom" <?= buonsito_inline_styles(['background-color' => '#011a22']); ?>>
        <div class="gg-footer__wrapper d-flex justify-content-between align-items-stretch">
            <p class="footer-copyright text-center">Copyright © <script>
                    document.write(new Date().getFullYear())
                </script> GoldenGames. Tutti i diritti riservati.</p>
            <p class="footer-legal text-center"><a href="http://www.buonsito.it" target="_blank">Sito web</a> by Buonsito.it</p>
            <!-- End .footer-copyright -->
        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer><!-- End .footer -->
<?php
/**
 * Hook: buonsito_hook_footer_end.
 */
do_action('buonsito_hook_footer_end');
?>
</footer><!-- End .footer -->