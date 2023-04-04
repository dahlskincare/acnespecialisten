<?php

if (!isset($results)) {
    if (!isset($result_count)) {
        $result_count = 3;
    }
    $results = array();
    $conn = new mysqli($_ENV['DB_URL'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], database: $_ENV['DB_NAME']);
    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
        exit();
    }
    if ($rs = $conn->query(sprintf("
        SELECT customer.*, 
        treatment.id AS treatment_id, treatment.duration AS treatment_duration,
        employee.name AS employee_name, employee.image AS employee_image,
        product.name AS product_name, product.image AS product_image,    
        JSON_ARRAYAGG(ix.result_procedure_id) AS procedure_ids
        FROM result_customer AS customer
        INNER JOIN result_treatment AS treatment ON treatment.id = customer.result_treatment_id
        INNER JOIN result_employee AS employee ON employee.id = treatment.result_employee_id
        INNER JOIN result_product AS product ON product.id = treatment.result_product_id    
        INNER JOIN ix_result_treatment_procedure AS ix ON ix.result_treatment_id = treatment.id
        GROUP BY customer.id
        ORDER BY id ASC
        LIMIT 0, %s
    ", $result_count))) {
        foreach ($rs as $row) {
            $before_images = json_decode($row['before_images']);
            $after_images = json_decode($row['after_images']);
            $results[] = new ResultCustomer(
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
                ),
            );
        }
        $rs->free_result();
    } else {
        die($conn->error);
    }
} ?>

<div class="is-hidden-tablet">
    <div class="flex-row justify-space-between">
        <div class="h500 l10n">Results</div>
        <div class="result-step-buttons">
            <button class="round-large grey" onclick="ResultsWidget.scroll(-1)">
                <?php icon('arrow-left') ?>
            </button>
            <button class="round-large grey" onclick="ResultsWidget.scroll(1)">
                <?php icon('arrow-right') ?>
            </button>
        </div>
    </div>
    <div class="results-scroller">
        <div class="results-container">
            <?php foreach ($results as $result) { ?>
                <?php include('result.php'); ?>
                <div class="result-divider"></div>
            <?php } ?>
        </div>
    </div>
    <a class="mt-xl button b200 outline expand l10n" href="results">View all treatment results</a>
</div>
<div class="is-hidden-mobile">
    <div class="flex-row align-end justify-space-between">
        <div class="h500 l10n">Results</div>
        <a href="results" class="button compact text">
            <span class="l10n">View all treatment results</span>
            <?php icon('navigate-next') ?>
        </a>
    </div>
    <div class="columns is-3 is-variable">
        <?php
        foreach ($results as $result) { ?>
            <div class="column">
                <?php include('result.php'); ?>
            </div>
        <?php } ?>
    </div>
</div>