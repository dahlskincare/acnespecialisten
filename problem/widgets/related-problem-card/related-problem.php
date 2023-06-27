<?php
class RelatedProblem
{
    public function __construct(string $id, string $name, string $aka, string $image, string $image_alt, string $image_title)
    {
        $this->id = $id;
        $this->name = $name;
        $this->aka = $aka;
        $this->image = $image;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
    }

    public string $id;
    public string $name;
    public string $aka;
    public string $image;
    public string $image_alt;
    public string $image_title;
}
