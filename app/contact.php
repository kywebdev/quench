<!doctype html>
<html lang="en">
    <head>
        <title>Contact | quench</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="contact dark-theme nav-not-opened work-modal-not-opened">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
            <section class="hero animatedParent animateOnce">
                <div class="container">
                    <h1 class="hero__heading animated fadeInUpShort delay-250">Let's talk</h1>
                </div>
            </section>
            <section class="contact-info animatedParent animateOnce">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact-info__cities">
                                <div class="contact-info__cities__city animated fadeInUpShort">
                                    <span class="contact-info__cities__city__name">HBG</span>
                                    <address class="contact-info__cities__city__addr">1006 Market Street<br />
                                    Harrisburg PA 17109</address>
                                </div>
                                <div class="contact-info__cities__city animated fadeInUpShort">
                                    <span class="contact-info__cities__city__name">PHL</span>
                                    <address class="contact-info__cities__city__addr">718 Arch Street<br />
                                    Suite 200NW<br />
                                    Philadelphia PA 19106</address>
                                </div>
                                <div class="contact-info__cities__city animated fadeInUpShort">
                                    <span class="contact-info__cities__city__name">ATL</span>
                                    <address class="contact-info__cities__city__addr">1320 Ellsworth Industrial Boulevard<br />
                                    Suite A1000<br />
                                    Atlanta, Georgia 30318</address>
                                </div>
                            </div>
                            <div class="contact-info__email animated fadeInUpShort delay-1250">
                                <a href="mailto:cheers@quenchagency.com">cheers@quenchagency.com</a>
                            </div>
                        </div>
                        <div class="col-lg-8 contact-info__form --gform_wrapper animated fadeInUpShort delay-1500">
                            <form>
                                <div>
                                    <label for="name">Name</label>
                                    <input type="text" id="name" placeholder="Name" />
                                </div>
                                <div>
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="Email" />
                                </div>
                                <div>
                                    <label for="company-name">Company Name</label>
                                    <input type="text" id="company-name" placeholder="Company Name" />
                                </div>
                                <div>
                                    <label for="company-type">Company Type</label>
                                    <select id="company-type">
                                        <option selected disabled>Company Type</option>
                                        <option>Type 1</option>
                                        <option>Type 2</option>
                                        <option>Type 3</option>
                                        <option>Type 4</option>
                                        <option>Type 5</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="project-name">Project Name</label>
                                    <input type="text" id="project-name" placeholder="Project Name" />
                                </div>
                                <div>
                                    <label for="project-type">Project Type</label>
                                    <select id="project-type">
                                        <option selected disabled>Project Type</option>
                                        <option>Type 1</option>
                                        <option>Type 2</option>
                                        <option>Type 3</option>
                                        <option>Type 4</option>
                                        <option>Type 5</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="budget-range">Budget Range</label>
                                    <input type="text" id="budget-range" placeholder="Budget Range" />
                                </div>
                                <div>
                                    <label for="timeline">Timeline</label>
                                    <input type="text" id="timeline" placeholder="Timeline" />
                                </div>
                                <div class="textarea">
                                    <label for="project-desc">Project Description</label>
                                    <textarea id="project-desc"></textarea>
                                </div>
                                <input type="submit" id="submit" value="Submit" />
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <div class="animatedParent animateOnce">
                <section class="join-quench animated greenCallout delay-250">
                    <div class="container">
                        <div class="join-quench__text animated fadeInUpShort delay-1000">
                            <h2>Join the team</h2>
                            <p>We are the world’s most passionate food and beverage brand builders. And we would love it if you joined us.</p>
                        </div>
                        <div class="join-quench__btn animated growIn delay-1250">
                            <a href="careers.php" class="circle-btn --black"><span>quench <br />careers</span></a>
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