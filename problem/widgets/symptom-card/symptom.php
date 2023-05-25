<?php
class Symptom
{
    public function __construct($name, $image, $content, $url = null, $aka = null, $image_title = null)
    {
        $this->name = $name;
        $this->image = $image;
        $this->content = $content;
        $this->url = $url;
        $this->aka = $aka;
        $this->image_title = $image_title;
    }

    public string $name;
    public string $image;
    public string $content;
    public ?string $url;
    public ?string $aka;
    public ?string $image_title;
}
