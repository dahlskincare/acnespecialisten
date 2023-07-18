<?php
class RelatedProblem
{
    public function __construct(string $name, string $aka, string $image, string $image_alt, string $image_title, $url, $url_title)
    {
        $this->name = $name;
        $this->aka = $aka;
        $this->image = $image;
        $this->image_alt = $image_alt;
        $this->image_title = $image_title;
        $this->url = $url;
        $this->url_title = $url_title;
    }

    public string $name;
    public string $aka;
    public string $image;
    public string $image_alt;
    public string $image_title;
    public string $url;
    public string $url_title;
}
