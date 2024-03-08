<?php
class BrandCategory
{
    public function __construct(string $label, $url, $url_title, array $services)
    {
        $this->label = $label;
        $this->url = $url;
        $this->url_title = $url_title;
        $this->services = $services;
    }

    public string $label;
    public string $url;
    public string $url_title;
    public array $services;
}
