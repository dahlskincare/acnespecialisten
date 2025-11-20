<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/resultat.php" />

    <title>AcneSpecialistens resultat | Före och efter bilder</title>
    <meta name="title" content="AcneSpecialistens resultat | Före och efter bilder" class="l10n">
    <meta name="description" content="Se fantastiska före och efterbilder på resultatet från våra kunder. Upptäck hur du kan få klarare hud och uppnå resultat med AcneSpecialistens behandlingar">
    <meta name="keywords" content="Acnespecialisten resultat, acnespecialisten före efter">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/resultat/style.css">
</head>

<?php
$path_segments = array(
    new PathSegment('Resultat', 'resultat.php'),
);

$consultation_url = 'gratis-hudkonsultation.php';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2018',
        image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
        image_title: 'Hudterapeut Cazzandra Lindberg',
        image_alt: 'Porträttbild på hudterapeuten Cazzandra Lindberg',
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_title: 'Hudterapeut Veronika Benedik',
        image_alt: 'Porträttbild på hudterapeuten Veronika Benedik',
    ),
    new Specialist(
        name: 'Julia Eklund',
        title: 'Hudterapeut sedan 2021',
        image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
        image_title: 'Hudterapeut Julia Eklund',
        image_alt: 'Porträttbild på hudterapeuten Julia Eklund',
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2022',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_title: 'Hudterapeut Vilma Libom',
        image_alt: 'Porträttbild på hudterapeuten Vilma Libom',
    ),
);

$result_category =
    new ResultCategory(
        id: 'resultat',
        title: 'Resultat',
        description_1: 'Här hittar du resultaten från några av våra kunder som har kämpat med olika typer av hudproblem. Vi har samlat före och efter bilder som tydligt visar de märkbara förändringarna som våra skräddarsydda hudvårdsbehandlingar och produkter åstadkommer.',

        description_2: 'Våra Om du är redo att förändra din hud och uppleva hur vi kan göra skillnad, boka din kostnadsfria konsultation idag. Våra <a class="b200 underline" href="/" title="Mer information hudterapeuter i Stockholm">hudterapeuter i Stockholm</a> står redo att hjälpa dig. Påbörja din resa mot en problemfri hy!',

    );

$category_links = array(
    'resultat-acne.php' => 'Akne',
    'resultat-acnearr.php' => 'Akneärr',
    'resultat-finnar-arr.php' => 'Ärr från Finnar',
    'resultat-pormaskar.php' => 'Pormaskar',
    'resultat-rosacea.php' => 'Rosacea',
    'resultat-stora-porer.php' => 'Stora Porer',
    'resultat-ytliga-blodkarl.php' => 'Ytliga Blodkärl',
);

