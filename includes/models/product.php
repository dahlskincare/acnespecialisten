<?php
class Product
{
    public function __construct(
        $url,
        $url_label,
        $url_title,
        $price,
        $content,
        $image_small = null,
        $image_large = null,
        $image_alt = null,
        $image_title = null,
    ) {
        $this->url = $url;
        $this->url_label = $url_label;
        $this->url_title = $url_title;
        $this->price = $price;
        $this->content = $content;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
    }

    public string $url;
    public string $url_label;
    public string $url_title;
    public string $price;
    public string $content;
    public ?string $image_small;
    public ?string $image_large;
    public ?string $image_alt;
    public ?string $image_title;
}
