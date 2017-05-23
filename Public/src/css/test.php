<?php


function test($n)
{
    $n--;
    return $n*test($n);
}

echo test(5);