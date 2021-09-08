<?php
//decodes a any text containing a
class Haanga_Extension_Filter_Decodedescription
{
    static function main($args) {
    
        $allowed_tags = "<u><b><i><strong><br><p><ul><ol><li><iframe><a><img>";
    
        $description = strip_tags(html_entity_decode(htmlspecialchars(html_entity_decode($args,ENT_QUOTES,"UTF-8"),ENT_QUOTES,"UTF-8"),ENT_QUOTES,"UTF-8"),$allowed_tags);

        preg_match("/<p(\s[^>]*)?>/i",$description,$matches);
        if ($matches)
            {return $description ; }
        else
            { return "<p>". $description . "</p>"; }

}
}
