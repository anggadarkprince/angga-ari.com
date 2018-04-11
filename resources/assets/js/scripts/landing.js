(function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 50)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function () {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 57
    });

    // Collapse Navbar
    var navbarCollapse = function () {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);

    // Scroll reveal calls
    window.sr = ScrollReveal();
    sr.reveal('.sr-icons', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 200);
    sr.reveal('.sr-button', {
        duration: 800,
        delay: 200
    });
    sr.reveal('.sr-contact', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 300);
    sr.reveal('.sr-show-up', {
        duration: 500,
        scale: 0.3
    }, 100);
    sr.reveal('.sr-skill', {
        duration: 600,
        delay: 100
    }, 150);
    sr.reveal('.sr-blog', {
        duration: 600,
        delay: 100
    }, 150);
    sr.reveal('.sr-showcase', {
        duration: 800,
        delay: 200
    }, 100);
    sr.reveal('.sr-contact-form', {
        duration: 800,
        delay: 200
    });

    if ($('.showcase-gallery').length) {
        $('.showcase-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            mainClass: 'mfp-with-zoom', // this class is for CSS animation below
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function (element) {
                    return element.find('img');
                }
            },
            image: {
                // options for image content type
                titleSrc: 'title',
                verticalFit: true,
            }
        });
    }

    mixitup('#showcases-mix', {
        classNames: {
            block: '',
            elementFilter: ''
        }
    });

})(jQuery); // End of use strict
