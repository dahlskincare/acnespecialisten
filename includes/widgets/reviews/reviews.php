<!-- 
A scrollable Trustpilot reviews widget.
Please note this widget depends on carousel.js and carousel.css 
-->

<div class="reviews-widget carousel"
     id="reviews-carousel">
    <?php for ($x = 0; $x < 10; $x++) { ?>
        <div class="review-box">
            <div class="review-box-top">
                <div class="review-box-icons">
                    <?php icon('star') ?>
                    <?php icon('star') ?>
                    <?php icon('star') ?>
                    <?php icon('star') ?>
                    <?php icon('star') ?>
                </div>
                <img src="images/brands/trustpilot.svg"
                     width="102"
                     height="26"
                     alt="Trustpilot">
            </div>
            <h3 class="review-box-title h200">
                Got rid of my pigment spots on
            </h3>
            <p class="review-box-text p200">
                Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who
                is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I didn't
                think
            </p>
            <p class="review-box-signature p200">
                Emily
            </p>
        </div>
    <?php } ?>
</div>