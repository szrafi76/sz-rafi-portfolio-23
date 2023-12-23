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
})
