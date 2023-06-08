<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include_once($root . '/includes/models/accordion_item.php');
include_once($root . '/includes/models/approach_card.php');
include_once($root . '/includes/models/article.php');
include_once($root . '/includes/models/based_type.php');
include_once($root . '/includes/models/brand.php');
include_once($root . '/includes/models/green_banner_content.php');
include_once($root . '/includes/models/path_segment.php');
include_once($root . '/includes/models/procedure.php');
include_once($root . '/includes/models/product.php');
include_once($root . '/includes/models/result.php');
include_once($root . '/includes/models/salon.php');
include_once($root . '/includes/models/service.php');
include_once($root . '/includes/models/skin_guide.php');
include_once($root . '/includes/models/specialist.php');
include_once($root . '/includes/models/treatment.php');


class Question
{
    public function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;
    }
    public $title;
    public $text;
}



class GlossaryItem
{
    public function __construct($title, $description, $description_extended, $image_small = null, $image_large = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->description_extended = $description_extended;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
    }

    public string $title;
    public string $description;
    public string $description_extended;
    public ?string $image_small;
    public ?string $image_large;
}

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
