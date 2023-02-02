<?php
class ProblemArticle
{
    public function __construct($id, $title, $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
    }
    public $id;
    public $title;
    public $content;
}
?>