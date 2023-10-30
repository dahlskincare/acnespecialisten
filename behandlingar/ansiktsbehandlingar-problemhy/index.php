<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ansiktsbehandlingar för Problemhy - Effektiva behandlingar | Acnespecialisten';
$seo_description = 'Utforska AcneSpecialistens skräddarsydda ansiktsbehandlingar för problemhy. Få djupgående kunskap om olika hudåkommor och vägledning för hur du bäst tar hand om dem. Expertbehandling och professionell rådgivning endast ett steg bort.';
$seo_keywords = 'problemhy, ansiktsbehandlingar, hudproblem, förebygga problemhy, behandla problemhy, oren hud, hudrodnad, hudutslag, pormaskar, torr hud, oljig hud';


$seo_image = 'images/treatments/large/ansiktsbehandlingar-problemhy.jpg';


$model = new Service(
    title: 'Ansiktsbehandlingar för problemhy',
    duration: '60 min',
    price: 'Från 799 kr',
    content: '',
    image_small: 'https://via.placeholder.com/358x274.webp',
    image_large: 'https://via.placeholder.com/424x456.webp',
    image_alt: 'Ansiktsbehandlingar för problemhy',
    image_title: 'Ansiktsbehandlingar för problemhy',
    consultation_url: 'https://bokadirekt.se',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://bokadirekt.se',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 procedure',
            price: '995 kr',
            savings: null,
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '3 procedures',
            price: '2595 kr',
            savings: '865 kr per behandling',
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '5 procedures',
            price: '3995 kr',
            savings: '799 kr per behandling',
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$nav_buttons = array(
    'about' => 'Om ansiktsbehandlingar mot problemhy',
    'preparing' => 'Förberedelser',
    'process' => 'Processen',
    'types' => 'Typer',
    'treatment-areas' => 'Områden',
    'aftercare' => 'Eftervård',
    'results' => 'Resultat',
    'reviews' => 'Omdömen',
    'faq' => 'FAQ',
    'skin-guide' => 'Hudguide',
    'specialists' => 'Specialister',
    'service-brands' => 'Märken',
);

$description_title = 'Vad innebär ansiktsbehandlingar för problemhy?';
$description_text = '<p class="p200">Denna behandling är skräddarsydd för dem med problemhy och erbjuder en effektiv start på hudens förbättring. Behandlingen rengör huden på djupet, särskilt nyttigt för de som lider av akne, finnar eller pormaskar. Med hjälp av en vapozone öppnas porerna upp genom ånga, vilket möjliggör en noggrann rengöring.</p>
<p class="p200 mt-m">Oavsett om du har blandhy, oljig, kombinerad, torr eller känslig hud, eller lider av specifika tillstånd som rosacea, seborré, perioral dermatit eller stora porer, anpassar denna behandling sig efter dina unika behov. Målet är att återställa hudens balans och ge den lyster och vitalitet den förtjänar.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför ansiktsbehandlingar för problemhy',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelser inför ansiktsbehandlingar för problemhy',
        image_title: 'Förberedelser inför ansiktsbehandlingar för problemhy',
        content: '<p class="p200">Inför din ansiktsbehandling för problemhy hos oss behöver du inte tänka på något särskilt. Kom som du är, och vi tar hand om resten. Om du vill förbereda dig lite extra kan du tänka på följande: undvik att exfoliera huden dagen innan och undvik att sola några dagar innan behandlingen. Det kan också vara bra att komma med ett rent ansikte, utan smink. Informera gärna din hudterapeut i förväg om du tar några mediciner eller har några aktiva hudåkommor, så att behandlingen kan anpassas efter dina behov. Men det viktigaste är att du känner dig bekväm, så välj det som känns bäst för dig.</p>',
        tags: array(new ArticleTag(
            icon: 'article-tag-steam',
            label: 'Ånga'
        ), new ArticleTag(
            icon: 'article-tag-extraction',
            label: 'Extraktion'
        ), new ArticleTag(
            icon: 'article-tag-mask',
            label: 'Mask'
        ), new ArticleTag(
            icon: 'article-tag-cleansing',
            label: 'Rengöring'
        ))
    ),
    'process' => new Article(
        title: 'Hur går en ansiktsbehandling för problemhy till?',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Processen för ansiktsbehandling mot problemhy',
        image_title: 'Processen för ansiktsbehandling mot problemhy',
        content: '<p class="p200">Hos oss hittar du ansiktsbehandlingar designade för alla typer av problemhy. Vi förstår att varje persons hud är unik, och därför skräddarsyr vi varje behandling baserat på dina personliga och individuella behov. Vår expertis och omfattande kunskap säkerställer att du får den bästa möjliga vården för din hud.</p>

        <p class="p200 mt-m">Varje behandling inleds med en noggrann rengöring för att avlägsna inkapslingar och tilltäpptheter. Därefter används en vapozone för att varsamt öppna upp huden och göra porerna mer mottagliga. Efter detta steg genomför vi en detaljerad extraktion där vi noggrant tömmer porerna på oönskade finnar, pormaskar och andra orenheter. För att lugna huden och minska eventuell rodnad eller irritation appliceras sedan en lugnande mask. Slutligen avslutas behandlingen med en intensiv återfuktning, vilket hjälper din hud att återhämta sig och känna sig förnyad.</p>',

        tags: array(new ArticleTag(
            icon: 'article-tag-steam',
            label: 'Ånga'
        ), new ArticleTag(
            icon: 'article-tag-extraction',
            label: 'Extraktion'
        ), new ArticleTag(
            icon: 'article-tag-mask',
            label: 'Mask'
        ), new ArticleTag(
            icon: 'article-tag-cleansing',
            label: 'Rengöring'
        ))
    ),
);

