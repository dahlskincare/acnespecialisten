<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
function icon($name)
{
      echo '<span class="icon icon-' . $name . '">' . file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/icons/' . $name . '.svg') . '</span>';
}

?>
<base href="/">
<meta name="viewport" content="width=390, initial-scale=1, user-scalable=no" />
<meta charset="UTF-8">
<meta name="author" content="Acnespecialisten Sverige AB">
<link rel="stylesheet" href="styles/normalize.css">
<link rel="stylesheet" href="styles/style.css">
<link rel="icon" href="favicon.png" type="image/png" />
<meta property="og:type" content="website" />

<!-- Preload important resources -->
<link rel="preload" as="image" href="images/logo-green.svg">
<link rel="stylesheet" href="/includes/widgets/widgets.css" />

<?php
// These are only included if the corresponding variables are set ($rich_product, $rich_reviews, $rich_article)
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/rich_content/product.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/rich_content/article.php');
?>