<?php

function list_directory($directory) {
    return array_values(array_diff(scandir($directory), ['.', '..']));
}

function image() {
    $files = list_directory('storage');
    if (! $files) return;
    $key = rand(0, count($files) - 1);

    return $files[$key];
}

function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}
