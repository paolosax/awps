const secondhandOffersCarousel = new Swiper('.gg-offers__2ndhand', {
    // Optional parameters
    // fadeEffect: { crossFade: true },
    // effect: "fade",
    direction: 'horizontal',
    loop: true,
    // virtualTranslate: true,
    centeredSlides: false,
    /* autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    }, */
    // speed: 1000,
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 10,
    // pauseOnMouseEnter: true,

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
        el: '.gg-secondhands__pagination',
        clickable: true,
    }, */
    navigation: {
        nextEl: ".gg-offers__2ndhand-button-next",
        prevEl: ".gg-offers__2ndhand-button-prev",
    },
});
const exdemoOffersCarousel = new Swiper('.gg-offers__exdemo', {
    // Optional parameters
    // fadeEffect: { crossFade: true },
    // effect: "fade",
    direction: 'horizontal',
    loop: true,
    // virtualTranslate: true,
    centeredSlides: false,
    /* autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    }, */
    // speed: 1000,
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 10,
    // pauseOnMouseEnter: true,

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
        el: '.gg-secondhands__pagination',
        clickable: true,
    }, */
    navigation: {
        nextEl: ".gg-offers__exdemo-button-next",
        prevEl: ".gg-offers__exdemo-button-prev",
    },
});

const outletOffersCarousel = new Swiper('.gg-offers__outlet', {
    // Optional parameters
    // fadeEffect: { crossFade: true },
    // effect: "fade",
    direction: 'horizontal',
    loop: true,
    // virtualTranslate: true,
    centeredSlides: false,
    /* autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    }, */
    // speed: 1000,
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 10,
    // pauseOnMouseEnter: true,

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
        el: '.gg-secondhands__pagination',
        clickable: true,
    }, */
    navigation: {
        nextEl: ".gg-offers__outlet-button-next",
        prevEl: ".gg-offers__outlet-button-prev",
    },
});