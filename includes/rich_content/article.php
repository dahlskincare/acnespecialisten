<?php if (isset($rich_article)) { ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Article",
            "headline": "<?php echo $rich_article->headline ?>",
            "author": {
                "@type": "Person",
                "name": "<?php echo $rich_article->author ?>"
            },
            "publisher": {
                "@type": "Organization",
                "name": "AcneSpecialisten",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://www.acnespecialisten.se/images/logo.png"
                }
            },
            "datePublished": "<?php echo $rich_article->date_published ?>",
            "image": "<?php echo $rich_article->image ?>",
            "description": "<?php echo $rich_article->description ?>"
        }
    </script>
<?php } ?>