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
    $conn = new mysqli($_ENV['DB_URL'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], database: $_ENV['DB_NAME']);
    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
        exit();
    }

    $query = "SELECT customer.*, 
    treatment.id AS treatment_id, treatment.duration AS treatment_duration,
    employee.name AS employee_name, employee.image AS employee_image,
    product.name AS product_name, product.image AS product_image,    
    JSON_ARRAYAGG(ix.result_procedure_id) AS procedure_ids
    FROM result_customer AS customer
    INNER JOIN result_treatment AS treatment ON treatment.id = customer.result_treatment_id
    INNER JOIN result_employee AS employee ON employee.id = treatment.result_employee_id
    INNER JOIN result_product AS product ON product.id = treatment.result_product_id    
    INNER JOIN ix_result_treatment_procedure AS ix ON ix.result_treatment_id = treatment.id
    WHERE customer.id = %s
    LIMIT 1";
    if ($rs = $conn->query(sprintf($query, $_GET['id']))) {
        if ($rs->num_rows == 1) {
            $row = $rs->fetch_assoc();
            $before_images = json_decode($row['before_images']);
            $after_images = json_decode($row['after_images']);

            $customer = new ResultCustomer(
                id: $row['id'],
                slider_image_before_small: $row['slider_image_before_small'],
                slider_image_after_small: $row['slider_image_after_small'],
                slider_image_before_large: $row['slider_image_before_large'],
                slider_image_after_large: $row['slider_image_after_large'],
                age: $row['age'],
                gender: $row['gender'],
                problem: $row['problem'],
                type: $row['type'],
                treatment: new ResultTreatment(
                    id: $row['treatment_id'],
                    duration: $row['treatment_duration'],
                    procedures: array(),
                    product: new ResultProduct(
                        image: $row['product_image'],
                        name: $row['product_name']
                    ),
                    employee: new ResultEmployee(
                        image: $row['employee_image'],
                        name: $row['employee_name']
                    ),
                    visits: array()
                ),
                before_images: new ResultImages(
                    image_left_small: $before_images->image_left_small,
                    image_right_small: $before_images->image_right_small,
                    image_left_large: $before_images->image_left_large,
                    image_right_large: $before_images->image_right_large
                ),
                after_images: new ResultImages(
                    image_left_small: $after_images->image_left_small,
                    image_right_small: $after_images->image_right_small,
                    image_left_large: $after_images->image_left_large,
                    image_right_large: $after_images->image_right_large
                )
            );
            // Populate procedures
            foreach (json_decode($row['procedure_ids']) as $id) {
                if ($result = $conn->query(sprintf("SELECT * FROM result_procedure WHERE id = %d LIMIT 1", $id))) {
                    $row = $result->fetch_assoc();
                    array_push($customer->treatment->procedures, new ResultProcedure(id: $row['id'], image: $row['image'], name: $row['name'], count: $row['count']));
                    $result->free_result();
                } else {
                    die($conn->error);
                }
            }

            // Populate visits
            if ($result = $conn->query("SELECT * FROM result_visit WHERE result_treatment_id = " . $customer->treatment->id)) {
                foreach ($result as $visit) {
                    $images = json_decode($visit['images']);

                    array_push($customer->treatment->visits, new ResultVisit(
                        id: $visit['id'],
                        date: $visit['date'],
                        images: new ResultImages(
                            image_left_small: $images->image_left_small,
                            image_right_small: $images->image_right_small,
                            image_left_large: $images->image_left_large,
                            image_right_large: $images->image_right_large
                        ),
                        title: $visit['title'],
                        description: $visit['description'],
                        read_more_url: $visit['read_more_url'],
                        read_more_label: $visit['read_more_label']
                    ));
                }
                $result->free_result();
            } else {
                die($conn->error);
            }
            $rs->free_result();

            foreach ($customer->treatment->visits as $visit) {
                $nav_buttons['visit-' . $visit->id] = $visit->date;
            }
        } else {
            http_response_code(404);
            die('Page not found');
        }
    } else {
        die($conn->error);
    }

    $specialists = array(
        new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-1.jpg'),
        new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-2.jpg', 'images/specialists/large/specialist-2.jpg'),
        new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-3.jpg', 'images/specialists/large/specialist-3.jpg'),
        new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-4.jpg', 'images/specialists/large/specialist-4.jpg')
    );

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
                            $before = $customer->slider_image_before_large;
                            $after = $customer->slider_image_after_large;
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>

                        </div>
                        <div id="customer-info">
                            <div class="h300 l10n">
                                Customer
                            </div>
                            <div id="info-items">
                                <div class="info-item">
                                    <div class="l10n">Age</div>
                                    <div><?php echo $customer->age ?></div>
                                </div>
                                <div class="info-item">
                                    <div class="l10n">Gender</div>
                                    <div><?php echo $customer->gender ?></div>
                                </div>
                                <div class="info-item">
                                    <div class="l10n">Problem</div>
                                    <div><?php echo $customer->problem ?></div>
                                </div>
                                <div class="info-item">
                                    <div class="l10n">Type</div>
                                    <div><?php echo $customer->type ?></div>
                                </div>
                            </div>
                            <div id="treatment-info">
                                <div class="h200 l10n">Treatment</div>
                                <div class="dot"></div>
                                <div class="p200"><?php echo $customer->treatment->duration ?></div>
                            </div>
                            <?php foreach ($customer->treatment->procedures as $procedure) { ?>
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
                                <img src="<?php echo $customer->treatment->product->image ?>" alt="<?php echo $customer->treatment->product->name ?>" width="102" height="102" />
                                <div class="treatment-card-details">
                                    <div class="p200 l10n">Products</div>
                                    <div class="h200 mt-xxs"><?php echo $customer->treatment->product->name ?></div>
                                </div>
                            </div>
                            <div class="treatment-card">
                                <img src="<?php echo $customer->treatment->employee->image ?>" alt="<?php echo $customer->treatment->employee->name ?>" width="102" height="102" />
                                <div class="treatment-card-details">
                                    <div class="p200 l10n">Personal esthetician</div>
                                    <div class="h200 mt-xxs"><?php echo $customer->treatment->employee->name ?></div>
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
                    $before = $customer->slider_image_before_large;
                    $after = $customer->slider_image_after_large;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                    ?>
                    <div id="customer-info-large">
                        <div class="h300 l10n">Customer</div>
                        <div id="info-items-large">
                            <div class="info-item">
                                <div class="l10n">Age</div>
                                <div><?php echo $customer->age ?></div>
                            </div>
                            <div class="info-item">
                                <div class="l10n">Gender</div>
                                <div><?php echo $customer->gender ?></div>
                            </div>
                            <div class="info-item">
                                <div class="l10n">Problem</div>
                                <div><?php echo $customer->problem ?></div>
                            </div>
                            <div class="info-item">
                                <div class="l10n">Type</div>
                                <div><?php echo $customer->type ?></div>
                            </div>
                        </div>
                        <div id="treatment-info-large">
                            <div class="h200 l10n">Treatment</div>
                            <div class="dot"></div>
                            <div class="p200"><?php echo $customer->treatment->duration ?></div>
                        </div>
                        <div class="flex-row">
                            <div class="mr-xl5">
                                <?php foreach ($customer->treatment->procedures as $procedure) { ?>
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
                                    <img src="<?php echo $customer->treatment->product->image ?>" alt="<?php echo $customer->treatment->product->name ?>" width="102" height="102" />
                                    <div class="treatment-card-details">
                                        <div class="p200 l10n">Products</div>
                                        <div class="h200 mt-xxs"><?php echo $customer->treatment->product->name ?></div>
                                    </div>
                                </div>
                                <div class="treatment-card">
                                    <img src="<?php echo $customer->treatment->employee->image ?>" alt="<?php echo $customer->treatment->employee->name ?>" width="102" height="102" />
                                    <div class="treatment-card-details">
                                        <div class="p200 l10n">Personal esthetician</div>
                                        <div class="h200 mt-xxs"><?php echo $customer->treatment->employee->name ?></div>
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
                <?php foreach ($customer->treatment->visits as $visit) { ?>
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
                            <?php echo $customer->treatment->visits[0]->date ?>
                        </div>
                        <div class="jc-images">
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $customer->before_images->image_left_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $customer->before_images->image_left_large ?>">
                                <img src="<?php echo $customer->before_images->image_left_large ?>" alt="Before" width="175" height="235" />
                            </picture>
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $customer->before_images->image_right_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $customer->before_images->image_right_large ?>">
                                <img src="<?php echo $customer->before_images->image_right_large ?>" alt="After" width="175" height="235" />
                            </picture>
                        </div>
                    </div>
                    <div class="journey-card">
                        <div class="jc-date">
                            <?php echo end($customer->treatment->visits)->date ?>
                        </div>
                        <div class="jc-images">
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $customer->after_images->image_left_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $customer->after_images->image_left_large ?>">
                                <img src="<?php echo $customer->after_images->image_left_large ?>" alt="Before" width="175" height="235" />
                            </picture>
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $customer->after_images->image_right_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $customer->after_images->image_right_large ?>">
                                <img src="<?php echo $customer->after_images->image_right_large ?>" alt="After" width="175" height="235" />
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
                            <button class="round-large grey" onclick="Carousel.prev('#reviews-carousel', -1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Carousel.next('#reviews-carousel', 1)">
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