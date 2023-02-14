<?php
class RelatedProblem
{
    public function __construct(string $id, string $name, string $aka, string $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->aka = $aka;
        $this->image = $image;
    }

    public string $id;
    public string $name;
    public string $aka;
    public string $image;
}
?>