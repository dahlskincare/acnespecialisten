<?php
class ApproachCard
{
    public function __construct($number, $title, $content, $button_label, $button_url, $button_url_title, $button_url_target = '_self')
    {
        $this->number = $number;
        $this->title = $title;
        $this->content = $content;
        $this->button_label = $button_label;
        $this->button_url = $button_url;
        $this->button_url_title = $button_url_title;
        $this->button_url_target = $button_url_target;
    }
    public string $number;
    public string $title;
    public string $content;
    public string $button_label;
    public string $button_url;
    public string $button_url_title;
    public string $button_url_target;
}
