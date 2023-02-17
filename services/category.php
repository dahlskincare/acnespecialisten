<?php

class Procedure
{
    public function __construct($full_price, $price)
    {
        $this->full_price = $full_price;
        $this->price = $price;
    }

    public ?string $full_price;
    public string $price;
}

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
$title = 'Problem skin facials';
$floating_image = 'https://via.placeholder.com/424x456.jpg';
$booking_url = '';
$consultation_url = '';
$duration = '50 min';
$procedures = array(
    '1' => new Procedure(null, '£1 995'),
    '3' => new Procedure('£3 885', '£2 595'),
    '5' => new Procedure('£6 475', '£3 995'),
)

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | <?php echo $title ?></title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/services/category.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <div class="is-hidden-touch is-hidden-desktop-only" id="floater">
        <div class="container">
            <div id="floating-picture" style="background-image: url('<?php echo $floating_image ?>')">
                <div id="overlay">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    <div>
                        <h2 class="h600">
                            <?php echo $title ?>
                        </h2>
                        <p class="mt-m">
                            <span class="p200 l10n">Duration: <?php echo $duration ?></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section id="header">
            <div id="green-header-small" class="is-hidden-desktop">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                    <h1 class="mt-xs h600">
                        <?php echo $title ?>
                    </h1>
                    <h3 class="mt-xs p200 l10n">Duration: <?php echo $duration ?></h3>
                    <div class="procedures mt-xl">
                        <div class="procedure">
                            <p class="p200 l10n">1 procedure</p>
                            <p class="h200"><?php echo $procedures['1']->price ?></p>
                        </div>
                        <div class="procedure">
                            <p class="p200 l10n">3 procedures</p>
                            <p>
                                <span class="p200 strikethrough mr-xs"><?php echo $procedures['3']->full_price ?></span>
                                <span class="h200"><?php echo $procedures['3']->price ?></span>
                            </p>
                        </div>
                        <div class="procedure">
                            <p class="p200 l10n">5 procedures</p>
                            <p>
                                <span class="p200 strikethrough mr-xs"><?php echo $procedures['5']->full_price ?></span>
                                <span class="h200"><?php echo $procedures['5']->price ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="mt-xl columns is-mobile">
                        <div class="column is-half">
                            <a href="<?php echo $consultation_url ?>" target="_blank" class="button b200 white expand l10n">Free consultation</a>
                        </div>
                        <div class="column is-half">
                            <a href="<?php echo $booking_url ?>" target="_blank" class="button b200 white expand l10n">Book a treatment</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="green-header-large" class="is-hidden-touch">
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
                        <div class="mt-xs">
                            <span class="p200 l10n">Duration: <?php echo $duration ?></span>
                        </div>
                        <div class="mt-xl flex-row" id="book-buttons">
                            <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button b200 white l10n">Get a free consultation</a>
                            <a href="<?php echo $booking_url ?>" target="_blank" class="button b200 white l10n">Book a treatment</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="badges" class="mt-m is-hidden-desktop">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
        </section>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>