<?php

class FirstOf_Tag
{
    /**
     *  firstof tag
     *
     */
    function generator($cmp, $args)
    {
        $count = count($args);
        $args  = array_reverse($args);
        for ($i=0; $i < $count; $i++) {
            if (isset($expr) && HCode::is_var($args[$i])) {
                $expr = hexpr_cond(hexpr(hexec('empty', $args[$i]),'==', FALSE), $args[$i], $expr);
            } else {
                $expr = $args[$i];
            }
        }
        return $expr;
    }
}
