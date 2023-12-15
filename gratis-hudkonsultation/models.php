<?php
class ConsultationCategory
{
    function __construct($id, $name, $description, $types, $button_label = 'View problems list')
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->types = $types;
        $this->button_label = $button_label;
    }

    public string $id;
    public string $name;
    public string $description;
    public array $types;
    public string $button_label;
}

class ConsultationType
{
    function __construct($title, $image, $url, $consultation_url, $subtitle = null, $url_label = 'View problem details', $consultation_url_label = 'Get a free consultation')
    {
        $this->title = $title;
        $this->image = $image;
        $this->url = $url;
        $this->consultation_url = $consultation_url;
        $this->subtitle = $subtitle;
        $this->url_label = $url_label;
        $this->consultation_url_label = $consultation_url_label;
    }

    public string $title;
    public string $image;
    public string $url;
    public string $consultation_url;
    public ?string $subtitle;
    public string $url_label;
    public string $consultation_url_label;
}
