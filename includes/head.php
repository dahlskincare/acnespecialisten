<!--
IMPORTANT: 
 Don't edit this file unless you know what you are doing!
-->
<?php
// PHP utility
include_once('includes/models.php');
function icon($name)
{
      echo '<span class="icon icon-' . $name . '">' . file_get_contents('icons/' . $name . '.svg') . '</span>';
}
?>
<meta name="viewport"
      content="width=360, initial-scale=1" />
<meta charset="UTF-8">
<meta name="author"
      content="Acnespecialisten Sverige AB">
<base href="/">
<link rel="stylesheet"
      href="styles/normalize.css">
<link rel="stylesheet"
      href="styles/style.css">
<link rel="icon"
      href="favicon.png"
      type="image/png" />

<!-- Preload important resources -->
<link rel="preload"
      as="style"
      href="styles/default-layout.css">
<link rel="preload"
      as="image"
      href="images/logo-green.svg">
<link rel="preload"
      as="image"
      href="images/banner-desktop.jpg"
      media="(min-width: 984px)">
<link rel="preload"
      as="image"
      href="images/banner-mobile.jpg"
      media="(max-width: 983px)">

<!-- Always include this as it's used by lots of widgets (KISS) -->
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
            prev: (carouselId) => {
                  const carousel = document.querySelector(carouselId);
                  let child = carousel.children[0];
                  carousel.scrollLeft -= child.getBoundingClientRect().width;
            },
            next: (carouselId) => {
                  const carousel = document.querySelector(carouselId);
                  let child = carousel.children[0];
                  carousel.scrollLeft += child.getBoundingClientRect().width;
            }
      }
</script>