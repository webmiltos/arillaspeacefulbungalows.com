//Home Slider
var heroSwiper = new Swiper(".heroSwiper", {
    slidesPerView: 1,
    grabCursor: true,
    effect: "fade",
    autoplay: {
        delay: 4000,
    },
    navigation: {
        nextEl: ".swiper-button-next-hero",
        prevEl: ".swiper-button-prev-hero",
    },
});



//Single Bungalow Slider
var heroSlider = new Swiper(".singlePropertySwiper", {
    slidesPerView: 3,
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
    keyboard: {
        enabled: true
    },
    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
    },
    breakpoints: {
        240: {
            slidesPerView: 1.05,
            spaceBetween: 10,
            loop: true,
            centeredSlides: false,
        },
        768: {
            slidesPerView: 1.4,
            spaceBetween: 10,
            loop: true,
        },
        1024: {
            slidesPerView: 1.6,
            spaceBetween: 10,
            loop: true,
        },
        1450: {
            slidesPerView: 1.3,
            spaceBetween: 10,
        },
    }
});


// home welcome section
var featuresSwiper = new Swiper(".features-slider", {
    slidesPerView: 1.2,
    spaceBetween: 15,
    freeMode: true,
    scrollbar: {
        el: ".swiper-scrollbar",
        // hide: true,
    },
});



// homepage explore our fleet section
var homeFleetSwiper = new Swiper(".home-fleet-slider", {
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next-fleet",
        prevEl: ".swiper-button-prev-fleet"
    },
    breakpoints: {
        200: {
            slidesPerView: 1,
        },
        600: {
            slidesPerView: 2,
        },
        1300: {
            slidesPerView: 3,
        },
    },
});


// homepage why choose us section
var whyUsSwiper = new Swiper(".why-us-slider", {
    slidesPerView: 1.8,
    spaceBetween: 15,
    freeMode: true,
    scrollbar: {
        el: ".swiper-scrollbar",
        // hide: true,
    },
    breakpoints: {
        200: {
            slidesPerView: 1,
        },
        600: {
            slidesPerView: 1.8,
        },
    },
});


// homepage locations section
var locationsSwiper = new Swiper(".locations-slider", {
    slidesPerView: 1.8,
    freeMode: true,
    // centeredSlides: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
    breakpoints: {
        200: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        600: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        900: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    },
});


// homepage reviews section
var reviewsSwiper = new Swiper(".reviews-slider", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next-reviews",
        prevEl: ".swiper-button-prev-reviews",
    },
    breakpoints: {
        200: {
            slidesPerView: 1.1,
            spaceBetween: 10,
        },
        600: {
            slidesPerView: 1.5,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 2.5,
            spaceBetween: 20,
        },

    },
});

// reviews buttons functionality
jQuery(document).ready(function ($) {
    jQuery(".review-button-prev").click(function () {
        jQuery(".swiper-button-prev-reviews").click();
    });

    jQuery(".review-button-next").click(function () {
        jQuery(".swiper-button-next-reviews").click();
    });
});

// homepage reviews section END

