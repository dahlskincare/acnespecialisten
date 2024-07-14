<?php

class BasedTypeCategory
{
    public function __construct($title, $content, $types)
    {
        $this->title = $title;
        $this->content = $content;
        $this->types = $types;
    }

    public string $title;
    public string $content;
    public array $types;
}

class BasedType
{
    public function __construct($image_url, $image_alt, $image_title, $title, $subtitle, $url = null, $url_title = null)
    {
        $this->image_url = $image_url;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->url = $url;
        $this->url_title = $url_title;
    }

    public function image_class()
    {
        return strpos($this->image_url, '.svg') !== false ? 'image is-icon' : 'image';
    }

    public string $image_url;
    public string $image_alt;
    public string $image_title;
    public string $title;
    public string $subtitle;
    public ?string $url;
    public ?string $url_title;
}
