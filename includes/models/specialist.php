<?php
class Specialist
{
    public function __construct($name, $title, $image, $image_alt, $image_title, $city = null, $description = null, $rating = null, $num_treatments = null, $since_year = null, $booking_url = null)
    {
        $this->name = $name;
        $this->title = $title;
        $this->image = $image;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->city = $city;
        $this->description = $description;
        $this->rating = $rating;
        $this->num_treatments = $num_treatments;
        $this->since_year = $since_year;
        $this->booking_url = $booking_url;
    }

    public String $name;
    public String $title;
    public String $image;
    public String $image_alt;
    public String $image_title;
    public ?String $city;
    public ?String $description;
    public ?float $rating;
    public ?int $num_treatments;
    public ?int $since_year;
    public ?String $booking_url;
}
