<!doctype html>
<html lang="en">
    <head>
        <title>Work - Turkey Hill | quench</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="work-gallery dark-theme nav-not-opened work-modal-not-opened">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
            <section class="hero animatedParent animateOnce">
                <div class="row">
                    <div class="col-lg-2">
                        <a href="" class="back-btn animated growIn delay-1000">Back</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-2 col-md-6">
                        <div class="hero__text">
                            <h1 class="hero__text__heading animated fadeInUpShort delay-250">Turkey Hill</h1>
                            <div class="animated fadeInUpShort delay-500">
                                <p class="hero__text__subheading animated lineHeight delay-500">Rewriting the flavor rules to highlight the unique combinations found in Trio’politan ice cream.</p>
                            </div>
                            <div class="hero__text__capabilities animated fadeInUpShort delay-750">
                                <ul>
                                    <li>Work Shown - Trio Social Media</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hero__img animated fadeInUpMd slow delay-500">
                            <picture>
                                <source media="(max-width: 575px)" srcset="img/turkey-hill-work-hero-mobile.jpg">
                                <img src="img/turkey-hill-work-hero-desktop.jpg" alt="" class="animated shrinkIn slow delay-500">
                            </picture>
                        </div>
                    </div>
                </div>
                <a href="" class="hero__work mobile-work-modal animated fadeInUpShort delay-1250">Work</a>
            </section>
            <section class="work">
                <div class="work__gallery --one-up --white">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="animatedParent animateOnce">
                                    <div class="work__gallery__video --md-size animated workFrame slow delay-250" id="video-1">
                                        <div class="work__gallery__video__poster">
                                            <img src="img/turkey-hill-poster.jpg" alt="" class="animated workImg slow delay-250" />
                                            <div class="work__gallery__video__poster__play"></div>
                                        </div>
                                        <div class="work__gallery__video__video">
                                            <div style="padding:100% 0 0 0;position:relative;">
                                                <iframe src="https://player.vimeo.com/video/674129312?h=22197df3f5&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work__gallery --one-up --green">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="animatedParent animateOnce">
                                    <div class="work__gallery__video --md-size animated workFrame slow delay-250" id="video-2">
                                        <div class="work__gallery__video__poster">
                                            <img src="img/turkey-hill-poster.jpg" alt="" class="animated workImg slow delay-250" />
                                            <div class="work__gallery__video__poster__play"></div>
                                        </div>
                                        <div class="work__gallery__video__video">
                                            <div style="padding:100% 0 0 0;position:relative;">
                                                <iframe src="https://player.vimeo.com/video/674129312?h=22197df3f5&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work__gallery --one-up">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="animatedParent animateOnce">
                                    <div class="work__gallery__video --md-size animated workFrame slow delay-250" id="video-3">
                                        <div class="work__gallery__video__poster">
                                            <img src="img/turkey-hill-poster.jpg" alt="" class="animated workImg slow delay-250" />
                                            <div class="work__gallery__video__poster__play"></div>
                                        </div>
                                        <div class="work__gallery__video__video">
                                            <div style="padding:100% 0 0 0;position:relative;">
                                                <iframe src="https://player.vimeo.com/video/674129312?h=22197df3f5&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="animatedParent animateOnce">
                <section class="contact-quench animated greenCallout delay-250">
                    <div class="container">
                        <div class="contact-quench__text animated fadeInUpShort delay-1000">
                            <h2>Like what you see?</h2>
                            <p>Give us a call and we’ll show you more.</p>
                        </div>
                        <div class="contact-quench__btn animated growIn delay-1250">
                            <a href="contact.php" class="circle-btn --black"><span>Contact <br />quench</span></a>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <?php include('includes/work-modal.php'); ?>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
        <script>
            (function($) {
                $(document).ready(function() {
                    // video 1
                    if ($('#video-1 iframe').length) {
                        var video1_iframe = document.querySelector('#video-1 iframe');
                        var video1_player = new Vimeo.Player(video1_iframe);
                        $('#video-1 .work__gallery__video__poster').on('click', function() {
                            $(this).fadeOut();
                            video1_player.play();
                        });
                        video1_player.on('ended', function() {
                            $('#video-1 .work__gallery__video__poster').fadeIn();
                        });
                    }

                    // video 2
                    if ($('#video-2 iframe').length) {
                        var video2_iframe = document.querySelector('#video-2 iframe');
                        var video2_player = new Vimeo.Player(video2_iframe);
                        $('#video-2 .work__gallery__video__poster').on('click', function() {
                            $(this).fadeOut();
                            video2_player.play();
                        });
                        video2_player.on('ended', function() {
                            $('#video-2 .work__gallery__video__poster').fadeIn();
                        });
                    }

                    // video 3
                    if ($('#video-3 iframe').length) {
                        var video3_iframe = document.querySelector('#video-3 iframe');
                        var video3_player = new Vimeo.Player(video3_iframe);
                        $('#video-3 .work__gallery__video__poster').on('click', function() {
                            $(this).fadeOut();
                            video3_player.play();
                        });
                        video3_player.on('ended', function() {
                            $('#video-3 .work__gallery__video__poster').fadeIn();
                        });
                    }
                });
            })(jQuery);
        </script>
    </body>
</html>