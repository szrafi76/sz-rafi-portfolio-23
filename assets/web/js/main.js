jQuery(document).ready(function () {

    var typed = new Typed('.greenText', {
        strings: [
            'UI/UX Designer',
            'Video Editor',
            'Content Creator',
            'Frontend Developer'
        ],

        typeSpeed: 70,
        startDelay: 0,
        backSpeed: 40,
        smartBackspace: true,
        shuffle: false,
        backDelay: 700,
        fadeOut: false,
        fadeOutClass: 'typed-fade-out',
        fadeOutDelay: 500,
        loop: true,
        loopCount: Infinity,
        showCursor: true,
        cursorChar: '|',
        autoInsertCss: true,
        attr: null,
        bindInputFocusEvents: false,
        contentType: 'html'
    });


// Brand slider area start here ***
var swiper = new Swiper(".brand__slider", {
    spaceBetween: 30,
    speed: 300,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    breakpoints: {
        1440: {
            slidesPerView: 6,
        },
        1300: {
            slidesPerView: 5,
        },
        991: {
            slidesPerView: 4,
        },
        768: {
            slidesPerView: 3,
        },
        500: {
            slidesPerView: 2,
        },
    },
});
// Brand slider area end here ***

})

