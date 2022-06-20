<?php

use Abstract\ITag;
use Abstract\Tag;

class TagImage extends Tag implements ITag
{
    public function __construct($imagealt)
    {
        $this->tag = "IMG";
        $this->tagName = "Image";
        $this->tagText = '<img src="" alt="' . $imagealt . '"/>';
        $this->index = 10;
    }
}