<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root . '/includes/models/skin_guide.php');

class ApproachCard
{
    public function __construct($number, $title, $content, $button_label, $button_url)
    {
        $this->number = $number;
        $this->title = $title;
        $this->content = $content;
        $this->button_label = $button_label;
        $this->button_url = $button_url;
    }
    public string $number;
    public string $title;
    public string $content;
    public string $button_label;
    public string $button_url;
}

class AccordionItem
{
    public function __construct($label, $image_small, $image_large, $url, $show_on_large, $show_on_small)
    {
        $this->label = $label;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->url = $url;
        $this->show_on_large = $show_on_large;
        $this->show_on_small = $show_on_small;
    }

    public $label;
    public $image_small;
    public $image_large;
    public $url;
    public $show_on_large;
    public $show_on_small;
}

class BasedTypeCategory
{
    public function __construct($id, $title, $content, $types)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->types = $types;
    }

    public string $id;
    public string $title;
    public string $content;
    public array $types;
}

class BasedType
{
    public function __construct($id, $image_url, $title, $subtitle, $content)
    {
        $this->id = $id;
        $this->image_url = $image_url;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->content = $content;
    }

    public string $id;
    public string $image_url;
    public string $title;
    public string $subtitle;
    public string $content;
}

class Specialist
{
    public function __construct($name, $title, $image_small, $image_large, $city = null, $description = null, $rating = null, $num_treatments = null, $since_year = null)
    {
        $this->name = $name;
        $this->title = $title;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->city = $city;
        $this->description = $description;
        $this->rating = $rating;
        $this->num_treatments = $num_treatments;
        $this->since_year = $since_year;
    }

    public String $name;
    public String $title;
    public String $image_small;
    public String $image_large;
    public ?String $city;
    public ?String $description;
    public ?float $rating;
    public ?int $num_treatments;
    public ?int $since_year;
}
class PathSegment
{
    public function __construct($name, $url = null)
    {
        $this->name = $this->format_name($name);
        if ($url == null) {
            $parsed_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $this->url = substr($parsed_url, 0, strpos($parsed_url, $name) + strlen($name));
        } else {
            $this->url = $url;
        }
    }

    public string $name;
    public string $url;

    function format_name(string $s)
    {
        return ucfirst(str_replace('-', ' ', $s));
    }
}

class Brand
{
    public function __construct($label, $image)
    {
        $this->label = $label;
        $this->image = $image;
    }

    public string $label;
    public string $image;
}


class Procedure
{
    public function __construct($label, $full_price, $price, $booking_url = null)
    {
        $this->label = $label;
        $this->full_price = $full_price;
        $this->price = $price;
        $this->booking_url = $booking_url;
    }

    public string $label;
    public ?string $full_price;
    public string $price;
    public ?string $booking_url;
}

class Service
{
    public function __construct(
        $id,
        $title,
        $duration,
        $price,
        $content,
        $image_small,
        $image_large,
        $consultation_url,
        $booking_url,
        $icons = array(),
        $short_title = null,
        $procedures = array(),
        $combos = array(),
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->duration = $duration;
        $this->price = $price;
        $this->content = $content;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->consultation_url = $consultation_url;
        $this->booking_url = $booking_url;
        $this->icons = $icons;
        $this->short_title = $short_title;
        $this->procedures = $procedures;
        $this->combos = $combos;
    }

    public string $id;
    public string $title;
    public ?string $duration;
    public ?string $price;
    public string $image_small;
    public string $image_large;
    public string $content;
    public ?string $consultation_url;
    public ?string $booking_url;
    public ?array $icons;
    public ?string $short_title;
    public array $procedures;
    public array $combos;
}

class ServiceCombo
{
    public function __construct($image_small, $image_large, $duration, $price, $full_price, $booking_url, $items)
    {
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->duration = $duration;
        $this->price = $price;
        $this->full_price = $full_price;
        $this->booking_url = $booking_url;
        $this->items = $items;
    }

    public string $image_small;
    public string $image_large;
    public string $duration;
    public string $price;
    public string $full_price;
    public string $booking_url;
    public array $items;
}

class ServiceComboItem
{
    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public string $title;
    public string $price;
}

class Product
{
    public function __construct(
        $id,
        $price,
        $content,
        $image_small,
        $image_large
    ) {
        $this->id = $id;
        $this->price = $price;
        $this->content = $content;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
    }

    public string $id;
    public string $price;
    public string $content;
    public string $image_small;
    public string $image_large;
}


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

class TreatmentArea
{
    public function __construct($items, $image_small = null, $image_large = null, $title = null, $description = null, $all = null)
    {
        $this->items = $items;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->title = $title;
        $this->description = $description;
        $this->all = $all;
    }
    public ?string $image_small;
    public ?string $image_large;
    public ?string $title;
    public ?string $description;
    public array $items;
    public ?TreatmentAreaItem $all;
}

class TreatmentAreaItem
{
    public function __construct($image, $title, $duration, $price)
    {
        $this->image = $image;
        $this->title = $title;
        $this->duration = $duration;
        $this->price = $price;
    }
    public ?string $image;
    public string $title;
    public string $duration;
    public string $price;
}

