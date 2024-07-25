<?php
class RichProduct
{
    public function __construct($name, $image, $description, $price, $ratingCount, $ratingValue, $currency = 'SEK', $brand = 'Acnespecialisten', $brandLogo = 'https://acnespecialisten-staging.minoch.com/images/logo-green.svg', $review = null)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
        $this->ratingCount = $ratingCount;
        $this->ratingValue = $ratingValue;
        $this->currency = $currency;
        $this->brand = $brand;
        $this->brandLogo = $brandLogo;
        $this->review = $review;
    }

    public string $name;
    public string $image;
    public string $description;
    public float $price;
    public int $ratingCount;
    public float $ratingValue;
    public string $currency;
    public string $brand;
    public string $brandLogo;
    public $review;
}


class RichReview
{
    public function __construct($name, $rating, $datePublished)
    {
        $this->name = $name;
        $this->rating = $rating;
        $this->datePublished = $datePublished;
    }

    public string $name;
    public string $rating;
    public string $datePublished;
}

class RichArticle
{
    public function __construct($headline, $author, $date_published, $image, $description)
    {
        $this->headline = $headline;
        $this->author = $author;
        $this->date_published = $date_published;
        $this->image = $image;
        $this->description = $description;
    }
    public string $headline;
    public string $author;
    public string $date_published;
    public string $image;
    public string $description;
}
