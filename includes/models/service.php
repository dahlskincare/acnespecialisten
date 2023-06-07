<?php
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
        $image_alt,
        $image_title,
        $consultation_url,
        $consultation_url_title,
        $booking_url,
        $booking_url_title,
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
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->consultation_url = $consultation_url;
        $this->consultation_url_title = $consultation_url_title;
        $this->booking_url = $booking_url;
        $this->booking_url_title = $booking_url_title;
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
    public string $image_alt;
    public string $image_title;
    public string $content;
    public ?string $consultation_url;
    public ?string $consultation_url_title;
    public ?string $booking_url;
    public ?string $booking_url_title;
    public ?array $icons;
    public ?string $short_title;
    public array $procedures;
    public array $combos;
}

class ServiceCombo
{
    public function __construct($image_small, $image_large, $image_alt, $image_title, $duration, $price, $full_price, $booking_url, $booking_url_title, $items)
    {
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->duration = $duration;
        $this->price = $price;
        $this->full_price = $full_price;
        $this->booking_url = $booking_url;
        $this->booking_url_title = $booking_url_title;
        $this->items = $items;
    }

    public string $image_small;
    public string $image_large;
    public string $image_alt;
    public string $image_title;
    public string $duration;
    public string $price;
    public string $full_price;
    public string $booking_url;
    public string $booking_url_title;
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
