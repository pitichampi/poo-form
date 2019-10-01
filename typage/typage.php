<?php

function addition(float $x, float $y) : string{
    return $x + $y;
}

echo addition(2,3);
echo gettype(addition(2,3));
