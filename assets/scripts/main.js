/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function ($) {

    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Sage = {
        // All pages
        'common': {
            init: function () {
                // JavaScript to be fired on all pages

            },
            finalize: function () {
                // JavaScript to be fired on all pages, after page specific JS is fired
            }
        },
        // Home page
        'home': {
            init: function () {
                // JavaScript to be fired on the home page
                $(document).ready(function () {
                    setTimeout(function () {
                        $("#artistas-home").css('opacity', 1);
                    }, 4000);
                });
                $(document).ready(function () {
                    setTimeout(function () {
                        $('.welcome').addClass('animated fadeOutUp');
                    }, 2000);
                });
                $('.autores-items').slick({
                    infinite: true,
                    slidesToShow: 7,
                    slidesToScroll: -1,
                    prevArrow: $('.carousel-prev'),
                    nextArrow: $('.carousel-next'),
                    speed: 3000,
                    autoplay: true,
                    autoplaySpeed: 0,
                    cssEase: 'linear',
                    responsive: [{
                            breakpoint: 575,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: -1,
                                infinite: true,
                                //                            autoplay:false,
                            }
                    },
                    //                    {
                    //                        breakpoint: 575,
                    //                        settings: {
                    //                            slidesToShow: 3,
                    //                            slidesToScroll: -1,
                    //                            infinite: true
                    //                        }
                    //                    }
                ]

                });

                $('.obras-items').slick({
                    infinite: true,
                    slidesToShow: 7,
                    slidesToScroll: 1,
                    prevArrow: $('.carousel-prev'),
                    nextArrow: $('.carousel-next'),
                    speed: 3000,
                    autoplay: true,
                    autoplaySpeed: 0,
                    cssEase: 'linear',
                    responsive: [{
                            breakpoint: 575,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1,
                                infinite: true,
                                //                            autoplay:false,
                            }
                    },
                    //                    {
                    //                        breakpoint: 575,
                    //                        settings: {
                    //                            slidesToShow: 3,
                    //                            slidesToScroll: 1,
                    //                            infinite: true
                    //                        }
                    //                    }
                ]

                });
            },
            finalize: function () {
                // JavaScript to be fired on the home page, after the init JS

            }
        },
        // About us page, note the change from about-us to about_us.
        'ofertas': {
            init: function () {
                $('.ofertas-carousel').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true,
                    dotsClass: 'slick-dots',
                    prevArrow: $('.carousel-prev-artista'),
                    nextArrow: $('.carousel-next-artista'),
                    responsive: [{
                            breakpoint: 575,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                autoplay: true,
                            }
                        },
                    ]
                });
                // JavaScript to be fired on the about us page
            }
        }, // About us page, note the change from about-us to about_us.
        'single_artista': {
            init: function () {
                $('.obras-single').slick({
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    dotsClass: 'slick-dots',
                    prevArrow: $('.carousel-prev-artista'),
                    nextArrow: $('.carousel-next-artista'),
                });
            }
            // JavaScript to be fired on the about us page
        },
        'blog': {
            init: function () {
                $('header.banner').css('display','none');
            }
            // JavaScript to be fired on the about us page
        },

    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function (func, funcname, args) {
            var fire;
            var namespace = Sage;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function () {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function (i, classnm) {
                UTIL.fire(classnm);
                UTIL.fire(classnm, 'finalize');
            });

            // Fire common finalize JS
            UTIL.fire('common', 'finalize');
        }
    };

    // Load Events
    $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
