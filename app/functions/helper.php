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
