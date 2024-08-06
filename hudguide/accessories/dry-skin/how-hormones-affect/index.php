<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$article = new SkinGuideArticle(
    url: 'hudguide/accessories/dry-skin/how-hormones-affect/',
    url_title: 'How hormones effect?',
    title: 'How hormones effect?',
    subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
    problem: 'Acne',
    description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
    image_small: 'https://via.placeholder.com/426x324.webp',
    image_large: 'https://via.placeholder.com/872x456.jpg',
    image_alt: 'Hormones effect',
    image_title: 'Hormones effect',
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title class="l10n">Acnespecialisten</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/hudguide/category/subcategory/article/article.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/tiny_green_header_banner.php'); ?>
        </section>
        <div class="container">
            <section id="desktop-breadcrumbs" class="is-hidden-desktop">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
            </section>
            <div id="article-wrapper">
                <section id="metadata">
                    <h1 id="article-title"><?php echo $article->title ?></h1>
                    <h3 id="article-subtitle"><?php echo $article->subtitle ?></h3>
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $article->image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $article->image_large ?>">
                        <img src="<?php echo $article->image_small ?>" alt="<?php echo $article->title ?>" title="<?php echo $article->title ?>" width="360" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons" class="is-hidden">
                    <div id="nav-buttons-container">
                        <div class="scroll-button is-hidden" id="scroll-prev">
                            <button class="round-medium grey">
                                <?php icon('arrow-left') ?>
                            </button>
                        </div>
                        <div class="scroll-button is-hidden" id="scroll-next">
                            <button class="round-medium grey">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                        <div id="nav-buttons-scroller">
                            <div class="flex-row">
                            </div>
                        </div>
                    </div>
                </section>
                <section id="content">
                    <h2 class="nav-anchor">Overview</h2>
                    <h3>The Harmful Effects of Makeup</h3>
                    <p>
                        For the first time ever, fans from around the world can explore the faraway lands of their favorite holiday films with an exclusive overnight stay at the original Hobbiton™ Movie Set. Russell Alexander is inviting guests to his family’s property to live like Bilbo Baggins and retreat to The Shire™ for an overnight stay at Hobbiton, as featured in the famed The Lord of the Rings and The Hobbit film trilogies.
                    </p>
                    <p>
                        Nestled in the picturesque pastures of New Zealand’s Waikato region on a 2,500 acre working farm, the property’s rolling, green hills – bear a striking similarity to The Shire™ as described by J. R. R. Tolkien in The Lord of the Rings, and captivated Sir Peter Jackson’s movie scouts more than two decades ago. The team quickly realized the Hobbits had found their home – and this holiday season, it could be yours.
                    </p>
                    <h3>Premature Aging</h3>
                    <ol>
                        <li>
                            Donations totalling almost €10 million to heritage associations across Europe to boost heritage tourism and help restore some of the continent’s most important historical attractions and homes. Donations have been made in France, the UK, Spain, Italy and Germany.
                        </li>
                        <li>
                            The restoration of a traditional townhouse in the historic town of Sambuca, bringing an abandoned ‘1 euro house’ back to life with the aim of boosting tourism as part of a wider commitment to support rural communities and cultural heritage in Europe.
                        </li>
                        <li>
                            Showcasing Europe’s rich architectural heritage by offering guests the opportunity to stay in landmark heritage buildings such as Weissenstein Palace in Germany and Villa Balbiano in Italy.
                        </li>
                    </ol>
                    <h3>Dry or Oily Skin</h3>
                    <ul>
                        <li>
                            Donations totalling almost €10 million to heritage associations across Europe to boost heritage tourism and help restore some of the continent’s most important historical attractions and homes. Donations have been made in France, the UK, Spain, Italy and Germany.
                        </li>
                        <li>
                            The restoration of a traditional townhouse in the historic town of Sambuca, bringing an abandoned ‘1 euro house’ back to life with the aim of boosting tourism as part of a wider commitment to support rural communities and cultural heritage in Europe.
                        </li>
                        <li>
                            Showcasing Europe’s rich architectural heritage by offering guests the opportunity to stay in landmark heritage buildings such as Weissenstein Palace in Germany and Villa Balbiano in Italy.
                        </li>
                    </ul>
                    <img class="banner-image" src="https://via.placeholder.com/872x456.jpg" alt="Banner" title="Banner" with="874" height="476" />
                    <h3>The Harmful Effects of Makeup</h3>
                    <p>
                        For the first time ever, fans from around the world can explore the faraway lands of their favorite holiday films with an exclusive overnight stay at the original Hobbiton™ Movie Set. Russell Alexander is inviting guests to his family’s property to live like Bilbo Baggins and retreat to The Shire™ for an overnight stay at Hobbiton, as featured in the famed The Lord of the Rings and The Hobbit film trilogies.
                    </p>
                    <p>
                        Nestled in the picturesque pastures of New Zealand’s Waikato region on a 2,500 acre working farm, the property’s rolling, green hills – bear a striking similarity to The Shire™ as described by J. R. R. Tolkien in The Lord of the Rings, and captivated Sir Peter Jackson’s movie scouts more than two decades ago. The team quickly realized the Hobbits had found their home – and this holiday season, it could be yours.
                    </p>

                    <!-- Problem skin cards -->
                    <div class="columns is-2 is-variable">
                        <div class="column">
                            <a class="article-card" href="">
                                <img src="https://via.placeholder.com/426x324.webp" alt="Problem skin" title="Problem skin" width="426" height="324" />
                                <div class="ac-content">
                                    <div class="ac-category">Problem skin</div>
                                    <div class="ac-name">How hormones effect?</div>
                                    <div class="ac-desc">
                                        In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.
                                    </div>
                                    <div class="ac-link">Read more</div>
                                </div>
                            </a>
                        </div>
                        <div class="column">
                            <a class="article-card" href="">
                                <img src="https://via.placeholder.com/426x324.webp" alt="Problem skin" title="Problem skin" width="426" height="324" />
                                <div class="ac-content">
                                    <div class="ac-category">Problem skin</div>
                                    <div class="ac-name">How hormones effect?</div>
                                    <div class="ac-desc">
                                        In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.
                                    </div>
                                    <div class="ac-link">Read more</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <h2>Subtitle #2</h2>
                    <p>
                        For the first time ever, fans from around the world can explore the faraway lands of their favorite holiday films with an exclusive overnight stay at the original Hobbiton™ Movie Set. Russell Alexander is inviting guests to his family’s property to live like Bilbo Baggins and retreat to The Shire™ for an overnight stay at Hobbiton, as featured in the famed The Lord of the Rings and The Hobbit film trilogies.
                    </p>
                    <p>
                        Nestled in the picturesque pastures of New Zealand’s Waikato region on a 2,500 acre working farm, the property’s rolling, green hills – bear a striking similarity to The Shire™ as described by J. R. R. Tolkien in The Lord of the Rings, and captivated Sir Peter Jackson’s movie scouts more than two decades ago. The team quickly realized the Hobbits had found their home – and this holiday season, it could be yours.
                    </p>

                    <!-- Call to action banner -->
                    <div class="cta-banner">
                        <div class="cta-banner-texts">
                            <div class="cta-banner-header">Want to identify your problem?</div>
                            <div class="cta-banner-content">
                                In a personal meeting with a skin specialist, your skin type is examined and identified.
                            </div>
                            <div>
                                <a href="gratis-hudkonsultation" class="button white expand l10n" title="Get a free consultation">Get a free consultation</a>
                            </div>
                        </div>
                    </div>

                    <h2>Subtitle #3</h2>
                    <p>
                        For the first time ever, fans from around the world can explore the faraway lands of their favorite holiday films with an exclusive overnight stay at the original Hobbiton™ Movie Set. Russell Alexander is inviting guests to his family’s property to live like Bilbo Baggins and retreat to The Shire™ for an overnight stay at Hobbiton, as featured in the famed The Lord of the Rings and The Hobbit film trilogies.
                    </p>
                    <p>
                        Nestled in the picturesque pastures of New Zealand’s Waikato region on a 2,500 acre working farm, the property’s rolling, green hills – bear a striking similarity to The Shire™ as described by J. R. R. Tolkien in The Lord of the Rings, and captivated Sir Peter Jackson’s movie scouts more than two decades ago. The team quickly realized the Hobbits had found their home – and this holiday season, it could be yours.
                    </p>

                    <!-- Quote -->
                    <figure>
                        <blockquote>
                            For more than two decades, we’ve welcomed millions of passionate fans to Hobbiton Movie Set, but never before has anyone had the opportunity to spend a night in Middle-earth. I am delighted
                            to share the beauty of my family’s farm and pleased to be hosting this iconic location on Airbnb for fans from around the world.
                        </blockquote>
                        <figcaption>Russel Alexander</figcaption>
                    </figure>

                    <h2>Subtitle #4</h2>
                    <p>
                        For the first time ever, fans from around the world can explore the faraway lands of their favorite holiday films with an exclusive overnight stay at the original Hobbiton™ Movie Set. Russell Alexander is inviting guests to his family’s property to live like Bilbo Baggins and retreat to The Shire™ for an overnight stay at Hobbiton, as featured in the famed The Lord of the Rings and The Hobbit film trilogies.
                    </p>
                    <p>
                        Nestled in the picturesque pastures of New Zealand’s Waikato region on a 2,500 acre working farm, the property’s rolling, green hills – bear a striking similarity to The Shire™ as described by J. R. R. Tolkien in The Lord of the Rings, and captivated Sir Peter Jackson’s movie scouts more than two decades ago. The team quickly realized the Hobbits had found their home – and this holiday season, it could be yours.
                    </p>


                    <!-- Problem skin cards -->
                    <div class="columns is-2 is-variable">
                        <div class="column">
                            <div class="article-card">
                                <img src="https://via.placeholder.com/426x324.webp" alt="Problem skin" title="Problem skin" width="426" height="324" />
                                <div class="ac-content">
                                    <div class="ac-name">Classic facials</div>
                                    <div class="ac-desc">
                                        In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.
                                    </div>
                                    <a class="ac-link" href="" title="View more about service">View more about service</a>
                                    <hr />
                                    <div class="columns">
                                        <div class="column">
                                            <a class="button expand" href="" title="Get a free consultation">Get a free consultation</a>
                                        </div>
                                        <div class="column">
                                            <a class="button expand" href="" title="Book a treatment">Book a treatment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="article-card">
                                <img src="https://via.placeholder.com/426x324.webp" alt="Problem skin" title="Problem skin" width="426" height="324" />
                                <div class="ac-content">
                                    <div class="ac-name">Classic facials</div>
                                    <div class="ac-desc">
                                        In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.
                                    </div>
                                    <a class="ac-link" href="" title="View more about service">View more about service</a>
                                    <hr />
                                    <div class="columns">
                                        <div class="column">
                                            <a class="button expand" href="" title="Get a free consultation">Get a free consultation</a>
                                        </div>
                                        <div class="column">
                                            <a class="button expand" href="" title="Book a treatment">Book a treatment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Subtitle #5</h2>
                    <p>
                        For the first time ever, fans from around the world can explore the faraway lands of their favorite holiday films with an exclusive overnight stay at the original Hobbiton™ Movie Set. Russell Alexander is inviting guests to his family’s property to live like Bilbo Baggins and retreat to The Shire™ for an overnight stay at Hobbiton, as featured in the famed The Lord of the Rings and The Hobbit film trilogies.
                    </p>
                    <p>
                        Nestled in the picturesque pastures of New Zealand’s Waikato region on a 2,500 acre working farm, the property’s rolling, green hills – bear a striking similarity to The Shire™ as described by J. R. R. Tolkien in The Lord of the Rings, and captivated Sir Peter Jackson’s movie scouts more than two decades ago. The team quickly realized the Hobbits had found their home – and this holiday season, it could be yours.
                    </p>

                    <!-- Service banners (touch) -->
                    <div class="mt-xl3 is-hidden-desktop">
                        <div class="service-banner-touch">
                            <div class="banner-info">
                                <img src="https://via.placeholder.com/200x200.webp" width="200" height="200" alt="Consultation" title="Consultation" />
                                <div>
                                    <h4>Consultation</h4>
                                    <p>15 min<span class="dot"></span>Free</p>
                                </div>
                            </div>
                            <p class="banner-text">
                                This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin...
                            </p>
                            <a class="button outline expand" href="" title="View more about consultation">View more about consultation</a>
                            <hr />
                            <a class="button expand" href="gratis-hudkonsultation" title="Get a free consultation">Get a free consultation</a>
                        </div>
                        <div class="service-banner-touch">
                            <div class="banner-info">
                                <img src="https://via.placeholder.com/200x200.webp" width="200" height="200" alt="Consultation" title="Consultation" />
                                <div>
                                    <h4>IPL for acne</h4>
                                    <p>30 min<span class="dot"></span>From 1295 kr</p>
                                </div>
                            </div>
                            <p class="banner-text">
                                This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin...
                            </p>
                            <a class="button outline expand" href="" title="View more about service">View more about service</a>
                            <hr />
                            <a class="button expand" href="gratis-hudkonsultation" title="Get a free consultation">Get a free consultation</a>
                            <a class="mt-s button expand" href="https://bokadirekt.se" title="Book a treatment">Book a treatment</a>
                        </div>
                    </div>

                    <!-- Service banners (desktop) -->
                    <div class="mt-xl3 is-hidden-touch">
                        <div class="service-banner-desktop">
                            <div>
                                <img src="https://via.placeholder.com/200x200.webp" width="200" height="200" alt="Consultation" title="Consultation" />
                            </div>
                            <div class="banner-info">
                                <h4>Consultation</h4>
                                <p class="banner-price">15 min<span class="dot"></span>Free</p>
                                <div>
                                    <p class="banner-text">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin...</p>
                                    <a class="button text b200" href="services/acne-treatment" title="View more about consultation">View more about consultation</a>
                                </div>
                            </div>
                            <div class="banner-buttons">
                                <a class="button expand" href="gratis-hudkonsultation" title="Get a free consultation">Get a free consultation</a>
                            </div>
                        </div>
                        <div class="service-banner-desktop">
                            <div>
                                <img src="https://via.placeholder.com/200x200.webp" width="200" height="200" alt="Consultation" title="Consultation" />
                            </div>
                            <div class="banner-info">
                                <h4>IPL for acne</h4>
                                <p class="banner-price">30 - 60 min<span class="dot"></span>Price from 1925 kr</p>
                                <div>
                                    <p class="banner-text">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin...</p>
                                    <a class="button text b200" href="services/acne-treatment" title="View more about service">View more about service</a>
                                </div>
                            </div>
                            <div class="banner-buttons">
                                <a class="button expand" href="gratis-hudkonsultation" title="Get a free consultation">Get a free consultation</a>
                                <a class="button expand" href="gratis-hudkonsultation" title="Book a treatment">Book a treatment</a>
                            </div>
                        </div>
                    </div>

                    <h2>Subtitle #6</h2>
                    <p>
                        For the first time ever, fans from around the world can explore the faraway lands of their favorite holiday films with an exclusive overnight stay at the original Hobbiton™ Movie Set. Russell Alexander is inviting guests
                        to his family’s property to live like Bilbo Baggins and retreat to The Shire™ for an overnight stay at Hobbiton, as featured in the famed The Lord of the Rings and The Hobbit film trilogies.
                    </p>
                    <p>
                        Nestled in the picturesque pastures of New Zealand’s Waikato region on a 2,500 acre working farm, the property’s rolling, green hills – bear a striking similarity to The Shire™ as described by J. R. R. Tolkien in The
                        Lord of the Rings, and captivated Sir Peter Jackson’s movie scouts more than two decades ago. The team quickly realized the Hobbits had found their home – and this holiday season, it could be yours.
                    </p>

                    <!-- Result overlay (before and after images) -->
                    <div class="columns is-variable is-2">
                        <div class="column">
                            <div class="result-overlay">
                                <div class="ro-images">
                                    <img src="https://via.placeholder.com/424x424.webp" alt="Before" title="Before" width="424" height="424" />
                                    <img src="https://via.placeholder.com/848x848.webp" alt="After" title="After" width="424" height="424" />
                                    <div class="ro-slider">
                                        <div class="ro-slider-button">
                                            <div class="ro-icon-left"></div>
                                            <div class="ro-icon-right"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ro-info">
                                    After 2 months of <a href="hudbehandlingar/ansiktsbehandling/akne/akne" title="acne treatment">acne treatment</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="result-overlay">
                                <div class="ro-images">
                                    <img src="https://via.placeholder.com/424x424.webp" alt="Before" title="Before" width="424" height="424" />
                                    <img src="https://via.placeholder.com/848x848.webp" alt="After" title="After" width="424" height="424" />
                                    <div class="ro-slider">
                                        <div class="ro-slider-button">
                                            <div class="ro-icon-left"></div>
                                            <div class="ro-icon-right"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ro-info">
                                    After 2 months of <a href="hudbehandlingar/ansiktsbehandling/akne/akne" title="acne treatment">acne treatment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Subtitle #7</h2>
                    <p>
                        For the first time ever, fans from around the world can explore the faraway lands of their favorite holiday films with an exclusive overnight stay at the original Hobbiton™ Movie Set. Russell Alexander is inviting guests
                        to his family’s property to live like Bilbo Baggins and retreat to The Shire™ for an overnight stay at Hobbiton, as featured in the famed The Lord of the Rings and The Hobbit film trilogies.
                    </p>
                    <p>
                        Nestled in the picturesque pastures of New Zealand’s Waikato region on a 2,500 acre working farm, the property’s rolling, green hills – bear a striking similarity to The Shire™ as described by J. R. R. Tolkien in The
                        Lord of the Rings, and captivated Sir Peter Jackson’s movie scouts more than two decades ago. The team quickly realized the Hobbits had found their home – and this holiday season, it could be yours.
                    </p>


                    <div class="mt-xl">
                        <div class="columns is-2 is-variable is-multiline">
                            <div class="column is-half">
                                <div class="problem-card">
                                    <div class="pc-details">
                                        <img src="https://via.placeholder.com/102x102.webp" alt="Hyperpigmentation" title="Hyperpigmentation" width="102" height="102" />
                                        <div>
                                            <div class="pc-title">Post inflammatory hyperpigmentation</div>
                                            <div class="pc-subtitle">Also called scars stains</div>
                                        </div>
                                    </div>
                                    <div class="pc-content">
                                        Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you
                                        can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.
                                    </div>
                                    <a href="/acne.php" class="is-hidden-desktop button outline expand" title="View more">View more</a>
                                    <a href="/acne.php" class="is-hidden-touch button compact text" title="View more">View more</a>
                                </div>
                            </div>
                            <div class="column is-half">
                                <div class="problem-card">
                                    <div class="pc-details">
                                        <img src="https://via.placeholder.com/102x102.webp" alt="Cystic acne" title="Cystic acne" width="102" height="102">
                                        <div>
                                            <div class="pc-title">Cystic acne</div>
                                            <div class="pc-subtitle">Also called scars stains</div>
                                        </div>
                                    </div>
                                    <div class="pc-content">
                                        Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you
                                        can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.
                                    </div>
                                    <a href="/acne.php" class="is-hidden-desktop button outline expand" title="View more">View more</a>
                                    <a href="/acne.php" class="is-hidden-touch button compact text" title="View more">View more</a>
                                </div>
                            </div>
                            <div class="column is-half">
                                <div class="problem-card">
                                    <div class="pc-details">
                                        <img src="https://via.placeholder.com/102x102.webp" alt="Hyperpigmentation" title="Hyperpigmentation" width="102" height="102">
                                        <div>
                                            <div class="pc-title">Post inflammatory hyperpigmentation</div>
                                            <div class="pc-subtitle">Also called scars stains</div>
                                        </div>
                                    </div>
                                    <div class="pc-content">
                                        Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you
                                        can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.
                                    </div>
                                    <a href="/acne.php" class="is-hidden-desktop button outline expand" title="View more">View more</a>
                                    <a href="/acne.php" class="is-hidden-touch button compact text" title="View more">View more</a>
                                </div>
                            </div>
                            <div class="column is-half">
                                <div class="problem-card">
                                    <div class="pc-details">
                                        <img src="https://via.placeholder.com/102x102.webp" alt="Hyperpigmentation" title="Hyperpigmentation" width="102" height="102">
                                        <div>
                                            <div class="pc-title">Post inflammatory hyperpigmentation</div>
                                            <div class="pc-subtitle">Also called scars stains</div>
                                        </div>
                                    </div>
                                    <div class="pc-content">
                                        Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you
                                        can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.
                                    </div>
                                    <a href="/acne.phparr" class="is-hidden-desktop button outline expand" title="View more">View more</a>
                                    <a href="/acne.phparr" class="is-hidden-touch button compact text" title="View more">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Subtitle #8</h2>
                    <p>
                        For the first time ever, fans from around the world can explore the faraway lands of their favorite holiday films with an exclusive overnight stay at the original Hobbiton™ Movie Set. Russell Alexander is inviting guests
                        to his family’s property to live like Bilbo Baggins and retreat to The Shire™ for an overnight stay at Hobbiton, as featured in the famed The Lord of the Rings and The Hobbit film trilogies.
                    </p>
                    <p>
                        Nestled in the picturesque pastures of New Zealand’s Waikato region on a 2,500 acre working farm, the property’s rolling, green hills – bear a striking similarity to The Shire™ as described by J. R. R. Tolkien in The
                        Lord of the Rings, and captivated Sir Peter Jackson’s movie scouts more than two decades ago. The team quickly realized the Hobbits had found their home – and this holiday season, it could be yours.
                    </p>


                    <!-- Product banner (touch) -->
                    <div class="mt-xl3 is-hidden-desktop">
                        <div class="service-banner-touch">
                            <div class="banner-info">
                                <img src="https://via.placeholder.com/200x200.webp" width="200" height="200" alt="Products for acne" title="Products for acne" />
                                <div>
                                    <h4>Products for acne</h4>
                                    <p>Price from 995 kr</p>
                                </div>
                            </div>
                            <p class="banner-text">
                                This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin...
                            </p>
                            <a class="button outline expand" href="behandlingar" title="View product details">View product details</a>
                        </div>
                    </div>



                    <!-- Product banner (desktop) -->
                    <div class="mt-xl3 is-hidden-touch">
                        <div class="service-banner-desktop">
                            <div>
                                <img src="https://via.placeholder.com/200x200.webp" width="200" height="200" alt="Consultation" title="Consultation" />
                            </div>
                            <div class="banner-info">
                                <h4>Products for acne</h4>
                                <p class="banner-price">Price from 995 kr</p>
                                <div>
                                    <p class="banner-text">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin...</p>
                                    <a class="button text b200" href="hudbehandlingar/ansiktsbehandling/akne" title="View product details">View product details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Subtitle #9</h2>
                    <p>
                        For the first time ever, fans from around the world can explore the faraway lands of their favorite holiday films with an exclusive overnight stay at the original Hobbiton™ Movie Set. Russell Alexander is inviting guests
                        to his family’s property to live like Bilbo Baggins and retreat to The Shire™ for an overnight stay at Hobbiton, as featured in the famed The Lord of the Rings and The Hobbit film trilogies.
                    </p>
                    <p>
                        Nestled in the picturesque pastures of New Zealand’s Waikato region on a 2,500 acre working farm, the property’s rolling, green hills – bear a striking similarity to The Shire™ as described by J. R. R. Tolkien in The
                        Lord of the Rings, and captivated Sir Peter Jackson’s movie scouts more than two decades ago. The team quickly realized the Hobbits had found their home – and this holiday season, it could be yours.
                    </p>

                    <!-- FAQ -->
                    <div class="faq">
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>How many treatments are needed?</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Can my acne come back?</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>How do I get rid of my acne fast?</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        <div class="faq-category">
                            <div class="faq-title">
                                <span>Do I have acne even if I only have one pimple?</span>
                                <span>+</span>
                            </div>
                            <div class="faq-content zero-size">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>

                    <h2>Subtitle #10</h2>
                    <p>
                        For the first time ever, fans from around the world can explore the faraway lands of their favorite holiday films with an exclusive overnight stay at the original Hobbiton™ Movie Set. Russell Alexander is inviting guests
                        to his family’s property to live like Bilbo Baggins and retreat to The Shire™ for an overnight stay at Hobbiton, as featured in the famed The Lord of the Rings and The Hobbit film trilogies.
                    </p>
                    <p>
                        Nestled in the picturesque pastures of New Zealand’s Waikato region on a 2,500 acre working farm, the property’s rolling, green hills – bear a striking similarity to The Shire™ as described by J. R. R. Tolkien in The
                        Lord of the Rings, and captivated Sir Peter Jackson’s movie scouts more than two decades ago. The team quickly realized the Hobbits had found their home – and this holiday season, it could be yours.
                    </p>

                    <div class="brands">
                        <div class="columns is-mobile is-multiline">
                            <div class="column is-6-mobile is-3-tablet is-2-desktop">
                                <div class="brand">
                                    <img src="https://via.placeholder.com/116x41.webp" alt="Powerlite" title="Powerlite" width="116" height="41" />
                                </div>
                            </div>
                            <div class="column is-6-mobile is-3-tablet is-2-desktop">
                                <div class="brand">
                                    <img src="https://via.placeholder.com/116x41.webp" alt="Dermapen" title="Dermapen" width="116" height="41" />
                                </div>
                            </div>
                            <div class="column is-6-mobile is-3-tablet is-2-desktop">
                                <div class="brand">
                                    <img src="https://via.placeholder.com/116x41.webp" alt="Cryopen" title="Cryopen" width="116" height="41" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <section id="skin-guide">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 large-margin l10n">Other articles</div>
                    <a href="/hudguide" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all articles</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="/hudguide" title="View all articles">View all articles</a>
            </section>
            <section class="large-margin" id="cta-banner">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Want to identify your problem?</div>
                    <div class="p200 l10n" id="cta-banner-content">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                </div>
                <div>
                    <a href="<?php echo $consultation_url ?>" class="button white expand l10n" title="Get a free consultation">Get a free consultation</a>
                </div>
            </section>
            <section id="results" class="large-margin">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
            </section>
            <section id="reviews" class="large-margin">
                <div class="h500 l10n">Reviews</div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">View all reviews</a>
            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Questions & answers</div>
                    <a href="faq" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all questions</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="faq" title="View all questions">View all questions</a>
            </section>
            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Our specialists</div>
                    <a href="specialists" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all specialists</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="hudterapeut" title="View all specialists">View all specialists</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Brands we use</div>
                    <a href="varumarken/" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken/" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="hudguide/category/subcategory/article/article.js"></script>
</body>

</html>