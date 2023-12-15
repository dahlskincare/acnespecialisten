<?php
class ProblemTrivia
{
    public function __construct($prefix, $title, $content, $extended_content, $icons)
    {
        $this->prefix = $prefix;
        $this->title = $title;
        $this->content = $content;
        $this->extended_content = $extended_content;
        $this->icons = $icons;
    }

    public $prefix; // what, why, who, where...
    public $title;
    public $content;
    public $extended_content;
    public $icons;
}
