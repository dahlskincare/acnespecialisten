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
    public function __construct($image_url, $title, $subtitle, $content, $url)
    {
        $this->image_url = $image_url;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->content = $content;
        $this->url = $url;
    }

    public string $image_url;
    public string $title;
    public string $subtitle;
    public string $content;
    public string $url;
}
