<?php

namespace Abstract;

abstract class Tag
{
    protected $tag;
    protected $tagName;
    protected $tagText;
    protected $index;

    public function TagFormat($text)
    {
        return substr_replace($this->tagText, $text, $this->index, 0);
    }

    final public function getTag()
    {
        return $this->tag;
    }
}