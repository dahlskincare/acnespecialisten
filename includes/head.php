<?php
// IMPORTANT: 
// Don't edit this file unless you know what you are doing!

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

// PHP utility
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
function icon($name)
{
      echo '<span class="icon icon-' . $name . '">' . file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/icons/' . $name . '.svg') . '</span>';
}

?>
<base href="/">
<meta name="viewport" content="width=390, initial-scale=1" />
<meta charset="UTF-8">
<meta name="author" content="Acnespecialisten Sverige AB">
<link rel="stylesheet" href="styles/normalize.css">
<link rel="stylesheet" href="styles/style.css">
<link rel="icon" href="favicon.png" type="image/png" />

<!-- Preload important resources -->
<link rel="preload" as="style" href="styles/default-layout.css">
<link rel="preload" as="image" href="images/logo-green.svg">

<!-- Common styles -->
<style>
      .carousel {
            display: flex;
            overflow: scroll;
            scroll-behavior: smooth;
            scrollbar-width: none;
            -ms-overflow-style: none;
      }

      .carousel .slide {
            flex: 1 0 100%;
      }

      .carousel::-webkit-scrollbar {
            width: 0;
            height: 0;
      }
</style>
<script>
      Carousel = {
            prev: (carouselId, offset = 0) => {
                  const carousel = document.querySelector(carouselId);
                  let child = carousel.children[0];
                  carousel.scrollLeft -= (child.getBoundingClientRect().width + offset);
            },
            next: (carouselId, offset = 0) => {
                  const carousel = document.querySelector(carouselId);
                  let child = carousel.children[0];
                  carousel.scrollLeft += (child.getBoundingClientRect().width + offset);
            }
      }
      /// Scroll the window to a selector, 72: navbar height
      var scrollToElement = (selector, offset = 72) => {
            var element = document.querySelector(selector);
            let box = element.getBoundingClientRect();
            window.scrollTo(0, box.top + window.scrollY - offset);
      }
</script>

<link rel="stylesheet" href="/includes/widgets/widgets.css" />