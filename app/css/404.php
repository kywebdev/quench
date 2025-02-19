<!doctype html>
<html lang="en">
    <head>
        <title>404 | quench</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="error404 light-theme nav-not-opened work-modal-not-opened">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
            <section class="hero animatedParent animateOnce">
                <div class="container">
                    <h1 class="hero__heading animated fadeInUpShort delay-250">404</h1>
                    <div class="hero__text animated fadeInUpShort delay-500">
                        <p class="animated lineHeight slow delay-500">Nothing to see here, nothing to eat here. Head back home to fully indulge!</p>
                    </div>
                    <div class="hero__btn__container animated growIn delay-1000">
                        <a href="index.php" class="circle-btn --black"><span>quench <br />Home</span></a>
                    </div>
                </div>
            </section>
            <section class="hero__links animatedParent animateOnce">
                <div class="container">
                    <a href="" class="mobile-work-modal animated fadeInUpShort delay-1250">Work</a>
                    <a href="contact.php" class="animated fadeInUpShort delay-1500">Let's talk</a>
                </div>
            </section>
        </main>
        <?php include('includes/work-modal.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>