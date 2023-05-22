<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Our approach</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">
    <meta property="og:title" content="Acnespecialisten" />
    <meta property="og:description" content="" class="l10n" />
    <meta property="og:image" content="images/about-desktop.jpg" />
    <meta property="twitter:title" content="Acnespecialisten" />
    <meta property="twitter:description" content="" class="l10n" />
    <meta property="twitter:image" content="images/about-desktop.jpg" />
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/metod/method.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <div class="container">
                <div class="flex-row justify-space-between">
                    <div class="is-hidden-touch">
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </div>
            </div>
        </section>
        <div class="container">
            <div id="content">
                <section id="title">
                    <h1 class="l10n">Your alternative to a dermatologist</h1>
                    <p class="l10n">At Acnespecialisten there is an experienced and well-educated group of doctors with specialist skills and broad experience from the aesthetic and reconstructive industry.</p>
                </section>
                <section id="image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="presentkort/small.webp">
                        <source media="(min-width: 800px)" srcset="presentkort/large.webp">
                        <img src="presentkort/small.webp" alt="Gift cards" title="Gift cards" width="360" height="274" />
                    </picture>
                </section>
                <section id="bullets">
                    <div class="columns is-variable is-3">
                        <div class="column">
                            <div class="bullet">
                                <div class="bullet-label">
                                    <?php icon('star'); ?>
                                    <span class="l10n">25 years</span>
                                </div>
                                <div class="bullet-content l10n">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="bullet">
                                <div class="bullet-label">
                                    <?php icon('star'); ?>
                                    <span class="l10n">Unique solution</span>
                                </div>
                                <div class="bullet-content l10n">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="bullet">
                                <div class="bullet-label">
                                    <?php icon('star'); ?>
                                    <span class="l10n">Bullet #3</span>
                                </div>
                                <div class="bullet-content l10n">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>