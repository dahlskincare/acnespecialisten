<?php if (isset($rich_product)) { ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "<?php echo $rich_product->name ?>",
            "image": "<?php echo $rich_product->image ?>",
            "description": "<?php echo $rich_product->description ?>",
            "brand": {
                "@type": "Brand",
                "name": "<?php echo $rich_product->brand ?>"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "<?php echo $rich_product->ratingValue ?>",
                "reviewCount": "<?php echo $rich_product->ratingCount ?>",
                "bestRating": "5",
                "worstRating": "1"
            },
            "offers": {
                "@type": "Offer",
                "price": "<?php echo $rich_product->price ?>",
                "priceCurrency": "<?php echo $rich_product->currency ?>"
            }
        }
    </script>

<?php } else { ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Hudvårdsbehandlingar mot hudproblem",
            "image": "https://acnespecialisten.se/bilder/hudbehandlingar/424x456/ansiktsbehandlingar-mot-problemhy.webp",
            "description": "Våra behandlingar ger dig en renare och friskare hud. Redan efter första gången kommer du att märka skillnad och vi anpassar alltid ansiktsbehandlingen efter just din hudtyp.",
            "brand": {
                "@type": "Brand",
                "name": "AcneSpecialisten"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "reviewCount": "718",
                "bestRating": "5",
                "worstRating": "1"
            }
        }
    </script>

    <?php } ?>