$types_title = 'Ansiktsbehandlingar för problemhy';
$types_description = '';
$types = array(
    new Service(
        title: 'Ansiktsbehandling mot Akne',
        duration: null,
        price: null,
        content: 'Ansiktsbehandling anpassad för akne med papler, pustler och komedoner.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Ansiktsbehandling mot Akne',
        image_title: 'Ansiktsbehandling mot Akne',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka en Ansiktsbehandling mot Akne',
        booking_url_title: 'Boka en Ansiktsbehandling mot Akne',
    ),
    new Service(
        title: 'Ansiktsbehandling för Blandhy',
        duration: null,
        price: null,
        content: 'Behandling skräddarsydd för blandhy, idealisk för dig som har områden med både torrhet och oljighet på huden.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Ansiktsbehandling för Blandhy',
        image_title: 'Ansiktsbehandling för Blandhy',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka en Ansiktsbehandling för Blandhy',
        booking_url_title: 'Boka en Ansiktsbehandling för Blandhy',
    ),
    new Service(
        title: 'Ansiktsbehandling mot Finnar',
        duration: null,
        price: null,
        content: 'Denna behandling är specialanpassad för att hantera och behandla finnar, vilket bidrar till att minska inflammation och förbättra hudens övergripande utseende.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Ansiktsbehandling mot Finnar',
        image_title: 'Ansiktsbehandling mot Finnar',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka en Ansiktsbehandling mot Finnar',
        booking_url_title: 'Boka en Ansiktsbehandling mot Finnar',
    ),
    new Service(
        title: 'Ansiktsbehandling mot Milier',
        duration: null,
        price: null,
        content: 'Denna behandling är specialanpassad för att effektivt behandla milier och bidra till att förbättra hudens textur och utseende.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Ansiktsbehandling mot Milier',
        image_title: 'Ansiktsbehandling mot Milier',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka en Ansiktsbehandling mot Milier',
        booking_url_title: 'Boka en Ansiktsbehandling mot Milier',
    ),
    new Service(
        title: 'Ansiktsbehandling för Oljig & Kombinerad Hy',
        duration: null,
        price: null,
        content: 'Behandlingen är skräddarsydd för att balansera oljig och kombinerad hud. Vi fokuserar på att rensa porer, balansera hudens fuktighet och ge en mattare finish.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Ansiktsbehandling för Oljig & Kombinerad Hy',
        image_title: 'Ansiktsbehandling för Oljig & Kombinerad Hy',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka en Ansiktsbehandling för Oljig & Kombinerad Hy',
        booking_url_title: 'Boka en Ansiktsbehandling för Oljig & Kombinerad Hy',
    ),
    new Service(
        title: 'Ansiktsbehandling för Perioral Dermatit',
        duration: null,
        price: null,
        content: 'Denna behandling är särskilt framtagen för de som lider av perioral dermatit. Med fokus på att lugna och återställa huden, använder vi milda och icke-irriterande produkter som hjälper till att reducera inflammation och rodnad.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Ansiktsbehandling för Perioral Dermatit',
        image_title: 'Ansiktsbehandling för Perioral Dermatit',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka en Ansiktsbehandling för Perioral Dermatit',
        booking_url_title: 'Boka en Ansiktsbehandling för Perioral Dermatit',
    ),
    new Service(
        title: 'Ansiktsbehandling mot Pormaskar',
        duration: null,
        price: null,
        content: 'Denna behandling är speciellt designad för att effektivt rengöra och behandla pormaskar. Genom en kombination av djuprengöring och specialanpassade produkter, hjälper vi till att klara upp porerna och minska uppkomsten av nya pormaskar.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Ansiktsbehandling mot Pormaskar',
        image_title: 'Ansiktsbehandling mot Pormaskar',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka en Ansiktsbehandling mot Pormaskar',
        booking_url_title: 'Boka en Ansiktsbehandling mot Pormaskar',
    ),
    new Service(
        title: 'Ansiktsbehandling för Problemhy',
        duration: null,
        price: null,
        content: 'Denna behandling är särskilt framtagen för att hantera och behandla problemhy. Med hjälp av noggrant utvalda produkter och tekniker, arbetar vi för att balansera huden, behandla befintliga problem och förebygga framtida utbrott.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Ansiktsbehandling för Problemhy',
        image_title: 'Ansiktsbehandling för Problemhy',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka en Ansiktsbehandling för Problemhy',
        booking_url_title: 'Boka en Ansiktsbehandling för Problemhy',
    ),
    new Service(
        title: 'Ansiktsbehandling för Rosacea',
        duration: null,
        price: null,
        content: 'Denna behandling är speciellt utformad för att skonsamt behandla och lindra symptom associerade med rosacea. Minskar rodnad och inflammation, samtidigt som vi ger näring och skydd till den känsliga huden.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Ansiktsbehandling för Rosacea',
        image_title: 'Ansiktsbehandling för Rosacea',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka en Ansiktsbehandling för Rosacea',
        booking_url_title: 'Boka en Ansiktsbehandling för Rosacea',
    ),

);
$big_types = array(
    new Service(
        title: 'Classic',
        duration: '60 min',
        price: null,
        content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Classic',
        image_title: 'Classic',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Book a classic treatment',
        booking_url_title: 'Book a classic treatment',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 procedure',
                price: '£1 995',
                savings: 'save $500',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 procedures',
                savings: 'save $500',
                price: '£2 595',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 procedures',
                savings: 'save $500',
                price: '£3 995',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        title: "The skin therapist's choice",
        duration: '60 min',
        price: null,
        content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: "The skin therapist's choice",
        image_title: "The skin therapist's choice",
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: "Book a skin therapist's choice treatment",
        booking_url_title: "Book a skin therapist's choice treatment",
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 procedure',
                price: '£1 995',
                savings: null,
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 procedures',
                price: '£2 595',
                savings: 'save $1000!',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 procedures',
                price: '£3 995',
                savings: 'save 1 million!',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        title: 'Peel, Boost & Glow',
        duration: '60 min',
        price: null,
        content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Peel, Boost & Glow',
        image_title: 'Peel, Boost & Glow',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Book a Peel, Boost & Glow treatment',
        booking_url_title: 'Book a Peel, Boost & Glow treatment',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 procedure',
                price: '£1 995',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 procedures',
                price: '£2 595',
                savings: 'Save 1000',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 procedures',
                price: '£3 995',
                savings: 'Save 1000',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        title: 'Luxury',
        duration: '60 min',
        price: null,
        content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Luxury',
        image_title: 'Luxury',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Book a Luxury treatment',
        booking_url_title: 'Book a Luxury treatment',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 procedure',
                price: '£1 995',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 procedures',
                price: '£2 595',
                savings: 'hej',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 procedures',
                price: '£3 995',
                savings: 'hej',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    )
);

