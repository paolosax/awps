<?php

/**
 * The Front-page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Buonsito_Theme
 */

get_header(null, $args = array());
?>
<?php
/**
 * Hook: goldengames_hook_content_before_main.
 */
do_action('goldengames_hook_content_before_main'); ?>

<main id="primary" <?php main_tag_classes('front-page'); ?>>
	<?php
	/**
	 * Hook: goldengames_hook_content_main_start.
	 */
	do_action('goldengames_hook_content_main_start'); ?>

	<?php // get_template_part('loop', null, $args = array('content' => 'front-page'));
	?>

	<!-- .gg-slider -->
	<div class="gg-slider">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper gg-slider__wrapper">
			<!-- Slides -->
			<div class="swiper-slide gg-slider__slide">
				<img data-src="https://dummyimage.com/1920x1080/336699/fff" class="swiper-lazy d-block" alt="FantaCastelli&amp;reg;">
				<div class="swiper-lazy-preloader"></div>
				<div class="swiper-caption gg-slider__caption d-none d-md-flex flex-column justify-content-end">
					<div class="intro text-center">
						<div class="content">
							<h2 class="h1">FantaCastelli&reg;</h2>
							<p class="h4 text-white">I migliori playground per esterni</p>
						</div>
						<div class="action">
							<a href="">Visita la pagina!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide gg-slider__slide">
				<img data-src="https://dummyimage.com/1920x1080/336699/fff" class="swiper-lazy d-block" alt="Scopri gli spettacolari scivoli per piscine">
				<div class="swiper-lazy-preloader"></div>
				<div class="swiper-caption gg-slider__caption d-none d-md-flex flex-column justify-content-end">
					<div class="intro text-center">
						<div class="content">
							<h2 class="h1">Scopri gli spettacolari scivoli per piscine</h2>

						</div>
						<div class="action">
							<a href="">Guarda la gallery!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide gg-slider__slide">
				<img data-src="https://dummyimage.com/1920x1080/336699/fff" class="swiper-lazy d-block" alt="Giochi per comuni e aree pubbliche">
				<div class="swiper-lazy-preloader"></div>
				<div class="swiper-caption gg-slider__caption d-none d-md-flex flex-column justify-content-end">
					<div class="intro text-center">
						<div class="content">
							<h2 class="h1">Giochi per comuni e aree pubbliche</h2>

						</div>
						<div class="action">
							<a href="">Visita la pagina!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide gg-slider__slide">
				<img data-src="https://dummyimage.com/1920x1080/336699/fff" class="swiper-lazy d-block" alt="Crea la tua palestra &amp;quot;Open Air&amp;quot;">
				<div class="swiper-lazy-preloader"></div>
				<div class="swiper-caption gg-slider__caption d-none d-md-flex flex-column justify-content-end">
					<div class="intro text-center">
						<div class="content">
							<h2 class="h1">Crea la tua palestra &quot;Open Air&quot;</h2>
							<p class="h4 text-white">con attrezzi sicuri e intuitivi</p>
						</div>
						<div class="action">
							<a href="">Visita la pagina!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide gg-slider__slide">
				<img data-src="https://dummyimage.com/1920x1080/336699/fff" class="swiper-lazy d-block" alt="Realizziamo i tuoi sogni!">
				<div class="swiper-lazy-preloader"></div>
				<div class="swiper-caption gg-slider__caption d-none d-md-flex flex-column justify-content-end">
					<div class="intro text-center">
						<div class="content">
							<h2 class="h1">Realizziamo i tuoi sogni!</h2>
							<p class="h4 text-white">Progettazione aree gioco</p>
						</div>
						<div class="action">
							<a href="">Visita la pagina!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide gg-slider__slide">
				<img data-src="https://dummyimage.com/1920x1080/336699/fff" class="swiper-lazy d-block" alt="Il nostro nuovo shop online">
				<div class="swiper-lazy-preloader"></div>
				<div class="swiper-caption gg-slider__caption d-none d-md-flex flex-column justify-content-end">
					<div class="intro text-center">
						<div class="content">
							<h2 class="h1">Il nostro nuovo shop online</h2>

						</div>
						<div class="action">
							<a href="">Scopri le offerte!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide gg-slider__slide">
				<img data-src="https://dummyimage.com/1920x1080/336699/fff" class="swiper-lazy d-block" alt="Dal 1990, giochi gonfiabili di alta qualità">
				<div class="swiper-lazy-preloader"></div>
				<div class="swiper-caption gg-slider__caption d-none d-md-flex flex-column justify-content-end">
					<div class="intro text-center">
						<div class="content">
							<h2 class="h1">Dal 1990, giochi gonfiabili di alta qualità</h2>

						</div>
						<div class="action">
							<a href="">Visita la pagina!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide gg-slider__slide">
				<img data-src="https://dummyimage.com/1920x1080/336699/fff" class="swiper-lazy d-block" alt="Scopri i nostri playground per interni">
				<div class="swiper-lazy-preloader"></div>
				<div class="swiper-caption gg-slider__caption d-none d-md-flex flex-column justify-content-end">
					<div class="intro text-center">
						<div class="content">
							<h2 class="h1">Scopri i nostri playground per interni</h2>

						</div>
						<div class="action">
							<a href="">Visita la pagina!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- If we need pagination -->
		<!-- <div class="swiper-pagination gg-slider__pagination"></div> -->

		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev gg-slider__button-prev"></div>
		<div class="swiper-button-next gg-slider__button-next"></div>

		<!-- If we need scrollbar -->
		<!-- <div class="swiper-scrollbar gg-slider__scrollbar"></div> -->
	</div><!-- End .gg-slider -->
	<section class="gg-section gg-icon-cards container" data-aos="fade-up">
		<div class="gg-icon-cards__wrapper row">
			<div class="gg-icon-cards__item col-lg-3 col-sm-6">
				<div class="icon-box icon-box-card text-center" onMouseOver="this.style.backgroundColor='#ff8300'" onMouseOut="this.style.backgroundColor='#fff'">
					<span class="icon-box-icon">
						<i class="fas fa-thumbs-up"></i>
					</span>
					<div class="icon-box-content">
						<h3 class="icon-box-title">Oltre 8000 clienti soddisfatti</h3>
						<!-- End .icon-box-title -->
						<p>Prodotti della migliore qualità sul mercato</p>
					</div><!-- End .icon-box-content -->
				</div><!-- End .icon-box -->
			</div><!-- End .col-lg-4 col-sm-6 -->
			<div class="gg-icon-cards__item col-lg-3 col-sm-6">
				<div class="icon-box icon-box-card text-center" onMouseOver="this.style.backgroundColor='#f8d726'" onMouseOut="this.style.backgroundColor='#fff'">
					<span class="icon-box-icon">
						<i class="fas fa-shipping-fast"></i>
					</span>
					<div class="icon-box-content">
						<h3 class="icon-box-title">Merce in pronta consegna</h3>
						<!-- End .icon-box-title -->
						<p>Assistenza su tutto il territorio nazionale</p>
					</div><!-- End .icon-box-content -->
				</div><!-- End .icon-box -->
			</div><!-- End .col-lg-4 col-sm-6 -->
			<div class="gg-icon-cards__item col-lg-3 col-sm-6">
				<div class="icon-box icon-box-card text-center" onMouseOver="this.style.backgroundColor='#3d33f0'" onMouseOut="this.style.backgroundColor='#fff'">
					<span class="icon-box-icon">
						<i class="fas fa-sync-alt"></i>
					</span>
					<div class="icon-box-content">
						<h3 class="icon-box-title">Permute e ritiro dell&#x27;usato</h3>
						<!-- End .icon-box-title -->
						<p>Rimessaggio pulizia e riparazioni in giornata</p>
					</div><!-- End .icon-box-content -->
				</div><!-- End .icon-box -->
			</div><!-- End .col-lg-4 col-sm-6 -->
			<div class="gg-icon-cards__item col-lg-3 col-sm-6">
				<div class="icon-box icon-box-card text-center" onMouseOver="this.style.backgroundColor='#666666'" onMouseOut="this.style.backgroundColor='#fff'">
					<span class="icon-box-icon">
						<i class="fas fa-university"></i>
					</span>
					<div class="icon-box-content">
						<h3 class="icon-box-title">Presenti sul MEPA</h3><!-- End .icon-box-title -->
						<p>Azienda presente sul mercato elettronico della pubblica amministrazione</p>
					</div><!-- End .icon-box-content -->
				</div><!-- End .icon-box -->
			</div><!-- End .col-lg-4 col-sm-6 -->
		</div><!-- End .row -->
	</section><!-- End .container -->
	<section class="container-fluid gg-section mb-5" data-aos="fade-up">
		<div class="heading">
			<h3 class="heading-cat">Consulta i nostri prodotti per tipologia di attività</h3>
			<h1 class="heading-title">Aree gioco e Playground per settore</h1>
		</div>
		<div class="mosaic mosaic__gap--1 mosaic__template--8-col mosaic__height--50vh">
			<div class="mosaic__item has-list mosaic__item--2x6">
				<a href="#0" aria-labelledby="person1"></a>
				<div class="mosaic__item-image">
					<img src="https://dummyimage.com/450x800/336699/fff" alt="Attività turistiche e commerciali" />
				</div>
				<div class="mosaic__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="mosaic__item-content-title banner-title text-center">
						Attività turistiche e commerciali
					</h2><!-- End .banner-title -->
					<ul class="mosaic__item-content-index text-center">
						<li>Stabilimenti balneari</li>
						<li>Campeggi</li>
						<li>Villaggi turistici</li>
						<li>Hotel</li>
						<li>Piscine</li>
						<li>Ristoranti e agriturismi</li>
						<li>Centri sportivi</li>
						<li>Snow park</li>
						<li>Aree giochi indoor</li>
						<li>Centri commerciali</li>
					</ul><!-- End .content-index -->
				</div><!-- End .banner-content -->
			</div>
			<div class="mosaic__item  mosaic__item--2x6">
				<a href="#0" aria-labelledby="person1"></a>
				<div class="mosaic__item-image">
					<img src="https://dummyimage.com/450x800/336699/fff" alt="Pubbliche amministrazioni" />
				</div>
				<div class="mosaic__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="mosaic__item-content-title banner-title text-center">
						Pubbliche amministrazioni
					</h2><!-- End .banner-title -->
					<ul class="mosaic__item-content-index text-center">
					</ul><!-- End .content-index -->
				</div><!-- End .banner-content -->
			</div>
			<div class="mosaic__item  mosaic__item--2x6">
				<a href="#0" aria-labelledby="person1"></a>
				<div class="mosaic__item-image">
					<img src="https://dummyimage.com/450x800/336699/fff" alt="Asili e scuole materne" />
				</div>
				<div class="mosaic__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="mosaic__item-content-title banner-title text-center">
						Asili e scuole materne
					</h2><!-- End .banner-title -->
					<ul class="mosaic__item-content-index text-center">
					</ul><!-- End .content-index -->
				</div><!-- End .banner-content -->
			</div>
			<div class="mosaic__item  mosaic__item--2x6">
				<a href="#0" aria-labelledby="person1"></a>
				<div class="mosaic__item-image">
					<img src="https://dummyimage.com/450x800/336699/fff" alt="Giardini privati" />
				</div>
				<div class="mosaic__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="mosaic__item-content-title banner-title text-center">
						Giardini privati
					</h2><!-- End .banner-title -->
					<ul class="mosaic__item-content-index text-center">
					</ul><!-- End .content-index -->
				</div><!-- End .banner-content -->
			</div>
		</div>
	</section>
	<section class="gg-offers gg-section pb-5 my-5 has-overlay has-overlay--diagonal-tiny-stripes" data-aos="fade-up" style="background-color: #023f54;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="heading mb-1">
						<p class="heading-cat text-white">Scopri le nostre imperdibili offerte usato</p>
						<h3 class="heading-title text-white">Offerte Usato Giochi Playground e
							Gonfiabili</h3>
					</div>
					<ul class="nav nav-pills nav-big nav-border-anim justify-content-center mb-3" role="tablist">
						<li class="nav-item">
							<a class="nav-link text-white active" id="offers-2ndhand-tab" data-toggle="tab" href="#offers-2ndhand-panel" role="tab" aria-controls="offers-2ndhand-tab" aria-selected="true">Usato</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" id="offers-exdemo-tab" data-toggle="tab" href="#offers-exdemo-panel" role="tab" aria-controls="offers-exdemo-tab" aria-selected="false">Usato
								Esposizione</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" id="offers-outlet-tab" data-toggle="tab" href="#offers-outlet-panel" role="tab" aria-controls="offers-outlet-tab" aria-selected="false">Outlet</a>
						</li>
					</ul>
					<div class="tab-content tab-content-carousel">
						<div class="tab-pane overflow-hidden p-0 fade show active" id="offers-2ndhand-panel" role="tabpanel" aria-labelledby="offers-2ndhand-link">
							<div class="gg-offers__2ndhand gg-carousel">
								<div class="swiper-wrapper gg-carousel__wrapper d-flex align-items-stretch">
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 1" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 1" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 1</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Eius, voluptates commodi veritatis fugit atque porro
													nostrum!</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 2" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 2" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 2</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Vel magni maiores inventore tempore a reprehenderit
													quia.</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 3" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 3" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 3</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Cupiditate qui similique nihil asperiores amet quasi
													minus?</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 4" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 4" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 4</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Dolor molestias dicta beatae vero reiciendis
													distinctio explicabo.</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 5" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 5" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 5</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Incidunt laboriosam dolore dolorem? Perspiciatis
													quasi numquam cupiditate.</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 6" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 6" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 6</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Consequuntur ea, voluptates nihil at omnis ex quod?
												</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 7" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 7" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 7</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Minima ducimus ipsam illo velit quod a blanditiis!
												</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 8" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 8" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 8</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Incidunt facere exercitationem doloremque mollitia
													cupiditate accusantium illo.</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
								</div>
							</div><!-- End .gg-carousel -->
							<button type="button" role="presentation" class="gg-carousel__button-prev gg-offers__2ndhand-button-prev"><i class="icon-angle-left"></i></button>
							<button type="button" role="presentation" class="gg-carousel__button-next gg-offers__2ndhand-button-next"><i class="icon-angle-right"></i></button>
						</div><!-- .End .tab-pane -->
						<div class="tab-pane overflow-hidden p-0 fade" id="offers-exdemo-panel" role="tabpanel" aria-labelledby="offers-exdemo-link">
							<div class="gg-offers__exdemo gg-carousel">
								<div class="swiper-wrapper gg-carousel__wrapper d-flex align-items-stretch">
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 1" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 1" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 1</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Quidem accusantium dolorem ipsa qui esse nam atque?
												</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 2" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 2" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 2</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Sequi ullam iure eius. Voluptatem praesentium
													necessitatibus dignissimos.</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 3" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 3" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 3</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Voluptatum incidunt pariatur soluta cupiditate
													tenetur quia error?</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 4" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 4" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 4</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Laborum provident rem, possimus ducimus et dolore
													voluptatem?</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 5" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 5" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 5</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Corporis illo nostrum vel culpa sapiente harum aut.
												</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 6" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 6" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 6</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Ullam dolorum sunt quo assumenda quas eum adipisci.
												</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 7" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 7" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 7</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Nostrum excepturi animi facilis ab vel aliquid dicta?
												</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 8" class="product-image">
												<img src="https://dummyimage.com/300x300/ff6644/fff" alt="Prodotto 8" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 8</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Hic aperiam neque alias sequi deleniti officiis amet?
												</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
								</div>
							</div><!-- End .gg-carousel -->
							<button type="button" role="presentation" class="gg-carousel__button-prev gg-offers__exdemo-button-prev"><i class="icon-angle-left"></i></button>
							<button type="button" role="presentation" class="gg-carousel__button-next gg-offers__exdemo-button-next"><i class="icon-angle-right"></i></button>
						</div><!-- .End .tab-pane -->
						<div class="tab-pane overflow-hidden p-0 fade" id="offers-outlet-panel" role="tabpanel" aria-labelledby="offers-outlet-link">
							<div class="gg-offers__outlet gg-carousel">
								<div class="swiper-wrapper gg-carousel__wrapper d-flex align-items-stretch">
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 1" class="product-image">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 1" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 1</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Lorem ipsum dolor sit amet consectetur adipisicing
													elit.</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 2" class="product-image">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 2" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 2</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Velit magni delectus laboriosam voluptatibus quisquam
													accusantium est!</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 3" class="product-image">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 3" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 3</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Adipisci iste eligendi doloribus voluptates
													aspernatur consectetur numquam.</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 4" class="product-image">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 4" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 4</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Minus inventore assumenda, labore tenetur quas quis
													modi?</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 5" class="product-image">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 5" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 5</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Harum molestias cum non. Quasi qui totam aut.</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 6" class="product-image">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 6" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 6</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Architecto voluptatum perferendis in fugit impedit
													laboriosam voluptates.</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 7" class="product-image">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 7" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 7</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Facere id eius natus aliquam vel debitis eligendi?
												</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
									<div class="product product-10 text-center swiper-slide gg-carousel__item">
										<figure class="product-media">
											<a href="product.html">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 8" class="product-image">
												<img src="https://dummyimage.com/300x300/336699/fff" alt="Prodotto 8" class="product-image-hover">
											</a>

											<div class="product-action-vertical">
												<a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
											</div><!-- End .product-action-vertical -->
										</figure><!-- End .product-media -->
										<div class="product-body">
											<div class="product-action">
												<a href="#" class="btn-cart"><span>add to
														cart</span></a>
												<a href="#" class="btn-product-icon btn-wishlist"><span>Add to
														Wishlist</span></a>
											</div><!-- End .product-action -->
											<div class="product-intro">
												<h3 class="product-title">
													<a href="offer.html">Prodotto 8</a>
												</h3><!-- End .product-title -->
												<div class="product-price">
													€60,00
												</div><!-- End .product-price -->
											</div>
											<div class="product-detail">
												<p>Fuga, beatae. Delectus adipisci quibusdam vero quia
													laborum.</p>
											</div>
										</div><!-- End .product-body -->
									</div><!-- End .product -->
								</div>
							</div><!-- End .gg-carousel -->
							<button type="button" role="presentation" class="gg-carousel__button-prev gg-offers__outlet-button-prev"><i class="icon-angle-left"></i></button>
							<button type="button" role="presentation" class="gg-carousel__button-next gg-offers__outlet-button-next"><i class="icon-angle-right"></i></button>
						</div><!-- .End .tab-pane -->
					</div><!-- End .tab-content -->
				</div><!-- End .col -->
			</div><!-- End .row -->
		</div>
		<!-- End .row -->
	</section><!-- End .container -->
	<section class="container-fluid gg-section mb-5" data-aos="fade-up">
		<div class="heading">
			<p class="heading-cat">Scopri tutti i nostri giochi gonfiabili e playground</p>
			<h3 class="heading-title">Playground Giochi Gonfiabili Altalene Dondoli</h3>
		</div>
		<!-- <div class="mosaic gg-grid__template--4-col"> -->
		<div class="gg-grid full-width">
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Playground per esterni" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Playground per esterni</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Strutture d&#x27;arrampicata" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Strutture d&#x27;arrampicata
					</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Giostre e girelli" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Giostre e girelli</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Dondoli e giochi a molla" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Dondoli e giochi a molla</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Altalene" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Altalene</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Giochi per giardini" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Giochi per giardini</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Playground per interni" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Playground per interni</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Aree baby" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Aree baby</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Tappeti elastici" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Tappeti elastici</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Giochi gonfiabili" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Giochi gonfiabili</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Gonfiabili acquatici" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Gonfiabili acquatici</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Giochi sportivi" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Giochi sportivi</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Fitness per esterni" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Fitness per esterni</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Arredo urbano" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Arredo urbano</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Accessori" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Accessori</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
			<a class="gg-grid__item">
				<img src="https://dummyimage.com/500x282/336699/fff" alt="Ricambi" />
				<div class="gg-grid__item-content">
					<!-- End .banner-subtitle -->
					<h2 class="gg-grid__item-content-title banner-title">Ricambi</h2>
					<!-- End .banner-title -->
				</div><!-- End .banner-content -->
			</a>
		</div>
	</section>
	<section class="gg-banner gg-section overflow-hidden py-5" style="background-color: MediumAquamarine ;" data-aos="fade-up">
		<div class="gg-banner__wrapper">
			<div class="gg-banner__content">
				<div class="banner-content banner-content--full-width d-flex justify-content-center">
					<div class="row">
						<div class="col-sm col-lg-6">
							<img class="banner-image-catalogue" src="https://dummyimage.com/424x600/ff9933/fff" alt="">
						</div>
						<div class="col-sm col-lg-6 d-flex flex-column align-items-end" data-aos="fade-left">
							<h4 class="banner-subtitle text-right">
								Consulta il catalogo per visionare tutti i nostri prodotti.</h4>
							<!-- End .banner-subtitle -->
							<h3 class="banner-title text-right">Benvenuti sul Pianeta Bambini</h3>
							<!-- End .banner-title -->
							<a href="#" class="btn btn-primary btn-rounded"><span>Richiedi il catalogo</span><i class="icon-long-arrow-right"></i></a>
						</div>
					</div>
				</div><!-- End .banner-content -->
			</div><!-- End .banner -->
		</div>
		<div class="circle-patterns">
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow--striped">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red--striped">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red--striped">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red--striped">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow--striped">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red--striped">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow--striped">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red--striped">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red--striped">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red--striped">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item red">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow--striped">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item yellow">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
			<div class="item red--striped">
				<!-- intentionally left empty -->
			</div>
			<div class="item ">
				<!-- intentionally left empty -->
			</div>
		</div>
	</section>
	<section class="blog-posts container gg-section py-5" data-aos="fade-up">
		<div class="row">
			<div class="col">
				<div class="gg-works gg-carousel overflow-hidden">
					<div class="heading">
						<p class="heading-cat">Scopri cosa hanno creato altri clienti che operano nel
							tuo settore</p>
						<h3 class="heading-title">Realizzazioni dei nostri clienti</h3>
					</div>
					<div class="swiper-wrapper gg-carousel__wrapper">
						<article class="entry swiper-slide gg-carousel__item">
							<figure class="entry-media">
								<a href="#">
									<img src="https://dummyimage.com/600x450/336699/fff" alt="KidzCamp Riccione">
								</a>
							</figure><!-- End .entry-media -->

							<div class="entry-body text-center">
								<h3 class="entry-title">
									<a href="#">KidzCamp Riccione</a>
								</h3><!-- End .entry-title -->

								<div class="entry-content">
									<a href="#" class="read-more">Stabilimenti Balneari</a>
								</div><!-- End .entry-content -->
							</div><!-- End .entry-body -->
						</article><!-- End .entry -->
						<article class="entry swiper-slide gg-carousel__item">
							<figure class="entry-media">
								<a href="#">
									<img src="https://dummyimage.com/600x450/336699/fff" alt="Aree Giochi Villaggi TH Resorts">
								</a>
							</figure><!-- End .entry-media -->

							<div class="entry-body text-center">
								<h3 class="entry-title">
									<a href="#">Aree Giochi Villaggi TH Resorts</a>
								</h3><!-- End .entry-title -->

								<div class="entry-content">
									<a href="#" class="read-more">Piscine e centri sportivi</a>
								</div><!-- End .entry-content -->
							</div><!-- End .entry-body -->
						</article><!-- End .entry -->
						<article class="entry swiper-slide gg-carousel__item">
							<figure class="entry-media">
								<a href="#">
									<img src="https://dummyimage.com/600x450/336699/fff" alt="Piscina Baby Atlantica Cesenatico">
								</a>
							</figure><!-- End .entry-media -->

							<div class="entry-body text-center">
								<h3 class="entry-title">
									<a href="#">Piscina Baby Atlantica Cesenatico</a>
								</h3><!-- End .entry-title -->

								<div class="entry-content">
									<a href="#" class="read-more">Hotel</a>
								</div><!-- End .entry-content -->
							</div><!-- End .entry-body -->
						</article><!-- End .entry -->
						<article class="entry swiper-slide gg-carousel__item">
							<figure class="entry-media">
								<a href="#">
									<img src="https://dummyimage.com/600x450/336699/fff" alt="Area Giochi Pasticceria Centrale Chiaravalle">
								</a>
							</figure><!-- End .entry-media -->

							<div class="entry-body text-center">
								<h3 class="entry-title">
									<a href="#">Area Giochi Pasticceria Centrale Chiaravalle</a>
								</h3><!-- End .entry-title -->

								<div class="entry-content">
									<a href="#" class="read-more">Villaggi e campeggi</a>
								</div><!-- End .entry-content -->
							</div><!-- End .entry-body -->
						</article><!-- End .entry -->
						<article class="entry swiper-slide gg-carousel__item">
							<figure class="entry-media">
								<a href="#">
									<img src="https://dummyimage.com/600x450/336699/fff" alt="Area gioco Celle Ligure (SV)">
								</a>
							</figure><!-- End .entry-media -->

							<div class="entry-body text-center">
								<h3 class="entry-title">
									<a href="#">Area gioco Celle Ligure (SV)</a>
								</h3><!-- End .entry-title -->

								<div class="entry-content">
									<a href="#" class="read-more">Privati</a>
								</div><!-- End .entry-content -->
							</div><!-- End .entry-body -->
						</article><!-- End .entry -->
						<article class="entry swiper-slide gg-carousel__item">
							<figure class="entry-media">
								<a href="#">
									<img src="https://dummyimage.com/600x450/336699/fffg" alt="Area gioco Bagno 99 Rimini">
								</a>
							</figure><!-- End .entry-media -->

							<div class="entry-body text-center">
								<h3 class="entry-title">
									<a href="#">Area gioco Bagno 99 Rimini</a>
								</h3><!-- End .entry-title -->

								<div class="entry-content">
									<a href="#" class="read-more">Ristoranti e agriturismi</a>
								</div><!-- End .entry-content -->
							</div><!-- End .entry-body -->
						</article><!-- End .entry -->
						<article class="entry swiper-slide gg-carousel__item">
							<figure class="entry-media">
								<a href="#">
									<img src="https://dummyimage.com/600x450/336699/fff" alt="Area gioco Villaggi Bluserena">
								</a>
							</figure><!-- End .entry-media -->

							<div class="entry-body text-center">
								<h3 class="entry-title">
									<a href="#">Area gioco Villaggi Bluserena</a>
								</h3><!-- End .entry-title -->

								<div class="entry-content">
									<a href="#" class="read-more">Comuni</a>
								</div><!-- End .entry-content -->
							</div><!-- End .entry-body -->
						</article><!-- End .entry -->
						<article class="entry swiper-slide gg-carousel__item">
							<figure class="entry-media">
								<a href="#">
									<img src="https://dummyimage.com/600x450/336699/fff" alt="Piscina Baby Atlantica Cesenatico">
								</a>
							</figure><!-- End .entry-media -->

							<div class="entry-body text-center">
								<h3 class="entry-title">
									<a href="#">Piscina Baby Atlantica Cesenatico</a>
								</h3><!-- End .entry-title -->

								<div class="entry-content">
									<a href="#" class="read-more">Parchi giochi</a>
								</div><!-- End .entry-content -->
							</div><!-- End .entry-body -->
						</article><!-- End .entry -->
						<article class="entry swiper-slide gg-carousel__item">
							<figure class="entry-media">
								<a href="#">
									<img src="https://dummyimage.com/600x450/336699/fff" alt="Area esterna Supermercato Maranello">
								</a>
							</figure><!-- End .entry-media -->

							<div class="entry-body text-center">
								<h3 class="entry-title">
									<a href="#">Area esterna Supermercato Maranello</a>
								</h3><!-- End .entry-title -->

								<div class="entry-content">
									<a href="#" class="read-more">Aree giochi indoor</a>
								</div><!-- End .entry-content -->
							</div><!-- End .entry-body -->
						</article><!-- End .entry -->
					</div><!-- End .owl-carousel -->
					<!-- If we need pagination -->
				</div><!-- End .blog-posts -->

				<button type="button" role="presentation" class="gg-carousel__button-prev gg-works__button-prev"><i class="icon-angle-left"></i></button>
				<button type="button" role="presentation" class="gg-carousel__button-next gg-works__button-next"><i class="icon-angle-right"></i></button>
			</div>
		</div>
	</section>
	<section class="gg-banner has-background has-overlay has-overlay--diagonal-tiny-stripes gg-section" style="background-image: url('https://dummyimage.com/1920x600/ff3399/fff')" data-aos="flip-up">
		<div class="gg-banner__wrapper">
			<div class="gg-banner__content">
				<div class="banner-content">
					<h4 class="banner-subtitle text-primary align-self-lg-start">Facile, veloce e
						accessibile a tutti.</h4>
					<!-- End .banner-subtitle -->
					<h3 class="banner-title text-white align-self-lg-start">Tanti vantaggi con il nostro
						Noleggio Operativo</h3>
					<!-- End .banner-title -->
					<a href="#" class="btn btn-primary btn-rounded align-self-lg-start"><span>Scopri di
							più</span><i class="icon-long-arrow-right"></i></a>
				</div><!-- End .banner-content -->
			</div><!-- End .banner -->
		</div>
	</section>
	<section class="gg-newsletter mb-5 bg-light">
		<div class="container gg-newsletter__wrapper d-flex align-items-center flex-column">
			<div class="heading mb-1">
				<h3 class="heading-title">Seguici:</h3>
			</div>
			<div class="col-lg-6 social-icons justify-content-center mb-2 pb-2">
				<a href="https://www.facebook.com/GoldenGames" class="social-icon social-item-icon--facebook" title="Facebook" target="_blank">
					<i class="icon-facebook-f"></i>
				</a>
				<a href="https://www.instagram.com/golden.games.srl/" class="social-icon social-item-icon--instagram" title="Instagram" target="_blank">
					<i class="icon-instagram"></i>
				</a>
				<a href="https://vimeo.com/goldengames" class="social-icon social-item-icon--vimeo" title="Vimeo" target="_blank">
					<i class="icon-vimeo"></i>
				</a>
			</div>
			<div class="heading">
				<p class="heading-cat">Per conoscere le ultime novità e le nostre offerte</p>
				<h3 class="heading-title">Iscriviti alla nostra newsletter</h3>
			</div>
			<div class="col-lg-6 gg-newsletter__form">
				<form action="#">
					<div class="input-group">
						<input type="email" placeholder="Il tuo indirizzo email" aria-label="Email Adress" required="">
						<div class="input-group-append">
							<button class="btn btn-subscribe" type="submit"><span>Iscriviti</span></button>
						</div><!-- .End .input-group-append -->
					</div><!-- .End .input-group -->
				</form>
			</div>
		</div>
	</section>
	<hr>
	<section class="certifiers mb-5">
		<div class="container">
			<div class="text-center">
				<h2 class="title">Qualità e sicurezza certificata</h2><!-- End .title -->
			</div><!-- End .text-center -->
			<div class="container">
				<div class="certifiers__logos">
					<a href="#" class="brand">
						<img src="https://dummyimage.com/160x120/336699/fff" alt="Brand Name">
					</a>
					<a href="#" class="brand">
						<img src="https://dummyimage.com/160x120/336699/fff" alt="Brand Name">
					</a>
					<a href="#" class="brand">
						<img src="https://dummyimage.com/160x120/336699/fff" alt="Brand Name">
					</a>
					<a href="#" class="brand">
						<img src="https://dummyimage.com/160x120/336699/fff" alt="Brand Name">
					</a>
					<a href="#" class="brand">
						<img src="https://dummyimage.com/160x120/336699/fff" alt="Brand Name">
					</a>
					<a href="#" class="brand">
						<img src="https://dummyimage.com/160x120/336699/fff" alt="Brand Name">
					</a>
				</div><!-- End .owl-carousel -->
			</div>
		</div><!-- End .container -->
	</section>

	<?php
	/**
	 * Hook: goldengames_hook_content_main_end
	 */
	do_action('goldengames_hook_content_main_end'); ?>

</main><!-- #main -->
<?php
/**
 * Hook: goldengames_hook_content_after_main
 */
do_action('goldengames_hook_content_after_main'); ?>

<?php
get_footer(null, $args = array());
