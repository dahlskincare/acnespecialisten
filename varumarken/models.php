<?php
class BrandCategory
{
    public function __construct(string $label, array $services)
    {
        $this->label = $label;
        $this->services = $services;
    }

    public string $label;
    public array $services;
}
