<?php
class ProblemArticle
{
    public function __construct($title, $image_small, $image_medium, $image_large, $image_xlarge, $content)
    {
        $this->title = $title;
        $this->image_small = $image_small;
        $this->image_medium = $image_medium;
        $this->image_large = $image_large;
        $this->image_xlarge = $image_xlarge;
        $this->content = $content;
    }
    public $title;
    public $image_small;
    public $image_medium;
    public $image_large;
    public $image_xlarge;
    public $content;
}
?>