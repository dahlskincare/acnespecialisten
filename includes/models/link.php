<?php
class Link
{
    public function __construct($label, $url = null, $title = null)
    {
        $this->label = $label;
        $this->url = $url;
        $this->title = $title;
    }

    public string $label;
    public ?string $url;
    public ?string $title;
}
