<?php
class AccordionItem
{
    public function __construct($label, $image_small, $image_large, $url, $show_on_large, $show_on_small)
    {
        $this->label = $label;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->url = $url;
        $this->show_on_large = $show_on_large;
        $this->show_on_small = $show_on_small;
    }

    public $label;
    public $image_small;
    public $image_large;
    public $url;
    public $show_on_large;
    public $show_on_small;
}

class Specialist
{
    public function __construct($name, $title, $image_small, $image_large)
    {
        $this->name = $name;
        $this->title = $title;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
    }

    public $name;
    public $title;
    public $image_small;
    public $image_large;
}
class PathSegment
{
    public function __construct($name, $url = null)
    {
        if (strpos($name, '.') > 0) {
            $this->name = substr($name, 0, strpos($name, '.'));
            $this->url = $name;
        } else {
            $this->name = $name;
            $this->url = $name . '.php';
        }
        if ($url != null) {
            $this->url = $url;
        }
    }

    public $name;
    public $url;
}

?>