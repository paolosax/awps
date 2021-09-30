<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awps
 */

?>


<?php
/**
 * Hook: buonsito_hook_content_end
 */
do_action('buonsito_hook_content_end'); ?>
</div><!-- #content-wrapper -->

<?php
/**
 * Hook: buonsito_hook_after_content
 * 
 * @hooked component/common/offers-carousel - 10 (outputs the offers carousel)
 */
do_action('buonsito_hook_after_content'); ?>

<?php
/**
 * Get the template part for displaying the site-footer
 *
 */
/* get_template_part('template-parts/partials/site-footer/site-footer', null, [
	'company_logo' => get_theme_mod(CUSTOMIZER_SETTING . 'footer_bottom_bar_logo_image'),
	'details_company_name' => buonsito_get_core_option('name'),
	'details_address' => buonsito_get_core_option('address'),
	'details_phone_1' => buonsito_get_core_option('phone_1'),
	'details_email' => buonsito_get_core_option('email'),
	'details_whatsapp' => buonsito_get_core_option('whatsapp'),
	'vat' => buonsito_get_core_option('vat'),
	'gmaps_url' => buonsito_get_core_option('gmaps'),
	'social_network' => buonsito_get_core_option('social'),
]); */

?>

<?php
/**
 * Hook: buonsito_hook_after_footer.
 *
 * @hooked </#page> - 10 (outputs the closing </div> tag of the #page element.
 */
do_action('buonsito_hook_after_footer'); ?>

</div><!-- .page-wrapper -->

<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<div class="mobile-menu-overlay">
</div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
	<div class="mobile-menu-wrapper">
		<span class="mobile-menu-close"><i class="icon-close"></i></span>

		<!-- <a href="index.html" class="logo">
                <img src="assets/img/goldengames-logo.svg" alt="GoldenGames - logo">
                <span class="logo__payoff">The Play Makers</span>
            </a> -->

		<form action="#" method="get" class="mobile-search">
			<label for="mobile-search" class="sr-only">Search</label>
			<input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
			<button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
		</form>

		<ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Prodotti</a>
			</li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
				<nav class="mobile-nav">
					<ul class="mobile-menu">
						<li>
							<a href="#">Offerte</a>
							<ul>
								<li><a href="">Usato</a></li>
								<li><a href="">Usato esposizione</a></li>
								<li><a href="">Nuovo e Outlet</a></li>
								<li><a href="">Noleggio operativo</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Realizzazioni</a>
							<ul>
								<li><a href="">Stabilimenti Balneari</a></li>
								<li><a href="">Piscine e centri sportivi</a></li>
								<li><a href="">Hotel</a></li>
								<li><a href="">Villaggi e campeggi</a></li>
								<li><a href="">Privati</a></li>
								<li><a href="">Ristoranti e agriturismi</a></li>
								<li><a href="">Comuni</a></li>
								<li><a href="">Parchi giochi</a></li>
								<li><a href="">Aree giochi indoor</a></li>
								<li><a href="">Asili e scuole materne</a></li>
								<li><a href="">Parrocchie</a></li>
								<li><a href="">Centri commerciali</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Servizi</a>
							<ul>
								<li><a href="">Noleggio</a></li>
								<li><a href="">FAQ</a></li>
							</ul>
						</li>
						<li>
							<a href="#">News</a>
						</li>
					</ul>
				</nav><!-- End .mobile-nav -->
			</div><!-- .End .tab-pane -->
			<div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
				<nav class="mobile-cats-nav">
					<ul class="mobile-cats-menu">
						<li><a href="#">Playground per esterni</a></li>
						<li><a href="#">Strutture d&#x27;arrampicata</a></li>
						<li><a href="#">Giostre e girelli</a></li>
						<li><a href="#">Dondoli e giochi a molla</a></li>
						<li><a href="#">Altalene</a></li>
						<li><a href="#">Giochi per giardini</a></li>
						<li><a href="#">Playground per interni</a></li>
						<li><a href="#">Aree baby</a></li>
						<li><a href="#">Tappeti elastici</a></li>
						<li><a href="#">Giochi gonfiabili</a></li>
						<li><a href="#">Gonfiabili acquatici</a></li>
						<li><a href="#">Giochi sportivi</a></li>
						<li><a href="#">Fitness per esterni</a></li>
						<li><a href="#">Arredo urbano</a></li>
						<li><a href="#">Accessori</a></li>
						<li><a href="#">Ricambi</a></li>
					</ul><!-- End .mobile-cats-menu -->
				</nav><!-- End .mobile-cats-nav -->
			</div><!-- .End .tab-pane -->
		</div><!-- End .tab-content -->

		<div class="social-icons">
			<a href="https://www.facebook.com/GoldenGames" class="social-icon" title="Facebook" target="_blank">
				<i class="icon-facebook-f"></i>
			</a>
			<a href="https://www.instagram.com/golden.games.srl/" class="social-icon" title="Instagram" target="_blank">
				<i class="icon-instagram"></i>
			</a>
			<a href="https://www.youtube.com/user/giochigoldengames/" class="social-icon" title="YouTube" target="_blank">
				<i class="icon-youtube"></i>
			</a>
		</div><!-- End .social-icons -->
	</div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<?php wp_footer(); ?>
</body>
</html>
