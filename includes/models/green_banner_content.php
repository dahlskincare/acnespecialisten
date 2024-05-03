<?php

class GreenBannerContent
{
    public function __construct($title, $description, $description_extended = null, $links_touch = [], $links_desktop = [], $show_consultation_card = true, $akas = [])
    {
        $this->title = $title;
        $this->description = $description;
        $this->description_extended = $description_extended;
        $this->links_touch = $links_touch;
        $this->links_desktop = $links_desktop;
        $this->show_consultation_card = $show_consultation_card;
        $this->akas = $akas;
    }

    public string $title;
    public string $description;
    public ?string $description_extended;
    public array $links_touch;
    public array $links_desktop;
    public bool $show_consultation_card;
    public array $akas;
}
