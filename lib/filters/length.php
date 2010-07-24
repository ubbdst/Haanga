<?php

class Length_Filter
{
    function generator($compiler, $args)
    {
        if (HCode::is_str($args[0])) {
            return hexec('strlen', $args[0]);
        }
        return hexpr_cond(hexec('is_array', $args[0]), hexec('count', $args[0]),
            hexec('strlen', $args[0]));
    }
}
