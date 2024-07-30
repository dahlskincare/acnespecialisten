<?php
class Brand
{
    public function __construct($label, $image, $image_alt, $image_title, $photo = null, $photo_alt = null, $photo_title = null, $title = null, $subtitle = null, $description = null, $url = null, $url_label = 'Läs mer', $url_title = null, $booking_url = null, $consultation_url = null, $booking_url_label = 'Boka Behandling', $consultation_url_label = 'Boka Konsultation', $booking_url_title = null, $consultation_url_title = null)
    {
        $this->label = $label;
        $this->image = $image;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->photo = $photo;
        $this->photo_alt = $photo_alt;
        $this->photo_title = $photo_title;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
        $this->url = $url;
        $this->url_label = $url_label;
        $this->url_title = $url_title;
        $this->booking_url = $booking_url;
        $this->consultation_url = $consultation_url;
        $this->booking_url_label = $booking_url_label;
        $this->consultation_url_label = $consultation_url_label;
        $this->booking_url_title = $booking_url_title;
        $this->consultation_url_title = $consultation_url_title;
    }

    public string $label;
    public string $image;
    public string $image_alt;
    public string $image_title;
    public ?string $photo;
    public ?string $photo_alt;
    public ?string $photo_title;
    public ?string $title;
    public ?string $subtitle;
    public ?string $description;
    public ?string $url;
    public ?string $url_label;
    public ?string $url_title;
    public ?string $booking_url;
    public ?string $booking_url_label;
    public ?string $booking_url_title;
    public ?string $consultation_url;
    public ?string $consultation_url_label;
    public ?string $consultation_url_title;
}
