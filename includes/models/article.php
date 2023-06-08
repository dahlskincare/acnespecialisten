<?php
class Article
{
    public function __construct($id, $title, $image_small, $image_large, $image_alt, $image_title, $content, $tags = array())
    {
        $this->id = $id;
        $this->title = $title;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->content = $content;
        $this->tags = $tags;
    }
    public string $id;
    public string $title;
    public string $image_small;
    public string $image_large;
    public string $image_alt;
    public string $image_title;
    public string $content;
    public array $tags;
}

class ArticleTag
{
    public function __construct($icon, $label)
    {
        $this->icon = $icon;
        $this->label = $label;
    }
    public $icon;
    public $label;
}
