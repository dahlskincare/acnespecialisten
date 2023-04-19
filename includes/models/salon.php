<?php
class Salon
{
    public function __construct($title, $image_small, $image_large, $address, $description, $opening_hours_weekdays, $opening_hours_weekends, $email, $phone, $coordinates)
    {
        $this->title = $title;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->address = $address;
        $this->description = $description;
        $this->opening_hours_weekdays = $opening_hours_weekdays;
        $this->opening_hours_weekends = $opening_hours_weekends;
        $this->email = $email;
        $this->phone = $phone;
        $this->coordinates = $coordinates;
    }
    public string $title;
    public string $image_small;
    public string $image_large;
    public string $address;
    public string $description;
    public string $opening_hours_weekdays;
    public string $opening_hours_weekends;
    public string $email;
    public string $phone;
    public string $coordinates;
}
