<!-- Google Consent Mode -->
<script data-cookieconsent="ignore">
  window.dataLayer = window.dataLayer || [];
  function gtag() {
    dataLayer.push(arguments)
  }
  gtag("consent", "default", {
    ad_personalization: "denied",
    ad_storage: "denied",
    ad_user_data: "denied",
    analytics_storage: "denied",
    functionality_storage: "denied",
    personalization_storage: "denied",
    security_storage: "granted",
    wait_for_update: 500
  });
  gtag("set", "ads_data_redaction", true);
  gtag("set", "url_passthrough", true);
</script>
<!-- End Google Consent Mode-->

<!-- Google Tag Manager -->
<script data-cookieconsent="ignore">
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PFRBPG9K');</script>
<!-- End Google Tag Manager -->

<!-- Cookiebot CMP-->
<script
  id="Cookiebot"
  src="https://consent.cookiebot.com/uc.js"
  data-cbid="77836ffa-6c7c-4c0d-836f-c1f3d3cc17c1"
  data-blockingmode="auto"
  type="text/javascript"
></script>
<!-- End Cookiebot CMP -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7EMC778CH1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7EMC778CH1');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1033282580"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-1033282580');
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