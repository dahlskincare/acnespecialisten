<?php
if (!isset($faq_categories)) {
    // default (fallback) questions
    $faq_categories = array(
        'Frequently asked questions' => array(
            new Question('How many treatments are needed?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
            new Question('Can my acne come back?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
            new Question('How do I get rid of my acne fast?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
            new Question('Do I have acne even if I only have one pimple?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.')
        ),
        'Payment and invoice' => array(
            new Question('Blablabla?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
            new Question('Or is it?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.')
        ),
        'Cancellation' => array(),
        'Treatment' => array(),
        'Other' => array()
    );
}
?>

<div class="faq-small is-hidden-tablet">
    <?php if (sizeof($faq_categories) > 1) { ?>
        <div class="faq-categories-small carousel">
            <?php
            $index = 0;
            foreach (array_keys($faq_categories) as $category) { ?>
                <div class="faq-category b200 slide <?php if ($index == 0)
                                                        echo 'selected' ?>" onclick="FAQ.selectCategory(event.target, '<?php echo $category ?>')">
                    <?php echo $category ?>
                </div>
            <?php
                $index++;
            } ?>
        </div>
    <?php } ?>
    <div class="faq-questions-small">
        <?php
        $index = 0;
        foreach (array_keys($faq_categories) as $category) { ?>
            <div class="faq-question-category <?php if ($index > 0)
                                                    echo 'is-hidden' ?>">
                <?php foreach ($faq_categories[$category] as $question) { ?>
                    <div class="faq-question">
                        <div class="faq-question-header" onclick="FAQ.toggleQuestionExpanded(event.target)">
                            <span class="p200">
                                <?php echo $question->title ?>
                            </span>
                            <?php icon('expand') ?>
                        </div>
                        <div class="faq-question-content is-hidden">
                            <?php echo $question->text ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php
            $index++;
        } ?>
    </div>
</div>

<div class="faq-large is-hidden-mobile">
    <?php if (sizeof($faq_categories) > 1) { ?>
        <div class="faq-large-left">
            <?php
            $index = 0;
            foreach (array_keys($faq_categories) as $category) { ?>
                <div class="faq-category <?php if ($index == 0)
                                                echo 'selected' ?>" onclick="FAQ.selectCategory(event.target, '<?php echo $category ?>')">
                    <?php icon('question-category') ?>
                    <span class="faq-category-label">
                        <?php echo $category ?>
                    </span>
                </div>
            <?php
                $index++;
            } ?>
        </div>
    <? } ?>
    <div class="faq-large-right">
        <?php
        $index = 0;
        foreach (array_keys($faq_categories) as $category) { ?>
            <div class="faq-question-category <?php if ($index > 0)
                                                    echo 'is-hidden' ?>">
                <?php foreach ($faq_categories[$category] as $question) { ?>
                    <div class="faq-question">
                        <div class="faq-question-header" onclick="FAQ.toggleQuestionExpanded(event.target)">
                            <span class="p200">
                                <?php echo $question->title ?>
                            </span>
                            <?php icon('expand') ?>
                        </div>
                        <div class="faq-question-content is-hidden">
                            <?php echo $question->text ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php
            $index++;
        } ?>
    </div>

</div>
<script src="includes/widgets/faq/faq.js"></script>