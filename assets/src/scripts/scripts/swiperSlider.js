let autoplayDelay = goldengamesData.heroSwiper__autoplayDelay;
let speed = goldengamesData.heroSwiper__speed;

console.log(autoplayDelay);

const heroSlider = new Swiper('.gg-slider', {
    // Optional parameters
    fadeEffect: { crossFade: true },
    effect: "fade",
    direction: 'horizontal',
    loop: true,
    // virtualTranslate: true,
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazy: true,
    loadPrevNext: true,
    centeredSlides: true,
    autoplay: {
        // get WP [CDATA]
        // delay: autoplayDelay ? autoplayDelay : 3000,
        delay: 3000,
        disableOnInteraction: false,
    },
    // speed: speed ? speed : 500,
    speed: 500,
    slidesPerView: 1,

    // If we need pagination
    /* pagination: {
        el: '.gg-slider__pagination',
        clickable: true,
    }, */
    navigation: {
        nextEl: ".gg-slider__button-next",
        prevEl: ".gg-slider__button-prev",
    },
});