<?php
class Symptom
{
    public function __construct($name, $aka, $image, $content)
    {
        $this->name = $name;
        $this->aka = $aka;
        $this->image = $image;
        $this->content = $content;


    }

    public $name;
    public $aka;
    public $image;
    public $content;
}
?>