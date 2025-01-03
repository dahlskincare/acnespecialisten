<!-- Google Tag Manager -->
<script data-cookieconsent="ignore">
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-PFRBPG9K');
</script>
<!-- End Google Tag Manager -->

<script>
  // Copy gclid url param to all booking links
  var urlParams = new URLSearchParams(window.location.search);
  var gclid = urlParams.get('gclid');
  if (gclid) {
    var links = document.querySelectorAll('a');
    for (var i = 0; i < links.length; i++) {
      var link = links[i];
      if (link.href.startsWith('https://boka.acnespecialisten.se')) {
        link.href = link.href + '&gclid=' + gclid;
      }
    }
  }
</script>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
function icon($name)
{
  echo '<span class="icon icon-' . $name . '">' . file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/icons/' . $name . '.svg') . '</span>';
}

?>
<base href="/">
<meta name="viewport" content="width=375, initial-scale=1, user-scalable=no" />
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