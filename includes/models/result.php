<?php
class ResultCategory
{
    /**
     * @param ResultCustomer[] $results
     */
    public function __construct($id, $title, $description_1, $description_2)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description_1 = $description_1;
        $this->description_2 = $description_2;
    }

    public string $id;
    public string $title;
    public string $description_1;
    public string $description_2;
}

class ResultCustomer
{
    /**
     * @param ResultTreatment $treatment
     * @param ResultImages $before_images
     * @param ResultImages $after_images
     */
    public function __construct($image_before_small, $image_after_small, $image_before_large, $image_after_large, $image_before_alt, $image_before_title, $image_after_alt, $image_after_title, $treatment, $url = null, $url_title = null, $age = null, $gender = null, $problem = null, $type = null, $before_images = null, $after_images = null)
    {
        $this->slider_image_before_small = $image_before_small;
        $this->slider_image_after_small = $image_after_small;
        $this->slider_image_before_large = $image_before_large;
        $this->slider_image_after_large = $image_after_large;
        $this->slider_image_before_alt = $image_before_alt;
        $this->slider_image_before_title = $image_before_title;
        $this->slider_image_after_alt = $image_after_alt;
        $this->slider_image_after_title = $image_after_title;
        $this->url = $url;
        $this->url_title = $url_title;
        $this->age = $age;
        $this->gender = $gender;
        $this->problem = $problem;
        $this->type = $type;
        $this->treatment = $treatment;
        $this->before_images = $before_images;
        $this->after_images = $after_images;
    }

    public string $slider_image_before_small;
    public string $slider_image_after_small;
    public string $slider_image_before_large;
    public string $slider_image_after_large;
    public string $slider_image_before_alt;
    public string $slider_image_before_title;
    public string $slider_image_after_alt;
    public string $slider_image_after_title;
    public ?string $url;
    public ?string $url_title;
    public ?int $age;
    public ?string $gender;
    /**
     * The problem type: "acne", "acne scars" etc
     */
    public ?string $problem;
    /**
     * Type/severity: light, moderate, severe
     */
    public ?string $type;
    public ResultTreatment $treatment;

    public ?ResultImages $before_images;
    public ?ResultImages $after_images;
}

class ResultTreatment
{
    /**
     * @param ResultProcedure[] $procedures
     * @param ResultProduct $product
     * @param ResultEmployee $employee
     * @param ResultVisit[] $visits
     */
    public function __construct($duration, $procedures = array(), $product = null, $employee = null, $visits = array())
    {
        $this->duration = $duration;
        $this->procedures = $procedures;
        $this->product = $product;
        $this->employee = $employee;
        $this->visits = $visits;
    }
    public int $id;
    public string $duration;
    /**
     * @var ResultProcedure[]
     * */
    public array $procedures;
    public ?ResultProduct $product;
    public ?ResultEmployee $employee;

    /**
     * @var ResultVisit[]
     */
    public array $visits;
}

class ResultProcedure
{
    public function __construct($image, $name, $count)
    {
        $this->image = $image;
        $this->name = $name;
        $this->count = $count;
    }
    public string $image;
    public string $name;
    public string $count;
}

class ResultProduct
{
    public function __construct($image, $name)
    {
        $this->image = $image;
        $this->name = $name;
    }
    public string $image;
    public string $name;
}

class ResultEmployee
{
    public function __construct($image, $name)
    {
        $this->image = $image;
        $this->name = $name;
    }
    public string $image;
    public string $name;
}

class ResultVisit
{
    /**
     * @var ResultImages $images
     */
    public function __construct($id, $date, $images, $title, $description, $read_more_url, $read_more_label)
    {
        $this->id = $id;
        $this->date = $date;
        $this->images = $images;
        $this->title = $title;
        $this->description = $description;
        $this->read_more_url = $read_more_url;
        $this->read_more_label = $read_more_label;
    }
    public int $id;
    public string $date;
    public ResultImages $images;
    public ?string $title;
    public ?string $description;
    public ?string $read_more_url;
    public ?string $read_more_label;
}

class ResultImages
{
    public function __construct($image_left_small, $image_right_small, $image_left_large, $image_right_large)
    {
        $this->image_left_small = $image_left_small;
        $this->image_right_small = $image_right_small;
        $this->image_left_large = $image_left_large;
        $this->image_right_large = $image_right_large;
    }
    public string $image_left_small;
    public string $image_right_small;
    public string $image_left_large;
    public string $image_right_large;
}

class LabelImage
{
    public function __construct($image_url, $image_alt, $image_title, $content)
    {
        $this->image_url = $image_url;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->content = $content;
    }
    public string $image_url;
    public string $image_alt;
    public string $image_title;
    public string $content;
}
