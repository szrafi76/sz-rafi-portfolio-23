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

    $('.partner_slider').slick({
        infinite: true,
        speed: 7000,
        slidesToShow: 4,
        slidesToScroll: 4, 
        autoplay: true,
        autoplaySpeed: 0,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    
    
              
})