class TreatmentStep
{
    public function __construct($title, $content, $url, $url_label)
    {
        $this->title = $title;
        $this->content = $content;
        $this->url = $url;
        $this->url_label = $url_label;
    }

    public $prefix;
    public $title;
    public $content;
    public $url;
    public $url_label;
}

class Article
{
    public function __construct($id, $title, $image_small, $image_large, $content, $tags = array())
    {
        $this->id = $id;
        $this->title = $title;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->content = $content;
        $this->tags = $tags;
    }
    public string $id;
    public string $title;
    public string $image_small;
    public string $image_large;
    public string $content;
    public array $tags;
}

class ArticleTag
{
    public function __construct($icon, $label)
    {
        $this->icon = $icon;
        $this->label = $label;
    }
    public $icon;
    public $label;
}

class ResultCategory
{
    /**
     * @param ResultCustomer[] $results
     */
    public function __construct($id, $title, $description_1, $description_2)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description_1 = $description_1;
        $this->description_2 = $description_2;
    }

    public string $id;
    public string $title;
    public string $description_1;
    public string $description_2;
}

class ResultCustomer
{
    /**
     * @param ResultTreatment $treatment
     * @param ResultImages $before_images
     * @param ResultImages $after_images
     */
    public function __construct($id, $image_before_small, $image_after_small, $image_before_large, $image_after_large, $age, $gender, $problem, $type, $treatment, $before_images = null, $after_images = null)
    {
        $this->id = $id;
        $this->slider_image_before_small = $image_before_small;
        $this->slider_image_after_small = $image_after_small;
        $this->slider_image_before_large = $image_before_large;
        $this->slider_image_after_large = $image_after_large;
        $this->age = $age;
        $this->gender = $gender;
        $this->problem = $problem;
        $this->type = $type;
        $this->treatment = $treatment;
        $this->before_images = $before_images;
        $this->after_images = $after_images;
    }

    public int $id;
    public string $slider_image_before_small;
    public string $slider_image_after_small;
    public string $slider_image_before_large;
    public string $slider_image_after_large;
    public int $age;
    public string $gender;
    /**
     * The problem type: "acne", "acne scars" etc
     */
    public string $problem;
    /**
     * Type/severity: light, moderate, severe
     */
    public string $type;
    public ResultTreatment $treatment;

    public ?ResultImages $before_images;
    public ?ResultImages $after_images;
}

class ResultTreatment
{
    /**
     * @param ResultProcedure[] $procedures
     * @param ResultProduct $product
     * @param ResultEmployee $employee
     * @param ResultVisit[] $visits
     */
    public function __construct($duration, $procedures, $product, $employee, $visits = array())
    {
        $this->duration = $duration;
        $this->procedures = $procedures;
        $this->product = $product;
        $this->employee = $employee;
        $this->visits = $visits;
    }
    public int $id;
    public string $duration;
    /** 
     * @var ResultProcedure[] 
     * */
    public array $procedures;
    public ResultProduct $product;
    public ResultEmployee $employee;

    /**
     * @var ResultVisit[]
     */
    public array $visits;
}

class ResultProcedure
{
    public function __construct($image, $name, $count)
    {
        $this->image = $image;
        $this->name = $name;
        $this->count = $count;
    }
    public string $image;
    public string $name;
    public string $count;
}

class ResultProduct
{
    public function __construct($image, $name)
    {
        $this->image = $image;
        $this->name = $name;
    }
    public string $image;
    public string $name;
}

class ResultEmployee
{
    public function __construct($image, $name)
    {
        $this->image = $image;
        $this->name = $name;
    }
    public string $image;
    public string $name;
}

class ResultVisit
{
    /**
     * @var ResultImages $images
     */
    public function __construct($id, $date, $images, $title, $description, $read_more_url, $read_more_label)
    {
        $this->id = $id;
        $this->date = $date;
        $this->images = $images;
        $this->title = $title;
        $this->description = $description;
        $this->read_more_url = $read_more_url;
        $this->read_more_label = $read_more_label;
    }
    public int $id;
    public string $date;
    public ResultImages $images;
    public ?string $title;
    public ?string $description;
    public ?string $read_more_url;
    public ?string $read_more_label;
}

class ResultImages
{
    public function __construct($image_left_small, $image_right_small, $image_left_large, $image_right_large)
    {
        $this->image_left_small = $image_left_small;
        $this->image_right_small = $image_right_small;
        $this->image_left_large = $image_left_large;
        $this->image_right_large = $image_right_large;
    }
    public string $image_left_small;
    public string $image_right_small;
    public string $image_left_large;
    public string $image_right_large;
}

class GlossaryItem
{
    public function __construct($title, $description, $description_extended, $image_small = null, $image_large = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->description_extended = $description_extended;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
    }

    public string $title;
    public string $description;
    public string $description_extended;
    public ?string $image_small;
    public ?string $image_large;
}

class Review
{
    public function __construct($stars, $brand, $logo_url, $title, $text, $signature)
    {
        $this->stars = $stars;
        $this->brand = $brand;
        $this->logo_url = $logo_url;
        $this->title = $title;
        $this->text = $text;
        $this->signature = $signature;
    }

    public int $stars;
    public string $brand;
    public string $logo_url;
    public string $title;
    public string $text;
    public string $signature;
}
