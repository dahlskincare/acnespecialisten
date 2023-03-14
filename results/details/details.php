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
            $customer = new ResultCustomer(
                id: $row['id'],
                image_before_small: $row['image_before_small'],
                image_after_small: $row['image_after_small'],
                image_before_large: $row['image_before_large'],
                image_after_large: $row['image_after_large'],
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
        } else {
            http_response_code(404);
            die('Page not found');
        }
    } else {
        die($conn->error);
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
                            $before = $customer->image_before_large;
                            $after = $customer->image_after_large;
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