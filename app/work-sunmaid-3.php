<!doctype html>
<html lang="en">
    <head>
        <title>Work - Sun•Maid | quench</title>
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
                            <h1 class="hero__text__heading animated fadeInUpShort delay-250">Sun•Maid</h1>
                            <div class="animated fadeInUpShort delay-500">
                                <p class="hero__text__subheading animated lineHeight delay-500">Imagining a whole new world of flavor for a whole new world of snacks.</p>
                            </div>
                            <div class="hero__text__capabilities animated fadeInUpShort delay-750">
                                <ul>
                                    <li>Work Shown - “Imagine That” Broadcast</li>
                                    <li>Banners</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hero__img animated fadeInUpMd slow delay-500">
                            <picture>
                                <source media="(max-width: 575px)" srcset="img/sunmaid-work-hero-mobile-3.jpg">
                                <img src="img/sunmaid-work-hero-desktop-3.jpg" alt="" class="animated shrinkIn slow delay-500">
                            </picture>
                        </div>
                    </div>
                </div>
                <a href="" class="hero__work mobile-work-modal animated fadeInUpShort delay-1250">Work</a>
            </section>
            <section class="work">
                <div class="work__full-width animatedParent animateOnce">
                    <div class="work__full-width__img animated fadeInUpMd slow delay-250">
                        <img src="img/sunmaid-work-4.jpg" alt="" class="animated shrinkIn slow delay-250" />
                    </div>
                </div>
                <div class="work__gallery-slider --white">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="animatedParent animateOnce">
                                    <div class="work__gallery-slider__slider animated fadeInUpMd delay-250">
                                        <div class="slide">
                                            <img src="img/sunmaid-slide-1.png" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/sunmaid-slide-2.png" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/sunmaid-slide-3.png" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/sunmaid-slide-1.png" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/sunmaid-slide-2.png" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="img/sunmaid-slide-3.png" alt="" />
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
                        $('#video-1 .work__full-width__video__poster').on('click', function() {
                            $(this).fadeOut();
                            video1_player.play();
                        });
                        video1_player.on('ended', function() {
                            $('#video-1 .work__full-width__video__poster').fadeIn();
                        });
                    }
                });
            })(jQuery);
        </script>
    </body>
</html>