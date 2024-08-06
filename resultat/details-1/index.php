<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title class="l10n">Acnespecialisten | Result details</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/resultat/details.css">
</head>

<body>
    <?php

    $specialists = array(
        new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/large/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg',
            image_title: 'Cazzandra Lindberg',
        ),
        new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/large/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik',
            image_title: 'Veronika Benedik'
        ),
        new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/large/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul',
            image_title: 'Amira Maqboul'
        ),
        new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/large/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom',
            image_title: 'Vilma Libom'
        )
    );

    $result = new ResultCustomer(
        url: 'resultat/details-1',
        image_before_small: 'https://via.placeholder.com/175x235.webm',
        image_after_small: 'https://via.placeholder.com/175x235.webm',
        image_before_large: 'https://via.placeholder.com/296x394.webm',
        image_after_large: 'https://via.placeholder.com/296x394.webm',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 18,
        gender: 'Female',
        problem: 'Acne',
        type: 'Severe',
        treatment: new ResultTreatment(
            duration: '3 months',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Problem skin facials',
                    count: '3 times'
                ),
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Laser for problem skin',
                    count: '2 times'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Product bundle for light acne',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Patrick Minogue'
            ),
            visits: array(
                new ResultVisit(
                    id: 1,
                    date: 'Dec 12, 2022',
                    title: 'First free consultation',
                    description: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone.',
                    images: new ResultImages(
                        image_left_small: 'https://via.placeholder.com/175x235.webm',
                        image_right_small: 'https://via.placeholder.com/175x235.webm',
                        image_left_large: 'https://via.placeholder.com/320x426.webm',
                        image_right_large: 'https://via.placeholder.com/320x426.webm',
                    ),
                    read_more_url: 'https://bokadirekt.se',
                    read_more_label: 'Get a free consultation',
                ),
                new ResultVisit(
                    id: 2,
                    date: 'Dec 24, 2022',
                    title: 'Results after first problem skin facials',
                    description: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone.',
                    images: new ResultImages(
                        image_left_small: 'https://via.placeholder.com/175x235.webm',
                        image_right_small: 'https://via.placeholder.com/175x235.webm',
                        image_left_large: 'https://via.placeholder.com/320x426.webm',
                        image_right_large: 'https://via.placeholder.com/320x426.webm',
                    ),
                    read_more_url: '/acnebehandling.php',
                    read_more_label: 'Read more about facials',
                ),
                new ResultVisit(
                    id: 3,
                    date: 'Jan 12, 2023',
                    title: 'Results after second problem skin facials',
                    description: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone.',
                    images: new ResultImages(
                        image_left_small: 'https://via.placeholder.com/175x235.webm',
                        image_right_small: 'https://via.placeholder.com/175x235.webm',
                        image_left_large: 'https://via.placeholder.com/320x426.webm',
                        image_right_large: 'https://via.placeholder.com/320x426.webm',
                    ),
                    read_more_url: '/acnebehandling.php',
                    read_more_label: 'Read more about facials',
                ),
            ),
        )
    );
    ?>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <div id="banner-green">
                <div class="container l10n">
                    <div class="is-hidden-desktop">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        <h1 class="h600 mt-xs l10n">Treatment details</h1>
                        <div class="mt-xl">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/result.php'); ?>
                        </div>
                        <div id="customer-info">
                            <div class="h300 l10n">Customer</div>
                            <div id="info-items">
                                <div class="info-item">
                                    <div class="l10n">Age</div>
                                    <div><?php echo $result->age ?></div>
                                </div>
                                <div class="info-item">
                                    <div class="l10n">Gender</div>
                                    <div><?php echo $result->gender ?></div>
                                </div>
                                <div class="info-item">
                                    <div class="l10n">Problem</div>
                                    <div><?php echo $result->problem ?></div>
                                </div>
                                <div class="info-item">
                                    <div class="l10n">Type</div>
                                    <div><?php echo $result->type ?></div>
                                </div>
                            </div>
                            <div id="treatment-info">
                                <div class="h200 l10n">Treatment</div>
                                <div class="dot"></div>
                                <div class="p200"><?php echo $result->treatment->duration ?></div>
                            </div>
                            <?php foreach ($result->treatment->procedures as $procedure) { ?>
                                <div class="treatment-card">
                                    <img src="<?php echo $procedure->image ?>" alt="<?php echo $procedure->name ?>" title="<?php echo $procedure->name ?>" width="102" height="102" />
                                    <div class="treatment-card-details">
                                        <div class="p200 l10n">Procedure</div>
                                        <div class="h200 mt-xxs"><?php echo $procedure->name ?></div>
                                        <div class="p200 mt-xxs"><?php echo $procedure->count ?></div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="treatment-card">
                                <img src="<?php echo $result->treatment->product->image ?>" alt="<?php echo $result->treatment->product->name ?>" title="<?php echo $result->treatment->product->name ?>" width="102" height="102" />
                                <div class="treatment-card-details">
                                    <div class="p200 l10n">Products</div>
                                    <div class="h200 mt-xxs"><?php echo $result->treatment->product->name ?></div>
                                </div>
                            </div>
                            <div class="treatment-card">
                                <img src="<?php echo $result->treatment->employee->image ?>" alt="<?php echo $result->treatment->employee->name ?>" title="<?php echo $result->treatment->employee->name ?>" width="102" height="102" />
                                <div class="treatment-card-details">
                                    <div class="p200 l10n">Personal esthetician</div>
                                    <div class="h200 mt-xxs"><?php echo $result->treatment->employee->name ?></div>
                                </div>
                            </div>
                        </div>
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
            <div class="container is-hidden-touch" id="customer-info-container">
                <div id="customer-info-banner">
                    <?php
                    $before = $result->slider_image_before_large;
                    $after = $result->slider_image_after_large;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/result.php');
                    ?>
                    <div id="customer-info-large">
                        <div class="h300 l10n">Customer</div>
                        <div id="info-items-large">
                            <div class="info-item">
                                <div class="l10n">Age</div>
                                <div><?php echo $result->age ?></div>
                            </div>
                            <div class="info-item">
                                <div class="l10n">Gender</div>
                                <div><?php echo $result->gender ?></div>
                            </div>
                            <div class="info-item">
                                <div class="l10n">Problem</div>
                                <div><?php echo $result->problem ?></div>
                            </div>
                            <div class="info-item">
                                <div class="l10n">Type</div>
                                <div><?php echo $result->type ?></div>
                            </div>
                        </div>
                        <div id="treatment-info-large">
                            <div class="h200 l10n">Treatment</div>
                            <div class="dot"></div>
                            <div class="p200"><?php echo $result->treatment->duration ?></div>
                        </div>
                        <div class="flex-row">
                            <div class="mr-xl5">
                                <?php foreach ($result->treatment->procedures as $procedure) { ?>
                                    <div class="treatment-card">
                                        <img src="<?php echo $procedure->image ?>" alt="<?php echo $procedure->name ?>" title="<?php echo $procedure->name ?>" width="102" height="102" />
                                        <div class="treatment-card-details">
                                            <div class="p200 l10n">Procedure</div>
                                            <div class="h200 mt-xxs"><?php echo $procedure->name ?></div>
                                            <div class="p200 mt-xxs"><?php echo $procedure->count ?></div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div>
                                <div class="treatment-card">
                                    <img src="<?php echo $result->treatment->product->image ?>" alt="<?php echo $result->treatment->product->name ?>" width="102" height="102" />
                                    <div class="treatment-card-details">
                                        <div class="p200 l10n">Products</div>
                                        <div class="h200 mt-xxs"><?php echo $result->treatment->product->name ?></div>
                                    </div>
                                </div>
                                <div class="treatment-card">
                                    <img src="<?php echo $result->treatment->employee->image ?>" alt="<?php echo $result->treatment->employee->name ?>" title="<?php echo $result->treatment->employee->name ?>" width="102" height="102" />
                                    <div class="treatment-card-details">
                                        <div class="p200 l10n">Personal esthetician</div>
                                        <div class="h200 mt-xxs"><?php echo $result->treatment->employee->name ?></div>
                                    </div>
                                </div>
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
            <section id="visits">
                <?php foreach ($result->treatment->visits as $visit) { ?>
                    <div class="treatment-visit-card" id="visit-<?php echo $visit->id ?>">
                        <div class="vc-images">
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $visit->images->image_left_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $visit->images->image_left_large ?>">
                                <img src="<?php echo $visit->images->image_left_large ?>" alt="Before" title="Before" width="175" height="235" />
                            </picture>
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $visit->images->image_right_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $visit->images->image_right_large ?>">
                                <img src="<?php echo $visit->images->image_left_large ?>" alt="After" title="After" width="175" height="235" />
                            </picture>
                        </div>
                        <div class="vc-content">
                            <div class="vc-date"><?php echo $visit->date ?></div>
                            <div class="vc-title"><?php echo $visit->title ?></div>
                            <div class="vc-text"><?php echo $visit->description ?></div>
                            <?php if (str_starts_with($visit->read_more_url, 'http')) { ?>
                                <a href="<?php echo $visit->read_more_url ?>" class="button b200 vc-button expand l10n" title="<?php echo $visit->read_more_label ?>"><?php echo $visit->read_more_label ?></a>
                            <?php } else { ?>
                                <a href="<?php echo $visit->read_more_url ?>" class="button b200 vc-button outline expand l10n" title="<?php echo $visit->read_more_label ?>"><?php echo $visit->read_more_label ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </section>
            <section id="journey">
                <div class="h500 l10n">Results after 3 months</div>
                <div id="journey-cards">
                    <div class="journey-card">
                        <div class="jc-date">
                            <?php echo $result->treatment->visits[0]->date ?>
                        </div>
                        <div class="jc-images">
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $result->slider_image_before_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $result->slider_image_before_large ?>">
                                <img src="<?php echo $result->slider_image_before_small ?>" alt="Before" title="Before" width="175" height="235" />
                            </picture>
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $result->slider_image_after_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $result->slider_image_after_large ?>">
                                <img src="<?php echo $result->slider_image_after_small ?>" alt="After" title="After" width="175" height="235" />
                            </picture>
                        </div>
                    </div>
                    <div class="journey-card">
                        <div class="jc-date">
                            <?php echo end($result->treatment->visits)->date ?>
                        </div>
                        <div class="jc-images">
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $result->slider_image_before_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $result->slider_image_before_large ?>">
                                <img src="<?php echo $result->slider_image_before_small ?>" alt="Before" title="Before" width="175" height="235" />
                            </picture>
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $result->slider_image_after_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $result->slider_image_after_large ?>">
                                <img src="<?php echo $result->slider_image_after_small ?>" alt="After" title="After" width="175" height="235" />
                            </picture>
                        </div>
                    </div>
                </div>
                <a href="/" class="button b200 outline expand l10n" title="View all cases">View all cases</a>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Ready to start your own journey?</div>
                    <div class="p200 l10n" id="cta-banner-content">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                </div>
                <div>
                    <a href="<?php echo $consultation_url ?>" class="button white expand l10n" title="Get a free consultation">Get a free consultation</a>
                </div>
            </section>
            <section id="reviews" class="large-margin">
                <div class="h500 l10n">Reviews</div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">View all reviews</a>
            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Questions & answers</div>
                    <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all questions</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="View all questions">View all questions</a>
            </section>
            <section id="skin-guide" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Skin guide</div>
                    <a href="/hudguide/" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all articles</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="/hudguide/" title="View all articles">View all articles</a>
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
    <script src="/includes/widgets/resultat/results.js"></script>
</body>

</html>