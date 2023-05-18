<?php if (!isset($reviews)) {
    $reviews = array(
        new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Got rid of my pigment spots on',
            text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
            signature: 'Emily'
        ),
        new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Got rid of my pigment spots on',
            text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
            signature: 'Emily'
        ),
        new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Got rid of my pigment spots on',
            text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
            signature: 'Emily'
        ),
        new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Got rid of my pigment spots on',
            text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
            signature: 'Emily'
        ),
        new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Got rid of my pigment spots on',
            text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
            signature: 'Emily'
        ),
        new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Got rid of my pigment spots on',
            text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
            signature: 'Emily'
        ),
        new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Got rid of my pigment spots on',
            text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
            signature: 'Emily'
        ),
        new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Got rid of my pigment spots on',
            text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
            signature: 'Emily'
        ),
        new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Got rid of my pigment spots on',
            text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
            signature: 'Emily'
        ),
        new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Got rid of my pigment spots on',
            text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
            signature: 'Emily'
        ),
    );
} ?>

<div class="reviews-widget">
    <div id="reviews-scroller">
        <div id="reviews-container">
            <?php foreach ($reviews as $review) { ?>
                <div class="review-box <?php if (isset($reviews_narrow) && $reviews_narrow == true) {
                                            echo 'review-box-half';
                                        } else {
                                            echo 'review-box-quarter';
                                        }
                                        ?>">
                    <div class="review-box-top">
                        <div class="review-box-icons">
                            <?php for ($i = 0; $i < $review->stars; $i++) {
                                icon('star');
                            } ?>
                        </div>
                        <img src="<?php echo $review->logo_url ?>" width="102" height="26" alt="<?php echo $review->brand ?>" title="<?php echo $review->brand ?>" />
                    </div>
                    <h3 class=" review-box-title h200"><?php echo $review->title ?></h3>
                    <p class="review-box-text p200"><?php echo $review->text ?></p>
                    <p class="review-box-signature p200"><?php echo $review->signature ?></p>
                </div>
            <?php } ?>
            <div id="padder"></div>
        </div>
    </div>
    <div class="review-brands">
        <div class="review-brand">
            <img src="images/brands/google.svg" alt="Google" title="Google" width="80" height="26">
            <div class="review-brand-right">
                <div class="flex-row align-center justify-end">
                    <?php icon('star') ?>
                    <span class="ml-xs h200">5.0 / 5</span>
                </div>
                <p>96 reviews</p>
            </div>

        </div>
        <div class="review-brand">
            <img src="images/brands/trustpilot.svg" alt="Trustpilot" title="Trustpilot" width=" 107" height="27" />
            <div class="review-brand-right">
                <div class="flex-row align-center justify-end">
                    <?php icon('star') ?>
                    <span class="ml-xs h200">4.7 / 5</span>
                </div>
                <p>492 reviews</p>
            </div>
        </div>
        <div class="review-brand">
            <img src="images/brands/bokadirekt.svg" alt="Bokadirekt" title="Bokadirekt" width="128" height="19" />
            <div class="review-brand-right">
                <div class="flex-row align-center justify-end">
                    <?php icon('star') ?>
                    <span class="ml-xs h200">4.7 / 5</span>
                </div>
                <p>8240 reviews</p>
            </div>
        </div>
    </div>
</div>
<script src="includes/widgets/reviews/reviews.js"></script>