$combos_title = 'Popular treatment combinations';
$combos = array(
    new ServiceCombo(
        name: 'Combination 1',
        image_small: 'https://via.placeholder.com/200x200.webp',
        image_large: 'https://via.placeholder.com/361x274.webp',
        image_alt: 'Ansiktsbehandlingar för problemhy',
        image_title: 'Ansiktsbehandlingar för problemhy',
        duration: '50 min',
        price: '2595 kr',
        booking_url: 'https://bokadirekt.se',
        booking_url_label: 'Boka tid för behandling',
        booking_url_title: 'Boka tid för behandling',
        items: array(
            new ServiceComboItem(
                title: 'Deep bikini',
                price: '995 kr',
                savings: 'save 500 kr',
            ),
            new ServiceComboItem(
                title: 'Armpits',
                price: '995 kr',
                savings: 'save 500 kr',
            )
        )
    ),
    new ServiceCombo(
        name: 'Combination 2',
        image_small: 'https://via.placeholder.com/200x200.webp',
        image_large: 'https://via.placeholder.com/361x274.webp',
        image_alt: 'Ansiktsbehandlingar för problemhy',
        image_title: 'Ansiktsbehandlingar för problemhy',
        duration: '50 min',
        price: '2595 kr',
        booking_url: 'https://bokadirekt.se',
        booking_url_label: 'Boka tid för behandling',
        booking_url_title: 'Boka tid för behandling',
        items: array(
            new ServiceComboItem(
                title: 'Deep bikini',
                price: '995 kr',
                savings: 'Save hejhej'
            ),
            new ServiceComboItem(
                title: 'Armpits',
                price: '995 kr',
                savings: 'Save hejhej'
            ),
            new ServiceComboItem(
                title: 'Legs',
                price: '995 kr',
                savings: 'Save hejhej'
            )
        )
    ),
    new ServiceCombo(
        name: 'Combination 3',
        image_small: 'https://via.placeholder.com/200x200.webp',
        image_large: 'https://via.placeholder.com/361x274.webp',
        image_alt: 'Ansiktsbehandlingar för problemhy',
        image_title: 'Ansiktsbehandlingar för problemhy',
        duration: '50 min',
        price: '2595 kr',
        booking_url: 'https://bokadirekt.se',
        booking_url_label: 'Boka tid för behandling',
        booking_url_title: 'Boka tid för behandling',
        items: array(
            new ServiceComboItem(
                title: 'Full legs',
                price: '995 kr',
                savings: 'Save hejhej'
            ),
            new ServiceComboItem(
                title: 'Arms up to the elbow',
                price: '995 kr',
                savings: 'Save hejhej'
            ),
            new ServiceComboItem(
                title: 'Deep bikini',
                price: '995 kr',
                savings: 'Save hejhej'
            ),
            new ServiceComboItem(
                title: 'Armpits',
                price: '995 kr',
                savings: 'Save hejhej'
            ),
        )
    )
);

