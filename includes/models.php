<?php
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
    public function __construct($name, $title, $image_small, $image_large)
    {
        $this->name = $name;
        $this->title = $title;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
    }

    public $name;
    public $title;
    public $image_small;
    public $image_large;
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
    public function __construct($image_small, $image_large, $title, $description, $items)
    {
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->title = $title;
        $this->description = $description;
        $this->items = $items;
    }
    public string $image_small;
    public string $image_large;
    public string $title;
    public string $description;
    public array $items;
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
    public string $image;
    public string $title;
    public string $duration;
    public string $price;
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

class SkinGuideArticle
{
    public function __construct($title, $category, $url, $image_small, $image_large)
    {
        $this->title = $title;
        $this->category = $category;
        $this->url = $url;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
    }

    public $title;
    public $category;
    public $url;
    public $image_small;
    public $image_large;
}