$results = [
    // Nya akne resultat (33 bilder)
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-aktiv.webp',
        image_alt: 'Aktiv akne före och efter behandling',
        image_title: 'Resultat - aktiv akne',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-ansikte-hoger-latt.webp',
        image_alt: 'Lätt akne i ansiktet höger sida före och efter behandling',
        image_title: 'Resultat - lätt akne',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-ansikte.webp',
        image_alt: 'Akne i ansiktet före och efter behandling',
        image_title: 'Resultat - akne i ansiktet',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-en-stor.webp',
        image_alt: 'En stor finne före och efter behandling',
        image_title: 'Resultat - stor finne',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-flackar.webp',
        image_alt: 'Fläckar från akne före och efter behandling',
        image_title: 'Resultat - fläckar från akne',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-hals.webp',
        image_alt: 'Akne på halsen före och efter behandling',
        image_title: 'Resultat - akne på halsen',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-hela-ryggen.webp',
        image_alt: 'Akne på hela ryggen före och efter behandling',
        image_title: 'Resultat - akne på ryggen',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-inflammerad-hy.webp',
        image_alt: 'Inflammerad hy med akne före och efter behandling',
        image_title: 'Resultat - inflammerad hy',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kaklinje.webp',
        image_alt: 'Akne på kaklinjen före och efter behandling',
        image_title: 'Resultat - akne på kaklinjen',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kind-hals.webp',
        image_alt: 'Akne på kind och hals före och efter behandling',
        image_title: 'Resultat - akne på kind och hals',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kind-tinning.webp',
        image_alt: 'Akne på kind och tinning före och efter behandling',
        image_title: 'Resultat - akne på kind och tinning',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kind.webp',
        image_alt: 'Akne på kinden före och efter behandling',
        image_title: 'Resultat - akne på kinden',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kinder-haka.webp',
        image_alt: 'Akne på kinder och haka före och efter behandling',
        image_title: 'Resultat - akne på kinder och haka',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kinder-mun.webp',
        image_alt: 'Akne på kinder och runt munnen före och efter behandling',
        image_title: 'Resultat - akne på kinder och mun',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kinder-panna.webp',
        image_alt: 'Akne på kinder och panna före och efter behandling',
        image_title: 'Resultat - akne på kinder och panna',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-mild.webp',
        image_alt: 'Mild akne före och efter behandling',
        image_title: 'Resultat - mild akne',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-munnen.webp',
        image_alt: 'Akne runt munnen före och efter behandling',
        image_title: 'Resultat - akne runt munnen',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-mycket.webp',
        image_alt: 'Mycket akne före och efter behandling',
        image_title: 'Resultat - mycket akne',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-panna.webp',
        image_alt: 'Akne på pannan före och efter behandling',
        image_title: 'Resultat - akne på pannan',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-prickar.webp',
        image_alt: 'Prickar från akne före och efter behandling',
        image_title: 'Resultat - prickar från akne',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-pustler-panna.webp',
        image_alt: 'Pustler på pannan före och efter behandling',
        image_title: 'Resultat - pustler på pannan',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-pustler-tinning.webp',
        image_alt: 'Pustler på tinningen före och efter behandling',
        image_title: 'Resultat - pustler på tinningen',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-roda-marken.webp',
        image_alt: 'Röda märken från akne före och efter behandling',
        image_title: 'Resultat - röda märken',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-rodnad.webp',
        image_alt: 'Rodnad från akne före och efter behandling',
        image_title: 'Resultat - rodnad från akne',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-rygg.webp',
        image_alt: 'Akne på ryggen före och efter behandling',
        image_title: 'Resultat - ryggakne',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-sida.webp',
        image_alt: 'Akne på sidan av ansiktet före och efter behandling',
        image_title: 'Resultat - akne på sidan',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-stora.webp',
        image_alt: 'Stora finnar före och efter behandling',
        image_title: 'Resultat - stora finnar',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-svar-hela-ansiktet.webp',
        image_alt: 'Svår akne över hela ansiktet före och efter behandling',
        image_title: 'Resultat - svår akne',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-svar-kind-panna-mun.webp',
        image_alt: 'Svår akne på kind, panna och mun före och efter behandling',
        image_title: 'Resultat - svår akne',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-svar-kind.webp',
        image_alt: 'Svår akne på kinden före och efter behandling',
        image_title: 'Resultat - svår akne på kind',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-svar.webp',
        image_alt: 'Svår akne före och efter behandling',
        image_title: 'Resultat - svår akne',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-tinning-kinder-panna.webp',
        image_alt: 'Akne på tinning, kinder och panna före och efter behandling',
        image_title: 'Resultat - akne på tinning, kinder och panna',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-utslag.webp',
        image_alt: 'Utslag från akne före och efter behandling',
        image_title: 'Resultat - utslag från akne',
        content: '',
    ),

    // Nya rosacea resultat (22 bilder)
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-ansikte-hoger.webp',
        image_alt: 'Rosacea i ansiktet höger sida före och efter behandling',
        image_title: 'Resultat - rosacea',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-ansikte-utslag.webp',
        image_alt: 'Rosacea med utslag före och efter behandling',
        image_title: 'Resultat - rosacea med utslag',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-ansikte-vanster.webp',
        image_alt: 'Rosacea i ansiktet vänster sida före och efter behandling',
        image_title: 'Resultat - rosacea',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-ansikte.webp',
        image_alt: 'Rosacea i ansiktet före och efter behandling',
        image_title: 'Resultat - rosacea i ansiktet',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-hela-ansiktet.webp',
        image_alt: 'Rosacea över hela ansiktet före och efter behandling',
        image_title: 'Resultat - rosacea hela ansiktet',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-kind.webp',
        image_alt: 'Rosacea på kinden före och efter behandling',
        image_title: 'Resultat - rosacea på kinden',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-kinder-nasa-rodnad.webp',
        image_alt: 'Rosacea på kinder och näsa med rodnad före och efter behandling',
        image_title: 'Resultat - rosacea kinder och näsa',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-kinder.webp',
        image_alt: 'Rosacea på kinderna före och efter behandling',
        image_title: 'Resultat - rosacea på kinderna',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-kinderna.webp',
        image_alt: 'Rosacea på kinderna före och efter behandling',
        image_title: 'Resultat - rosacea på kinderna',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-latt-ansikte.webp',
        image_alt: 'Lätt rosacea i ansiktet före och efter behandling',
        image_title: 'Resultat - lätt rosacea',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-latt-haka.webp',
        image_alt: 'Lätt rosacea på hakan före och efter behandling',
        image_title: 'Resultat - lätt rosacea på haka',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-mycket-ansikte.webp',
        image_alt: 'Mycket rosacea i ansiktet före och efter behandling',
        image_title: 'Resultat - mycket rosacea',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-nasa-kinder.webp',
        image_alt: 'Rosacea på näsa och kinder före och efter behandling',
        image_title: 'Resultat - rosacea näsa och kinder',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-nasan.webp',
        image_alt: 'Rosacea på näsan före och efter behandling',
        image_title: 'Resultat - rosacea på näsan',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-nasvingar.webp',
        image_alt: 'Rosacea på näsvingarna före och efter behandling',
        image_title: 'Resultat - rosacea på näsvingarna',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-omfattande-rodnad-ansikte.webp',
        image_alt: 'Omfattande rodnad från rosacea före och efter behandling',
        image_title: 'Resultat - omfattande rosacea',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-panna-kinder.webp',
        image_alt: 'Rosacea på panna och kinder före och efter behandling',
        image_title: 'Resultat - rosacea panna och kinder',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-prickar.webp',
        image_alt: 'Prickar från rosacea före och efter behandling',
        image_title: 'Resultat - prickar från rosacea',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-rodnad.webp',
        image_alt: 'Rodnad från rosacea före och efter behandling',
        image_title: 'Resultat - rodnad från rosacea',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-rott-ansikte.webp',
        image_alt: 'Rött ansikte från rosacea före och efter behandling',
        image_title: 'Resultat - rött ansikte',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-svar-ansikte.webp',
        image_alt: 'Svår rosacea i ansiktet före och efter behandling',
        image_title: 'Resultat - svår rosacea',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-utslag.webp',
        image_alt: 'Utslag från rosacea före och efter behandling',
        image_title: 'Resultat - utslag från rosacea',
        content: '',
    ),

    // Nya pormaskar resultat (12 bilder)
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-ansikte-inflammerad.webp',
        image_alt: 'Inflammerade pormaskar i ansiktet före och efter behandling',
        image_title: 'Resultat - inflammerade pormaskar',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-ansikte-vita.webp',
        image_alt: 'Vita pormaskar i ansiktet före och efter behandling',
        image_title: 'Resultat - vita pormaskar',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-ansikte.webp',
        image_alt: 'Pormaskar i ansiktet före och efter behandling',
        image_title: 'Resultat - pormaskar i ansiktet',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-haka.webp',
        image_alt: 'Pormaskar på hakan före och efter behandling',
        image_title: 'Resultat - pormaskar på hakan',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-kind-haka.webp',
        image_alt: 'Pormaskar på kind och haka före och efter behandling',
        image_title: 'Resultat - pormaskar kind och haka',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-kind-svarta.webp',
        image_alt: 'Svarta pormaskar på kinden före och efter behandling',
        image_title: 'Resultat - svarta pormaskar',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-kind.webp',
        image_alt: 'Pormaskar på kinden före och efter behandling',
        image_title: 'Resultat - pormaskar på kinden',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-manga-ansikte.webp',
        image_alt: 'Många pormaskar i ansiktet före och efter behandling',
        image_title: 'Resultat - många pormaskar',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-mykcet-ansikte.webp',
        image_alt: 'Mycket pormaskar i ansiktet före och efter behandling',
        image_title: 'Resultat - mycket pormaskar',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-porig-hy.webp',
        image_alt: 'Porig hy med pormaskar före och efter behandling',
        image_title: 'Resultat - porig hy',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-roda-ansikte.webp',
        image_alt: 'Röda pormaskar i ansiktet före och efter behandling',
        image_title: 'Resultat - röda pormaskar',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-rodnad-ansikte.webp',
        image_alt: 'Rodnad med pormaskar i ansiktet före och efter behandling',
        image_title: 'Resultat - rodnad och pormaskar',
        content: '',
    ),

    // Nya CO2-laser resultat (10 bilder)
    new LabelImage(
        image_url: '/bilder/resultat/832x476/co2-laser/co2-laser-resultat-fore-efter-fina-linjer.webp',
        image_alt: 'Fina linjer behandlade med CO2-laser före och efter',
        image_title: 'Resultat - fina linjer CO2-laser',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/co2-laser/co2-laser-resultat-fore-efter-hudforbattring.webp',
        image_alt: 'Hudförbättring med CO2-laser före och efter',
        image_title: 'Resultat - hudförbättring CO2-laser',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/co2-laser/co2-laser-resultat-fore-efter-hudforyngring.webp',
        image_alt: 'Hudföryngring med CO2-laser före och efter',
        image_title: 'Resultat - hudföryngring CO2-laser',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/co2-laser/co2-laser-resultat-fore-efter-hudtextur.webp',
        image_alt: 'Förbättrad hudtextur med CO2-laser före och efter',
        image_title: 'Resultat - hudtextur CO2-laser',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/co2-laser/co2-laser-resultat-fore-efter-kaklinje.webp',
        image_alt: 'Kaklinje behandlad med CO2-laser före och efter',
        image_title: 'Resultat - kaklinje CO2-laser',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/co2-laser/co2-laser-resultat-fore-efter-nasa.webp',
        image_alt: 'Näsa behandlad med CO2-laser före och efter',
        image_title: 'Resultat - näsa CO2-laser',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/co2-laser/co2-laser-resultat-fore-efter-ogonvra.webp',
        image_alt: 'Ögonvrå behandlad med CO2-laser före och efter',
        image_title: 'Resultat - ögonvrå CO2-laser',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/co2-laser/co2-laser-resultat-fore-efter-porig-hy.webp',
        image_alt: 'Porig hy behandlad med CO2-laser före och efter',
        image_title: 'Resultat - porig hy CO2-laser',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/co2-laser/co2-laser-resultat-fore-efter-slapp-haka.webp',
        image_alt: 'Slapp haka behandlad med CO2-laser före och efter',
        image_title: 'Resultat - slapp haka CO2-laser',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/co2-laser/co2-laser-resultat-fore-efter-slapp-hals.webp',
        image_alt: 'Slapp hals behandlad med CO2-laser före och efter',
        image_title: 'Resultat - slapp hals CO2-laser',
        content: '',
    ),

    // Nya ärr resultat (8 bilder)
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-ansikte-vanster.webp',
        image_alt: 'Ärr i ansiktet från vänster sida före och efter behandling',
        image_title: 'Resultat - ärr i ansiktet',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-brostet.webp',
        image_alt: 'Ärr på bröstet före och efter behandling',
        image_title: 'Resultat - ärr på bröstet',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-flackar.webp',
        image_alt: 'Ärr och fläckar före och efter behandling',
        image_title: 'Resultat - ärr och fläckar',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-gropar.webp',
        image_alt: 'Gropar och ärr före och efter behandling',
        image_title: 'Resultat - gropar och ärr',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-kind.webp',
        image_alt: 'Ärr på kinden före och efter behandling',
        image_title: 'Resultat - ärr på kinden',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-ryggen.webp',
        image_alt: 'Ärr på ryggen före och efter behandling',
        image_title: 'Resultat - ärr på ryggen',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-tinning-man.webp',
        image_alt: 'Ärr på tinningen hos man före och efter behandling',
        image_title: 'Resultat - ärr på tinningen',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-tinning.webp',
        image_alt: 'Ärr på tinningen före och efter behandling',
        image_title: 'Resultat - ärr på tinningen',
        content: '',
    ),

    // Nya hudförändringar resultat (7 bilder)
    new LabelImage(
        image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-axel.webp',
        image_alt: 'Hudförändringar på axeln före och efter behandling',
        image_title: 'Resultat - hudförändringar på axel',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-lapp.webp',
        image_alt: 'Hudförändringar på läppen före och efter behandling',
        image_title: 'Resultat - hudförändringar på läpp',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-nasa.webp',
        image_alt: 'Hudförändringar på näsan före och efter behandling',
        image_title: 'Resultat - hudförändringar på näsa',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-nyckelben.webp',
        image_alt: 'Hudförändringar på nyckelbenet före och efter behandling',
        image_title: 'Resultat - hudförändringar på nyckelben',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-rygg.webp',
        image_alt: 'Hudförändringar på ryggen före och efter behandling',
        image_title: 'Resultat - hudförändringar på rygg',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-tinning.webp',
        image_alt: 'Hudförändringar på tinningen före och efter behandling',
        image_title: 'Resultat - hudförändringar på tinning',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-vid-orat.webp',
        image_alt: 'Hudförändringar vid örat före och efter behandling',
        image_title: 'Resultat - hudförändringar vid örat',
        content: '',
    ),

    // Nya blandhy resultat (3 bilder)
    new LabelImage(
        image_url: '/bilder/resultat/832x476/blandhy/blandhy-resultat-fore-efter-ansikte-jamnare-hudton.webp',
        image_alt: 'Blandhy med jämnare hudton före och efter behandling',
        image_title: 'Resultat - blandhy jämnare hudton',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/blandhy/blandhy-resultat-fore-efter-ansikte-vanster.webp',
        image_alt: 'Blandhy i ansiktet vänster sida före och efter behandling',
        image_title: 'Resultat - blandhy',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/blandhy/blandhy-resultat-fore-efter-ansikte.webp',
        image_alt: 'Blandhy i ansiktet före och efter behandling',
        image_title: 'Resultat - blandhy i ansiktet',
        content: '',
    ),

    // Nya pigmentfläckar resultat (3 bilder)
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pigmentflackar/pigmentflackar-resultat-fore-efter-fraknar.webp',
        image_alt: 'Fräknar och pigmentfläckar före och efter behandling',
        image_title: 'Resultat - fräknar',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pigmentflackar/pigmentflackar-resultat-fore-efter-kind-tinning.webp',
        image_alt: 'Pigmentfläckar på kind och tinning före och efter behandling',
        image_title: 'Resultat - pigmentfläckar',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/pigmentflackar/pigmentflackar-resultat-fore-efter-kind.webp',
        image_alt: 'Pigmentfläckar på kinden före och efter behandling',
        image_title: 'Resultat - pigmentfläckar på kind',
        content: '',
    ),

    // Nya ytliga blodkärl resultat (3 bilder)
    new LabelImage(
        image_url: '/bilder/resultat/832x476/ytliga-blodkarl/ytliga-blodkarl-resultat-fore-efter-ansikte-hoger.webp',
        image_alt: 'Ytliga blodkärl höger sida före och efter behandling',
        image_title: 'Resultat - ytliga blodkärl',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/ytliga-blodkarl/ytliga-blodkarl-resultat-fore-efter-ansikte-vanster.webp',
        image_alt: 'Ytliga blodkärl vänster sida före och efter behandling',
        image_title: 'Resultat - ytliga blodkärl',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/ytliga-blodkarl/ytliga-blodkarl-resultat-fore-efter-ansikte.webp',
        image_alt: 'Ytliga blodkärl i ansiktet före och efter behandling',
        image_title: 'Resultat - ytliga blodkärl',
        content: '',
    ),

    // Nya infuzion resultat (1 bild)
    new LabelImage(
        image_url: '/bilder/resultat/832x476/infuzion/infuzion-resultat-fore-efter-ogon.webp',
        image_alt: 'Infuzion behandling runt ögonen före och efter',
        image_title: 'Resultat - infuzion ögon',
        content: '',
    ),

    // Befintliga resultat
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-svar-acne-i-ansiktet.jpg',
        image_alt: 'svår acne i ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acne-i-ansiktet.jpg',
        image_alt: 'acne i ansiktet kund före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acne-pa-huden.jpg',
        image_alt: 'före och efter bilder acne på huden',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acne-fore-och-efterbilder.jpg',
        image_alt: 'acne före och efterbilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acne-svar-hudproblem.jpg',
        image_alt: 'svår acne hudproblem före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acne-7.jpg',
        image_alt: 'acne kund före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acne-ryggen.jpg',
        image_alt: 'före och efter bilder acne ryggen',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acne-9.jpg',
        image_alt: 'acne kund före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/acne-13.jpg',
        image_alt: 'acne kund före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/acne-14.jpg',
        image_alt: 'acne kund före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acne-10.jpg',
        image_alt: 'acne kund före och efter bild',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acne-11.jpg',
        image_alt: 'acne kund före och efter bild',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acnearr-1.jpg',
        image_alt: 'Acnearr före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acnearr-2.jpg',
        image_alt: 'Acnearr före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acnearr-3.jpg',
        image_alt: 'Acnearr före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acnearr-4.jpg',
        image_alt: 'Acnearr före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-acnearr-5.jpg',
        image_alt: 'Acnearr före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-blandhy-i-ansiktet.jpg',
        image_alt: 'blandhy i ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-blandhy-finnar-ansiktet.jpg',
        image_alt: 'blandhy finnar ansiktet före och efter',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-blandhy-ansiktet.jpg',
        image_alt: 'blandhy ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-blandhy-acne-finnar.jpg',
        image_alt: 'blandhy acne finnar före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/blandhy-1.jpg',
        image_alt: 'blandhy i ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/blandhy-3.jpg',
        image_alt: 'blandhy i ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/blandhy-5.jpg',
        image_alt: 'blandhy i ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-pormaskar-i-ansiktet.jpg',
        image_alt: 'pormaskar i ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-pormaskar-svarta.jpg',
        image_alt: 'svarta pormaskar före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-pormaskar-vita.jpg',
        image_alt: 'vita pormaskar före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-pormaskar-pa-kinderna.jpg',
        image_alt: 'pormaskar på kinderna',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/pormaskar-2.jpg',
        image_alt: 'pormaskar i ansiktet',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-rosacea-i-ansiktet.jpg',
        image_alt: 'rosacea i ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-rosacea-fore-och-efter-bilder.jpg',
        image_alt: 'före och efterbilder rosacea',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-rosacea-hy.jpg',
        image_alt: 'rosacea hy före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-rosacea-hud.jpg',
        image_alt: 'rosacea hud före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-rosacea-hud-i-ansiktet.jpg',
        image_alt: 'rosacea hud i ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-rosacea-ansiktet.jpg',
        image_alt: 'rosacea ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/rosacea-1.jpg',
        image_alt: 'rosacea ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-ytliga-blodkarl-i-ansiktet.jpg',
        image_alt: 'ytliga blodkärl i ansiktet kund före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-ytliga-blodkarl-fore-och-efterbilder.jpg',
        image_alt: 'ytliga blodkärl före och efter bilder resultat',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-ytliga-blodkarl-pa-huden.jpg',
        image_alt: 'ytliga blodkärl på huden före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-ytliga-blodkarl-nasvingarna.jpg',
        image_alt: 'ytliga blodkärl på näsvingarna före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/ytliga-blodkarl-4.jpg',
        image_alt: 'ytliga blodkärl i ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-2.jpg',
        image_alt: 'Acne före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-3.jpg',
        image_alt: 'Acne före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-10.jpg',
        image_alt: 'Acne före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-4.jpg',
        image_alt: 'Acne före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-5.jpg',
        image_alt: 'Acne före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-6.jpg',
        image_alt: 'Acne före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-7.jpg',
        image_alt: 'Acne före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-8.jpg',
        image_alt: 'Acne före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-9.jpg',
        image_alt: 'Acne före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-1.jpg',
        image_alt: 'Acne före och efter bilder',
        image_title: '',
        content: '',
    ),
];

