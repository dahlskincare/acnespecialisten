<?php
class Question
{
    public function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;
    }
    public $title;
    public $text;
}
