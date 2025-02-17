<?php if (isset($rich_product)) { ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Service",
            "name": "<?php echo $rich_product->name ?>",
            "serviceType": "Ansiktsbehandlingar mot akne och andra hudproblem",
            "image": "<?php echo $rich_product->image ?>",
            "description": "<?php echo $rich_product->description ?>",
            "provider": {
                "@type": "HealthAndBeautyBusiness",
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
            "@type": "Service",
            "name": "Hudvårdsbehandlingar mot hudproblem",
            "serviceType": "Ansiktsbehandlingar",
            "image": "https://acnespecialisten.se/bilder/hudbehandlingar/424x456/ansiktsbehandlingar-mot-problemhy.webp",
            "description": "Våra behandlingar ger dig en renare och friskare hud. Redan efter första gången kommer du att märka skillnad och vi anpassar alltid ansiktsbehandlingen efter just din hudtyp.",
            "Provider": {
                "@type": "HealthAndBeautyBusiness",
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
