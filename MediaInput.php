<?php

use Abstract\ITag;

class MediaInput
{
    private $medialist;
    private $medilalen;
    private const TAGSTART = '[';
    private const TAGEND = ']';

    public function __construct(array $media)
    {
        $this->medialist = $media;
        $this->medilalen = count($media);
    }

    public function InputFormat($text)
    {
        $len = strlen($text);
        $tmp = "";
        $tmpLen = 0;
        for($i = 0; $i < $len; $i++)
        {
            if($text[$i] == self::TAGSTART)
            {
                $index = $this->IsFoundTag($text,$i);
                $bIsInsert = false;
                if($index > -1)
                {
                    $tagindex = $this->IsTagInList(substr($text,$i + 1,($index - 1) - $i));
                    if($tagindex > -1)
                    {
                        $closeindex = $this->IsTagClose($text,$index + 1);
                        if($closeindex > -1)
                        {
                            $result = $this->medialist[$tagindex]->TagFormat(substr($text,$index + 1,($closeindex - 1) - $index));
                            $tmp .= $result;
                            $tmpLen += strlen($result);
                            $i = $closeindex;
                            $bIsInsert = true;
                        }
                    }
                }
                if(!$bIsInsert)
                    $tmp[$tmpLen++] = $text[$i];
            }
            else $tmp[$tmpLen++] = $text[$i];
        }
        echo $tmp;
    }

    private function IsFoundTag($text,$i)
    {
        $len = strlen($text);
        for(; $i < $len; $i++)
        {
            if($text[$i] == '=')
                return $i;
        }
        return -1;
    }

    private function IsTagInList($tag)
    {
        for($i = 0; $i < $this->medilalen; $i++)
        {
            if($this->medialist[$i]->getTag() == $tag)
                return $i;
        }
        return -1;
    }

    private function IsTagClose($text,$i)
    {
        $len = strlen($text);
        for(; $i < $len; $i++)
        {
            if($text[$i] == self::TAGEND)
                return $i;
        }
        return -1;
    }
}
