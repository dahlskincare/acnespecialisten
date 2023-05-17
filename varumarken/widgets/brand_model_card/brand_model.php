<?php
class BrandModel
{
    public function __construct(
        string $image,
        string $title,
        string $subtitle,
        string $content,
        string $url,
        string $url_label
    ) {
        $this->image = $image;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->content = $content;
        $this->url = $url;
        $this->url_label = $url_label;
    }

    public string $image;
    public string $title;
    public string $subtitle;
    public string $content;
    public string $url;
    public string $url_label;
}
