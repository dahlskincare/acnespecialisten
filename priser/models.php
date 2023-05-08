<?php
class TreatmentInfo
{
    public function __construct($image_small, $image_large, $title, $description, $url, $url_label, $services)
    {
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->title = $title;
        $this->description = $description;
        $this->url = $url;
        $this->url_label = $url_label;
        $this->services = $services;
    }

    public string $image_small;
    public string $image_large;
    public string $title;
    public string $description;
    public string $url;
    public string $url_label;
    public array $services;
}

class ServiceInfo
{
    public function __construct($name, $price, $booking_url, $full_price = null, $image = null, $combo_items = null)
    {
        $this->name = $name;
        $this->price = $price;
        $this->booking_url = $booking_url;
        $this->full_price = $full_price;
        $this->image = $image;
        $this->combo_items = $combo_items;
    }
    public string $name;
    public string $price;
    public string $booking_url;
    public ?string $full_price;
    public ?string $image;
    public ?array $combo_items;
}

class ServiceInfoComboItem
{
    public function __construct($name, $price, $full_price = null)
    {
        $this->name = $name;
        $this->price = $price;
        $this->full_price = $full_price;
    }
    public string $name;
    public string $price;
    public ?string $full_price;
}
