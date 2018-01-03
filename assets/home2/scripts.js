/* ---------------------------------------------
 common scripts
 --------------------------------------------- */
(function ($) {
    "use strict"; // use strict to start
    /* ================================
     ===   Preloader active code   ====
     ================================= */
    var $body = $('body');
    var $window = $(window);
    var $preloader = $('#preloader');
    $window.on("load", function () {
        $body.css('overflow-y', 'visible');
        $preloader.fadeOut('slow', function () {
            $(this).remove();
        });
    });
    /* ================================
     ===   bootstrap drop-down menu ====
     ================================= */
    $(function () {
        if ($window.width() > 767) {
            var $dropdown = $('.dropdown');

            $dropdown.on("mouseenter mouseleave", function () {
                $(this).toggleClass('open');
            });
        }
        else {
            var $dropdownMenu = $('.dropdown-menu');
            $dropdownMenu.on('click', function (event) {
                event.stopPropagation();
            });
        }

    });
    /* ================================
     ===  responsive menu         ====
     ================================= */
    (function () {
        $('.dropdown').on("mouseenter", function () {
            var dropdownList = $('.dropdown-menu');
            var dropdownOffset = $(this).offset();
            var offsetLeft = dropdownOffset.left;
            var dropdownWidth = dropdownList.width();
            var docWidth = $window.width();

            var subDropdown = dropdownList.eq(1);
            var subDropdownWidth = subDropdown.width();

            var isDropdownVisible = (offsetLeft + dropdownWidth <= docWidth);
            var isSubDropdownVisible = (offsetLeft + dropdownWidth + subDropdownWidth <= docWidth);

            if (!isDropdownVisible || !isSubDropdownVisible) {
                dropdownList.addClass('res-menu');
            } else {
                dropdownList.removeClass('res-menu');
            }
        });
    }());


    /* ================================
     ===   isotope filter ====
     ================================= */
    (function () {
        var $workGrid = $('.work-grid');
        if ($workGrid.length > 0) {
            var $container = $('.portfolio-items');
            $container.imagesLoaded(function () {
                $container.isotope({
                    layoutMode: 'fitRows',
                    itemSelector: '.work-grid'
                });
            });
            //filter items on button click
            var fwpr = $(".filter li a");
            fwpr.on("click", function () {
                var $this = $(this),
                    filterValue = $this.attr('data-filter');
                $container.isotope({
                    filter: filterValue,
                    animationOptions: {
                        duration: 1750,
                        easing: 'linear',
                        queue: false
                    }
                });
                // don't proceed if already selected
                if ($this.hasClass('active')) {
                    return false;
                }
                var filter_wrapper = $this.closest('.filter');
                filter_wrapper.find('.active').removeClass('active');
                $this.addClass('active');
                return false;
            });
        }
    }());
    /* ================================
     ===   Bootstrap scroll spy  ====
     ================================= */
    (function () {
        $body.scrollspy({
            target: ".navbar-collapse",
            offset: 50
        });
    }());
    /* ================================
     ===   Circle Progress Bar  ====
     ================================= */
    (function () {

        var $circle = $('.circle'),
            $skillSection = $('.our-skill, .project-circle'),
            $circle1 = $('.circle.circle-1'),
            $circle2 = $('.circle.circle-2'),
            $circle3 = $('.circle.circle-3'),
            $circle5 = $('.circle.circle-5'),
            $circle6 = $('.circle.circle-6'),
            $circle7 = $('.circle.circle-7'),
            inited = false;

        $skillSection.appear({force_process: true});
        $skillSection.on('appear', function () {
            if (!inited) {

                $circle.circleProgress({
                    value: 0.75,
                    size: 175,
                    thickness: 30,
                    emptyFill: "rgba(255, 199, 199, 1)",
                    fill: {
                        color: "#dd5555"
                    }, animation: {
                        duration: 2000
                    }
                }).on('circle-animation-progress', function (event, progress) {
                    $(this).find('.info').html(Math.round(75 * progress) + '<i>%</i>');
                });
                $circle1.circleProgress({
                    value: 0.85,
                    size: 175,
                    thickness: 30,
                    emptyFill: "rgba(255, 234,197, 1)",
                    fill: {
                        color: "#f0a92d"
                    }, animation: {
                        duration: 2000
                    }
                }).on('circle-animation-progress', function (event, progress) {
                    $(this).find('.info').html(Math.round(85 * progress) + '<i>%</i>');
                });
                $circle2.circleProgress({
                    value: 0.65,
                    size: 175,
                    thickness: 30,
                    emptyFill: "#c9ffff",
                    fill: {
                        color: "#00b5b5"
                    }, animation: {
                        duration: 2000
                    }
                }).on('circle-animation-progress', function (event, progress) {
                    $(this).find('.info').html(Math.round(65 * progress) + '<i>%</i>');
                });
                $circle3.circleProgress({
                    value: 0.95,
                    size: 175,
                    thickness: 30,
                    emptyFill: "#c7e8ff",
                    fill: {
                        color: "#4aa4e1"
                    }, animation: {
                        duration: 2000
                    }
                }).on('circle-animation-progress', function (event, progress) {
                    $(this).find('.info').html(Math.round(95 * progress) + '<i>%</i>');
                });

                $circle5.circleProgress({
                    value: 0.75,
                    size: 120,
                    thickness: 20,
                    emptyFill: "rgba(255, 199, 199, 1)",
                    fill: {
                        color: "#dd5555"
                    }, animation: {
                        duration: 2000
                    }
                }).on('circle-animation-progress', function (event, progress) {
                    $(this).find('.info').html(Math.round(75 * progress) + '<i>%</i>');
                });
                $circle6.circleProgress({
                    value: 0.85,
                    size: 120,
                    thickness: 20,
                    emptyFill: "rgba(255, 234,197, 1)",
                    fill: {
                        color: "#f0a92d"
                    }, animation: {
                        duration: 2000
                    }
                }).on('circle-animation-progress', function (event, progress) {
                    $(this).find('.info').html(Math.round(85 * progress) + '<i>%</i>');
                });
                $circle7.circleProgress({
                    value: 0.65,
                    size: 120,
                    thickness: 20,
                    emptyFill: "#c9ffff",
                    fill: {
                        color: "#00b5b5"
                    }, animation: {
                        duration: 2000
                    }
                }).on('circle-animation-progress', function (event, progress) {
                    $(this).find('.info').html(Math.round(65 * progress) + '<i>%</i>');
                });

                inited = true;
            }
        });


    }());
    /* ================================
     ===  BACKGROUND SLIDER        ====
     ================================= */
    (function () {
        if ($body.hasClass("vegas-slider")) {
            $.vegas('slideshow', {
                delay: 7000,
                backgrounds: [
                    {src: 'assets/home2/images/home-bg-3.jpg', fade: 1000},
                    {src: 'assets/home2/images/home-bg-5.jpg', fade: 1000},
                    {src: 'assets/home2/images/home-bg-1.jpg', fade: 1000}
                ]
            });
        }
    }());


    /* ================================
     ===  Data tooltip       ====
     ================================= */
    (function () {
        $('[data-toggle="tooltip"]').tooltip({
            trigger: 'hover'
        });
    }());


    /* ================================
     ===  jQuery smooth scroll      ====
     ================================= */
    (function () {
        $("a.smooth-scroll").on("click", function (event) {
            var $anchor = $(this);
            var headerH = "50";
            $("html, body")
                .stop()
                .animate({
                    scrollTop: $($anchor.attr("href"))
                        .offset()
                        .top - headerH + "px"
                }, 1200, "easeOutCirc");

            event.preventDefault();
        });
        var nav = $('#navigation');
        var scrolled = false;

        $window.scroll(function () {
            if (nav.hasClass('home-ts-menu')) {
                if (1 < $window.scrollTop() && !scrolled) {
                    nav.addClass('navbar-fixed-top animated fadeInDown').animate({'margin-top': '0px'});
                    scrolled = true;
                }
                if (1 > $window.scrollTop() && scrolled) {
                    nav.removeClass('navbar-fixed-top animated fadeInDown').css('margin-top', '0px');
                    scrolled = false;
                }
            }
        });
    }());
    /* ================================
     ===  Slick home carousel    ====
     ================================= */
    (function () {
        if ($body.hasClass('home-4')) {
            var $fullScreenSlider = $('.full-screen-slider');
            $fullScreenSlider.slick({
                prevArrow: '<i class="fa fa-angle-left left"></i>',
                nextArrow: '<i class="fa fa-angle-right right"></i> ',
                dots: true,
                fade: true,
                slidesToShow: 1
            });
        }
    }());
    /* ================================
     ===  Slick home background slider    ====
     ================================= */
    (function () {
        var homeCarousel1 = $('.home-carousel-1');
        homeCarousel1.slick({
            prevArrow: '<i class="fa fa-angle-left left"></i>',
            nextArrow: '<i class="fa fa-angle-right right"></i> ',
            slidesToShow: 1
        });
    }());


    /* =====================================
     ===  Slick portfolio modal slider  ====
     ======================================= */


    (function () {
        $('.modal').on('shown.bs.modal', function (e) {
            var $modalCarousel = $('.modal-carousel');
            $modalCarousel.slick({
                prevArrow: '<i class="fa fa-angle-left left"></i>',
                nextArrow: '<i class="fa fa-angle-right right"></i> ',
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                autoplaySpeed: 2000
            });
            $modalCarousel.resize();
        });

    }());

    /* ============================
     ===  Slick logo carousel  ====
     ==============================*/
    (function () {
        $('.logo-carousel').slick({
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
            ]
        });
    }());
    /* ============================
     ===  Team carousel  ====
     ==============================*/
    (function () {
        $('.slick-carousel-1').slick({
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<i class="fa fa-angle-left left"></i>',
            nextArrow: '<i class="fa fa-angle-right right"></i> ',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }());
    /* =============================
     ===  testimonial carousel  ====
     ==============================*/
    (function () {
        $('.slick-carousel-2').slick({
            prevArrow: '<i class="fa fa-angle-left left"></i>',
            nextArrow: '<i class="fa fa-angle-right right"></i> ',
            slidesToShow: 1
        });
    }());
    /* =============================
     ===  Blog  carousel  ====
     ==============================*/
    (function () {
        $('.slick-carousel-3').slick({
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }());
    /* =============================
     ========  Counter up =============
     ==============================*/
    $('.factor').counterUp({
        delay: 10,
        time: 1000
    });
    /* =============================
     ===  google map  ====
     ==============================*/
    (function () {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            scrollwheel: false,
            navigationControl: true,
            mapTypeControl: false,
            scaleControl: false,
            draggable: true,
            styles: [{"stylers": [{"hue": "blue"}, {"gamma": 1}]}],
            center: new google.maps.LatLng(-6.35612,106.90630),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-6.35612,106.90630),
            map: map,
            icon: 'assets/home2/images/marker.png'
        });
        var map2 = new google.maps.Map(document.getElementById('map2'), {
            zoom: 15,
            scrollwheel: false,
            navigationControl: true,
            mapTypeControl: false,
            scaleControl: false,
            draggable: true,
            styles: [{"stylers": [{"hue": "blue"}, {"gamma": 1}]}],
            center: new google.maps.LatLng(-6.35612,106.90630),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-6.35612,106.90630),
            map: map2,
            icon: 'assets/home2/images/marker.png'
        });
    }());

    /* ================================
     ===   JQUERY.MB.YTPLAYER   =====
     ================================= */
    (function () {
        // JQUERY.MB.YTPLAYER
        var $ytPlayer = $(".yt-player");
        var $ytPlay = $('#yt-play');
        var $ytVolume = $('#yt-volume');

        $ytPlayer.YTPlayer();

        // YT controls
        $ytPlay.on("click", function (event) {
            event.preventDefault();
            if ($(this).hasClass("fa-play")) {
                $ytPlayer.playYTP();
            } else {
                $ytPlayer.pauseYTP();
            }
            $(this).toggleClass("fa-play fa-pause");
            return false;
        });

        $ytVolume.on("click", function (event) {
            event.preventDefault();
            $ytPlayer.YTPToggleVolume();
            $(this).toggleClass("fa-volume-up fa-volume-off");
            return false;
        });
    }());

})(jQuery);

