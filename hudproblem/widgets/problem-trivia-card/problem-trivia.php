<?php
class ProblemTrivia
{
    public function __construct($prefix, $title, $content, $icons, $extended_content = null)
    {
        $this->prefix = $prefix;
        $this->title = $title;
        $this->content = $content;
        $this->icons = $icons;
        $this->extended_content = $extended_content;
    }

    public string $prefix; // what, why, who, where...
    public string $title;
    public string $content;
    public array $icons;
    public ?string $extended_content;
}
