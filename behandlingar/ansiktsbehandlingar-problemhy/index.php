<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$model = new Service(
    id: 'ansiktsbehandlingar-problemhy',
    title: 'Ansiktsbehandlingar för problemhy',
    duration: '50 min',
    price: '995 kr',
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
    icons: null,
    short_title: null,
    procedures: array(
        new Procedure(
            label: '1 procedure',
            full_price: null,
            price: '£1 995',
            booking_url: 'https://bokadirekt.se'
        ),
        new Procedure(
            label: '3 procedures',
            full_price: '£3 885',
            price: '£2 595',
            booking_url: 'https://bokadirekt.se'
        ),
        new Procedure(
            label: '5 procedures',
            full_price: '£6 475',
            price: '£3 995',
            booking_url: 'https://bokadirekt.se'
        )
    ),
    combos: array(
        new ServiceCombo(
            image_small: 'https://via.placeholder.com/200x200.webp',
            image_large: 'https://via.placeholder.com/361x274.webp',
            image_alt: 'Ansiktsbehandlingar för problemhy',
            image_title: 'Ansiktsbehandlingar för problemhy',
            duration: '50 min',
            price: '2595 kr',
            full_price: '3885 kr',
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling',
            items: array(
                new ServiceComboItem(
                    title: 'Deep bikini',
                    price: '995 kr'
                ),
                new ServiceComboItem(
                    title: 'Armpits',
                    price: '995 kr'
                )
            )
        ),
        new ServiceCombo(
            image_small: 'https://via.placeholder.com/200x200.webp',
            image_large: 'https://via.placeholder.com/361x274.webp',
            image_alt: 'Ansiktsbehandlingar för problemhy',
            image_title: 'Ansiktsbehandlingar för problemhy',
            duration: '50 min',
            price: '2595 kr',
            full_price: '3885 kr',
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling',
            items: array(
                new ServiceComboItem(
                    title: 'Deep bikini',
                    price: '995 kr'
                ),
                new ServiceComboItem(
                    title: 'Armpits',
                    price: '995 kr'
                ),
                new ServiceComboItem(
                    title: 'Legs',
                    price: '995 kr'
                )
            )
        ),
        new ServiceCombo(
            image_small: 'https://via.placeholder.com/200x200.webp',
            image_large: 'https://via.placeholder.com/361x274.webp',
            image_alt: 'Ansiktsbehandlingar för problemhy',
            image_title: 'Ansiktsbehandlingar för problemhy',
            duration: '50 min',
            price: '2595 kr',
            full_price: '3885 kr',
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling',
            items: array(
                new ServiceComboItem(
                    title: 'Full legs',
                    price: '995 kr'
                ),
                new ServiceComboItem(
                    title: 'Arms up to the elbow',
                    price: '995 kr'
                ),
                new ServiceComboItem(
                    title: 'Deep bikini',
                    price: '995 kr'
                ),
                new ServiceComboItem(
                    title: 'Armpits',
                    price: '995 kr'
                ),
            )
        )
    )
);

