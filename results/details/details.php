<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Result details</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <!-- This stylesheet should be included only on pages with the default style and layout. -->
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/results/details/details.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner" class="sticky-badges-target">
            <div id="banner-green">
                <div class="container l10n">
                    <div class="is-hidden-desktop">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        <h1 class="h600 mt-xs l10n">Treatment details</h1>
                    </div>
                    <div class="is-hidden-touch" id="banner-green-desktop">
                        <div class="flex-row justify-space-between">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                            <div class="mt-xl mb-xs">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                            </div>
                        </div>
                        <div class="flex-row align-end">
                            <div id="skin-problems-header-column">
                                <h1 class="h600 mt-xs l10n">Treatment details</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-m is-hidden-desktop">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
            </div>
        </section>
        <div class="container">
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>