$treatment_areas_text = '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>';
$treatment_areas_title = 'Treatment areas';
$treatment_areas = array(
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Body',
        image_title: 'Body',
        title: 'Body',
        description: '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webm',
                image_alt: 'Hands & fingers',
                image_title: 'Hands & fingers',
                title: 'Hands & fingers',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webm',
                image_alt: 'Shoulders',
                image_title: 'Shoulders',
                title: 'Shoulders',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webm',
                image_alt: 'Armpits',
                image_title: 'Armpits',
                title: 'Armpits',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webm',
                image_alt: 'Chest',
                image_title: 'Chest',
                title: 'Chest',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            )
        )
    ),
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Face',
        image_title: 'Face',
        title: 'Intimate',
        description: '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webm',
                image_alt: 'Face',
                image_title: 'Face',
                title: 'Bikini line',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webm',
                image_alt: 'String',
                image_title: 'String',
                title: 'String',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webm',
                image_alt: 'Brazze',
                image_title: 'Brazze',
                title: 'Brazilian',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            )
        )
    ),
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Face',
        image_title: 'Face',
        title: 'Face',
        description: '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webm',
                image_alt: 'Bikini line',
                image_title: 'Bikini line',
                title: 'Ears',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webm',
                image_alt: 'Cheeks',
                image_title: 'Cheeks',
                title: 'Cheeks',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webm',
                image_alt: 'Upper lip',
                image_title: 'Upper lip',
                title: 'Upper lip',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            )
        ),
        all: new TreatmentAreaItem(
            image: 'https://via.placeholder.com/94x72.webm',
            image_alt: 'Whole face',
            image_title: 'Whole face',
            title: 'Whole face',
            duration: '30 min',
            price: '1925 kr',
            url: 'https://bokadirekt.se',
            url_label: 'Boka',
            url_title: 'Boka tid för behandling'
        )
    )
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Aftercare and maintenance',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Aftercare and maintenance',
    image_title: 'Aftercare and maintenance',
    content: '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Ansiktsbehandlingar för problemhy brands';
