<?php
class Link
{
    public function __construct($url, $label, $title)
    {
        $this->url = $url;
        $this->label = $label;
        $this->title = $title;
    }

    public ?string $url;
    public string $label;
    public ?string $title;
}
