<?php

function input(string $info): string
{
    echo "$info : ";
    $result = strtolower(fgets(STDIN));
    return trim($result);
}
