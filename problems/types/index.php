<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>

<?php
class BasedTypeCategory
{
    public function __construct($title, $content, $types)
    {
        $this->title = $title;
        $this->content = $content;
        $this->types = $types;
    }

    public string $title;
    public string $content;
    public array $types;
}

class BasedType
{
    public function __construct($image_url, $title, $subtitle, $content, $url)
    {
        $this->image_url = $image_url;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->content = $content;
        $this->url = $url;
    }

    public string $image_url;
    public string $title;
    public string $subtitle;
    public string $content;
    public string $url;
}

$image_small = 'https://via.placeholder.com/358x274.jpg';
$image_large = 'https://via.placeholder.com/424x456.jpg';

if ($lang == 'sv') {
    $problem_name = 'Akneärr';
    $header_title = 'Olika typer av akneärr';
    $header_description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.';
    $booking_url = '';
    $about_title = 'What is acne scar types?';
    $about_description = '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="mt-m p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>';
    $based_type_categories = array();
} else {
    $problem_name = 'Acne scars';
    $header_title = 'Different type of acne scars';
    $header_description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.';
    $booking_url = '';
    $about_title = 'What is acne scar types?';
    $about_description = '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="mt-m p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>';
    $based_type_categories = array(
        new BasedTypeCategory(
            'Based on age',
            '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
            array(
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Adult acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/adult-acne-scars'),
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Teen acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/teen-acne-scars'),
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Kids acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/kids-acne-scars')
            )
        ),
        new BasedTypeCategory(
            'Based on severity',
            '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
            array(
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Comedones', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/adult-acne-scars'),
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Pimples', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/teen-acne-scars'),
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Cystic acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/kids-acne-scars'),
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Acne conblogata', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/kids-acne-scars')
            )
        ),
        new BasedTypeCategory(
            'Based on reason',
            '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
            array(
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Mallorca acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/adult-acne-scars'),
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Hormonal acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/teen-acne-scars'),
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Cosmetic acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/kids-acne-scars'),
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Acne exoriee', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/kids-acne-scars'),
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Acne mechanics', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/kids-acne-scars'),
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Acne medicamentosa', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/kids-acne-scars'),
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Fungal acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/kids-acne-scars')
            )
        ),
        new BasedTypeCategory(
            'Based on area',
            '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
            array(
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Acne on face', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/adult-acne-scars'),
                new BasedType('https://via.placeholder.com/102x102.jpg', 'Acne on body', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>', 'problems/acne-scars/types/teen-acne-scars')
            )
        )
    );
}
?>


<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="problems/types/index.css">
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
                            <?php echo $header_title ?>
                        </h2>
                        <p class="p200 mt-m"><?php echo $header_description ?></p>
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
                        <?php echo $header_title ?>
                    </h1>
                    <p class="mt-m">
                        <?php echo $header_description ?>
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
                            <?php echo $header_title ?>
                        </h1>
                        <p class="mt-s p200">
                            <?php echo $header_description ?>
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
                        <img src="<?php echo $image_large ?>" alt="<?php echo $header_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <a href="javascript:;" onclick="scrollToElement('#about')" class="button b50 grey l10n">Overview</a>
                    <a href="javascript:;" onclick="scrollToElement('.based')" class="button b50 grey l10n">Define problem</a>
                    <a href="javascript:;" onclick="scrollToElement('#treatments')" class="button b50 grey l10n">Treatment solutions</a>
                    <a href="javascript:;" onclick="scrollToElement('#prevent')" class="button b50 grey l10n">Prevent problem</a>
                    <a href="javascript:;" onclick="scrollToElement('#repair')" class="button b50 grey l10n">Repair</a>
                    <a href="javascript:;" onclick="scrollToElement('#cases')" class="button b50 grey l10n">Cases</a>
                    <a href="javascript:;" onclick="scrollToElement('#reviews')" class="button b50 grey l10n">Reviews</a>
                    <a href="javascript:;" onclick="scrollToElement('#faq')" class="button b50 grey l10n">Questions and answers</a>
                    <a href="javascript:;" onclick="scrollToElement('#skin-guide')" class="button b50 grey l10n">Skin guide</a>
                    <a href="javascript:;" onclick="scrollToElement('#specialists')" class="button b50 grey l10n">Specialists</a>
                    <a href="javascript:;" onclick="scrollToElement('#related-problems')" class="button b50 grey l10n">Related problems</a>
                </section>
                <section id="about">
                    <h2 class="h500"><?php echo $about_title ?></h2>
                    <div class="mt-xl"><?php echo $about_description ?></div>
                </section>
                <?php foreach ($based_type_categories as $category) { ?>
                    <section class="based">
                        <h2 class="h500"><?php echo $category->title ?></h2>
                        <div class="mt-xs mb-xs"><?php echo $category->content ?></div>
                        <div class="columns is-3 is-variable is-multiline">
                            <?php foreach ($category->types as $type) { ?>
                                <div class="column is-half">
                                    <?php include('widgets/type-card/type-card.php') ?>
                                </div>
                            <?php } ?>
                        </div>
                    </section>
                <?php } ?>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="problems/problem.js"></script>
</body>

</html>