$service_brands_text = '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>';
$service_brands = array(
    new Brand(
        label: 'Powerlite',
        image: 'images/brands/powerlite.svg',
        image_alt: 'Powerlite',
        image_title: 'Powerlite'
    ),
    new Brand(
        label: 'Dermapen4',
        image: 'images/brands/dermapen4.svg',
        image_alt: 'Dermapen4',
        image_title: 'Dermapen4'
    )
);

$results = array(
    new ResultCustomer(
        url: 'resultat/details-1',
        image_before_small: 'https://via.placeholder.com/358x358.webm',
        image_after_small: 'https://via.placeholder.com/358x358.webm',
        image_before_large: 'https://via.placeholder.com/424x424.webm',
        image_after_large: 'https://via.placeholder.com/424x424.webm',
        url_title: 'Resultat',
        image_alt: 'Resultat',
        image_title: 'Resultat',
        age: 18,
        gender: 'Female',
        problem: 'Acne',
        type: 'Severe',
        treatment: new ResultTreatment(
            duration: '3 months',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Problem skin facials',
                    count: '3 times'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Product bundle for light acne',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Patrick Minogue'
            ),
        )
    ),
    new ResultCustomer(
        url: 'resultat/details-1',
        image_before_small: 'https://via.placeholder.com/358x358.webm',
        image_after_small: 'https://via.placeholder.com/358x358.webm',
        image_before_large: 'https://via.placeholder.com/424x424.webm',
        image_after_large: 'https://via.placeholder.com/424x424.webm',
        url_title: 'Resultat',
        image_alt: 'Resultat',
        image_title: 'Resultat',
        age: 18,
        gender: 'Female',
        problem: 'Acne',
        type: 'Severe',
        treatment: new ResultTreatment(
            duration: '3 months',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Problem skin facials',
                    count: '3 times'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Product bundle for light acne',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Patrick Minogue'
            ),
        )
    ),
);

$reviews_title = 'Reviews';
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
    )
);
$reviews_view_more = 'View all reviews';

$faq_title = 'Questions & answers';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'How many treatments are needed?',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ),
        new Question(
            title: 'Can my acne come back?',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ),
        new Question(
            title: 'How do I get rid of my acne fast?',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ),
        new Question(
            title: 'Do I have acne even if I only have one pimple?',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        )
    )
);
$faq_view_more = 'View all questions';

$skin_guide_articles = array(
    new SkinGuideArticle(
        url: 'skin-guide/category-here/subcategory-here/how-hormones-effect',
        url_title: 'How hormones effect?',
        title: 'How hormones effect?',
        problem: 'Acne',
        image_small: 'https://via.placeholder.com/426x324.webp',
        image_large: 'https://via.placeholder.com/872x456.jpg',
        image_alt: 'Hormones effect',
        image_title: 'Hormones effect',
    ),
);
$skin_guide_view_more = 'View all articles';

$specialists_title = 'Our specialists';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg',
        image_title: 'Cazzandra Lindberg'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/large/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik',
        image_title: 'Veronika Benedik'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/large/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul',
        image_title: 'Amira Maqboul'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/large/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom',
        image_title: 'Vilma Libom'
    )
);
$specialists_view_more = 'View all specialists';

