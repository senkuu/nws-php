<?php

function hypothenuse(float $x, float $y): float
{
    if ($x > 0 and $y > 0) {
        return sqrt($x ** 2 + $y ** 2);
    } else {
        return false;
    }
}
