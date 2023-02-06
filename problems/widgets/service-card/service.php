<?php
class Service
{
    public function __construct(
        $id,
        $title,
        $duration,
        $price,
        $content,
        $image_small,
        $image_large,
        $consultation_url,
        $booking_url
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->duration = $duration;
        $this->price = $price;
        $this->content = $content;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->consultation_url = $consultation_url;
        $this->booking_url = $booking_url;
    }

    public string $id;
    public string $title;
    public string $duration;
    public string $price;
    public string $image_small;
    public string $image_large;
    public string $content;
    public string $consultation_url;
    public string $booking_url;
}
