<?php
class Brand
{
    public function __construct($label, $image, $photo = null, $title = null, $subtitle = null, $description = null, $url = null, $booking_url = null, $consultation_url = null)
    {
        $this->label = $label;
        $this->image = $image;
        $this->photo = $photo;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
        $this->url = $url;
        $this->booking_url = $booking_url;
        $this->consultation_url = $consultation_url;
    }

    public string $label;
    public string $image;
    public ?string $photo;
    public ?string $title;
    public ?string $subtitle;
    public ?string $description;
    public ?string $url;
    public ?string $booking_url;
    public ?string $consultation_url;
}
