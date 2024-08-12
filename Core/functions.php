<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function uris(string $value)
{
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function views($path, $attributes = [])
{
    extract($attributes);

    include base_path("views/" . $path);
}
