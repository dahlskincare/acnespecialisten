<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root . '/includes/models/accordion_item.php');
require_once($root . '/includes/models/approach_card.php');
require_once($root . '/includes/models/based_type.php');
require_once($root . '/includes/models/brand.php');
require_once($root . '/includes/models/green_banner_content.php');
require_once($root . '/includes/models/path_segment.php');
require_once($root . '/includes/models/procedure.php');
require_once($root . '/includes/models/salon.php');
require_once($root . '/includes/models/service.php');
require_once($root . '/includes/models/skin_guide.php');
require_once($root . '/includes/models/specialist.php');

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
    public function __construct($duration, $procedures = array(), $product = null, $employee = null, $visits = array())
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
    public ?ResultProduct $product;
    public ?ResultEmployee $employee;

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
