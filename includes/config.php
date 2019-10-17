<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Evan: Assignment 2',
        'XKCDURL' => 'http://xkcd.com/info.0.json',
        'pretty_uri' => false,
        'site_url' => 'https://evanjoneswebplay.herokuapp.com'
        'nav_bar' => [
          '' => 'Home',
          'about-me'      => "About Me",
          'random-comic' => 'Random Comic',
          'todays-comic' => 'Todays Comic'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
