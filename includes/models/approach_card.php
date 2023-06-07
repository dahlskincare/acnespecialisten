<?php
class ApproachCard
{
    public function __construct($number, $title, $content, $button_label, $button_url)
    {
        $this->number = $number;
        $this->title = $title;
        $this->content = $content;
        $this->button_label = $button_label;
        $this->button_url = $button_url;
    }
    public string $number;
    public string $title;
    public string $content;
    public string $button_label;
    public string $button_url;
}
