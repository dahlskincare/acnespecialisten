<?php
class Symptom
{
    public function __construct($id, $name, $aka, $image, $content, $url)
    {
        $this->id = $id;
        $this->name = $name;
        $this->aka = $aka;
        $this->image = $image;
        $this->content = $content;
        $this->url = $url;
    }

    public $id;
    public $name;
    public $aka;
    public $image;
    public $content;
    public $url;
}
