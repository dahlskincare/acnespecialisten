<?php
class TreatmentArea
{
    public function __construct($items, $image_small = null, $image_large = null, $image_alt = null, $image_title = null, $title = null, $description = null, $all = null)
    {
        $this->items = $items;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->title = $title;
        $this->description = $description;
        $this->all = $all;
    }
    public ?string $image_small;
    public ?string $image_large;
    public ?string $image_alt;
    public ?string $image_title;
    public ?string $title;
    public ?string $description;
    public array $items;
    public ?TreatmentAreaItem $all;
}

class TreatmentAreaItem
{
    public function __construct($image, $image_alt, $image_title, $title, $duration, $price, $url, $url_label, $url_title)
    {
        $this->image = $image;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->title = $title;
        $this->duration = $duration;
        $this->price = $price;
        $this->url = $url;
        $this->url_label = $url_label;
        $this->url_title = $url_title;
    }
    public ?string $image;
    public ?string $image_alt;
    public ?string $image_title;
    public string $title;
    public string $duration;
    public string $price;
    public string $url;
    public string $url_label;
    public string $url_title;
}

class TreatmentStep
{
    public function __construct($title, $content, $url, $url_label, $url_title)
    {
        $this->title = $title;
        $this->content = $content;
        $this->url = $url;
        $this->url_label = $url_label;
        $this->url_title = $url_title;
    }

    public string $prefix;
    public string $title;
    public string $content;
    public string $url;
    public string $url_label;
    public string $url_title;
}
