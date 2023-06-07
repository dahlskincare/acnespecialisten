<?php
class AccordionItem
{
    public function __construct($label, $image_small, $image_large, $image_title, $image_alt, $url, $url_title, $show_on_large, $show_on_small)
    {
        $this->label = $label;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->image_title = $image_title;
        $this->image_alt = $image_alt;
        $this->url = $url;
        $this->url_title = $url_title;
        $this->show_on_large = $show_on_large;
        $this->show_on_small = $show_on_small;
    }

    public String $label;
    public String $image_small;
    public String $image_large;
    public String $image_alt;
    public String $image_title;
    public String $url;
    public String $url_title;
    public bool $show_on_large;
    public bool $show_on_small;
}
