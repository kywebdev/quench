<!doctype html>
<html lang="en">
    <head>
        <title>Work - Mrs. Dash | quench</title>
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
                            <h1 class="hero__text__heading animated fadeInUpShort delay-250">Mrs. Dash</h1>
                            <div class="animated fadeInUpShort delay-500">
                                <p class="hero__text__subheading animated lineHeight delay-500">Showing Salt and Pepper who’s boss.</p>
                            </div>
                            <div class="hero__text__capabilities animated fadeInUpShort delay-750">
                                <ul>
                                    <li>Work Shown - Salt and Pepper Shakers print</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hero__img animated fadeInUpMd slow delay-500">
                            <picture>
                                <source media="(max-width: 575px)" srcset="img/mrs-dash-work-hero-mobile.jpg">
                                <img src="img/mrs-dash-work-hero-desktop.jpg" alt="" class="animated shrinkIn slow delay-500">
                            </picture>
                        </div>
                    </div>
                </div>
                <a href="" class="hero__work mobile-work-modal animated fadeInUpShort delay-1250">Work</a>
            </section>
            <section class="work">
                <div class="work__full-width animatedParent animateOnce">
                    <div class="work__full-width__img animated fadeInUpMd slow delay-250">
                        <img src="img/mrs-dash-work-1.jpg" alt="" class="animated shrinkIn slow delay-250" />
                    </div>
                </div>
                <div class="work__gallery --four-up --white">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="animatedParent animateOnce">
                                    <div class="work__gallery__img animated workFrame slow delay-250">
                                        <img src="img/mrs-dash-work-2.jpg" alt="" class="animated workImg slow delay-250" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="animatedParent animateOnce">
                                    <div class="work__gallery__img animated workFrame slow delay-250">
                                        <img src="img/mrs-dash-work-3.jpg" alt="" class="animated workImg slow delay-250" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="animatedParent animateOnce">
                                    <div class="work__gallery__img animated workFrame slow delay-250">
                                        <img src="img/mrs-dash-work-4.jpg" alt="" class="animated workImg slow delay-250" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="animatedParent animateOnce">
                                    <div class="work__gallery__img animated workFrame slow delay-250">
                                        <img src="img/mrs-dash-work-5.jpg" alt="" class="animated workImg slow delay-250" />
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
    </body>
</html>