$treatment_areas = array(
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Body',
        image_title: 'Body',
        title: 'Body',
        description: '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin.</p>',
        items: array(
            'hands-n-fingers' => new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webm',
                image_alt: 'Hands & fingers',
                image_title: 'Hands & fingers',
                title: 'Hands & fingers',
                duration: '30 min',
                price: '1295 kr'
            ),
            'shoulders' => new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webm',
                image_alt: 'Shoulders',
                image_title: 'Shoulders',
                title: 'Shoulders',
                duration: '30 min',
                price: '1295 kr'
            ),
            'armpits' => new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webm',
                image_alt: 'Armpits',
                image_title: 'Armpits',
                title: 'Armpits',
                duration: '30 min',
                price: '1295 kr'
            ),
            'chest' => new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webm',
                image_alt: 'Chest',
                image_title: 'Chest',
                title: 'Chest',
                duration: '30 min',
                price: '1295 kr'
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
            'bikini_line' => new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Bikini line',
                duration: '30 min',
                price: '1295 kr'
            ),
            'string' => new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'String',
                duration: '30 min',
                price: '1295 kr'
            ),
            'brazilian' => new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Brazilian',
                duration: '30 min',
                price: '1295 kr'
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
            'bikini_line' => new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webm',
                image_alt: 'Bikini line',
                image_title: 'Bikini line',
                title: 'Ears',
                duration: '30 min',
                price: '1295 kr'
            ),
            'string' => new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webm',
                image_alt: 'Cheeks',
                image_title: 'Cheeks',
                title: 'Cheeks',
                duration: '30 min',
                price: '1295 kr'
            ),
            'brazilian' => new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webm',
                image_alt: 'Upper lip',
                image_title: 'Upper lip',
                title: 'Upper lip',
                duration: '30 min',
                price: '1295 kr'
            )
        ),
        all: new TreatmentAreaItem(
            image: 'https://via.placeholder.com/102x102.webm',
            image_alt: 'Whole face',
            image_title: 'Whole face',
            title: 'Whole face',
            duration: '30 min',
            price: '1925 kr'
        )
    )
);
$treatment_areas_text = '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>';

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

$nav_buttons = array(
    'about' => 'Overview',
    'preparing' => 'Preparing',
    'process' => 'Process',
    'types' => 'Types',
    'treatment-areas' => 'Areas',
    'aftercare' => 'Aftercare',
    'service-brands' => 'Brands',
    'results' => 'Results',
    'reviews' => 'Reviews',
    'faq' => 'FAQ',
    'skin-guide' => 'Skin guide',
    'specialists' => 'Facials specialists',
);
$description_title = 'What is problem skin facials?';
$description_text = '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>';
$article_preparing = new Article(
    id: 'preparing',
    title: 'Preparing for problem skin facials',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Preparing for problem skin facials',
    image_title: 'Preparing for problem skin facials',
    content: '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>',
    tags: array(new ArticleTag(
        icon: 'article-tag-steam',
        label: 'Steam'
    ), new ArticleTag(
        icon: 'article-tag-extraction',
        label: 'Extraction'
    ), new ArticleTag(
        icon: 'article-tag-mask',
        label: 'Mask'
    ), new ArticleTag(
        icon: 'article-tag-cleansing',
        label: 'Cleansing'
    ))
);
$article_process = new Article(
    id: 'procedure-process',
    title: 'Procedure process',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Procedure process',
    image_title: 'Procedure process',
    content: '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>',
    tags: array(new ArticleTag(
        icon: 'article-tag-steam',
        label: 'Steam'
    ), new ArticleTag(
        icon: 'article-tag-extraction',
        label: 'Extraction'
    ), new ArticleTag(
        icon: 'article-tag-mask',
        label: 'Mask'
    ), new ArticleTag(
        icon: 'article-tag-cleansing',
        label: 'Cleansing'
    ))
);
$article_after_care = new Article(
    id: 'aftercare',
    title: 'Aftercare and maintenance',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Aftercare and maintenance',
    image_title: 'Aftercare and maintenance',
    content: '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
);
$types_title = 'Problem facials we provide';
$types_description = 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.';

$types = array(
    new Service(
        id: 'chemical-peeling',
        title: 'Chemical peeling',
        duration: null,
        price: null,
        content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Chemical peeling',
        image_title: 'Chemical peeling',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Book a chemical peeling',
        booking_url_title: 'Book a chemical peeling',
    ),
    new Service(
        id: 'laser-pigmentation',
        title: 'Laser',
        duration: null,
        price: null,
        content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Laser',
        image_title: 'Laser',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Book a laser treatment',
        booking_url_title: 'Book a laser treatment',
    ),
    new Service(
        id: 'ipl-pigmentation',
        title: 'IPL',
        duration: null,
        price: null,
        content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'IPL',
        image_title: 'IPL',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Book a IPL treatment',
        booking_url_title: 'Book a IPL treatment',
    ),
    new Service(
        id: 'freezetreat-pigmentation',
        title: 'FreezeTreat',
        duration: null,
        price: null,
        content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'FreezeTreat',
        image_title: 'FreezeTreat',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Book a FreezeTreat treatment',
        booking_url_title: 'Book a FreezeTreat treatment',
    )
);

