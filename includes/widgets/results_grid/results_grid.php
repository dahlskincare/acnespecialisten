<?php
/**
 * Results Grid Widget
 * Displays a grid of result images with optional descriptions
 *
 * Required variables:
 * @var LabelImage[] $results_images - Array of LabelImage objects
 *
 * Optional variables:
 * @var string $results_title - Title for the results section (default: 'Resultat')
 * @var int $initial_count - Number of images to show initially (default: 4)
 * @var string $show_more_label - Label for show more button (default: 'Visa fler resultat')
 * @var string $show_less_label - Label for show less button (default: 'Visa färre resultat')
 * @var string $view_all_label - Label for view all button (default: 'Se fler resultat')
 * @var string $view_all_url - URL for view all button (default: '/resultat.php')
 * @var string $view_all_url_title - Title attribute for view all button (default: 'Se fler resultat')
 * @var bool $show_view_all_button - Show the view all button (default: true)
 */

if (!isset($results_images) || !is_array($results_images) || count($results_images) === 0) {
    return;
}

if (!isset($results_title)) {
    $results_title = 'Resultat';
}

if (!isset($initial_count)) {
    $initial_count = 4;
}

if (!isset($show_more_label)) {
    $show_more_label = 'Visa fler resultat';
}

if (!isset($show_less_label)) {
    $show_less_label = 'Visa färre resultat';
}

if (!isset($view_all_label)) {
    $view_all_label = 'Se fler resultat';
}

if (!isset($view_all_url)) {
    $view_all_url = '/resultat.php';
}

if (!isset($view_all_url_title)) {
    $view_all_url_title = 'Se fler resultat';
}

if (!isset($show_view_all_button)) {
    $show_view_all_button = true;
}

$total_count = count($results_images);
$has_more = $total_count > $initial_count;
?>

<div class="results-grid-widget">
    <?php if (!empty($results_title)) { ?>
        <h2 class="h500"><?php echo $results_title ?></h2>
    <?php } ?>

    <div class="results-grid-container">
        <?php for ($i = 0; $i < $total_count; $i++) {
            $result = $results_images[$i];
            $is_hidden = $i >= $initial_count;
            $class = $is_hidden ? 'result-grid-item is-hidden' : 'result-grid-item';
        ?>
            <div class="<?php echo $class ?>" data-index="<?php echo $i ?>">
                <img loading="lazy"
                     src="<?php echo $result->image_url ?>"
                     alt="<?php echo $result->image_alt ?>"
                     title="<?php echo $result->image_title ?>" />
                <div class="result-grid-content"><?php echo $result->content ?></div>
            </div>
        <?php } ?>
    </div>

    <?php if ($has_more) { ?>
        <button id="show-more-results" class="button b200 outline expand auto-width mt-xl" onclick="ResultsGrid.showMore()">
            <?php echo $show_more_label ?>
        </button>
        <button id="show-less-results" class="button b200 outline expand auto-width mt-xl is-hidden" onclick="ResultsGrid.showLess()">
            <?php echo $show_less_label ?>
        </button>
    <?php } ?>

    <?php if ($show_view_all_button) { ?>
        <a href="<?php echo $view_all_url ?>"
           class="button b200 outline expand auto-width <?php echo $has_more ? 'mt-m' : 'mt-xl' ?>"
           title="<?php echo $view_all_url_title ?>">
            <?php echo $view_all_label ?>
        </a>
    <?php } ?>

    <script src="/includes/widgets/results_grid/results_grid.js"></script>
</div>
