<?php
class RichProduct
{
    public function __construct($name, $image, $description, $sku)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->sku = $sku;
    }

    public string $name;
    public string $image;
    public string $description;
    public string $sku;
}


class RichReview
{
    public function __construct($name, $body, $rating, $service_name)
    {
        $this->name = $name;
        $this->body = $body;
        $this->rating = $rating;
        $this->service_name = $service_name;
    }


    public string $name;
    public string $body;
    public int $rating;
    public string $service_name;
}

class RichArticle
{
    public function __construct($headline, $description, $image, $author, $date_published)
    {
        $this->headline = $headline;
        $this->description = $description;
        $this->image = $image;
        $this->author = $author;
        $this->date_published = $date_published;
    }


    public string $headline;
    public string $description;
    public string $image;
    public string $author;
    public string $date_published;
}
