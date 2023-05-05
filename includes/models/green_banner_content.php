<?php

class GreenBannerContent
{
    public function __construct($title, $description, $description_extended, $button_url, $button_label)
    {
        $this->title = $title;
        $this->description = $description;
        $this->description_extended = $description_extended;
        $this->button_url = $button_url;
        $this->button_label = $button_label;
    }

    public $title;
    public $description;
    public $description_extended;
    public $button_url;
    public $button_label;
}
