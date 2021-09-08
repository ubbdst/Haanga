<?php

class Haanga_Extension_Filter_Striptags
{
    static function main($text)
    {
  return  strip_tags(html_entity_decode($text,ENT_QUOTES,"UTF-8"));
    }
}
