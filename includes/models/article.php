<?php
class Article
{
    public function __construct($title, $image_small, $image_large, $image_alt, $image_title, $content, $extended_content = null, $tags = array(), $url = null, $url_label = null, $url_title = null)
    {
        $this->title = $title;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->content = $content;
        $this->extended_content = $extended_content;
        $this->tags = $tags;
        $this->url = $url;
        $this->url_label = $url_label;
        $this->url_title = $url_title;
    }
    public string $title;
    public ?string $image_small;
    public ?string $image_large;
    public ?string $image_alt;
    public ?string $image_title;
    public string $content;
    public ?string $extended_content;
    public array $tags;
    public ?string $url;
    public ?string $url_label;
    public ?string $url_title;
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
