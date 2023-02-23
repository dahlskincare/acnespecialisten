<?php
class ProblemArticle
{
    public function __construct($id, $title, $image_small, $image_large, $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->content = $content;
    }
    public $id;
    public $title;
    public $image_small;
    public $image_large;
    public $content;
}
