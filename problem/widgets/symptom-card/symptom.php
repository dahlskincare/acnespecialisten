<?php
class Symptom
{
    public function __construct($url, $name, $aka, $image, $content)
    {
        $this->url = $url;
        $this->name = $name;
        $this->aka = $aka;
        $this->image = $image;
        $this->content = $content;
    }

    public $url;
    public $name;
    public $aka;
    public $image;
    public $content;
}
