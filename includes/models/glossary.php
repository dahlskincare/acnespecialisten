<?php
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
