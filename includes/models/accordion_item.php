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

    public string $label;
    public string $image_small;
    public string $image_large;
    public string $image_alt;
    public string $image_title;
    public string $url;
    public string $url_title;
    public bool $show_on_large;
    public bool $show_on_small;
}
