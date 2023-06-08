<?php
class Procedure
{
    public function __construct($label, $full_price, $price, $booking_url = null, $booking_url_label = 'Boka', $booking_url_title = 'Boka')
    {
        $this->label = $label;
        $this->full_price = $full_price;
        $this->price = $price;
        $this->booking_url = $booking_url;
        $this->booking_url_label = $booking_url_label;
        $this->booking_url_title = $booking_url_title;
    }

    public string $label;
    public ?string $full_price;
    public string $price;
    public ?string $booking_url;
    public ?string $booking_url_label;
    public ?string $booking_url_title;
}
