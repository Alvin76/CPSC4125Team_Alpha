<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website',
        'pretty_uri' => false,
        'site_url' => 'https://team-alpha-web-site.herokuapp.com/',
        'nav_menu' => [
            '' => 'Home',
            'hello-world' => 'Hello World',
            'Menu' => 'Menu',
            'search' => 'Search',
            'results' => 'Results'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
