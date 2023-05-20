<?php

use Jenssegers\Blade\Blade;

/**
 * Responsible for getting views
 *
 * @param string $path The path/url of the view
 * @param array $data The data for the view
 */
function view($path, array $data = [])
{
    $view = __DIR__ . '/../../resources/views';
    $cache = __DIR__ . '/../../bootstrap/cache';

    $blade = new Blade($view, $cache);
    echo $blade->make($path, $data)->render();
}

/**
 * Take cares of the view and the data for the view
 *
 * @param string $filename The filename of the view
 * @param array $data The required data for the view
 * @return $content The view template
 */
function make($filename, $data)
{
    // extract variables from data
    extract($data);

    // Turn on output buffer
    ob_start();

    // Include template
    include(__DIR__ . '/../../resources/views/emails/' . $filename . '.php');

    // Get content of the file from the output buffer
    $content = ob_get_contents();

    // Erase the output and turn off output buffer
    ob_end_clean();

    return $content;
}

function slug($value)
{
    // Remove underscore | letters | numbers | whitespace
    $value = preg_replace('![^'.preg_quote('_').'\pL\pN\s]+!u', '', mb_strtolower($value));

    // Replace underscore with a dash
    $value = preg_replace('!['.preg_quote('-').'\s]+!u', '-', $value);

    // Remove whitespace
    return trim($value, '-');
}
