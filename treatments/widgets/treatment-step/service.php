<?php
class Service
{
    public function __construct($title, $image_small, $image_large, $content, $consultation_url, $booking_url, $service_url)
    {
        $this->title = $title;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->content = $content;
        $this->consultation_url = $consultation_url;
        $this->booking_url = $booking_url;
        $this->service_url = $service_url;
    }

    public string $title;
    public string $image_small;
    public string $image_large;
    public string $content;
    public string $consultation_url;
    public string $booking_url;
    public string $service_url;
}
