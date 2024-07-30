<?php
if (!isset($faq_categories)) {
    // default (fallback) questions
    $faq_categories = array(
        'Behandlingar' => array(
            new Question(
                title: 'Vilka behandlingar erbjuder AcneSpecialisten för olika hudproblem?',
                text: 'På AcneSpecialisten erbjuder vi ett brett utbud av behandlingar anpassade för specifika hudproblem, inklusive avancerad acnebehandling, skonsam rosaceabehandling och noggrann portömning, samt andra specialbehandlingar för olika hudtillstånd.'
            ),
            new Question(
                title: 'Vad är den genomsnittliga tidsåtgången för en behandling?',
                text: 'En typisk behandling hos AcneSpecialisten tar mellan 60 och 90 min, beroende på behandlingens art och dina individuella hudvårdsbehov.'
            ),
            new Question(
                title: 'Hur många behandlingar rekommenderas för att uppnå synliga resultat?',
                text: 'Antalet rekommenderade behandlingar varierar beroende på individens hudproblem och hudtyp. I genomsnitt ser kunderna betydande förbättringar efter 2-4 behandlingssessioner.'
            ),
            new Question(
                title: 'Är behandlingarna hos AcneSpecialisten smärtsamma?',
                text: 'Vi strävar efter att göra våra behandlingar så bekväma som möjligt. Viss lätt smärta kan upplevas under behandling av inflammerade områden eller vid extraktioner, men denna känsla är övergående och hanteras med största omsorg för din komfort.'
            ),
            new Question(
                title: 'Anpassar ni behandlingarna för olika hudtyper?',
                text: 'Absolut, på AcneSpecialisten anpassar vi våra behandlingar för att passa en mängd olika hudtyper, från mycket känslig till oljig hy, för att säkerställa den mest effektiva och skonsamma behandlingen.'
            ),
        ),
        'Konsultationer' => array(
            new Question(
                title: 'Är alla konsultationer kostnadsfria på AcneSpecialisten?',
                text: 'Ja, vi erbjuder alltid kostnadsfria konsultationer för våra kunder, förutsatt att de närvarar vid den bokade tiden.'
            ),
            new Question(
                title: 'Vad kan jag förvänta mig under en konsultation hos AcneSpecialisten?',
                text: 'Under konsultationen kommer en av våra hudspecialister att noggrant analysera din hudtyp och diskutera dina hudproblem. Vi kommer även att gå igenom din nuvarande hudvårdsrutin och ge personliga rekommendationer för behandlingar och produkter som bäst passar dina behov.'
            ),
        ),
        'Produkter' => array(
            new Question(
                title: 'Hur kan jag hitta de rätta produkterna för min hudtyp?',
                text: 'För att hitta de produkter som passar just din hudtyp bäst, erbjuder vi kostnadsfria hudkonsultationer där våra experter analyserar din hud och rekommenderar produkter anpassade efter dina unika behov och hudtillstånd.'
            ),
        ),
        'Skötselråd och rutiner' => array(
            new Question(
                title: 'Vilka eftervårdstips bör jag följa efter en behandling?',
                text: 'Efter en behandling rekommenderar vi specifika eftervårdstips för att maximera behandlingens effektivitet och stödja din huds läkningsprocess. Detta kan inkludera råd om fuktgivande, solskydd och hur du undviker vissa produkter eller aktiviteter under en viss tid.'
            ),
        ),
        'Priser och betalning' => array(
            new Question(
                title: 'Hur kan jag ta reda på priserna för era behandlingar?',
                text: 'Våra behandlingspriser finns listade på vår hemsida. För varje specifik behandling hittar du detaljerad prisinformation som hjälper dig att planera ditt besök.'
            ),
            new Question(
                title: 'Erbjuder ni några paketpriser eller rabatter för flera behandlingar?',
                text: 'Ja, vi erbjuder ibland paketpriser eller rabatter vid bokning av flera behandlingar. Detta är ett utmärkt sätt att få en omfattande behandling till ett reducerat pris. För mer information om aktuella erbjudanden, besök vår hemsida eller kontakta oss direkt.'
            ),
        ),
    );
}
?>

<div class="faq-small is-hidden-tablet">
    <?php if (sizeof($faq_categories) > 1) { ?>
        <div class="faq-categories-small">
            <?php
            $index = 0;
            foreach (array_keys($faq_categories) as $category) { ?>
                <div class="faq-category b200 <?php if ($index == 0)
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
                                                    echo 'zero-size' ?>">
                <?php foreach ($faq_categories[$category] as $question) { ?>
                    <div class="faq-question">
                        <div class="faq-question-header" onclick="FAQ.toggleQuestionExpanded(event.target)">
                            <span class="p200">
                                <?php echo $question->title ?>
                            </span>
                            <?php icon('expand') ?>
                        </div>
                        <div class="faq-question-content zero-size">
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
                    <?php icon('fragor-kategori') ?>
                    <span class="faq-category-label">
                        <?php echo $category ?>
                    </span>
                </div>
            <?php
                $index++;
            } ?>
        </div>
    <?php } ?>
    <div class="faq-large-right">
        <?php
        $index = 0;
        foreach (array_keys($faq_categories) as $category) { ?>
            <div class="faq-question-category <?php if ($index > 0)
                                                    echo 'zero-size' ?>">
                <?php foreach ($faq_categories[$category] as $question) { ?>
                    <div class="faq-question">
                        <div class="faq-question-header" onclick="FAQ.toggleQuestionExpanded(event.target)">
                            <span class="p200">
                                <?php echo $question->title ?>
                            </span>
                            <?php icon('expand') ?>
                        </div>
                        <div class="faq-question-content zero-size">
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