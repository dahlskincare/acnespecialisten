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
            }
        }
    </script>
<?php } ?>