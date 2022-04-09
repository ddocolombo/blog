<?php

function list_directory($directory) {
    return array_values(array_diff(scandir($directory), ['.', '..']));
}

function image() {
    $files = list_directory('images');
    if (! $files) return;
    $key = rand(0, count($files) - 1);

    return $files[$key];
}