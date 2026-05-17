<?php

namespace Collect;

if (!function_exists('Collect\\collection')) {
    function collection(array $array = []): Collect
    {
        return new Collect($array);
    }
}