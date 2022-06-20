<?php

use Abstract\ITag;
use Abstract\Tag;

class TagYoutube extends Tag implements ITag
{
    public function __construct()
    {
        $this->tag = "YT";
        $this->tagName = "Youtube";
        $this->tagText = '<iframe width="956" height="538" src=""></iframe>';
        $this->index = 38;
    }
}