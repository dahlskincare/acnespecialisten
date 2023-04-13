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
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/results/details/details.css">
</head>

<body>
    <?php

    $specialists = array(
        new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-1.jpg'),
        new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-2.jpg', 'images/specialists/large/specialist-2.jpg'),
        new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-3.jpg', 'images/specialists/large/specialist-3.jpg'),
        new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-4.jpg', 'images/specialists/large/specialist-4.jpg')
    );

    $result = new ResultCustomer(
        id: '4',
        image_before_small: 'https://via.placeholder.com/175x235.webm',
        image_after_small: 'https://via.placeholder.com/175x235.webm',
        image_before_large: 'https://via.placeholder.com/296x394.webm',
        image_after_large: 'https://via.placeholder.com/296x394.webm',
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
                    read_more_url: 'services/acne-treatment',
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
                    read_more_url: 'services/acne-treatment',
                    read_more_label: 'Read more about facials',
                ),
            ),
        )
    );

    foreach ($result->treatment->visits as $visit) {
        $nav_buttons['visit-' . $visit->id] = $visit->date;
    }
    ?>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner" class="sticky-badges-target">
            <div id="banner-green">
                <div class="container l10n">
                    <div class="is-hidden-desktop">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        <h1 class="h600 mt-xs l10n">Treatment details</h1>
                        <div class="mt-xl">
                            <?php
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/result.php');
                            ?>
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
                                    <img src="<?php echo $procedure->image ?>" alt="<?php echo $procedure->name ?>" width="102" height="102" />
                                    <div class="treatment-card-details">
                                        <div class="p200 l10n">Procedure</div>
                                        <div class="h200 mt-xxs"><?php echo $procedure->name ?></div>
                                        <div class="p200 mt-xxs"><?php echo $procedure->count ?></div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="treatment-card">
                                <img src="<?php echo $result->treatment->product->image ?>" alt="<?php echo $result->treatment->product->name ?>" width="102" height="102" />
                                <div class="treatment-card-details">
                                    <div class="p200 l10n">Products</div>
                                    <div class="h200 mt-xxs"><?php echo $result->treatment->product->name ?></div>
                                </div>
                            </div>
                            <div class="treatment-card">
                                <img src="<?php echo $result->treatment->employee->image ?>" alt="<?php echo $result->treatment->employee->name ?>" width="102" height="102" />
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
                                        <img src="<?php echo $procedure->image ?>" alt="<?php echo $procedure->name ?>" width="102" height="102" />
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
                                    <img src="<?php echo $result->treatment->employee->image ?>" alt="<?php echo $result->treatment->employee->name ?>" width="102" height="102" />
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
            <section id="nav-buttons">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
            </section>
            <section id="visits">
                <?php foreach ($result->treatment->visits as $visit) { ?>
                    <div class="treatment-visit-card" id="visit-<?php echo $visit->id ?>">
                        <div class="vc-images">
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $visit->images->image_left_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $visit->images->image_left_large ?>">
                                <img src="<?php echo $visit->images->image_left_large ?>" alt="Before" width="175" height="235" />
                            </picture>
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $visit->images->image_right_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $visit->images->image_right_large ?>">
                                <img src="<?php echo $visit->images->image_left_large ?>" alt="After" width="175" height="235" />
                            </picture>
                        </div>
                        <div class="vc-content">
                            <div class="vc-date"><?php echo $visit->date ?></div>
                            <div class="vc-title"><?php echo $visit->title ?></div>
                            <div class="vc-text"><?php echo $visit->description ?></div>
                            <?php if (str_starts_with($visit->read_more_url, 'http')) { ?>
                                <a href="<?php echo $visit->read_more_url ?>" target="_blank" class="button b200 vc-button expand l10n"><?php echo $visit->read_more_label ?></a>
                            <?php } else { ?>
                                <a href="<?php echo $visit->read_more_url ?>" class="button b200 vc-button outline expand l10n"><?php echo $visit->read_more_label ?></a>
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
                                <img src="<?php echo $result->slider_image_before_small ?>" alt="Before" width="175" height="235" />
                            </picture>
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $result->slider_image_after_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $result->slider_image_after_large ?>">
                                <img src="<?php echo $result->slider_image_after_small ?>" alt="After" width="175" height="235" />
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
                                <img src="<?php echo $result->slider_image_before_small ?>" alt="Before" width="175" height="235" />
                            </picture>
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $result->slider_image_after_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $result->slider_image_after_large ?>">
                                <img src="<?php echo $result->slider_image_after_small ?>" alt="After" width="175" height="235" />
                            </picture>
                        </div>
                    </div>
                </div>
                <a href="/results/" class="button b200 outline expand l10n">View all cases</a>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Ready to start your own journey?</div>
                    <div class="p200 l10n" id="cta-banner-content">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                </div>
                <div>
                    <a href="<?php echo $consultation_url ?>" class="button white expand l10n">Get a free consultation</a>
                </div>
            </section>
            <section id="reviews" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Reviews</div>
                    <div class="flex-row is-hidden-mobile">
                        <div class="step-buttons">
                            <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Reviews.scroll(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                        <a href="reviews" class="ml-l button compact text">
                            <span class="l10n">View all reviews</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>

                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="reviews">View all reviews</a>
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
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="faq">View all questions</a>
            </section>
            <section id="skin-guide" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Skin guide</div>
                    <a href="skin-guide" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all articles</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="skin-guide">View all articles</a>
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
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="specialists">View all specialists</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Brands we use</div>
                    <a href="brands" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>