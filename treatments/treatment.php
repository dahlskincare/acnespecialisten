<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');


$image_large = 'images/services/large/facials.jpg';
$image_small = 'images/services/small/facials.jpg';

// l10n
if ($lang == 'sv') {
    $title = 'Ansiktsbehandling';
    $description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we.';
} else {
    $title = 'Facial';
    $description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we.';
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">
        Acnespecialisten |
        <?php echo $title ?>
    </title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">

    <link rel="stylesheet" href="treatments/treatment.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <div class="is-hidden-touch is-hidden-desktop-only" id="floater">
        <div class="container">
            <div id="floating-picture" style="background-image: url('<?php echo $image_large ?>')">
                <div id="overlay">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    <div>
                        <h2 class="h600">
                            <?php echo $title ?>
                        </h2>
                        <div class="mt-xl columns is-2 is-variable">
                            <div class="column">
                                <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button white expand l10n">Get a free consultation</a>
                            </div>
                            <div class="column">
                                <a href="<?php echo $booking_url ?>" target="_blank" class="button white expand l10n">Book a treatment</a>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section id="header">
            <div id="green-header-small" class="is-hidden-tablet">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                    <h1 class="mt-xs h600">
                        <?php echo $title ?>
                    </h1>
                    <h3 class="mt-m h200 l10n">Also known as</h3>
                    <?php foreach ($akas as $key => $aka) { ?>
                        <a href="glossary?keyword=<?php echo $key ?>" class="mt-xs button bright">
                            <?php echo $aka ?>
                        </a>
                    <?php } ?>
                    <p class="mt-m">
                        <?php echo $description ?>
                    </p>
                    <div class="mt-xl columns is-mobile">
                        <div class="column is-half">
                            <a href="https://dahlskincare.com/skin-consultation" target="_blank" class="button b200 white expand l10n">Free consultation</a>
                        </div>
                        <div class="column is-half">
                            <a href="<?php echo $booking_url ?>" target="_blank" class="button b200 white expand l10n">Book a treatment</a>
                        </div>
                    </div>
                    <div class="mt-xl">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    </div>
                </div>
            </div>
            <div id="green-header-large" class="is-hidden-mobile">
                <div class="container">
                    <div class="columns">
                        <div class="column is-half">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        </div>
                        <div class="column is-half flex-row align-end justify-end">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </div>
                    </div>
                    <div id="green-header-large-text" class="mt-xxs">
                        <h1 class="h600">
                            <?php echo $title ?>
                        </h1>
                        <p class="mt-s p200">
                            <?php echo $description ?>
                        </p>
                        <div class="mt-xl flex-row" id="book-buttons">
                            <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button b200 white l10n">Get a free consultation</a>
                            <a href="<?php echo $booking_url ?>" target="_blank" class="button b200 white l10n">Book a treatment</a>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div id="content">
                <section id="image" class="mt-xl is-hidden-desktop">
                    <picture class="is-hidden-tablet">
                        <source media="(max-width: 449px)" srcset="<?php echo $image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $image_large ?>">
                        <img src="images/services/large/<?php echo $image_large ?>" alt="<?php echo $title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <a href="javascript:;" onclick="scrollToElement('#about')" class="button grey l10n">Overview</a>
                    <a href="javascript:;" onclick="scrollToElement('#define')" class="button grey l10n">Define problem</a>
                    <a href="javascript:;" onclick="scrollToElement('#treatments')" class="button grey l10n">Treatment solutions</a>
                    <a href="javascript:;" onclick="scrollToElement('#results')" class="button grey l10n">Cases</a>
                    <a href="javascript:;" onclick="scrollToElement('#reviews')" class="button grey l10n">Reviews</a>
                    <a href="javascript:;" onclick="scrollToElement('#faq')" class="button grey l10n">FAQ</a>
                    <a href="javascript:;" onclick="scrollToElement('#skin-guide')" class="button grey l10n">Skin guide</a>
                    <a href="javascript:;" onclick="scrollToElement('#specialists')" class="button grey l10n">Specialists</a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="problems/problem.js"></script>
</body>

</html>