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
                "reviewCount": "<?php echo $rich_product->ratingCount ?>"
            },
            "offers": {
                "@type": "Offer",
                "price": "<?php echo $rich_product->price ?>",
                "priceCurrency": "<?php echo $rich_product->currency ?>"
            }
        }
    </script>
<?php } ?>