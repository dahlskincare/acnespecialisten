<?php

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
    public function __construct($image_url, $image_alt, $image_title, $title, $subtitle, $content, $url, $url_title)
    {
        $this->image_url = $image_url;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->content = $content;
        $this->url = $url;
        $this->url_title = $url_title;
    }

    public string $image_url;
    public string $image_alt;
    public string $image_title;
    public string $title;
    public string $subtitle;
    public string $content;
    public string $url;
    public string $url_title;
}
