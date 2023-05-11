<?php
class BrandCategoryInfo
{
    public function __construct($id, $name, $description, $service_categories)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->service_categories = $service_categories;
    }

    /// Used for setting the element id so that anchor targets work
    public string $id;
    public string $name;
    public string $description;
    public array $service_categories;
}


class ServiceCategoryInfo
{
    public function __construct($name, $image_small, $image_large, $description, $url, $url_label, $services_per_category)
    {
        $this->name = $name;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->description = $description;
        $this->url = $url;
        $this->url_label = $url_label;
        $this->services_per_category = $services_per_category;
    }
    public string $name;
    public string $image_small;
    public string $image_large;
    public string $description;
    public string $url;
    public string $url_label;
    public array $services_per_category;
}

class ServiceInfo
{
    public function __construct($name, $price, $booking_url, $image = null, $full_price = null, $combo_items = null)
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
    public ?string $image;
    public ?string $full_price;
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
