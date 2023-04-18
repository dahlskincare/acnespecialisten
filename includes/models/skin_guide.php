<?php
class SkinGuideCategory
{
    public function __construct($id, $name, $description = null, $description_extended = null, $consultation_url = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->description_extended = $description_extended;
        $this->consultation_url = $consultation_url;
    }

    public string $id;
    public string $name;
    public ?string $description;
    public ?string $description_extended;
    public ?string $consultation_url;
}

class SkinGuideSubCategory
{
    public function __construct($id, $name, $category_id, $description = null, $description_extended = null, $consultation_url = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category_id = $category_id;
        $this->description = $description;
        $this->description_extended = $description_extended;
        $this->consultation_url = $consultation_url;
    }

    public string $id;
    public string $name;
    public string $category_id;
    public ?string $description;
    public ?string $description_extended;
    public ?string $consultation_url;
}

class SkinGuideArticle
{
    public function __construct($id, $title, $subtitle, $problem, $description, $image_small, $image_large, $category_id, $subcategory_id)
    {
        $this->id = $id;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->problem = $problem;
        $this->description = $description;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->category_id = $category_id;
        $this->subcategory_id = $subcategory_id;
    }

    public string $id;
    public string $title;
    public string $subtitle;
    public string $problem;
    public string $description;
    public string $image_small;
    public string $image_large;
    public string $category_id;
    public string $subcategory_id;
}
