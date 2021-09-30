const worksCarousel = new Swiper('.gg-works', {
    // Optional parameters
    // fadeEffect: { crossFade: true },
    // effect: "fade",
    direction: 'horizontal',
    loop: true,
    // virtualTranslate: true,
    centeredSlides: false,
    /* autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    }, */
    // speed: 1000,
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 10,

    breakpoints: {
        640: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 4,
            slidesPerGroup: 4,
            spaceBetween: 30,
        },
    },

    // If we need pagination
    /* pagination: {
        el: '.gg-works__pagination',
        clickable: true,
    }, */
    navigation: {
        nextEl: ".gg-works__button-next",
        prevEl: ".gg-works__button-prev",
    },
});