$brands_title = 'Brands we use';
$all_brands = array(
    new Brand(
        label: 'Powerlite',
        image: 'images/brands/powerlite.svg',
        image_alt: 'Powerlite',
        image_title: 'Powerlite',
    ),
    new Brand(
        label: 'Dermapen4',
        image: 'images/brands/dermapen4.svg',
        image_alt: 'Dermapen4',
        image_title: 'Dermapen4',
    ),
    new Brand(
        label: 'Cryopen',
        image: 'images/brands/cryopen.svg',
        image_alt: 'Cryopen',
        image_title: 'Cryopen',
    ),
    new Brand(
        label: 'Lumenis',
        image: 'images/brands/lumenis.svg',
        image_alt: 'Lumenis',
        image_title: 'Lumenis',
    ),
    new Brand(
        label: 'Alma',
        image: 'images/brands/alma.svg',
        image_alt: 'Alma',
        image_title: 'Alma',
    ),
    new Brand(
        label: 'PRXT',
        image: 'images/brands/prxt.svg',
        image_alt: 'PRXT',
        image_title: 'PRXT',
    ),
    new Brand(
        label: 'Hydrafacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'Hydrafacial',
        image_title: 'Hydrafacial',
    ),
    new Brand(
        label: 'IP infusion',
        image: 'images/brands/ipinfusion.svg',
        image_alt: 'IP infusion',
        image_title: 'IP infusion',
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title><?php echo $seo_title ?></title>
    <meta name="description" content="<?php echo $seo_description ?>">
    <meta name="keywords" content="<?php echo $seo_keywords ?>">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->
    <meta property="og:title" content="<?php echo $seo_title ?>" />
    <meta property="og:description" content="<?php echo $seo_description ?>" />
    <meta property="og:image" content="<?php echo $seo_image ?>" />

    <meta property="twitter:title" content="<?php echo $seo_title ?>" />
    <meta property="twitter:description" content="<?php echo $seo_description ?>" />
    <meta property="twitter:image" content="<?php echo $seo_image ?>" />

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/behandlingar/service.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <div class="is-hidden-touch is-hidden-desktop-only" id="floater">
        <div class="container">
            <div id="floating-picture" style="background-image: url('<?php echo $model->image_large ?>')">
                <div id="overlay">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    <div>
                        <h2 class="h500">
                            <?php echo $model->title ?>
                        </h2>
                        <?php if (isset($model->duration)) { ?>
                            <div class="mt-m">
                                <span class="p200 l10n">Längd: <?php echo $model->duration ?></span>
                            </div>
                        <?php } ?>
                        <?php if (strlen($model->content) > 0) { ?>
                            <div class="mt-m"><?php echo $model->content ?></div>
                        <?php } ?>
                        <?php if (isset($model->procedures)) { ?>
                            <div id="floating-procedures" class="mt-xl">
                                <?php foreach ($model->procedures as $procedure) { ?>
                                    <div class="floating-procedure">
                                        <div class="p200">
                                            <?php echo $procedure->label ?>
                                        </div>
                                        <div class="floating-procedure-price">
                                            <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                            <span class="p200"><?php echo $procedure->savings ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="mt-xl">
                            <div class="columns is-2 is-variable">
                                <div class="column">
                                    <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button white expand" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                                </div>
                                <div class="column">
                                    <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button white expand" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section id="header">
            <div id="green-header-small" class="is-hidden-desktop">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                    <h1 class="mt-xs h600">
                        <?php echo $model->title ?>
                    </h1>
                    <?php if (isset($model->duration)) { ?>
                        <h3 class="mt-xs p200 l10n">Längd: <?php echo $model->duration ?></h3>
                    <?php } ?>
                    <?php if (strlen($model->content) > 0) { ?>
                        <div class="mt-xs"><?php echo $model->content ?></div>
                    <?php } ?>
                    <?php if (isset($model->procedures)) { ?>
                        <div class="procedures mt-xl">
                            <?php foreach ($model->procedures as $procedure) { ?>
                                <div class="procedure">
                                    <div class="p200"><?php echo $procedure->label ?></div>
                                    <div>
                                        <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                        <span class="p200"><?php echo $procedure->savings ?></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <div class="mt-xl">
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button b200 white expand" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                            </div>
                            <div class="column is-half">
                                <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button b200 white expand" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="green-header-large" class="is-hidden-touch">
                <div class="container">
                    <div class="columns">
                        <div class="column is-half">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        </div>
                        <div class="column is-half flex-row align-end justify-end">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </div>
                    </div>
                    <div id="green-header-large-text" class="mt-xxs">
                        <h1 class="h600">
                            <?php echo $model->title ?>
                        </h1>
                        <?php if (isset($model->duration)) { ?>
                            <div class="mt-xs">
                                <span class="p200 l10n">Längd: <?php echo $model->duration ?></span>
                            </div>
                        <?php } ?>
                        <?php if (strlen($model->content) > 0) { ?>
                            <div class="mt-s"><?php echo $model->content ?></div>
                        <?php } ?>
                        <?php if (isset($model->procedures)) { ?>
                            <div class="mt-xl large-procedures flex-row">
                                <?php foreach ($model->procedures as $procedure) { ?>
                                    <div class="large-procedure">
                                        <div class="p200 l10n"><?php echo $procedure->label ?></div>
                                        <div>
                                            <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                            <span class="p200"><?php echo $procedure->savings ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="mt-xl flex-row" id="book-buttons">
                            <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button b200 white" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                            <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button b200 white" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div id="content">
                <section id="badges" class="mt-m mb-s is-hidden-desktop">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </section>
                <section id="image" class="is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_large ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                </section>
                <section id="about">
                    <h2 class="h500"><?php echo $description_title ?></h2>
                    <div class="mt-xl"><?php echo $description_text ?></div>
                </section>

                <?php foreach ($top_articles as $id => $article) { ?>
                    <section id="<?php echo $id ?>">
                        <?php
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        ?>
                    </section>
                <?php } ?>
                <?php if (isset($types_title)) { ?>
                    <section id="types" class="large-margin">
                        <h2 class="h500"><?php echo $types_title; ?></h2>
                        <?php if (isset($types_description)) { ?>
                            <p class="p200 mt-xs"><?php echo $types_description ?></p>
                        <?php } ?>
                        <div class="mt-xl"></div>
                        <?php if (isset($types)) { ?>
                            <?php foreach ($types as $service) { ?>
                                <hr class="is-hidden-touch" />
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                            <?php } ?>
                            <hr class="is-hidden-touch" />
                        <?php } ?>
                        <?php if (isset($big_types)) { ?>
                            <?php foreach ($big_types as $service) { ?>
                                <div class="big-type">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card_big/service_card_big.php') ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </section>
                <?php } ?>
                <?php if (isset($combos) && isset($combos_title)) { ?>
                    <section id="combos" class="large-margin">
                        <h2 class="big l10n"><?php echo $combos_title ?></h2>
                        <?php foreach ($combos as $combo) { ?>
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_combo/service_combo.php') ?>
                        <?php } ?>
                    </section>
                <?php } ?>
                <?php if (isset($treatment_areas)) { ?>
                    <section id="treatment-areas" class="large-margin">
                        <?php if (isset($treatment_areas_title)) { ?>
                            <h2 class="big l10n"><?php echo $treatment_areas_title ?></h2>
                        <?php } ?>
                        <?php if (isset($treatment_areas_text)) { ?>
                            <div class="mt-xs"><?php echo $treatment_areas_text ?></div>
                        <?php } ?>
                        <?php foreach ($treatment_areas as $treatment_area) { ?>
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                            </picture>
                            <h3 class="h300 mt-xl"><?php echo $treatment_area->title ?></h3>
                            <div class="mb-xl"><?php echo $treatment_area->description ?></div>
                        <?php
                            foreach ($treatment_area->items as $treatment_area_item) {
                                include('../widgets/treatment-area-item-card/treatment-area-item-card.php');
                            }
                        } ?>
                    </section>

                <?php } ?>
                <?php foreach ($bottom_articles as $id => $article) { ?>
                    <section id="<?php echo $id ?>">
                        <?php
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        ?>
                    </section>
                <?php } ?>
                <?php if (isset($service_brands)) { ?>
                    <section id="service-brands" class="large-margin">
                        <?php if (isset($service_brands_title)) { ?>
                            <h2 class="h500"><?php echo $service_brands_title ?></h2>
                        <?php } ?>
                        <?php if (isset($service_brands_text)) { ?>
                            <div class="mt-xs"><?php echo $service_brands_text ?></div>
                        <?php } ?>
                        <div class="mt-xl">
                            <?php
                            $brands = $service_brands;
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                            ?>
                        </div>
                    </section>
                <?php } ?>
                <section id="results" class="large-margin">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php') ?>
                </section>
                <section id="reviews" class="large-margin">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n"><?php echo $reviews_title ?></h2>
                        <div class="flex-row is-hidden-mobile">
                            <div class="step-buttons">
                                <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                    <?php icon('arrow-left') ?>
                                </button>
                                <button class="round-large grey" onclick="Reviews.scroll(1)">
                                    <?php icon('arrow-right') ?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews"><?php echo $reviews_view_more ?></a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n"><?php echo $faq_title ?></h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="faq" title="View all questions"><?php echo $faq_view_more ?></a>
                </section>
                <section id="skin-guide" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n">Skin guide</h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" onclick="scrollSkinGuide(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSkinGuide(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide_narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide" title="View all articles"><?php echo $faq_view_more ?></a>
                </section>
                <section id="specialists" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n"><?php echo $specialists_title ?></h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="View all specialists"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Brands we use</h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $brands = $all_brands;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="includes/scripts/floating-image.js"></script>
</body>

</html>