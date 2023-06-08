<?php
class Review
{
    public function __construct($stars, $brand, $logo_url, $title, $text, $signature)
    {
        $this->stars = $stars;
        $this->brand = $brand;
        $this->logo_url = $logo_url;
        $this->title = $title;
        $this->text = $text;
        $this->signature = $signature;
    }

    public int $stars;
    public string $brand;
    public string $logo_url;
    public string $title;
    public string $text;
    public string $signature;
}
