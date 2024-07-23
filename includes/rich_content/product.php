<?php if (isset($rich_product)) { ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "<?php echo $rich_product->name ?>",
            "image": "<?php echo $rich_product->image ?>",
            "description": "<?php echo $rich_product->description ?>",
            "sku": "<?php echo $rich_product->sku ?>",
            "brand": {
                "@type": "Brand",
                "name": "AcneSpecialisten"
            },
            "offers": {
                "@type": "Offer",
                "price": "<?php echo $rich_product->price ?>",
                "priceCurrency": "<?php echo $rich_product->currency ?>",
                "availability": "https://schema.org/InStock"
            }
        }
    </script>
<?php } ?>