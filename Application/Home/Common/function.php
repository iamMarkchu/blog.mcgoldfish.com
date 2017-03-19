<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 2017/3/13
 * Time: 下午10:52
 */
function generate_url($type, $id)
{
    return U('/'.$type.'/'.$id);
}