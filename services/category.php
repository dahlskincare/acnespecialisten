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
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
$title = 'Problem skin facials';
$image_small = 'https://via.placeholder.com/358x274.webp';
$image_large = 'https://via.placeholder.com/424x456.webp';
$booking_url = '';
$consultation_url = '';
$duration = '50 min';
$procedures = array(
    '1' => new Procedure(null, '£1 995'),
    '3' => new Procedure('£3 885', '£2 595'),
    '5' => new Procedure('£6 475', '£3 995')
);
$nav_buttons = array(
    'about' => 'Overview',
    'preparing' => 'Preparing',
    'procedure-process' => 'Process',
    'services' => 'Types',
);

$description_title = 'What is problem skin facials?';
$description_text = '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>';
$articles = array(
    new Article('preparing', 'Preparing for problem skin facials', 'https://via.placeholder.com/358x272.webp', 'https://via.placeholder.com/872x456.webp', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>', array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))),
    new Article('procedure-process', 'Procedure process', 'https://via.placeholder.com/358x272.webp', 'https://via.placeholder.com/872x456.webp', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>', array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))),
);
$services_title = 'Problem facials we provide';
$services = array(
    new Service('chemical-peeling-pigmentation', 'Chemical peeling', '30 min', '1295 kr', 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',  'https://via.placeholder.com/102x102.jpg', 'https://via.placeholder.com/200x200.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/'),
    new Service('laser-pigmentation', 'Laser', '30 min', '1295 kr', 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',  'https://via.placeholder.com/102x102.jpg', 'https://via.placeholder.com/200x200.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/'),
    new Service('ipl-pigmentation', 'IPL', '30 min', '1295 kr', 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',  'https://via.placeholder.com/102x102.jpg', 'https://via.placeholder.com/200x200.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/'),
    new Service('freezetreat-pigmentation', 'FreezeTreat', '30 min', '1295 kr', 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',  'https://via.placeholder.com/102x102.jpg', 'https://via.placeholder.com/200x200.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/')

);
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
            <div id="floating-picture" style="background-image: url('<?php echo $image_large ?>')">
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
                        <div class="mt-xl large-procedures flex-row">
                            <div class="large-procedure">
                                <div class="p200 l10n">1 procedure</div>
                                <div class="h200"><?php echo $procedures['1']->price ?></div>
                            </div>
                            <div class="large-procedure">
                                <div class="p200 l10n">3 procedures</div>
                                <div class="h200"><?php echo $procedures['3']->price ?></div>
                            </div>
                            <div class="large-procedure">
                                <div class="p200 l10n">5 procedures</div>
                                <div class="h200"><?php echo $procedures['5']->price ?></div>
                            </div>
                        </div>
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
                <section id="badges" class="mt-m mb-s is-hidden-desktop">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </section>
                <section id="image" class="is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $image_large ?>">
                        <img src="<?php echo $image_large ?>" alt="<?php echo $title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                </section>
                <section id="about">
                    <h2 class="h500"><?php echo $description_title ?></h2>
                    <div class="mt-xl"><?php echo $description_text ?></div>
                </section>
                <section id="articles">
                    <?php foreach ($articles as $article) { ?>
                        <div id="<?php echo $article->id ?>">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php'); ?>
                        </div>
                    <?php } ?>
                </section>
                <section id="services">
                    <h2 class="h500"><?php echo $services_title; ?></h2>
                    <?php foreach ($services as $service) { ?>
                        <div class="mt-xxl" id="service-<?php echo $service->id ?>">
                        </div>
                    <?php } ?>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="includes/scripts/floating-image.js"></script>
</body>

</html>