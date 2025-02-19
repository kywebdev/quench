(function($) {
    
    $(document).ready(function() {

        // back to top smooth scrolling
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': 0 + $target.offset().top
            }, 0, 'swing', function() {});
        });

        // nav menu toggle
        $('.nav-toggle').on('click', function() {
            $(this).toggleClass('open');
            $('body').toggleClass('nav-open').removeClass('nav-not-opened');
        });

        // assign height to the capabilities section
        function capabilitiesHeight(width) {
            var capabilitiesImgHeight = $('.capabilities__img img').height();

            if (width <= 1500) {
                $('.capabilities .col-10').css('height', 'auto');
            } else {
                $('.capabilities .col-10').css('height', capabilitiesImgHeight);
            }
        }
        capabilitiesHeight( $(window).width() );
        $(window).on('resize', function() {
            capabilitiesHeight( $(this).width() );
        });

        // our partners slider
        $('.our-partners__slider').slick({
            infinite: true,
            dots: true,
            arrows: false,
            adaptiveHeight: true,
            slidesToShow: 5,
            touchThreshold: 100,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });

        // show more case studies
        $('.case-studies .more-results .circle-btn').on('click', function(e) {
            e.preventDefault();
            $('.case-studies .case-study:hidden').slice(0, 4).fadeIn();
            window.scrollTo(window.scrollX, window.scrollY - 1);
            if ($('.case-studies .case-study').length == $('.case-studies .case-study:visible').length) {
                $('.more-results').fadeOut();
            }
        });

        // case study video
        if ($('.case-study-video iframe').length) {
            var $csvideos = $('.case-study-video');

            $csvideos.each(function(idx, el) {
                var $cs = $(el);
                var cs_iframe = $cs.find('iframe');
                var cs_player = new Vimeo.Player(cs_iframe);
    
                // hide the video poster on click and play the video
                $cs.find('.case-study-video__poster').on('click', function() {
                    $(this).fadeOut();
                    cs_player.play();
                });
    
                // show the video poster when the video ends
                cs_player.on('ended', function() {
                    $cs.find('.case-study-video__poster').fadeIn();
                });
            });
        }

        // calculate the height of the work samples
        function workSamplesRowHeight(width) {
            var workSamplesRowHeight = $('.results-section__work-samples .row').height();
            var workSamplesRowHeightHalf = workSamplesRowHeight / 2;
            $('.results-section__work-samples').css({
                'height': workSamplesRowHeightHalf
            });
            $('.next-project').css('padding-top', workSamplesRowHeightHalf);
        }
        workSamplesRowHeight( $(window).width() );
        $(window).on('resize', function() {
            workSamplesRowHeight( $(this).width() );
        });

        // work gallery slider
        $('.work__gallery-slider__slider').slick({
            infinite: true,
            dots: true,
            arrows: false,
            adaptiveHeight: true,
            slidesToShow: 3,
            touchThreshold: 100,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        // show more news articles
        $('.news-articles .more-results .circle-btn').on('click', function(e) {
            e.preventDefault();
            $('.news-articles article:hidden').slice(0, 4).fadeIn();
            window.scrollTo(window.scrollX, window.scrollY - 1);
            if ($('.news-articles article').length == $('.news-articles article:visible').length) {
                $('.more-results').fadeOut();
            }
        });

        // about video
        if ($('.about-video iframe').length) {
            var $aboutvideo = $('.about-video');

            $aboutvideo.each(function(idx, el) {
                var $about = $(el);
                var about_iframe = $about.find('iframe');
                var about_player = new Vimeo.Player(about_iframe);
    
                // hide the video poster on click and play the video
                $about.find('.about-video__poster').on('click', function() {
                    $(this).fadeOut();
                    about_player.play();
                });
    
                // show the video poster when the video ends
                about_player.on('ended', function() {
                    $about.find('.about-video__poster').fadeIn();
                });
            });
        }

        // prevent custom next button from reloading the page
        $('.trends-slider__slider__next').on('click', function(e) {
            e.preventDefault();
        });

        // trends slider
        $('.trends-slider__slider').slick({
            infinite: true,
            dots: true,
            prevArrow: '',
            nextArrow: $('.trends-slider__slider__next'),
            adaptiveHeight: true,
            touchThreshold: 100,
        });

    });

    // detect when homepage case studies are near the top of the screen
    $(document).scroll(function() {
        if ($('.home .results').length) {
            var cs1 = $('.case-study-1');
            var cs2 = $('.case-study-2');
            var cs3 = $('.case-study-3');
            var top1 = cs1.offset().top - $(document).scrollTop();
            var top2 = cs2.offset().top - $(document).scrollTop();
            var top3 = cs3.offset().top - $(document).scrollTop();

            if (top1 < 150 && !cs1.is('.rotate-right')) {
                $(cs1).addClass('rotate-right');
            }
            if (top1 > 150 && cs1.is('.rotate-right')) {
                $(cs1).removeClass('rotate-right');
            }

            if (top2 < 150 && !cs2.is('.rotate-left')) {
                $(cs2).addClass('rotate-left');
            }
            if (top2 > 150 && cs2.is('.rotate-left')) {
                $(cs2).removeClass('rotate-left');
            }

            if (top3 < 150 && !cs3.is('.rotate-right')) {
                $(cs3).addClass('rotate-right');
            }
            if (top3 > 150 && cs3.is('.rotate-right')) {
                $(cs3).removeClass('rotate-right');
            }
        }
    });

    // work menu toggle
    $('.nav-work a').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('work-modal-open').removeClass('work-modal-closed work-modal-not-opened');
    });
    $('.work-gallery .back-btn').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('work-modal-open').removeClass('work-modal-closed work-modal-not-opened');
    });
    $('.mobile-work-modal').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('work-modal-open').removeClass('work-modal-closed work-modal-not-opened');
    });
    $('.work-modal .btn-close').on('click', function() {
        $('body').addClass('work-modal-closed').removeClass('work-modal-open');
    });

    // counter
    
    var valueAnimDuration = 4;
    var valueAnimTicks = 200;

    var $counters = $('.about-result__text__percentage__num, .about-result__text__heading code, .case-study code');

    $counters.each(function(i, e) {
        e.dataset.textContent = e.textContent;
        e.style.width = e.offsetWidth + 'px';
        e.style.display = 'inline-block';
        e.textContent = 0;
    });
    
    function isInViewport(element) {
        // Get the bounding client rectangle position in the viewport
        var bounding = element.getBoundingClientRect();
    
        // Checking part. Here the code checks if it's *fully* visible
        // Edit this part if you just want a partial visibility
        if (
            bounding.top >= 0 &&
            bounding.left >= 0 &&
            bounding.right <= (window.innerWidth || document.documentElement.clientWidth) &&
            bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight)
        ) {
            //console.log('In the viewport! :)');
            return true;
        } else {
            //console.log('Not in the viewport. :(');
            return false;
        }
    }

    function handleScrollActions() {
        $counters
            .each(function (i, e) {
                if (!e.classList.contains('r22') && isInViewport(e)) {
                    // update the element display
                    try {
                        e.classList.add('r22');

                        var textContent = e.dataset['textContent'];
                        var v = 0;
                        var negative = textContent.indexOf('-') >= 0;
                        var wholenumber = false;


                        if (textContent.indexOf('.') > -1) {
                            // decimal
                            v = parseFloat(textContent);
                        } else {
                            // whole number
                            wholenumber = true;
                            v = parseInt(textContent);
                        }

                        if (isNaN(v)) {
                            return;
                        }


                        var step = v / valueAnimTicks;
                        if (wholenumber) {
                            step = Math.round(step);

                            // make sure not zero or will not animate
                            if (!step) {
                                step = wholenumber ? 1 : .5;
                            }
                        }

                        var cancel = 0;
                        var vv = 0;
                        //console.log(textContent, negative, wholenumber, v, step);

                        e.textContent = 0;

                        // delay to account for animation
                        setTimeout(function() {
                            cancel = setInterval(function () {
                                if (vv >= v) {
                                    //console.log('End: ' + textContent);
                                    e.textContent = textContent;
                                    clearInterval(cancel);
                                } else {
                                    if (negative) {
                                        vv = vv - step;
                                    } else {
                                        vv = vv + step;
                                    }
                                    //console.log('' + textContent + ':' + vv);

                                    if (wholenumber) {
                                        e.textContent = vv.toFixed(0);
                                    } else {
                                        e.textContent = vv.toFixed(2);
                                    }
                                    
                                }
                            });
                        }, 1000);

                    } catch (ex) {
                        console.error(ex);
                    }
                }
            });
    }

    window.addEventListener('scroll', function (event) {
        handleScrollActions();
    }, {passive: true});

    handleScrollActions();
})(jQuery);