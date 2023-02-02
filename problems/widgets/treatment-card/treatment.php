<?php
class Treatment
{
    public function __construct(
        $id,
        $title,
        $duration,
        $price,
        $content,
        $extended_content,
        $image_small,
        $image_large,
        $consultation_url,
        $booking_url
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->duration = $duration;
        $this->price = $price;
        $this->content = $content;
        $this->extended_content = $extended_content;
        $this->image_small = $image_small;
        $this->image_large = $image_large;
        $this->consultation_url = $consultation_url;
        $this->booking_url = $booking_url;
    }

    public $id;
    public $title;
    public $duration;
    public $price;
    public $image_small;
    public $image_large;
    public $content;
    public $extended_content;
    public $consultation_url;
    public $booking_url;

}
?>