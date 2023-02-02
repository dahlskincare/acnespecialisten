<?php
class Symptom
{
    public function __construct($id, $name, $aka, $image, $content)
    {
        $this->id = $id;
        $this->name = $name;
        $this->aka = $aka;
        $this->image = $image;
        $this->content = $content;


    }

    public $id;
    public $name;
    public $aka;
    public $image;
    public $content;
}
?>