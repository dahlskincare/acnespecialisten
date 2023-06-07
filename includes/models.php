<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include_once($root . '/includes/models/accordion_item.php');
include_once($root . '/includes/models/approach_card.php');
include_once($root . '/includes/models/based_type.php');
include_once($root . '/includes/models/brand.php');
include_once($root . '/includes/models/green_banner_content.php');
include_once($root . '/includes/models/path_segment.php');
include_once($root . '/includes/models/procedure.php');
include_once($root . '/includes/models/product.php');
include_once($root . '/includes/models/result.php');
include_once($root . '/includes/models/salon.php');
include_once($root . '/includes/models/service.php');
include_once($root . '/includes/models/skin_guide.php');
include_once($root . '/includes/models/specialist.php');


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
