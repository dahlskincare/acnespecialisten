<?php
// IMPORTANT: 
// Don't edit this file unless you know what you are doing!

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

<!-- Accordion widget -->
<link rel="stylesheet"
      href="includes/widgets/accordion/accordion.css" />
<!-- Result widget (before and after images) -->
<link rel="stylesheet"
      href="includes/widgets/result/result.css" />
<script src="includes/widgets/result/result.js"></script>
<!-- Reviews widget -->
<link rel="stylesheet"
      href="includes/widgets/reviews/reviews.css" />
<!-- FAQ widget -->
<link rel="stylesheet"
      href="includes/widgets/faq/faq.css" />
<script src="includes/widgets/faq/faq.js"></script>
<!-- Skin guide widget -->
<link rel="stylesheet"
      href="includes/widgets/skin_guide/skin_guide.css" />
<!-- Specialists widget -->
<link rel="stylesheet"
      href="includes/widgets/specialists/specialists.css" />
<!-- Breadcrumbs widget -->
<link rel="stylesheet"
      href="includes/widgets/breadcrumbs/breadcrumbs.css" />