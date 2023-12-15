<?php
class Symptom
{
    public function __construct($name, $image, $content, $url = null, $url_title = "Läs mer", $url_label = "Läs mer", $aka = null, $image_alt = null, $image_title = null)
    {
        $this->name = $name;
        $this->image = $image;
        $this->content = $content;
        $this->url = $url;
        $this->url_title = $url_title;
        $this->url_label = $url_label;
        $this->aka = $aka;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
    }

    public string $name;
    public string $image;
    public string $content;
    public ?string $url;
    public ?string $url_label;
    public ?string $url_title;
    public ?string $aka;
    public ?string $image_alt;
    public ?string $image_title;
}
