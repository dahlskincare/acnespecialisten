<?php if (isset($rich_reviews)) { ?>
    <script type="application/ld+json">
        [
            <?php foreach ($rich_reviews as $rich_review) { ?> {
                    "@context": "https://schema.org",
                    "@type": "Review",
                    "author": {
                        "@type": "Person",
                        "name": "<?php echo $rich_review->name ?>"
                    },
                    "reviewBody": "<?php echo $rich_review->body ?>",
                    "reviewRating": {
                        "@type": "Rating",
                        "ratingValue": "<?php echo $rich_review->rating ?>",
                        "bestRating": "5"
                    },
                    "itemReviewed": {
                        "@type": "Service",
                        "name": "<?php echo $rich_review->service_name ?>"
                    }
                }
            <?php } ?>
        ]
    </script>
<?php } ?>