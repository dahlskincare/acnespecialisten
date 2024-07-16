<?php
class Service
{
    public function __construct(
        $title,
        $duration,
        $price,
        $content,
        $image_small,
        $image_large,
        $image_alt,
        $image_title,
        $consultation_url = null,
        $consultation_url_label = null,
        $consultation_url_title = null,
        $booking_url = null,
        $booking_url_label = null,
        $booking_url_title = null,
        $url = null,
        $url_label = 'Läs mer om behandlingen',
        $url_title = 'Läs mer om behandlingen',
        $icons = array(),
        $short_title = null,
        $procedures = array(),
    ) {
        $this->title = $title;
        $this->duration = $duration;
        $this->price = $price;
        $this->content = $content;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->consultation_url = $consultation_url;
        $this->consultation_url_label = $consultation_url_label;
        $this->consultation_url_title = $consultation_url_title;
        $this->booking_url = $booking_url;
        $this->booking_url_label = $booking_url_label;
        $this->booking_url_title = $booking_url_title;
        $this->url = $url;
        $this->url_label = $url_label;
        $this->url_title = $url_title;
        $this->icons = $icons;
        $this->short_title = $short_title;
        $this->procedures = $procedures;
    }

    public string $title;
    public ?string $duration;
    public ?string $price;
    public ?string $image_small;
    public ?string $image_large;
    public ?string $image_alt;
    public ?string $image_title;
    public string $content;
    public ?string $consultation_url;
    public ?string $consultation_url_label;
    public ?string $consultation_url_title;
    public ?string $booking_url;
    public ?string $booking_url_label;
    public ?string $booking_url_title;
    public ?string $url;
    public string $url_label;
    public string $url_title;
    public ?array $icons;
    public ?string $short_title;
    public array $procedures;
}

class ServiceCombo
{
    public function __construct($name, $image_small, $image_large, $image_alt, $image_title, $duration, $price, $booking_url, $booking_url_label, $booking_url_title, $items)
    {
        $this->name = $name;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->duration = $duration;
        $this->price = $price;
        $this->booking_url = $booking_url;
        $this->booking_url_label = $booking_url_label;
        $this->booking_url_title = $booking_url_title;
        $this->items = $items;
    }
    public string $name;
    public ?string $image_small;
    public ?string $image_large;
    public ?string $image_alt;
    public ?string $image_title;
    public string $duration;
    public string $price;
    public string $booking_url;
    public string $booking_url_label;
    public string $booking_url_title;
    public array $items;
}

class ServiceComboItem
{
    public function __construct($title, $price, $savings = null)
    {
        $this->title = $title;
        $this->price = $price;
        $this->savings = $savings;
    }

    public string $title;
    public string $price;
    public ?string $savings;
}
