<!-- 
A scrollable Trustpilot reviews widget.
-->

<div class="reviews-widget">
    <div class="carousel" id="reviews-carousel">
        <?php for ($x = 0; $x < 10; $x++) { ?>
            <div class="<?php if (isset($reviews_narrow) && $reviews_narrow == true) {
                            echo 'review-box review-box-half';
                        } else {
                            echo 'review-box review-box-quarter';
                        }
                        ?>">
                <div class="review-box-top">
                    <div class="review-box-icons">
                        <?php icon('star') ?>
                        <?php icon('star') ?>
                        <?php icon('star') ?>
                        <?php icon('star') ?>
                        <?php icon('star') ?>
                    </div>
                    <img src="images/brands/trustpilot.svg" width="102" height="26" alt="Trustpilot">
                </div>
                <h3 class="review-box-title h200">
                    Got rid of my pigment spots on
                </h3>
                <p class="review-box-text p200">
                    Got rid of my pigment spots on my face completely after two treatments. I received treatment from
                    Amira
                    who
                    is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I
                    didn't
                    think
                </p>
                <p class="review-box-signature p200">
                    Emily
                </p>
            </div>
        <?php } ?>
    </div>
    <div class="review-brands">
        <div class="review-brand">
            <img src="images/brands/google.svg" alt="Google" width="80" height="26">
            <div class="review-brand-right">
                <?php icon('star') ?>
                <span class="ml-xs h200">5.0 / 5</span>
                <p>96 reviews</p>
            </div>

        </div>
        <div class="review-brand">
            <img src="images/brands/trustpilot.svg" alt="Trustpilot" width="107" height="27">
            <div class="review-brand-right">
                <?php icon('star') ?>
                <span class="ml-xs h200">4.7 / 5</span>
                <p>492 reviews</p>
            </div>
        </div>
        <div class="review-brand">
            <img src="images/brands/bokadirekt.svg" alt="Bokadirekt" width="128" height="19">
            <div class="review-brand-right">
                <?php icon('star') ?>
                <span class="ml-xs h200">4.7 / 5</span>
                <p>8240 reviews</p>
            </div>
        </div>
    </div>
</div>