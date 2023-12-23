jQuery(document).ready(function () {

    var typed = new Typed('.greenText', {
        strings: [
            'UI/UX Designer',
            'Video Editor',
            'Content Creator',
            'Frontend Developer'
        ],
        
        typeSpeed: 70, // Decreased type speed for smoother typing
        startDelay: 0,
        backSpeed: 40,
        smartBackspace: true,
        shuffle: false,
        backDelay: 700,
        fadeOut: false,
        fadeOutClass: 'typed-fade-out',
        fadeOutDelay: 500,
        loop: true, // Set loop to true for infinite typing
        loopCount: Infinity, // Infinite loop
        showCursor: true,
        cursorChar: '|',
        autoInsertCss: true,
        attr: null,
        bindInputFocusEvents: false,
        contentType: 'html'
    });
})