$big_types = array(
    new Service(
        id: 'classic',
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
                full_price: null,
                price: '£1 995',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 procedures',
                full_price: '£3 885',
                price: '£2 595',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 procedures',
                full_price: '£6 475',
                price: '£3 995',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        id: 'skin-therapists-choice',
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
                full_price: null,
                price: '£1 995',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 procedures',
                full_price: '£3 885',
                price: '£2 595',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 procedures',
                full_price: '£6 475',
                price: '£3 995',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        id: 'peel-boost-glow',
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
                full_price: null,
                price: '£1 995',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 procedures',
                full_price: '£3 885',
                price: '£2 595',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 procedures',
                full_price: '£6 475',
                price: '£3 995',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        id: 'luxury',
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
                full_price: null,
                price: '£1 995',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 procedures',
                full_price: '£3 885',
                price: '£2 595',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 procedures',
                full_price: '£6 475',
                price: '£3 995',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    )
);
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

$skin_guide_articles = array(
    new SkinGuideArticle(
        url: 'skin-guide/category-here/subcategory-here/how-hormones-effect',
        url_title: 'How hormones effect?',
        title: 'How hormones effect?',
        subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
        problem: 'Acne',
        description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
        image_small: 'https://via.placeholder.com/426x324.webp',
        image_large: 'https://via.placeholder.com/872x456.jpg',
        image_alt: 'Hormones effect',
        image_title: 'Hormones effect',
    ),
);
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
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | <?php echo $model->title ?></title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

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
                                            <span class="p200 strikethrough mr-xs"><?php echo $procedure->full_price ?></span>
                                            <span class="h200"><?php echo $procedure->price ?></span>
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
                                        <span class="p200 strikethrough mr-xs"><?php echo $procedure->full_price ?></span>
                                        <span class="h200"><?php echo $procedure->price ?></span>
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
                                            <span class="p200 strikethrough mr-xs"><?php echo $procedure->full_price ?></span>
                                            <span class="h200"><?php echo $procedure->price ?></span>
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
                <?php if (isset($article_preparing)) { ?>
                    <section id="preparing">
                        <?php
                        $article = $article_preparing;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        ?>
                    </section>
                <?php } ?>
                <?php if (isset($article_process)) { ?>
                    <section id="process">
                        <?php
                        $article = $article_process;
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
                <?php if (isset($model->combos)) { ?>
                    <section id="combos" class="large-margin">
                        <h2 class="big l10n">Popular treatment combinations</h2>
                        <?php foreach ($model->combos as $combo) { ?>
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_combo/service_combo.php') ?>
                        <?php } ?>
                    </section>
                <?php } ?>
                <?php if (isset($treatment_areas) && isset($treatment_areas_text)) { ?>
                    <section id="treatment-areas" class="large-margin">
                        <h2 class="big l10n">Treatment areas</h2>
                        <div class="mt-xs"><?php echo $treatment_areas_text ?></div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/treatment_areas/treatment_areas.php') ?>
                    </section>

                <?php } ?>
                <?php if (isset($article_after_care)) { ?>
                    <section id="aftercare">
                        <?php
                        $article = $article_after_care;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        ?>
                    </section>
                <?php } ?>
                <?php if (isset($service_brands) && isset($service_brands_text)) { ?>
                    <section id="service-brands" class="large-margin">
                        <h2><span class="h500"><?php echo $model->title ?>&nbsp;</span><span class="h500 l10n">brands</span></h2>
                        <div class="mt-xs"><?php echo $service_brands_text ?></div>
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
                        <h2 class="big l10n">Reviews</h2>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">View all reviews</a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n">Questions & answers</h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="faq" title="View all questions">View all questions</a>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide" title="View all articles">View all articles</a>
                </section>
                <section id="specialists" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n">Our specialists</h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="View all specialists">View all specialists</a>
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