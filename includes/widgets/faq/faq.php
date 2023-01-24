<?php
class Question
{
    public function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;
    }
    public $title;
    public $text;
}

$faq_categories = array();
$frequently_asked_questions = array();
$payment_and_invoice = array();
$cancellation = array();
$other = array();
$treatment = array();

if ($lang == 'sv') {
    $frequently_asked_questions[] = new Question('Hur många behandlingar behövs?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
    $frequently_asked_questions[] = new Question('Kommer aknen tillbaka?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
    $frequently_asked_questions[] = new Question('Hur blir jag snabbt av med akne?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
    $frequently_asked_questions[] = new Question('Har jag akne även om det bara är en finne?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

    $payment_and_invoice[] = new Question('Blablabla?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
    $payment_and_invoice[] = new Question('Eller?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

    $faq_categories['Vanliga frågor'] = $frequently_asked_questions;
    $faq_categories['Betalning och fakturafrågor'] = $payment_and_invoice;
    $faq_categories['Ångerrätt'] = $cancellation;
    $faq_categories['Behandling'] = $treatment;
    $faq_categories['Övriga frågor och kommentarer'] = $other;
} else {
    $frequently_asked_questions[] = new Question('How many treatments are needed?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
    $frequently_asked_questions[] = new Question('Can my acne come back?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
    $frequently_asked_questions[] = new Question('How do I get rid of my acne fast?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
    $frequently_asked_questions[] = new Question('Do I have acne even if I only have one pimple?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

    $faq_categories['Frequently asked questions'] = $frequently_asked_questions;
    $faq_categories['Payment and invoice'] = $payment_and_invoice;
    $faq_categories['Cancellation'] = $cancellation;
    $faq_categories['Treatment'] = $treatment;
    $faq_categories['Other'] = $other;
}
?>

<div class="faq-small is-hidden-tablet">
    <div class="faq-categories-small carousel">
        <?php foreach (array_keys($faq_categories) as $category) { ?>
            <div class="faq-category b200 slide"
                 onclick="FAQ.selectCategory(event, '<?php echo $category ?>')">
                <?php echo $category ?>
            </div>
        <?php } ?>
    </div>
    <div class="faq-questions-small">
        <?php foreach (array_keys($faq_categories) as $category) { ?>
            <div class="faq-question-category is-hidden">
                <?php foreach ($faq_categories[$category] as $question) { ?>
                    <div class="faq-question">
                        <div class="faq-question-header"
                             onclick="FAQ.toggleQuestionExpanded(event)">
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
        <?php } ?>
        <a href="questions.php"
           class="mt-xl button outline expand l10n">View all questions</a>
    </div>
</div>

<div class="faq-large is-hidden-mobile">
    <p>hello</p>
</div>