?>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php
            $green_banner_content = new GreenBannerContent(
                title: $result_category->title,
                description: $result_category->description_1,
                description_extended: $result_category->description_2,
            );
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
            ?>
            <div class="container mt-m is-hidden-desktop" id="filters-touch-container">
                <div id="filters-touch">
                    <?php foreach ($category_links as $link_id => $link_label) { ?>
                        <a href="/<?php echo $link_id ?>" class="b200 filter-item">
                            <?php echo $link_label ?>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="container is-hidden-touch">
                <div id="filters-desktop">
                    <div id="filter-items">
                        <?php foreach ($category_links as $link_id => $link_label) { ?>
                            <a href="/<?php echo $link_id ?>" class="filter-item">
                                <div class="b100 filter-item-label l10n">
                                    <?php echo $link_label ?>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="filter-button is-hidden" id="filter-button-previous">
                        <button class="round-medium grey">
                            <?php icon('arrow-left') ?>
                        </button>
                    </div>
                    <div class="filter-button is-hidden" id="filter-button-next">
                        <button class="round-medium grey">
                            <?php icon('arrow-right') ?>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <section id="cards">
                <?php foreach ($results as $result) { ?>
                    <div class="result-card">
                        <img loading="lazy" src="<?php echo $result->image_url ?>" alt="<?php echo $result->image_alt ?>" title="<?php echo $result->image_title ?>" />
                        <div class="result-card-content"><?php echo $result->content ?></div>
                    </div>
                <?php } ?>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Vill du ha hjälp med din hy?</div>
                    <div class="p200 l10n" id="cta-banner-content">Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter.</div>
                </div>
                <div>
                    <a href="gratis-hudkonsultation.php" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
                </div>
            </section>
            <section id="reviews" class="large-margin">
                <div class="h500 l10n">Omdömen</div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>

            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Frågor & svar</h2>
                    <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php $faq_categories = array(
                    'Generellt' => array(
                        new Question(
                            title: 'När börjar jag se resultat efter era ansiktsbehandlingar?',
                            text: '<p class="p200">De första förbättringarna kan ofta märkas inom de första veckorna efter behandlingen. Fullständiga resultat kan dock ta längre tid att uppnå, beroende på behandlingens natur och individens hudtillstånd.</p>'
                        ),
                        new Question(
                            title: 'Hur långvariga är resultaten från era behandlingar?',
                            text: '<p class="p200">Det beror på vilket problem som behandlas. Hudproblem såsom akne, rosacea och pormaskar måste behandlas löpande. Befintliga Pigmentfläckar, ytliga blodkärl och hår tas bort permanent, dock kan man inte motverka uppkomsten av nya.</p>'
                        ),
                        new Question(
                            title: 'Hur följer ni upp och mäter framgång i behandlingarna?',
                            text: '<p class="p200">Vi dokumenterar varje kunds framsteg genom att ta bilder vid den första konsultationen, vid varje uppföljande besök, och slutligen när det önskade resultatet har uppnåtts. Dessa bilder jämförs sedan för att visa hudens förändring och framsteg från start till slut.</p>'
                        ),
                        new Question(
                            title: 'Förbättras resultaten om jag kombinerar olika behandlingar?',
                            text: '<p class="p200">Absolut. För att effektivt hantera hudproblem som akne, rosacea och pormaskar rekommenderar vi en kombination av specifikt utvalda hudvårdsprodukter och skräddarsydda ansiktsbehandlingar. Denna strategi syftar till att inte bara behandla befintliga hudåkommor utan också förebygga framtida utbrott.</p>'
                        ),
                        new Question(
                            title: 'Ger era behandlingar samma resultat för alla hudtyper?',
                            text: '<p class="p200">Medan vi strävar efter att uppnå de bästa möjliga resultaten för alla våra kunder, skräddarsys behandlingsplanen för varje individ baserat på deras unika hudtyp och behov. Detta tillvägagångssätt garanterar att varje person får den mest effektiva behandlingen anpassad för att maximera resultaten för just deras hud.</p>'
                        ),
                    ),

                );
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
            </section>

            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Våra hudterapeuter</h2>
                    <a href="/hudterapeut/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla hudterapeuter</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="/hudterapeut/" title="Se alla specialister">Se alla hudterapeuter</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Varumärken</div>
                    <a href="varumarken/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken/" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script async src="resultat/results.js"></script>
</body>

</html>