<?php

if (!isset($results_title)) {
    $results_title = 'Resultat';
}
if (!isset($show_all_results_label)) {
    $show_all_results_label = 'Visa fler resultat';
}

if (!isset($results)) {
    $results = array(
        new ResultCustomer(
            id: '1',
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
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
                ),
                product: new ResultProduct(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Product bundle for light acne',
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Patrick Minogue'
                ),
            )
        ),
        new ResultCustomer(
            id: '2',
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
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
                ),
                product: new ResultProduct(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Product bundle for light acne',
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Patrick Minogue'
                ),
            )
        ),
        new ResultCustomer(
            id: '3',
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
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
                ),
                product: new ResultProduct(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Product bundle for light acne',
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Patrick Minogue'
                ),
            )
        ),
    );
} ?>

<div class="results-widget">
    <div class="is-hidden-desktop">
        <div class="flex-row justify-space-between">
            <div class="h500"><?php echo $results_title ?></div>
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
        <a class="mt-xl button b200 outline expand" href="resultat"><?php echo $show_all_results_label ?></a>
    </div>

    <div class="is-hidden-touch" id="results-large">
        <div class="flex-row align-end justify-space-between">
            <div class="h500"><?php echo $results_title ?></div>
            <a href="resultat" class="button compact text">
                <span><?php echo $show_all_results_label ?></span>
                <?php icon('navigate-next') ?>
            </a>
        </div>
        <div id="results-container">
            <?php
            foreach ($results as $result) { ?>
                <?php include('result.php'); ?>
                <div class="result-divider"></div>
            <?php } ?>
        </div>
    </div>
    <script src="/includes/widgets/results/results.js"></script>
</div>