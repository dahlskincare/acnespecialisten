<script async src="https://www.googletagmanager.com/gtag/js?id=G-7EMC778CH1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }

  gtag('consent', 'default', {
    'ad_storage': 'denied',
    'ad_user_data': 'denied',
    'ad_personalization': 'denied',
    'analytics_storage': 'denied'
  });

  gtag('js', new Date());
  gtag('set', 'linker', {
    'domains': ['boka.acnespecialisten.se', 'bokadirekt.se']
  });
  gtag('config', 'G-7EMC778CH1'); // Google Analytics
  gtag('config', 'AW-1033282580'); // Google Ads
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
<link rel="icon" type="image/png" href="https://www.acnespecialisten.se/favicon.png" />
<meta property="og:type" content="website" />

<!-- Preload important resources -->
<link rel="preload" as="image" href="images/logo-green.svg">
<link rel="preload" href="/fonts/DMSerifText-Latin.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="/fonts/DMSerifText-LatinExt.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="/fonts/Inter-LatinExt-Normal.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="/fonts/Inter-Latin-Normal.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="/fonts/Inter-LatinExt-SemiBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="/fonts/Inter-Latin-SemiBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">

<link rel="stylesheet" href="/includes/widgets/widgets.css" />

<?php
// These are only included if the corresponding variables are set ($rich_product, $rich_reviews, $rich_article)
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/rich_content/product.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/rich_content/article.php');
?>