<?php
class StepModel
{
    public function __construct($title, $content, $image_small, $image_large, $url, $url_label)
    {
        $this->title = $title;
        $this->content = $content;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->url = $url;
        $this->url_label = $url_label;
    }
    public string $title;
    public string $content;
    public string $image_small;
    public string $image_large;
    public string $url;
    public string $url_label;
}
