<?php
class PathSegment
{
    public function __construct($name, $url = null)
    {
        $this->name = $this->format_name($name);
        if ($url == null) {
            $parsed_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $this->url = substr($parsed_url, 0, strpos($parsed_url, $name) + strlen($name)) . '/';
        } else {
            $this->url = $url;
        }
    }

    public string $name;
    public string $url;

    function format_name(string $s)
    {
        return ucfirst(str_replace('-', ' ', $s));
    }
}
