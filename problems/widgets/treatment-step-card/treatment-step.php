<?php
class TreatmentStep
{
    public function __construct($title, $content, $url, $url_label)
    {
        $this->title = $title;
        $this->content = $content;
        $this->url = $url;
        $this->url_label = $url_label;
    }

    public $prefix;
    public $title;
    public $content;
    public $url;
    public $url_label;
}
?>