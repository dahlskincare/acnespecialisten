<?php


if (!isset($results_title)) {
    $results_title = 'Resultat';
}
if (!isset($show_all_results_label)) {
    $show_all_results_label = 'Visa fler resultat';
}
if (!isset($show_all_results_title)) {
    $show_all_results_title = 'Klicka här för att se fler resultat';
}

if (!isset($results)) {
    $results = array(
        new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
            url_title: 'Akne resultat',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            age: 21,
            gender: 'Kvinna',
            problem: 'Akne',
            type: 'Svår',
            treatment: new ResultTreatment(
                duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
                procedures: array(
                    new ResultProcedure(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'Aknebehandling',
                        count: '5 tillfällen'
                    ),
                ),
                product: new ResultProduct(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Produktpaket mot svår akne',
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Cazzandra Lindberg'
                ),
            )
        ),
        new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
            url_title: 'Akne resultat',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            age: 18,
            gender: 'Kvinna',
            problem: 'Akne',
            type: 'Svår',
            treatment: new ResultTreatment(
                duration: '<a href="acne.php" title="Akne">Akne</a>',
                procedures: array(
                    new ResultProcedure(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'Aknebehandling',
                        count: '3 tillfällen'
                    ),
                ),
                product: new ResultProduct(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Produktpaket mot svår akne',
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Julia Eklund'
                ),
            )
        ),
        new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
            url_title: 'Rosacea resultat',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            age: 33,
            gender: 'Kvinna',
            problem: 'Rosacea',
            type: 'Svår',
            treatment: new ResultTreatment(
                duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
                procedures: array(
                    new ResultProcedure(
                        image: 'https://via.placeholder.com/102x102.webm',
                        name: 'Rosaceabehandling',
                        count: '3 tillfällen'
                    ),
                ),
                product: new ResultProduct(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Produktpaket mot svår rosacea',
                ),
                employee: new ResultEmployee(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Julia Eklund'
                ),
            )
        ),
    );
} ?>

<div class="results-narrow-widget">
    <div class="flex-row justify-space-between">
        <div class="h500"><?php echo $results_title ?></div>
        <div class="result-step-buttons">
            <button class="round-large grey" aria-label="scroll" onclick="ResultsWidget.scroll(-1)">
                <?php icon('arrow-left') ?>
            </button>
            <button class="round-large grey" aria-label="scroll" onclick="ResultsWidget.scroll(1)">
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
    <a class="mt-xl button b200 outline expand auto-width" title="<?php echo $show_all_results_title ?>" href="resultat.php"><?php echo $show_all_results_label ?></a>
    <script src="/includes/widgets/results/results.js"></script>
</div>