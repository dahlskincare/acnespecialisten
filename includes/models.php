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
            $this->name = substr($this->format_name($name), 0, strpos($name, '.'));
            $this->url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        } else {
            $this->name = $this->format_name($name);
            $this->url = $name . '.php';
        }
        if ($url != null) {
            $this->url = $url;
        }
    }

    public $name;
    public $url;

    function format_name(string $s)
    {
        return ucfirst(str_replace('-', ' ', $s));
    }
}
class Service
{
    public function __construct(
        $id,
        $title,
        $duration,
        $price,
        $content,
        $image_small,
        $image_large,
        $consultation_url,
        $booking_url
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->duration = $duration;
        $this->price = $price;
        $this->content = $content;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->consultation_url = $consultation_url;
        $this->booking_url = $booking_url;
    }

    public string $id;
    public string $title;
    public string $duration;
    public string $price;
    public string $image_small;
    public string $image_large;
    public string $content;
    public string $consultation_url;
    public string $booking_url;
}
